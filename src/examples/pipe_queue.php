<?php
/**
 * @author Jenner <hypxm@qq.com>
 * @blog http://www.huyanping.cn
 * @license https://opensource.org/licenses/MIT MIT
 * @datetime: 2015/11/24 21:24
 */

namespace phpprocess\examples;

require __DIR__.'/../../vendor/autoload.php';

$queue = new \Jenner\SimpleFork\Queue\PipeQueue();
var_dump($queue->put('test'));
var_dump($queue->get());
