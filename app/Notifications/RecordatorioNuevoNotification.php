<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

use App\Models\reminder;
use App\Models\medicine;
use App\Models\patient;

class RecordatorioNuevoNotification extends Notification
{
    use Queueable;

    private $reminder;
    private $medicina;
    private $paciente;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(reminder $reminder, medicine $medicina, patient $paciente)
    {
        $this->reminder = $reminder;
        $this->medicina = $medicina;
        $this->paciente = $paciente;
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
                    ->subject('Nuevo Recordatorio')
                    ->from(env('MAIL_USERNAME'))
                    ->view('emails.RecordatorioNuevoMail', ['reminder' => $this->reminder, 'medicina'=> $this->medicina, 'paciente' => $this->paciente]);
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
