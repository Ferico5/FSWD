<?php 

class Home extends CI_Controller {
    public function index() {
        $this->load->view("home"); // memanggil file home.php yang ada di folder view
    }
}

?>