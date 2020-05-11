<?php
namespace Packt\Promo\Model\ResourceModel;

class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('catalog_product_entity','entity_id');
    }

}