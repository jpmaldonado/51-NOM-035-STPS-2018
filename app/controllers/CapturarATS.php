<?php
namespace app\controllers;

class CapturarATS
{
	private $_view;

	public function __construct(\app\core\ViewToken $View)
	{
		$this->_view = $View;
	}

	public function index()
	{
		$this->_view->show('template/header');
		$this->_view->show('template/menu');
		$this->_view->show('nom035/ATS');
		$this->_view->show('template/footer');
	}
}