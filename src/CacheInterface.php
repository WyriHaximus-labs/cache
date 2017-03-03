<?php

namespace React\Cache;

use React\Promise\PromiseInterface;

interface CacheInterface
{
    /**
<<<<<<< HEAD
     * Retrieve an item from the cache, resolves with its value on
     * success or null when no item can be found.
     *
     * @param string $key
=======
     * @param $key
>>>>>>> 456b243... Return Promise for set and remove
     * @return PromiseInterface
     */
    public function get($key);

    /**
<<<<<<< HEAD
     * Store an item in the cache.
     *
     * @param string $key
     * @param mixed $value
     * @return void
=======
     * @param $key
     * @param $value
     * @return PromiseInterface
>>>>>>> 456b243... Return Promise for set and remove
     */
    public function set($key, $value);

    /**
<<<<<<< HEAD
     * Remove an item from the cache.
     *
     * @param string $key
     * @return void
=======
     * @param $key
     * @return PromiseInterface
>>>>>>> 456b243... Return Promise for set and remove
     */
    public function remove($key);
}
