<?php
namespace Packt\Promo\Model ;

class Post extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('Packt\Promo\Model\ResourceModel\Post');
    }
}
