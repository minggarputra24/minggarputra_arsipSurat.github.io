<?php

class cetak_model extends CI_Model {

    public function insert(){

        $this->db->select('surat_dari,tgl_surat,diterima_tgl,no_agenda,perihal,diteruskan_kepada,isi_disposisi');
        $query = $this->db->get('disposisi');
        return $query->result();
    }
}
?>