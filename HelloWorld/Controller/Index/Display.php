<?php

namespace BarnaBridge\HelloWorld\Controller\Index;

use Magento\Framework\App\Action;

class Display extends Action\Action
{

    public function __construct(Action\Context $context)
    {
        parent::__construct($context);
    }

    public function execute()
    {
        echo 'Hello World';
        exit;
    }
}