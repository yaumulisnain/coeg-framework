<?php

/**
 * Created By 	: Ade Yusuf Yaumul Isnain
 * Version 		: 1.0.0;	
 */

class View
{
	protected $_file;
	protected $_data = array();
	
	public function __construct($file)
	{
		$this->_file = $file . "/index.tpl";
		$this->_data['header'] = "";
	}
    
	public function set($key, $value)
	{
		$this->_data[$key] = $value;
	}

	public function setCSS($value)
	{
		$this->_data['header'] .= "\n" . '<link rel="stylesheet" type="text/css" href="'. $value .'">';
	}

	public function setJS($value)
	{
		$this->_data['header'] .= "\n" . '<script type="text/javascript" src="'. $value .'"></script>';
	}
	
	public function get($key)
	{
   		return $this->_data[$key];
  	}
	
	public function render()
	{
		if (!file_exists($this->_file))
		{
			throw new Exception("View " . $this->_file . " doesn't exist.");
		}
		
		extract($this->_data);
		ob_start();
		include($this->_file);
		$output = ob_get_contents();
		ob_end_clean();
		echo $output;
	}
}
