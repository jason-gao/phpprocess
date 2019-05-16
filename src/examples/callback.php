<?php
/**
 * Created by PhpStorm.
 * User: Jenner
 * Date: 2015/8/20
 * Time: 12:11
 */


declare(ticks = 1);

namespace phpprocess\examples;

require __DIR__.'/../../vendor/autoload.php';

$process = new \Jenner\SimpleFork\Process(function () {
    for ($i = 0; $i < 3; $i++) {
        echo $i . PHP_EOL;
        sleep(1);
    }
});

$process->start();
$process->wait();