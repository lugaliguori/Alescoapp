<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class citasEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fecha,$nombre_doctor,$nombre_paciente)
    {
        $this->fecha = $fecha;
        $this->nombre_doctor = $nombre_doctor;
        $this->nombre_paciente = $nombre_paciente;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@gmail.com')
                    ->view('mails.cita')
                    ->text('mails.cita_plain')
                    ->with([
                        'nombre_paciente' => $this->nombre_paciente,
                        'fecha' => $this->fecha,
                        'nombre_doctor' => $this->nombre_doctor
                    ]);

    }
}
