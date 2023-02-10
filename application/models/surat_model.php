<?php

defined('BASEPATH') or exit('No direct script access allowed');

class surat_model extends CI_Model
{
    public function hapus_suratKeluar($id)
    {
        $this->db->where('id_suratKeluar', $id);
        $this->db->delete('surat_keluar');
    }

    // START BAGIAN DISPOSISI

    // untuk fungsi update
    public function input_data($data){
        $this->db->insert('disposisi', $data);
    }

    // untuk fungsi detail
    public function tampil_data($table){
        return $this->db->get($table);
    }
    
    // FUNGSI PRINT DI AMBIL PER ID
    public function ambil_id_print($id_disposisi){
        $result = $this->db->where('id_disposisi', $id_disposisi)->get('disposisi');
        if($result->num_rows()> 0 ) {
            return $result->result();
        } else {
            return false;
        }
    }
    
    // FUNGSI HAPUS
    public function hapus_disposisi($id_disposisi)
    {
        $this->db->where('id_disposisi', $id_disposisi);
        $this->db->delete('disposisi');
    }

    // FUNGSI EDIT & UPDATE

    public function updateDataDisposisi()
    {
        $data = [
            "id_suratMasuk" => $this->input->post('id_suratMasuk'),
            "diterima_tgl" => $this->input->post('diterima_tgl'),
            "diteruskan_kepada" => $this->input->post('diteruskan_kepada'),
            "isi_disposisi" => $this->input->post('isi_disposisi')
        ];
        $this->db->where('id_disposisi', $this->input->post('id_disposisi'));
        $this->db->update('disposisi', $data);

    }

    public function getDisposisiByID($id_disposisi)
    {
        return $this->db->get_where('disposisi', ['id_disposisi' => $id_disposisi])->row_array();
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    // END BAGIAN DISPOSISI

    public function hapus_suratMasuk($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('surat_masuk');
    }

    public function getsuratByID($id)
    {
        return $this->db->get_where('surat_masuk', ['id' => $id])->row_array();
    }

    public function getsuratKeluarByID($id)
    {
        return $this->db->get_where('surat_keluar', ['id_suratKeluar' => $id])->row_array();
    }

    // DISPOSISI
    public function getSuratDisposisiByID($id_disposisi)
    {
        return $this->db->get_where('disposisi', ['id_disposisi' => $id_disposisi])->row_array();
    }

    public function ubahDisposisi()
    {
        $data['surat_dari'] = $this->input->post('surat_dari');
        $data['tgl_surat'] = $this->input->post('tgl_surat');
        $data['no_agenda'] = $this->input->post('no_agenda');
        $data['diteruskan_kepada'] = $this->input->post('diteruskan_kepada');
        $data['isi_disposisi'] = $this->input->post('isi_disposisi');
        $this->db->where('id_disposisi', $this->input->post('id_disposisi'));
        $this->db->update('disposisi', $data);
    }

    public function ubahdatasrt()
    {
        $data['no_surat'] = $this->input->post('no_surat');
        $data['tgl_suratMasuk'] = $this->input->post('tgl_suratMasuk');
        $data['pengirim'] = $this->input->post('pengirim');
        $data['penerima'] = $this->input->post('penerima');
        $data['perihal'] = $this->input->post('perihal');
        $data['disposisi'] = $this->input->post('disposisi');
        // $data['lampiran'] = $this->input->post('lampiran');
        // $lampiran = $_FILES['lampiran']['name'];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('surat_masuk', $data);
    }

    public function updateDataSuratKeluar()
    {
        $data['tgl'] = $this->input->post('tgl');
        $data['no_agenda'] = $this->input->post('no_agenda');
        $data['no_surat'] = $this->input->post('no_surat');
        $data['tgl_suratKeluar'] = $this->input->post('tgl_suratKeluar');
        $data['pengirim'] = $this->input->post('pengirim');
        $data['penerima'] = $this->input->post('penerima');
        $data['perihal'] = $this->input->post('perihal');
        // $data['disposisi'] = $this->input->post('disposisi');
        $this->db->where('id_suratKeluar', $this->input->post('id_suratKeluar'));
        $this->db->update('surat_keluar', $data);
    }

    // Start Model Users
    public function getUsersByID($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function updateDataUsers()
    {
        $data['name'] = $this->input->post('name');
        $data['username'] = $this->input->post('username');
        $data['image'] = $this->input->post('image');
        // $data['password'] = $this->input->post('password');
        $data['role_id'] = $this->input->post('role_id');
        $data['is_active'] = $this->input->post('is_active');
        // $data['date_created'] = $this->input->post('date_created');

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }

    public function edit_data_users($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data_users($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_users($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function ambil_id_user($id){
        $result = $this->db->where('id', $id)->get('user');
        if($result->num_rows()> 0 ) {
            return $result->result();
        } else {
            return false;
        }
    }

    // PRINT
    public function ambil_id_disposisi($id_disposisi)
    {
        $result = $this->db->select('*')->from('surat_masuk as sk')->join('disposisi as d', 'sk.id = d.id_suratMasuk')->where('d.id_disposisi', $id_disposisi)->get();
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    // END PRINT

    // START COUNT
    public function countSm()
    {
        return count($this->db->get('surat_masuk')->result());
    }

    public function countSk()
    {
        return count($this->db->get('surat_keluar')->result());
    }
    
    public function disposisi()
    {
        return count($this->db->get('disposisi')->result());
    }

    public function user()
    {
        return count($this->db->get('user')->result());
    }
    // END COUNT

    public function ambil_id_suratSM($id)
    {
        $query = "SELECT * FROM surat_masuk as sm LEFT JOIN disposisi as d ON sm.id = d.id_suratMasuk WHERE sm.id=$id";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function ambil_id_suratSK($id_suratKeluar)
    {
        $result = $this->db->select('*')->from('surat_keluar')->where('id_suratKeluar', $id_suratKeluar)->get();
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
