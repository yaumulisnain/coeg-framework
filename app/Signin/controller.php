<?php

/**
 * Created By 	: Ade Yusuf Yaumul Isnain
 * Version 		: 1.0.0
 */

class SignInController extends Controller
{
	private $dir;

	public function __construct()
	{
		$this->dir = APP_FOLDER . "/" . basename(dirname(__FILE__));
		$this->init();

		if(isset($_POST["username"]) && isset($_POST["password"]))
		{
			$this->checkUser();
		}
	}

	private function init()
	{
		$this->view = new View($this->dir);
		$this->view->set("title", "POS - Masuk");
		$this->view->render();
	}

	private function checkUser()
	{
		if($_POST["username"] == "kasir" && $_POST["password"] = "kasir")
		{
			echo "<script>window.top.location='". BASEURL . 'cashier' ."'</script>";
		}
	}
}
