<?php

class DefaultController extends Controller {

    private $sample_model = NULL;
    
    public function __construct() {
        parent::__construct();
        $this->sample_model = new SampleModel();
    }

    public function index() {
        $view = new View('default_view');
        $view->title = 'Página Principal';
        
        // Para obtener datos del modelo
        // $datos = $this->sample_model->obtener();

        echo $view->display();
    }

}