<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 19:34
 */

namespace Zeevin\Libjdvop\Area\RequestAttribute\GetCounty;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;
class Request extends BaseRequestAttribute
{
	/**
	 * 二级地址id
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("id")
	 * @JMS\Type("int")
	 */
	protected $id;

	/**
	 * @param int $id 二级地址id
	 * @return $this
	 */
	public function setId(int $id){
		$this->id = $id;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getId(){
		return $this->id;
	}
}