<?php

require_once("./Notification.php");

class EmailNotification implements Notification
{
    private $senderEmail;

    public function __construct(string $senderEmail)
    {
        $this->senderEmail = $senderEmail;
    }

    public function send(string $title, string $message): void
    {
        echo "Send email notification\nTitle: {$title}\nTo: {$this->senderEmail}\nMessage: {$message}\n\n\n";
    }
}