<?php 

function show($stuff)
{
	echo "<pre>";
	print_r($stuff);
	echo "</pre>";
}

function dd($stuff)
{
	echo"<pre>";
	var_dump($stuff);
	echo"<pre>";
	die();
}
function esc($str)
{
	return htmlspecialchars($str);
}


function redirect($path)
{
	header("Location: " . ROOT."/".$path);
	die;
}

function old_value($key, $default = '')
{
	if(!empty($_POST[$key]))
		return $_POST[$key];
	
	return $default;
	
}

function old_select($key, $value, $default = '')
{
	if(!empty($_POST[$key]) && $_POST[$key] == $value)
	{
		
		return ' selected ';
	}
	
	if(!empty($default) && $default == $value)
	{
		return ' selected ';
	}

	return '';
	
}
function user($key = '')
{
	if(!empty($_SESSION['USER']))
	{
		if(empty($key))
			return $_SESSION['USER'];
		
		if(!empty($_SESSION['USER']->$key))
		{
			return ucfirst($_SESSION['USER']->$key);
		}
	}

	return '';
}

function get_image ($filename = '')
{
	if(file_exists($filename))
		return ROOT . '/'.$filename;
	
	return ROOT . '/assets/img/noimage.png';
}

function get_date($date)
{
	return date("jS M, Y", strtotime($date));
}