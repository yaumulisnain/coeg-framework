<?php

/*
*
*	Class Connection by Yusuf
* 	2015, April 23
*	Version 1.0.0
*
*/

Class Connection
{
	function __construct($db_host, $db_user, $db_pass, $db_name)
	{
		@mysql_connect("$db_host","$db_user","$db_pass") or die ("could not connect to mysql");
		@mysql_select_db("$db_name") or die ("no database");
	}
}
