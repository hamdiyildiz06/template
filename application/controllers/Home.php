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
        $viewData = new stdClass();
        $viewData->viewFolder = "product_list_v";

        //Verileri Yükleyelim
        $this->load->model("product_model");
        $this->load->helper("text");

        //Verileri Çekelim
        $viewData->products = $this->product_model->get_all(
            array(
               "isActive" => 1,
            ),"rank ASC"
        );

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function product_detail($url = ""){
        $viewData = new stdClass();
        $viewData->viewFolder = "product_v";

        //Verileri Yükleyelim
        $this->load->model("product_model");
        $this->load->model("product_image_model");
        $this->load->helper("text");

        //Verileri Çekelim ->product detail
        $viewData->product = $this->product_model->get(
            array(
                "isActive" => 1,
                "url"      => $url
            ),"rank ASC"
        );

        $viewData->product_image = $this->product_image_model->get_all(
            array(
                "isActive"   => 1,
                "product_id" => $viewData->product->id
            ),"rank ASC"
        );

        //Verileri Çekelim -> Diğer ürünler
        $viewData->other_products = $this->product_model->get_all(
            array(
                "isActive" => 1,
                "id !=" => $viewData->product->id
            ),"rand()",array("start" => 0, "count" => 3)
        );

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function portfolio_list(){
        $viewData = new stdClass();
        $viewData->viewFolder = "portfolio_list_v";

        //Verileri Yükleyelim
        $this->load->model("product_model");
        $this->load->helper("text");

        //Verileri Çekelim
        $viewData->products = $this->product_model->get_all(
            array(
                "isActive" => 1,
            ),"rank ASC"
        );

        $this->load->view($viewData->viewFolder, $viewData);
    }



























}
