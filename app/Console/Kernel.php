<?php

namespace App\Console;


use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $emailSendDate = now()->endOfMonth();
        while($emailSendDate->isFriday() || $emailSendDate->isSaturday())
            $emailSendDate->addDays(-1);
        $emailSendDate->addDays(-2);
        while($emailSendDate->isFriday() || $emailSendDate->isSaturday())
            $emailSendDate->addDays(-1);



        if(now()->startOfDay()->eq($emailSendDate->startOfDay()))
            $schedule->command('report:send')->at(10); //this send command  - 22 > mean 10:00 PM
        

        // uncomment this to test
        //$schedule->command('report:send');

        // $schedule->command('inspire')
        //          ->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
