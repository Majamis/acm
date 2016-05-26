<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* Start of db table names */
$db_prefix = 'api_acm_';
define('DB_PREFIX','api_acm_');
define('MANUFACTURERS',DB_PREFIX . 'manufacturers');
define('PRODUCTS',DB_PREFIX . 'products');
define('USERS',DB_PREFIX . 'users');
define('KEYS',DB_PREFIX . 'key');
define('MEMBERSHIP',DB_PREFIX . 'membership');
define('ACTIONS',DB_PREFIX . 'action');
define('CONTROLLERS',DB_PREFIX . 'controller');
define('KEY_SETTINGS',DB_PREFIX . 'key_settings');
/* End of db table names */

/* End of file constants.php */
/* Location: ./application/config/constants.php */

function pre($parray, $text = "",$format=0)
{
	echo "<br><br><br><br><br>";
	if( $text ) echo "<div style='border: 1px dotted #FA8072;color:#FF0000'>$text</div>\n\n";
	if( $format )
	{
		$code = print_r($parray,1);
		$code = preg_replace('/=> Array/i','=&gt; Array',$code);
		$code = preg_replace('/\[(.*)\]/i',"<b style='color:#0088cc'>$1</b>",$code);
		$code = preg_replace('/=> (.*)/'," =&gt; <b style='color:#DE1C4C'>$1</b>",$code);
		$code = preg_replace('/=&gt;/i',"<b style='color:#8f8f8f'>=></b>",$code);
		echo "<pre style='border:1px dotted #FA8072;margin:0 0 10px;min-height:20px'>\n";print($code);echo "\n </pre>";
	}
	else
	{
		echo "<pre style='border:1px dotted #FA8072;margin:0 0 10px;min-height:20px'>\n";print_r($parray);echo "\n </pre>";
	}
}