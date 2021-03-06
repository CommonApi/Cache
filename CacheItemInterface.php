<?php
/**
 * Cache Item Interface
 *
 * @package    Cache
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Cache;

/**
 * Cache Item Interface
 *
 * @package    Cache
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      0.1
 */
interface CacheItemInterface
{
    /**
     * Get the Key associated with this Cache Item
     *
     * @return  string  $key
     * @since   1.0.0
     */
    public function getKey();

    /**
     * Get the Value associated with this Cache Item
     *
     * @return  mixed  $key
     * @since   1.0.0
     */
    public function getValue();

    /**
     * True or false value as to whether or not the item exists in current cache
     *
     * @return  boolean
     * @since   1.0.0
     */
    public function isHit();
}
