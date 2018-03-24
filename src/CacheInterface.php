<?php

namespace React\Cache;

use React\Promise\PromiseInterface;

/**
 * All methods only reject with an exception when an error occurs on the underlying storage
 * layer, for example the connection with Redis dropped and cannot be recovered, or the
 * directory on the filesystem used to store cache has the wrong permissions or is full.
 */
interface CacheInterface
{
    /**
     * Retrieve an item from the cache, resolves with its value on
     * success or null when no item can be found. It will reject with an exception
     * on error. (Note that a cache miss isn't an error.)
     *
     * @param string $key
     * @return PromiseInterface
     */
    public function get($key);

    /**
     * Store an item in the cache, returns a promise which resolves to true on success or
     * false on error.
     *
     * @param string $key
     * @param mixed $value
     * @return PromiseInterface<bool>
     */
    public function set($key, $value);

    /**
     * Remove an item from the cache, returns a promise which resolves to true on success or
     * false on error. When the $key isn't found in the cache it also
     * resolves true.
     *
     * @param string $key
     * @return PromiseInterface<bool>
     */
    public function remove($key);
}
