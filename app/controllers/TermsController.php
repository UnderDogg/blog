<?php

namespace Phalconvn\Controllers;

class TermsController extends ControllerBase
{

    public function indexAction()
    {
    	$this->view->setTemplateBefore('public');
    }

}

