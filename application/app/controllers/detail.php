<?php

class App_DetailController extends Tii_Application_Controller_Abstract
{
	public function indexAction()
	{
		$this->assign('title', Demo_Service::api()->configure_get(["name" => "infoName"]));
		//$this->assign('navigations', Demo_Service::api()->wanpu_navigation_getTree(["type" => "main"]));
	}
}