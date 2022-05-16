#! /bin/sh

php --define phar.readonly=0 build.php test.phar && php test.phar