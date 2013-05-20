<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    public function _initPropel()
    {
        require_once 'propel/Propel.php';

        $propelConfigs = $this->getOption('propel');
        $propelConfigs['classmap'] = include_once(realpath($propelConfigs['classmap']));

        Propel::setConfiguration($propelConfigs);
        Propel::initialize();
    }
}

