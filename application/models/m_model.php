<?php
class M_model extends CI_Model{
    function get_data($table) {
        return $this->db->get($table);
    }

    function getwhere($table, $data)
    {
        return $this->db->get_where($table, $data);
    }

    public function delete($table, $field, $id)
    {
        $data=$this->db->delete($table, array($field => $id));
        return $data;
    }

    public function tambah_data($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function get_by_id($tabel, $id_column, $id)
    {
        $data=$this->db->where($id_column, $id)->get($tabel);
        return $data;
    }

    public function ubah_data($tabel, $data, $where)
    {
        $data=$this->db->update($tabel, $data, $where);
        return $this->db->affected_rows();
    }
   
    public function get_by_nisn($nisn)
    {
        $this->db->select('id_siswa');
        $this->db->from('siswa');
        $this->db->where('nisn',$nisn);
        $query = $this->db->get();

        if($query->num_rows() > 0){
            $result = $query->row();
            return $result->id_siswa;
        } else {
            return false ;
        }
    }

    public function getDataSiswa() {
        $this->db->select('siswa.id_siswa, siswa.nama_siswa, siswa.nisn, siswa.gender, kelas.tingkat_kelas, kelas.jurusan_kelas');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id = siswa.id_kelas', 'left');
        $query = $this->db->get();
    
        return $query->result();
    }

    public function getKelasByTingkatJurusan($tingkat_kelas, $jurusan_kelas)
    {
        $this->db->select('id');
        $this->db->where('tingkat_kelas', $tingkat_kelas);
        $this->db->where('jurusan_kelas', $jurusan_kelas);
        $query = $this->db->get('kelas');

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->id;
        } else {
            return false;
        }
    }
    
}