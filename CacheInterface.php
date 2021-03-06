<?php
/**
 * Cache Interface
 *
 * @package    Cache
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Cache;

/**
 * Cache Interface
 *
 * @package    Cache
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
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
     * @since   1.0.0
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
     * @since   1.0.0
     */
    public function set($key, $value, $ttl = 0);

    /**
     * Delete cache for specified $key value or expired cache
     *
     * @param   string $key
     *
     * @return  bool
     * @since   1.0.0
     */
    public function remove($key);

    /**
     * Clear all cache
     *
     * @return  bool
     * @since   1.0.0
     */
    public function clear();
}
