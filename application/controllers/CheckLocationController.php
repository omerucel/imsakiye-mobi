<?php

class CheckLocationController extends Zend_Controller_Action
{
    public function indexAction()
    {
        $lat = $this->_getParam('lat');
        $lng = $this->_getParam('lng');

        $city = EntityCityQuery::create()
            ->filterByMinLat($lat, Criteria::LESS_EQUAL)
            ->filterByMaxLat($lat, Criteria::GREATER_EQUAL)
            ->filterByMinLng($lng, Criteria::LESS_EQUAL)
            ->filterByMaxLng($lng, Criteria::GREATER_EQUAL)
            ->findOne();

        echo !$city ? 'not-found' : 'sehir-detay?id=' . $city->getId();
        exit;
    }
}