<?php 

class User_controller extends CI_controller{
    
    public function index(){
        $data['get_news_for_slider'] = $this->db->limit(10)->order_by('n_id','DESC')->get('news')->result_array();
        $data['get_news'] = $this->db->limit(3)->order_by('n_id','DESC')->get('news')->result_array();
        $data['get_news_limit'] = $this->db->limit(4,3)->order_by('n_id','DESC')->get('news')->result_array();
        
        // print_r("<pre>");
        // print_r($data['get_news_limit']);
        // die;
        
        $this->load->view('user/index',$data);
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