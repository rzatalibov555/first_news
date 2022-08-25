<?php 

class User_controller extends CI_controller{
    
    public function index(){
        $this->load->view('user/index');
    }

    public function about(){
        $this->load->view('user/about');
    }

    public function contact(){
        $this->load->view('user/contact');
    }

    public function news(){
        $this->load->view('user/news');
    }

    public function news_single(){
        $this->load->view('user/news-details');
    }



}