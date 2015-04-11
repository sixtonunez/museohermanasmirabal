<?php

class HomeController extends CI_Controller {
    
    public function index() {
        $this->load->view('HomeView');
    }    
    
    public function historia() {
        $this->load->view('HistoriaView');
    }  
    
    public function servicios() {
        $this->load->view('ServiciosView');
    }  
    
    public function eventos() {
        $this->load->view('EventosView');
    }  
    
    public function noticias() {
        $this->load->view('NoticiasView');
    }  
    
    public function galeria() {
        $this->load->view('GaleriaView');
    }  
    
    public function contacto() {
        $this->load->view('ContactoView');
    }    
}

?>
