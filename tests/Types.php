<?php

use function PHPStan\Testing\assertType;
use React\Cache\ArrayCache;
use React\Cache\CacheInterface;

/** @var CacheInterface<int> $cache */
$cache = new ArrayCache();
assertType('React\Promise\PromiseInterface<bool>', $cache->set('key', 13));
assertType('React\Promise\PromiseInterface<int>', $cache->get('key'));
assertType('React\Promise\PromiseInterface<iterable<string, int>>', $cache->getMultiple(['keys', 'sleutels', 'schlüssel']));

/** @phpstan-ignore-next-line Ignoring this line because this should error with "Parameter #2 $value of method React\Cache\CacheInterface<int>::set() expects int, string given." */
assertType('React\Promise\PromiseInterface<bool>', $cache->set('key', '13'));
