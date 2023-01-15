<?php
// penulisan snake case(awal kecil) dan kemel case(awal besar)
//fungsi result untuk men-generate query yang sudah dibuat
class dataKaryawan extends CI_Controller{
    public function index ()
    {
        $data = $this->db->query("SELECT * FROM data_karyawan")->result();
        var_dump($data);
    }
}
?>