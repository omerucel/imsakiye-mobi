<?php

class NotFoundController extends Zend_Controller_Action
{
    public function init()
    {
        $date = new DateTime();
        $this->view->day = (int)$date->diff(new DateTime('2012-07-19'))->format('%a');
    }

    public function indexAction()
    {

    }
}