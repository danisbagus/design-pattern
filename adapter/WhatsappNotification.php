<?php

require_once("./Notification.php");

class WhatsAppNotification implements Notification
{
    private $senderWatshApp;

    public function __construct(string $senderWatshApp)
    {
        $this->senderWatshApp = $senderWatshApp;
    }

    public function send(string $title, string $message): void
    {
        echo "Send whatsapp notification\nTitle: {$title}\nTo: {$this->senderWatshApp}\nMessage: {$message}";
    }
}