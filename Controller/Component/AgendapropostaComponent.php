<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

class AgendaProposta extends Component
{
	protected $_controller = null;

	public function startup(Controller $controller) {
		$this -> _controller = $controller;
	}


    public function doComplexOperation($amount1, $amount2)
    {
        return $amount1 + $amount2;
    }
}