<?php
/**
 * @author Jenner <hypxm@qq.com>
 * @blog http://www.huyanping.cn
 * @license https://opensource.org/licenses/MIT MIT
 * @datetime: 2015/11/19 21:27
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

$pool = new \Jenner\SimpleFork\SinglePool();
$pool->execute(new \Jenner\SimpleFork\Process(new TestRunnable()));
$pool->execute(new \Jenner\SimpleFork\Process(new TestRunnable()));
$pool->execute(new \Jenner\SimpleFork\Process(new TestRunnable()));

$pool->wait();