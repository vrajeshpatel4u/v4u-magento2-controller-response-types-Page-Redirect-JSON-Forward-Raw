<?php

namespace V4U\ControllerResponseTypes\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Result\PageFactory;


class Redirect extends Action
{
	protected $resultRedirectFactory;

	public $_storeManager;

	public function __construct(
	    \Magento\Framework\App\Action\Context $context,
	    \Magento\Store\Model\StoreManagerInterface $storeManager,
	    \Magento\Framework\Controller\Result\Redirect $resultRedirectFactory
	    ) {

	        $this->resultRedirectFactory = $resultRedirectFactory;
	        $this->_storeManager=$storeManager;
	        parent::__construct($context);
	    }

	    public function execute()
	    {
            $resultRedirect = $this->resultRedirectFactory->create();
            $redirectLink = $this->_storeManager->getStore()->getBaseUrl().'customer/account/login'; 
            $resultRedirect->setUrl($redirectLink);
            return $resultRedirect;
	    }
}