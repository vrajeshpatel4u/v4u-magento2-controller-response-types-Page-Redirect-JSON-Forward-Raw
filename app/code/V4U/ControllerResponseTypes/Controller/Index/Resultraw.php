<?php

namespace V4U\ControllerResponseTypes\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\RawFactory;

class Resultraw extends Action
{
    /**
     * Set the Context and Result Page Factory from DI.
     * @param Context     $context
     * @param RawResultFactory $rawResultFactory
     */
    public function __construct(
        Context $context,
        RawFactory $rawResultFactory
    ) {
        $this->rawResultFactory = $rawResultFactory;
        parent::__construct($context);
    }

    /**
     * Show the Controller Response Types Raw Result.
     *
     * @return \Magento\Framework\Controller\Result\Raw
     */
    public function execute() {
        $result = $this->rawResultFactory->create();
        $result->setHeader('Content-Type', 'text/xml');
        $result->setContents("<note>
                                <to>Tove</to>
                                <from>Jani</from>
                                <heading>Reminder</heading>
                                <body>Don't forget me this weekend!</body>
                            </note>");
        return $result;
    }
}