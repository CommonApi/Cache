<?php
/**
 * Cache Connection Interface
 *
 * @package    Cache
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Cache;

/**
 * Cache Connection Interface
 *
 * @package    Cache
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @since      0.1
 */
interface ConnectionInterface
{
    /**
     * Connect to the Cache
     *
     * @param   array $options
     *
     * @return  $this
     * @since   0.1
     */
    public function connect($options = array());

    /**
     * Close the Connection
     *
     * @return  $this
     * @since   0.1
     */
    public function close();
}
