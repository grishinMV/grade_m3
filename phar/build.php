<?php

$phar = new Phar($argv[1] ?? 'test.phar', 0);

$phar->buildFromDirectory(dirname(__FILE__) . '/testApp');
$phar->setStub($phar->createDefaultStub('HelloWorld.php'));
