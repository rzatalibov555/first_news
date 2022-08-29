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
       
        $data['get_all_news'] = $this->db->order_by('n_id','DESC')->get('news')->result_array();
        $this->load->view('user/news',$data);
    }

    public function news_single($id){
        $id = $this->security->xss_clean($id);
        $num = is_numeric($id);
        if($num){
            $data['get_single_news'] = $this->db->where('n_id',$id)->get('news')->row_array();
            $data['get_news'] = $this->db->limit(5)->order_by('n_id','DESC')->get('news')->result_array();
            // $data['get_news'] = $this->db->limit(5)->where('n_category',$data['get_single_news']['n_category'])->order_by('n_id','DESC')->get('news')->result_array();
            // print_r('<pre>');
            // print_r();
            // die();
            $this->load->view('user/news-details',$data);
        }else{
            redirect(base_url('news'));
        }
        
    }


    public function category($category){
        $category = $this->security->xss_clean($category);
        $data['get_all_news'] = $this->db->order_by('n_id','DESC')->where('n_category',$category)->get('news')->result_array();
        $this->load->view('user/category',$data);
    }



}