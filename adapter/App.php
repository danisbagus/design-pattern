<?php

require_once("./Notification.php");
require_once("./EmailNotification.php");
require_once("./WhatsappNotification.php");

function clientCode(Notification $notification)
{
    echo $notification->send("Server is down", "Server is down. Please call infra team immadiately!!!");
}

$emailNotif = new EmailNotification("infrateam@example.com");
clientCode($emailNotif);

$whatsappNotif = new WhatsAppNotification("955003483000");
clientCode($whatsappNotif);