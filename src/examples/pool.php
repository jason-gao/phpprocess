<?php
/**
 * Created by PhpStorm.
 * User: Jenner
 * Date: 2015/8/12
 * Time: 19:55
 */


namespace phpprocess\examples;

require __DIR__.'/../../vendor/autoload.php';

class TestRunnable implements \Jenner\SimpleFork\Runnable
{

    /**
     * @return void
     */
    public function run()
    {
        sleep(10);
        echo getmypid() . ':done' . PHP_EOL;
    }
}

$pool = new \Jenner\SimpleFork\Pool();
$pool->execute(new \Jenner\SimpleFork\Process(new TestRunnable()));
$pool->execute(new \Jenner\SimpleFork\Process(new TestRunnable()));
$pool->execute(new \Jenner\SimpleFork\Process(new TestRunnable()));

$pool->wait();