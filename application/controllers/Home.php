<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public $viewFolder = "";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "homepage";
        $this->load->helper("text");

    }

    public function index()
	{
        print_r(get_settings());
        die();
		echo $this->viewFolder ;
	}

	public function product_list(){
        $viewData = new stdClass();
        $viewData->viewFolder = "product_list_v";

        //Verileri Yükleyelim
        $this->load->model("product_model");

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
        $viewData->viewFolder = "course_list_v";

        //Verileri Yükleyelim
        $this->load->model("course_model");

        //Verileri Çekelim
        $viewData->courses = $this->course_model->get_all(
            array(
                "isActive" => 1,
            ),"rank ASC"
        );

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function portfolio_detail($url = ""){
        $viewData = new stdClass();
        $viewData->viewFolder = "portfolio_v";

        //Verileri Yükleyelim
        $this->load->model("portfolio_model");
        $this->load->model("portfolio_image_model");

        //Verileri Çekelim ->portfolio detail
        $viewData->portfolio = $this->portfolio_model->get(
            array(
                "isActive" => 1,
                "url"      => $url
            ),"rank ASC"
        );

        $viewData->portfolio_image = $this->portfolio_image_model->get_all(
            array(
                "isActive"   => 1,
                "portfolio_id" => $viewData->portfolio->id
            ),"rank ASC"
        );

        //Verileri Çekelim -> Diğer ürünler
        $viewData->other_portfolios = $this->portfolio_model->get_all(
            array(
                "isActive" => 1,
                "id !=" => $viewData->portfolio->id
            ),"rand()",array("start" => 0, "count" => 3)
        );

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function course_list(){
        $viewData = new stdClass();
        $viewData->viewFolder = "course_list_v";

        //Verileri Yükleyelim
        $this->load->model("course_model");

        //Verileri Çekelim
        $viewData->courses = $this->course_model->get_all(
            array(
                "isActive" => 1,
            ),"rank ASC, event_date ASC"
        );

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function course_detail($url = ""){
        $viewData = new stdClass();
        $viewData->viewFolder = "course_v";

        //Verileri Yükleyelim
        $this->load->model("course_model");

        //Verileri Çekelim ->course detail
        $viewData->course = $this->course_model->get(
            array(
                "isActive" => 1,
                "url"      => $url
            ),"rank ASC"
        );

        //Verileri Çekelim -> Diğer ürünler
        $viewData->other_courses = $this->course_model->get_all(
            array(
                "isActive" => 1,
                "id !=" => $viewData->course->id
            ),"rand()",array("start" => 0, "count" => 3)
        );

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function reference_list(){
        $viewData = new stdClass();
        $viewData->viewFolder = "reference_list_v";

        //Verileri Yükleyelim
        $this->load->model("reference_model");

        //Verileri Çekelim
        $viewData->references = $this->reference_model->get_all(
            array(
                "isActive" => 1,
            ),"rank ASC"
        );

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function brand_list(){
        $viewData = new stdClass();
        $viewData->viewFolder = "brand_list_v";

        //Verileri Yükleyelim
        $this->load->model("brand_model");

        //Verileri Çekelim
        $viewData->brands = $this->brand_model->get_all(
            array(
                "isActive" => 1,
            ),"rank ASC"
        );

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function service_list(){
        $viewData = new stdClass();
        $viewData->viewFolder = "service_list_v";

        //Verileri Yükleyelim
        $this->load->model("service_model");

        //Verileri Çekelim
        $viewData->services = $this->service_model->get_all(
            array(
                "isActive" => 1,
            ),"rank ASC"
        );

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function about_us(){
        $viewData = new stdClass();
        $viewData->viewFolder = "about_v";

        //Verileri Yükleyelim
        $this->load->model("settings_model");

        //Verileri Çekelim
        $viewData->settings = $this->settings_model->get(
            array()
        );

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function contact(){
        $viewData = new stdClass();
        $viewData->viewFolder = "contact_v";

        //Verileri Yükleyelim
        $this->load->model("settings_model");

        $this->load->view($viewData->viewFolder, $viewData);
    }








































































}
