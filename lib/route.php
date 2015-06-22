<?php

/**
 * Created By 	: Ade Yusuf Yaumul Isnain
 * Version 		: 1.0.0
 */

class Route
{
	private $_url = array();
	private $_method = array();

	public function add($url, $method = null)
	{
		$this->_url[] = "/" . trim($url, "/");
		$this->_method[] = $method;
	}

	public function submit()
	{
		$url = isset($_GET['url']) ? '/' . $_GET['url'] : '/';
		$check = false;

		foreach ($this->_url as $key => $value) 
		{
			if(preg_match("#^$value$#", $url))
			{	
				$check = true;
				$method = $this->_method[$key];
				if($method != null)
				{
					$newMethod = $method . "Controller";
					new $newMethod();
				}
			}
		}

		if(!$check)
		{
			echo "<h2>404 NOT FOUND</h2>";
		}
	}
}
