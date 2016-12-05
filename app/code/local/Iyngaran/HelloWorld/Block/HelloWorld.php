<?php

class Iyngaran_HelloWorld_Block_HelloWorld extends Mage_Core_Block_Template
{
    public function _prepareLayout()
    {
        $this->getLayout()->getBlock('breadcrumbs')->addCrumb('home', array(
            'label' => Mage::helper('catalogsearch')->__('Home'),
            
            'title' => Mage::helper('catalogsearch')->__('Go to Home Page'),
            
            'link' => Mage::getBaseUrl()
        ))->addCrumb('customer', array(
            'label' => Mage::helper('customer')->__('Foo')
        ));
        
        return parent::_prepareLayout();
    }
    
    public function myMessage()
    {
        return "I am MJ, This is my module.";
    }
    
}

?>
