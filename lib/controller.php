<?php

/**
 * Created By : Ade Yusuf Yaumul Isnain
 * Version 		: 1.0.0
 */

class Controller {

	private static $instance;
	protected $view;

	/**
	 * Constructor
	 */
	public function __construct()
	{
		self::$instance =& $this;
	}

	public static function &get_instance()
	{
		return self::$instance;
	}
}
