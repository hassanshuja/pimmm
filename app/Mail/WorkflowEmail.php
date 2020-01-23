<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WorkflowEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->message = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $message = $this->message;
        
        $mailable = $this->from('support@tecsee.de')
        ->subject($message['title'])
        ->view('admin.workflow.mail')
        ->with(['data' => $message]);

        // if file extists add attachment
        if (!empty($message['files'])) {
            $file = storage_path('app/public/workflow/'.$message['files']);
            $mailable->attach($file, [
                'as' => substr($message['files'], 26)
            ]);
        }

        return $mailable;
             
    }
}
