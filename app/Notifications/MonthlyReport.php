<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class MonthlyReport extends Notification
{
    use Queueable;

    private $sum_salary;
    private $sum_bonuc;
    private $total_salary;
    private $salaryDate;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($sum_salary , $sum_bonuc , $total_salary, $salaryDate)
    {
        $this->sum_salary = $sum_salary;
        $this->sum_bonuc = $sum_bonuc;
        $this->total_salary = $total_salary;
        $this->salaryDate = $salaryDate;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
         return (new MailMessage)
                    ->line("sum_salary $this->sum_salary")
                    ->line("sum_bonuc $this->sum_bonuc")
                    ->line("total_salary $this->total_salary")
                    ->line("salaryDate $this->salaryDate");
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
