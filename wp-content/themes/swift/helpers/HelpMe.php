<?php

class HelpMe
{
	public static function platformSlashes($path)
	{
		return str_replace('/', DIRECTORY_SEPARATOR, $path);
	}

	public static function getServerUrl()
	{
		return $_ENV['SERVER_URL'];
	}

	public static function getImage()
	{
		return $_ENV['PUBLIC_IMAGES'];
	}

	public static function redirect($path)
	{
		$base_url = get_home_url();
		header("Location: $base_url" . $path);
	}

	public static function get_request_value($name)
	{
		return isset($_REQUEST[$name]) ? $_REQUEST[$name] : false;
	}

	public static function protectedRoute($condition, $goToRoute, $errorPage = 'pages/Unauthorized.php')
	{
		if ($condition) {
			Routes::load($errorPage);
		} else {
			$goToRoute();
		}
	}
}

?>
