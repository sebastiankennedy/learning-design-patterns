<?php
spl_autoload_register('autoload');

function autoload($class)
{
    require '../../../' . str_replace('\\', '/', $class) . '.php';
}

use BehavioralDesignPatterns\Command\HeadFirst\{
    Light,
    Stereo,
    LightOnCommand,
    LightOffCommand,
    StereoOnWithCDCommand,
    StereoOffCommand,
    RemoteControl
};

$light = new Light();
$stereo = new Stereo();
$lightOnCommand = new LightOnCommand($light);
$lightOffCommand = new LightOffCommand($light);
$stereoOnWithCDCommand = new StereoOnWithCDCommand($stereo);
$stereoOffCommand = new StereoOffCommand($stereo);

$remoteControl = new RemoteControl();
$remoteControl->setCommand(0, $lightOnCommand, $lightOffCommand);
$remoteControl->setCommand(1, $stereoOnWithCDCommand, $stereoOffCommand);
print($remoteControl);

echo $remoteControl->onButtonWasPushed(0) . "\n";
echo $remoteControl->offButtonWasPushed(0) . "\n";
echo $remoteControl->onButtonWasPushed(1) . "\n";
echo $remoteControl->offButtonWasPushed(1) . "\n";
