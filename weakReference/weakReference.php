<?php

$obj = new stdClass;
$ref = WeakReference::create($obj);
var_dump($ref->get());
unset($obj);
gc_collect_cycles();
var_dump($ref->get());