<?php defined('SYSPATH') or die('No direct script access.');

class View_Page_Main_Home extends Abstract_View_Page {

	public function projects()
	{
		$config = Kohana::config('couchdb');
		return Couch_Model::factory('project', new Sag($config->host, $config->port))
			->find_all(TRUE);
	}
}