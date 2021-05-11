<?php

namespace V4U\ControllerResponseTypes\Controller\Index;
 
use Magento\Framework\App\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\Forward;
use Magento\Framework\Controller\Result\ForwardFactory;
use Magento\Framework\Controller\ResultInterface;
 
/**
* Class Resultforward
*
* @package V4U\ControllerResponseTypes\Controller\Index
*/
class Resultforward extends Action\Action
{
 
   /**
    * @var ForwardFactory
    */
   protected $_resultForwardFactory;
 
   /**
    * Page4 constructor.
    * @param Context $context
    * @param ForwardFactory $_resultForwardFactory
    */
   public function __construct(
       Context $context,
       ForwardFactory $_resultForwardFactory
   ) {
       $this->_resultForwardFactory = $_resultForwardFactory;
       parent::__construct($context);
   }
 
   /**
    *  Forward home page
    *
    * @return \Magento\Framework\Controller\Result\Forward
    */
   public function execute()
   {
       $resultForward = $this->_resultForwardFactory->create();
       $resultForward->setController('index')
           ->setModule('cms')
           ->forward('index');
       return $resultForward;
   }
}