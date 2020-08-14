<?php

namespace App\Http\Controllers\Dashboard;

use App\Company;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.user.create_company');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $request->validate([
            'name' => 'required',
            'postal_code' => 'nullable|integer',
            'website' => 'nullable',
        ]);
        Company::create($request->all());
        session()->flash('success', __('Counpany added_successfully'));
        return redirect()->route('account');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        // dd($company);
        return view('dashboard.user.edit_company' , compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
         $request->validate([
            'name' => 'required',
            'postal_code' => 'nullable|integer',
            'website' => 'nullable',

        ]);
         // dd($request->all() , $company);
        $company->update([
            'name' => $request->name,
            'location' => $request->location,
            'city' => $request->city,
            'street' => $request->street,
            'postal_code' => $request->postal_code,
            'website' => $request->website,
            'about' => $request->about,
        ]);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('account');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }

     public function updateUser(Request $request, User $user)
    {
        // to change password

        if(isset($request->password) && $user->password != $request->input('password') )
        {
            // dd($request->password);
            $request['password'] = \Hash::make($request->password);
            


        }
         // dd($request->all() , $user);
        $user->update($request->all());
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('account');
    }
}
