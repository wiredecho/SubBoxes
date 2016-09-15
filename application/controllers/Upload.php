<?php

class Upload extends CI_Controller {

        public function __construct() {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index() {
                $this->load->view('upload_form', array('error' => ' ' ));
        }

        public function do_upload() {
                $config['upload_path']          = './assets/profile_pics/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 102400;
                $config['max_height']           = 76800;

                $this->load->library('upload', $config);
                

                if ( ! $this->upload->do_upload('userfile')) {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                } else {
                        $id = $this->session->userdata("user_session")[
                "id"];
                        // var_dump($id);
                        // die();
                        $data = $this->upload->data();
                        $photo= $data["file_name"];
                        
                        $this->user->upload_photo($photo);
                        redirect("profile/{$id}");
                        // $this->load->view('upload_success', $data);


                }
        }



        public function box_do_upload() {
                $config['upload_path']          = './assets/box_pics/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 102400;
                $config['max_height']           = 76800;

                $this->load->library('upload', $config);
                

                if ( ! $this->upload->box_do_upload('userfile')) {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                } else {
                        $id = $this->session->userdata("user_session")[
                "id"];
                        // var_dump($id);
                        // die();
                        $data = $this->upload->data();
                        $photo= $data["file_name"];
                        
                        $this->user->upload_photo($photo);
                        redirect("profile/{$id}");
                        // $this->load->view('upload_success', $data);


                }
        }
}
