<?php

$storage = new SplObjectStorage();

$a = new StdClass();
$a->test = 1;
$b = new StdClass();
$c = new StdClass();

$storage->attach($a, ['testInfo' => 123]);
$storage->attach($b);

print "Contains a: " . $storage->contains($a) . "\n";
print "Contains b: " . $storage->contains($b) . "\n";
print "Contains c: " . (int) $storage->contains($c) . "\n";

$storage->offsetGet($a);
$a->test = 2;


var_dump($storage->getHash($a), $storage->current(), $storage->getInfo());
