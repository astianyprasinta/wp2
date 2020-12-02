<?php

class profile extends CI_Controller {
    // memanggil di folder view
    public function index($baju = ''){       //$nama adalah mengirim data ke view tapi lewat url dan kalau tidak di isi akn default. contoh http://localhost/ci-app/home/index/aku
        $data['judul'] = 'Halaman Profile';     //U mengubah  judul dengan $data di header
        $data['nama'] = $baju;
        $this->load->view('templates/profil', $data);
        $this->load->view('profil/index', $data); //menampilkan index di view/home
        $this->load->view('templates/footer');
    }
}