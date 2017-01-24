<?php

namespace Controller;

use \W\Controller\Controller;

class AdminController extends Controller
{

	public function index() {
        $this->show('admin/index');
    }


}