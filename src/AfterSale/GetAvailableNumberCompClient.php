<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 20:28
 */

namespace Zeevin\Libjdvop\AfterSale;

use Zeevin\Libjdvop\Core\BaseClient;
class GetAvailableNumberCompClient extends BaseClient
{
	protected $domain = 'afterSale';
	protected $prefix = 'getAvailableNumberComp';
	protected $method = 'POST';
}