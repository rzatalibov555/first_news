
<?php 

class Admin_controller extends CI_Controller{

    public function index(){
       
        $this->load->view('admin/login');
       
    }

    public function login_act(){
        $username =  $_POST['username'];
        $password =  $_POST['password'];

        if(!empty($username) && !empty($password)){

            $data = [
                'a_username' => $username,
                'a_password' => sha1(md5(sha1($password))),
            ];

            $data = $this->security->xss_clean($data);
            
            $checkAdmin = $this->db->where($data)->get('admin')->row_array();
           
            if($checkAdmin){

                $_SESSION['admin_id'] = $checkAdmin['a_id'];
                redirect('admin_dashboard');

                
            }else{
                $this->session->set_flashdata('err','Username ve ya password yalnisdir!');
                redirect(base_url('admin_login_page'));
            }


        }else{
            $this->session->set_flashdata('err','Bosluq buraxmayin!');
            redirect(base_url('admin_login_page'));
        }



    }


    public function logout(){
        unset($_SESSION['admin_id']);
        $this->session->set_flashdata('err','Sizi bir daha gozleyeceyik! :)');
        redirect(base_url('admin_login_page'));
    }


    public function dashboard(){
        $this->load->view('admin/dashboard');
    }

    public function news_list(){
        $data['get_all_news'] = $this->db->order_by('n_id','DESC')->get('news')->result_array();
        // result() -> hamisini object kimi getirir [0]...., [1]....,
        // result_array() -> hamisini array kimi getirir

        //row() -> yalniz 1 melumati getirir. Object kimi. ....
        //row_array() -> yalniz 1 melumati getirir. Array kimi.

        //        print_r('<pre>');
        //        print_r($data['get_all_news']);
        //        die();

        $this->load->view('admin/news/list',$data);
    }

    public function news_create(){
        $this->load->view('admin/news/create');
    }

    public function news_create_act(){

        $title    = $_POST['title'];
        $descr    = $_POST['description'];
        $date     = $_POST['date'];
        $category = $_POST['category'];
        $status   = $_POST['status'];

        $config['upload_path']          = './uploads/news/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
        $config['encrypt_name']         = true;

        //        $config['max_size']             = 100;
        //        $config['max_width']            = 1024;
        //        $config['max_height']           = 768;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if(!empty($title) && !empty($descr) && !empty($date) && !empty($category) && !empty($status)){

            if ($this->upload->do_upload('foto')){
                $upload_file_name = $this->upload->data('file_name');
                $upload_file_ext  = $this->upload->data('file_ext');

                $data = [
                    'n_title' => $title,
                    'n_descr' => $descr,
                    'n_date' => $date,
                    'n_category' => $category,
                    'n_status' => $status,
                    'n_img' => $upload_file_name,
                    'n_img_format' => $upload_file_ext,
                    'n_create_date' => date("Y-m-d H:i:s"),
                    'n_creater_id' => "",
                ];

                $data = $this->security->xss_clean($data);

                $this->db->insert('news', $data);
                $this->session->set_flashdata('success','Tebrikler! Xeber ugurla elave edildi!');
                redirect(base_url('admin_news_list'));
            }else{
                $data = [
                    'n_title' => $title,
                    'n_descr' => $descr,
                    'n_date' => $date,
                    'n_category' => $category,
                    'n_status' => $status,
                    'n_img' => "",
                    'n_img_format' => "",
                    'n_create_date' => date("Y-m-d H:i:s"),
                    'n_creater_id' => "",
                ];

                $data = $this->security->xss_clean($data);

                $this->db->insert('news', $data);
                $this->session->set_flashdata('success','Tebrikler! Xeber ugurla elave edildi! (sekilsiz)');
                redirect(base_url('admin_news_list'));
            }

        }else{
            $this->session->set_flashdata('err','Diqqet! Bosluq buraxmayin!');
            redirect($_SERVER['HTTP_REFERER']);
            
        }

    }

    public function error404_page(){
        $this->load->view('admin/404');
    }

    public function view_news($id){

        $id = $this->security->xss_clean($id);

        $data['get_single_news'] = $this->db->where('n_id',$id)->get('news')->row_array();
       
        $this->load->view('admin/news/view',$data);
    }

    public function delete_news($id){

        $id = $this->security->xss_clean($id);

        $this->db->where('n_id', $id)->delete('news');
        $this->session->set_flashdata('success','Tebrikler! Xeber ugurla silindi!');
        redirect(base_url('admin_news_list'));
    }

    public function news_update($id){
        $id = $this->security->xss_clean($id);
        $data['single_news'] = $this->db->where('n_id',$id)->get('news')->row_array();
        $this->load->view('admin/news/update',$data);
    }

    public function news_update_act($id){
        $id = $this->security->xss_clean($id);
        $title    = $_POST['title'];
        $descr    = $_POST['description'];
        $date     = $_POST['date'];
        $category = $_POST['category'];
        $status   = $_POST['status'];

        $config['upload_path']          = './uploads/news/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
        $config['encrypt_name']         = true;

        //        $config['max_size']             = 100;
        //        $config['max_width']            = 1024;
        //        $config['max_height']           = 768;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);







        if(!empty($title) && !empty($descr) && !empty($date) && !empty($category) && !empty($status)){

            if ($this->upload->do_upload('foto')){
                $upload_file_name = $this->upload->data('file_name');
                $upload_file_ext  = $this->upload->data('file_ext');

                $data = [
                    'n_title' => $title,
                    'n_descr' => $descr,
                    'n_date' => $date,
                    'n_category' => $category,
                    'n_status' => $status,
                    'n_img' => $upload_file_name,
                    'n_img_format' => $upload_file_ext,
                    'n_create_date' => date("Y-m-d H:i:s"),
                    'n_creater_id' => "",
                ];
                $data = $this->security->xss_clean($data);
                $this->db->where('n_id', $id)->update('news', $data);
                $this->session->set_flashdata('success','Tebrikler! Xeber ugurla yenilendi!');
                redirect(base_url('admin_news_list'));
            }else{
                $data = [
                    'n_title' => $title,
                    'n_descr' => $descr,
                    'n_date' => $date,
                    'n_category' => $category,
                    'n_status' => $status,
                    
                    
                    'n_create_date' => date("Y-m-d H:i:s"),
                    'n_creater_id' => "",
                ];
                $data = $this->security->xss_clean($data);
                $this->db->where('n_id', $id)->update('news', $data);
                $this->session->set_flashdata('success','Tebrikler! Xeber ugurla yenilendi!');
                redirect(base_url('admin_news_list'));
            }

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }




        // https://www.codeigniter.com/userguide3/libraries/sessions.html





    }


}