<?php
$router->group(["prefix"=>"books"], function($router){
	$router->post("", "Books@store");
	$router->get("", "Books@index");
	$router->get("{book}", "Books@show");
	$router->put("{book}", "Books@update");
	$router->delete("{book}", "Books@destroy");
});
