<?php
/**
 * Cache Interface
 *
 * @package    Cache
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Cache;

/**
 * Cache Interface
 *
 * @package    Cache
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      0.1
 */
interface CacheInterface
{
    /**
     * Retrieve cache value
     *
     * @param   string $key
     *
     * @return  bool
     * @since   0.1
     */
    public function get($key);

    /**
     * Persist data in cache
     *
     * @param   string  $key
     * @param   mixed   $value
     * @param   integer $ttl (number of seconds)
     *
     * @return  bool
     * @since   0.1
     */
    public function set($key = null, $value, $ttl = 0);

    /**
     * Delete cache for specified $key value or expired cache
     *
     * @param   string $key
     *
     * @return  bool
     * @since   0.1
     */
    public function remove($key = null);

    /**
     * Clear all cache
     *
     * @return  bool
     * @since   0.1
     */
    public function clear();
}
