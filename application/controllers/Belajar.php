<?php

class Belajar extends CI_Controller
{
    public function index()
    {
        $this->load->view('view_belajar');
    }
   public function parsing()
   {
        //$data['bio']= "Nama Saya Saskia";
        $data=array(
            'nama' => "Saskia Azzahra",
            'pekerjaan' => "Mahasiswa"
        );
        $this->load->view('view_belajar', $data);
   }  
}
