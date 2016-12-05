<?php
class MJ_HelloWorld_Block_HelloWorldb extends Mage_Core_Block_Template
{
    public function getHello()
    {
        return "Hello Mehul from Hello World Block.</br>";
    }
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
        
        return "I am Iyngaran, This is my module.";
        
    }
    
    
}
?>
