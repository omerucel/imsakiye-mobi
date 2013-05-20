<?php

class SehirListesiController extends Zend_Controller_Action
{
    public function init()
    {
        $date = new DateTime();
        $this->view->day = (int)$date->diff(new DateTime('2012-07-19'))->format('%a');
    }

    public function indexAction()
    {
        $cities = EntityCityQuery::create()
            ->orderByName()
            ->find()
            ->toArray();

        $this->view->sehirler = $cities;
    }
}