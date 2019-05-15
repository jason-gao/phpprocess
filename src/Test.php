<?php

namespace phpprocess;

use Jenner\Zebra\Daemon\Daemon;
use Jenner\Zebra\Daemon\DaemonSingle;

require __DIR__.'/../vendor/autoload.php';

class Test{

    public function daemon(){
        $daemon = new Daemon(false);
        $daemon->daemonize();
    }

    public function daemonSingle(){
        $daemon_single = new DaemonSingle(__FILE__);
        $daemon_single->single();
    }

}

$test = new Test();
//$test->daemon();
//$test->daemonSingle();

