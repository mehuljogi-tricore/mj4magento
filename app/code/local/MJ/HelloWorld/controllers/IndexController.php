<?php
class MJ_HelloWorld_IndexController extends Mage_Core_Controller_Front_Action{
    public function indexAction(){
		$this->loadLayout(array('default'));
		$this->renderLayout();
		print_r($this->getLayout()->getUpdate()->getHandles());
		echo "Hello MJ_HelloWorld";
    }
}
?>
