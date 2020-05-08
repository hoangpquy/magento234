<?php
namespace Packt\Promo\Model\ResourceModel;

class Post extends \Magento\Framwork\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $init->_init('catalog_product_entity', 'entity_id');
    }

}