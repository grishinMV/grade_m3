<?php

$queue = new SplPriorityQueue();

$queue->insert(1, 1);
$queue->insert(2, 3);
$queue->insert(3, 3);
$queue->insert(4, 2);
$queue->insert(5, 10);

while ($queue->valid()) {
    print $queue->current() . "\n";
    $queue->next();
}