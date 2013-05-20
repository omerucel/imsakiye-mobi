<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        $date = new DateTime();
        $this->view->day = (int)$date->diff(new DateTime('2012-07-19'))->format('%a');
    }

    public function indexAction()
    {
        $selectedCities = array();

        if (isset($_COOKIE['Sehir']) && is_array($_COOKIE['Sehir']))
        {
            $ids = array();
            foreach($_COOKIE['Sehir'] as $name => $value)
            {
                if ($this->_getParam('isareti_kaldir') && $this->_getParam('id') == $value)
                {
                    setcookie('Sehir[' . $value . ']', '', 0, '/');
                }else{
                    $ids[] = $value;
                }
            }

            $selectedCities = EntityCityQuery::create()
                ->orderByName()
                ->findPks($ids)
                ->toArray();
        }

        $this->view->selectedCities = $selectedCities;
    }
}

