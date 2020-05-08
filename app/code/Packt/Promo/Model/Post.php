<?php
namespace Packt\Promo\Model ;

class Post extends \Magento\Framwork\Model\AbstractModel
{
    protected function _construct()
    {
        $this ->init('Packt\Promo\Model\ResourceModel');
    }
}
