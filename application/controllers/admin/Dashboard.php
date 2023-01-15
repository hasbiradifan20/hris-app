<?php 

class Dashboard extends CI_Controller{
    public function index ()
    {
        $data['title']= "Dashboard"; // buat title
        $karyawan = $this->db->query("SELECT * FROM data_karyawan");
        $admin = $this->db->query("SELECT * FROM data_karyawan where jabatan ='Admin'")  ;
        $jabatan = $this->db->query("SELECT * FROM data_jabatan");
        $kehadiran = $this->db->query("SELECT * FROM data_kehadiran");
        $data['karyawan'] = $karyawan->num_rows();
        $data['admin'] = $admin->num_rows();
        $data['jabatan'] = $jabatan->num_rows();
        $data['kehadiran'] = $kehadiran->num_rows();
        $this->load->view('templates_admin/header',$data); 
        $this->load->view('templates_admin/sidebar'); 
        $this->load->view('admin/dashboard',$data); 
        $this->load->view('templates_admin/footer'); 
}
}

?>