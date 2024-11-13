<?php

namespace App\Mail;

use App\Models\SentMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Team;

class MessageReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $item;
    public $teamName;

    /**
     * Create a new message instance.
     *
     * @param  \App\Models\SentMessage  $item
     * @return void
     */
    public function __construct(SentMessage $item,Team $team)
    {
        $this->item = $item;
        $this->teamName = $team->name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {


        return $this->subject('Message For AZ Shipping')
            ->view('emails.message_received');
    }
}
