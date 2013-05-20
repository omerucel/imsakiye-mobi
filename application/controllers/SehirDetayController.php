<?php

class SehirDetayController extends Zend_Controller_Action
{
    public function init()
    {
        $date = new DateTime();
        $this->view->day = (int)$date->diff(new DateTime('2012-07-19'))->format('%a');
    }

    public function indexAction()
    {
        $id = $this->_getParam('id');

        $namaz = EntityNamazQuery::create()
            ->filterByCityId($id)
            ->filterByDistrictId(0)
            ->filterByDate(new DateTime())
            ->findOne();

        if (!$namaz)
            return $this->_redirect('/not-found');

        $showPin = true;
        if ($this->_hasParam('isaretle'))
        {
            setcookie('Sehir[' . $id . ']', $id, time() + (60 * 60 * 24 * 30), "/");
        }

        if ($this->_hasParam('isaretleme'))
        {
            setcookie('Sehir[' . $id . ']', '', 0, "/");
        }else{
            if (isset($_COOKIE['Sehir']) && is_array($_COOKIE['Sehir']))
            {
                foreach($_COOKIE['Sehir'] as $name => $value)
                {
                    if ($id == $value)
                        $showPin = false;
                }
            }
        }

        $this->view->showPin = $showPin;
        $this->view->namaz = $namaz;
    }
}