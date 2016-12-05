<?php
class MJ4_MJCheckout_IndexController extends Mage_Core_Controller_Front_Action{
    public function indexAction(){
		$this->loadLayout(array('default'));
		$this->renderLayout();
		//print_r($this->getLayout()->getUpdate()->getHandles());
        //echo "Hello MJ4_MJCheckout";
    }
}
?>
