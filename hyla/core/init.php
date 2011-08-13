<?php defined('SYSPATH') or die('No direct script access.');

Route::set('hyla/home', '')
	->defaults(array(
		'directory'  => 'page',
		'controller' => 'main',
		'action'     => 'home',
	));

Route::set('hyla/projects', 'projects(/<action>)', array('action' => 'create'))
	->defaults(array(
		'directory'  => 'page',
		'controller' => 'projects',
		'action'     => 'list',
	));

Route::set('hyla/single-project', 'projects/<slug>/<action>')
	->defaults(array(
		'directory'  => 'page',
		'controller' => 'projects',
	));