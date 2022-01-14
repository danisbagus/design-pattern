<?php

require_once("./RemoteControl.php");
require_once("./AdvanceRemoteControl.php");
require_once("./Device.php");
require_once("./Radio.php");
require_once("./TV.php");

$Radio = new Radio();
$TV = new TV();

$remote1 = new RemoteControl($Radio);
$remote2 = new AdvanceRemoteControl($TV);

$remote1->volumeUp();
$remote1->volumeUp();
$remote1->view();

$remote2->mute();
$remote2->volumeUp();
$remote2->volumeUp();
$remote2->view();


