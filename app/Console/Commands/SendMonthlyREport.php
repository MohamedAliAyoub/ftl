<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendMonthlyREport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reports:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $sum_salary = 0;
        $sum_bonuc = 0;
        foreach (\App\Salary::get() as  $salary) {
         
            $sum_salary += $salary->salary;   
            $sum_bonuc  += $salary->bonus*$salary->salary/100;   
        }
        $total_salary = $sum_salary + $sum_bonuc;
        //dd($sum_salary , $sum_bonuc , $total_salary );

        $salaryDate = now()->endOfMonth();
        while($salaryDate->isFriday() || $salaryDate->isSaturday()){
            $salaryDate->addDays(-1);
        }


        // select user you want to send mail to 
        $users = \App\User::query()->whereIn('email', [
                'otilia34@example.net',
                'percy37@example.com'
        ])->get();
        if($users->count() === 0)
            throw new \Exception('error');
        $users->each(function($user)use($sum_salary , $sum_bonuc, $total_salary, $salaryDate){
            $user->notify(new \App\Notifications\MonthlyReport($sum_salary , $sum_bonuc ,
            $total_salary, $salaryDate->toFormattedDateString()));
        });

        //record in database mail send
    }
}
