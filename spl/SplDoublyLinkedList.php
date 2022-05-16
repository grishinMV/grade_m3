<?php

$list = new SplDoublyLinkedList();

for ($i = 0; $i < 10; ++$i) {
    $list->add($i, $i);
}

$list->rewind();
$list->offsetSet(5, 1111);

while ($list->valid()) {
    print $list->current() . "\n";
    $list->next();
}