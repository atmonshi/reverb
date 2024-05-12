<?php

namespace App\Livewire;

use App\Events\GotMessage;
use Livewire\Attributes\On;
use Livewire\Component;

class MessagesComponent extends Component
{
    public $message = "";

    public $conversation = [];

    public function submitMessage(){
        //$this->conversation[] = $this->message;
        GotMessage::dispatch($this->message);
    }

    #[On('echo:msgs,GotMessage')]
    public function listenForMessage($data){
        $this->conversation[] = $data['message'];
    }

    /*public function getListeners()
    {
        return [
            "echo:msgs.{$this->message},GotMessage" => 'notifyShipped',
        ];
    }*/

    public function notifyShipped()
    {
        $this->conversation[] = $this->message;
    }

    public function render()
    {
        return view('livewire.messages-component');
    }
}
