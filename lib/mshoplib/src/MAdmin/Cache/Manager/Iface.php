<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Metaways Infosystems GmbH, 2014
 * @copyright Aimeos (aimeos.org), 2015-2017
 * @package MAdmin
 * @subpackage Cache
 */


namespace Aimeos\MAdmin\Cache\Manager;


/**
 * Interface for cache manager implementations.
 *
 * @package MAdmin
 * @subpackage Cache
 */
interface Iface
	extends \Aimeos\MShop\Common\Manager\Iface
{
	/**
	 * Returns the cache object
	 *
	 * @return \Aimeos\MW\Cache\Iface Cache object
	 */
	public function getCache();
}
