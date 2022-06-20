<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Join extends Notification
{
    use Queueable;
    public $user;
    public $room;
    public $type;//to check if the user is student or lecturer

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user,$room,$type)
    {
        $this->user=$user;
        $this->room=$room;
        $this->type=$type;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toDatabase($notifiable)
    {
        if($this->type==='STUDENT'){
        return [
                'user_name'=>$this->user['name'],
                'user_id'=>$this->user['id'],
                'user_email'=>$this->user['email'],
                'data'=>'send you request to join your room '.$this->room['name'],
                'code'=>$this->room['code']
        ];
    }
    elseif($this->type==='EXAM'){
        return[
            'user_name'=>$this->user['name'],
            'user_id'=>$this->user['id'],
            'user_email'=>$this->user['email'],
            'data'=>$this->user['name'].' created new exam in room '.$this->room['name'],
            'code'=>$this->room['code']
        ];
    }
    else{
        return[
            'user_name'=>$this->user['name'],
                'user_id'=>$this->user['id'],
                'user_email'=>$this->user['email'],
                'data'=>$this->user->name.' accepted your request',
                'code'=>$this->room['code']
        ];
    }
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
