<div>
    <input wire:model="message" type="text">
    <button wire:click="submitMessage">Submit</button>

    @dump($conversation)
    @dump($message)
</div>