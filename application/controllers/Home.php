<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public $viewFolder = "";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "homepage";

    }

    public function index()
	{
		echo $this->viewFolder ;
	}

	public function product_list(){
        echo "prodak list ürün listesi";
    }
}
