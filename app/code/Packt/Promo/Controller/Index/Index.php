<?php
/**
*
* Copyright © Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Packt\Promo\Controller\Index;
/**
* Class Index
* @package  Packt\Promo\Controller\Index;
*/
class Index extends \Magento\Framework\App\Action\Action
{
        /**
    * @var \Magento\Framework\View\Result\PageFactory
    */
    protected $_pageFactory;
    /**
    * Index constructor.
    * @param \Magento\Framework\App\Action\Context $context
    * @param \Magento\Framework\View\Result\PageFactory $pageFactory
    */
    public function __construct(
            \Magento\Framework\App\Action\Context $context,
            \Magento\Framework\View\Result\PageFactory $pageFactory
        ) {
            $this->_pageFactory = $pageFactory;
            parent::__construct($context);
        } 
    /**
    * @return \Magento\Framework\Controller\ResultInterface
    */
    public function execute()
    { 
        return $this->_pageFactory->create();
    } 
} 