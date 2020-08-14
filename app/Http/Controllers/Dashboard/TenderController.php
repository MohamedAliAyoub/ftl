<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Country;
use App\Port;
use App\Tender;
use App\TenderDestinationCountry;
use App\TenderPort;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use function PHPSTORM_META\map;

class TenderController extends Controller
{
    public function index(Request $request)
    {
        
        return view('dashboard.tenders.index');
    }
     public function step1(Request $request)
    {
        $countries  = Country::get();
        $ports  = Port::get();
        return view('dashboard.tenders.step1', compact('countries','ports'));
    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function step2(Request $request)
    {
        
        $request->validate([
            'from_country_id' => 'required|integer|exists:countries,id',
            'from_port_id' => 'required|array|min:1',
            'from_port_id.*' => 'nullable|integer|exists:ports,id',

            'to_country_id' => 'required|array|min:1',
            'to_country_id.*' => 'nullable|integer|exists:countries,id',
            'to_port_id.*' => 'required|array|min:1',
            'to_port_id.*.*' => 'nullable|integer|exists:ports,id',
        ]);

        $from_port_id = collect(request('from_port_id'))->reject(function ($v) {
            return is_null($v) || !is_numeric($v);
        });
        if ($from_port_id->count() == 0)
            return back()->with('error', 'invalid from ports');

        $to_country_id = collect(request('to_country_id'))->reject(function ($v) {
            return is_null($v) || !is_numeric($v);
        });
        if ($to_country_id->count() == 0)
            return back()->with('error', 'invalid to country');

        $to_country = $to_country_id->map(function ($v, $k) {
            return [
                'country' => Country::query()->find($v),
                'ports' => Port::query()->where('country_id', $v)
                    ->whereIn('id', request('to_port_id.' . $k))->get(),
            ];
        });
        $from_country = [
            'country' => Country::query()->find(request('from_country_id')),
            'ports' => Port::query()->where('country_id', request('from_country_id'))
                ->whereIn('id', request('from_port_id'))->get(),
        ];

        return view('dashboard.tenders.step2', compact('from_country', 'to_country'));
        

    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function step3(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'from_country_id' => 'required|integer|exists:countries,id',
            'from_port_id' => 'required|array|min:1',
            'from_port_id.*' => 'nullable|integer|exists:ports,id',

            'to_country_id' => 'required|array|min:1',
            'to_country_id.*' => 'nullable|integer|exists:countries,id',
            'to_port_id.*' => 'required|array|min:1',
            'to_port_id.*.*' => 'nullable|integer|exists:ports,id',

            'to_port_data.*.*.20D.*' => 'required|integer',
            'to_port_data.*.*.40HD.*' => 'required|integer',
            'to_port_data.*.*.20RF.*' => 'required|integer',
            'to_port_data.*.*.40RF.*' => 'required|integer',
        ]);

        if ($validator->fails()) {
            die('handle validation here');
        }

        $from_port_id = collect(request('from_port_id'))->reject(function ($v) {
            return is_null($v) || !is_numeric($v);
        });
        if ($from_port_id->count() == 0)
            return back()->with('error', 'invalid from ports');

        $to_country_id = collect(request('to_country_id'))->reject(function ($v) {
            return is_null($v) || !is_numeric($v);
        });
        if ($to_country_id->count() == 0)
            return back()->with('error', 'invalid to country');

        $to_country = $to_country_id->map(function ($v, $k) {
            return [
                'country' => Country::query()->find($v),
                'ports' => collect(request('to_port_id.' . $k))->map(function ($port_id, $k1) use ($v, $k) {
                    return [
                        'port' => Port::query()->where('country_id', $v)->where('id', $port_id)->first(),
                        'data' => [
                            '20D_old_price' => request("to_port_data.$k.$k1.20D.old_price"),
                            '40HD_old_price' => request("to_port_data.$k.$k1.40HD.old_price"),
                            '20RF_old_price' => request("to_port_data.$k.$k1.20RF.old_price"),
                            '40RF_old_price' => request("to_port_data.$k.$k1.40RF.old_price"),
                            '20D_price' => request("to_port_data.$k.$k1.20D.price"),
                            '40HD_price' => request("to_port_data.$k.$k1.40HD.price"),
                            '20RF_price' => request("to_port_data.$k.$k1.20RF.price"),
                            '40RF_price' => request("to_port_data.$k.$k1.40RF.price"),
                            '20D_quantity' => request("to_port_data.$k.$k1.20D.quantity"),
                            '40HD_quantity' => request("to_port_data.$k.$k1.40HD.quantity"),
                            '20RF_quantity' => request("to_port_data.$k.$k1.20RF.quantity"),
                            '40RF_quantity' => request("to_port_data.$k.$k1.40RF.quantity"),
                        ]
                    ];
                }),
            ];
        });
        $from_country = [
            'country' => Country::query()->find(request('from_country_id')),
            'ports' => Port::query()->where('country_id', request('from_country_id'))
                ->whereIn('id', request('from_port_id'))->get(),
        ];

        DB::transaction(function () use ($from_country, $to_country, &$tender) {
            /** @var $tender Tender */
            $tender = Tender::query()->create(['country_id' => $from_country['country']->id, 'total' => 555]);
            $tender->ports()->saveMany($from_country['ports']->map(function ($port) {
                return new TenderPort([
                    'port_id' => $port->id
                ]);
            }));
            $to_country->each(function ($item) use ($tender) {
                $tenderDestinationCountry = new TenderDestinationCountry(['country_id' => $item['country']->id]);
                $tender->countries()->save($tenderDestinationCountry);
                $tenderDestinationCountry->ports()->saveMany($item['ports']->map(function ($port) {
                    return new TenderPort([
                        'port_id' => $port['port']->id
                    ] + $port['data']);
                }));
            });
        });
        return redirect()->to(route('view', ['Tender' => $tender]));
    }

    public function view(Request $request, Tender $Tender){
        return view('dashboard.tenders.view', compact('Tender'));
    }
}
