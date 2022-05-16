<?php

$heap = new SplMaxHeap();

$heap->insert(5);
$heap->insert(10);
$heap->insert(9);
$heap->insert(4);
$heap->insert(8);
$heap->insert(7);
$heap->insert(3);

print $heap->top() . "\n/////////\n";

foreach ($heap as $item) {
    print $item . "\n";
}
