<?php

namespace V4U\ControllerResponseTypes\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\Controller\Result\Redirect;

/**
* Class Resultredirect
*
* @package V4U\ControllerResponseTypes\Controller\Index
*/
class Resultredirect extends Action
{
     /**
     * @var \Magento\Framework\Controller\Result\RedirectFactory
     */
    protected $resultRedirectFactory;

    public $_storeManager;

    public function __construct(
        Context $context,
        StoreManagerInterface $storeManager,
        Redirect $resultRedirectFactory
    ) {
        $this->resultRedirectFactory = $resultRedirectFactory;
        $this->_storeManager=$storeManager;
        parent::__construct($context);
        }

        /**
         * Show the Controller Response Types Redirect Result.
         *
         * @return (\Magento\Framework\Controller\Result\Redirect
         */
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $redirectLink = $this->_storeManager->getStore()->getBaseUrl().'customer/account/login'; 
        $resultRedirect->setUrl($redirectLink);
        return $resultRedirect;
    }
}