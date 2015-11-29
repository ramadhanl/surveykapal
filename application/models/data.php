<?php
class data extends CI_Model{
	function __construct() {
		parent::__construct();
	}
	public function login($username, $password){
		$this -> db -> select('username, nama, password');
	   	$this -> db -> from('user');
	   	$this -> db -> where('username', $username);
	   	$this -> db -> where('password', $password);
	   	$this -> db -> limit(1);
	 	$query = $this -> db -> get();
	 	if($query -> num_rows() == 0)
	     return false;
	   else
	     return $query->result();
	 }
	public function set_spesifikasi_kapal($id){
		$row = $this->db->get_where('contoh_kapal', array('id' => $id))->row();
		$data = array(
		         'loa' => $row->loa,
		         'lpp' => $row->lpp,
		         'd_design' => $row->d_design,
		         'h_mld' => $row->loa,
		         'b_mld' => $row->b_mld,
		         'vs' => $row->vs,
		         'complement' => $row->complement,
		         'engine_output' => $row->engine_output,
		         'bollard_pull' => $row->bollard_pull,
		         'harga' => $row->harga
		       );
		$this->db->where('id', 1);
		$this->db->update('keterangan_kapal', $data);
		$data = array('Kondisi_Dokumen' => "belum_dibuka");
		$this->db->where('id', 1);
		$this->db->update('survey_dokumen', $data);
	}
	
	public function set_kondisi_dokumen(){
		$kondisi = mt_rand(1,100);
		if ($kondisi<=90) {
			$Kondisi_Dokumen="Ada dan masih berlaku";
			$Depresiasi_Dokumen="tidak";
		}
		else{
			$Kondisi_Dokumen="Tidak ada";
			$Depresiasi_Dokumen="iya";
		}
		for ($id=1; $id<=9 ; $id++) { 
			$row = $this->db->get_where('survey_dokumen', array('id' => $id))->row();
			$data = array(
			         'Kondisi_Dokumen' => $Kondisi_Dokumen,
			         'Depresiasi_Dokumen' => $Depresiasi_Dokumen
			       );
			$this->db->where('id', $id);
			$this->db->update('survey_dokumen', $data);
			$kondisi = mt_rand(1,2);
			if ($kondisi==1) {
			$Kondisi_Dokumen="Ada dan masih berlaku";
			$Depresiasi_Dokumen="tidak";
			}
			else{
				$Kondisi_Dokumen="Tidak ada";
				$Depresiasi_Dokumen="iya";
			}
		}
	}
	public function set_lambung_kapal(){
		for ($id=1; $id<=15 ; $id++) { 
			if($id<13){
				$tebal = mt_rand(9,10)+(mt_rand(1,100)/100);
				if($tebal<=9.6)
					$depresiasi="iya";
				else
					$depresiasi="tidak";
			}
			else{
				$tebal = mt_rand(10,13)+(mt_rand(50,100)/100);
				if($tebal<=11.2)
					$depresiasi="iya";
				else
					$depresiasi="tidak";
			}
			$row = $this->db->get_where('survey_lambung_kapal', array('id' => $id))->row();
			$data = array(
			         'tebal' => $tebal,
			         'depresiasi' => $depresiasi
			       );
			$this->db->where('id', $id);
			$this->db->update('survey_lambung_kapal', $data);
		}
	}
	public function set_permesinan_kapal(){
		for ($id=1; $id<=13 ; $id++) { 
			$row = $this->db->get_where('survey_permesinan_kapal', array('id' => $id))->row();
			if (strcmp($row->Bagian_Permesinan, "perpipaan")){
				$kondisi = mt_rand(1,100);
				if ($kondisi<=80) {
					$kondisi="bekerja dengan baik";
					$depresiasi="perawatan";
				}
				else{
					$kondisi="ada kerusakan";
					$depresiasi="perbaikan";
				}
			}
			else{
				if ($kondisi<=80) {
					$kondisi="tidak ada kerusakan";
					$depresiasi="perawatan";
				}
				else{
					$kondisi="ada kerusakan (bocor)";
					$depresiasi="perbaikan";
				}
			}
			$data = array(
			         'Kondisi_Permesinan' => $kondisi,
			         'Depresiasi_Permesinan' => $depresiasi
			       );
			$this->db->where('id', $id);
			$this->db->update('survey_permesinan_kapal', $data);
		}
	}
	public function set_outfitting_kapal(){
		for ($id=1; $id<=7 ; $id++) { 
			$row = $this->db->get_where('survey_outfitting_kapal', array('id' => $id))->row();
			$kondisi = mt_rand(1,100);
			if ($kondisi<=80) {
				$kondisi="Semua alat masih berfungsi dengan baik";
				$depresiasi="Tidak";
			}
			else{
				$kondisi="ada kerusakan";
				$depresiasi="Penggantian";
			}
			$data = array(
			         'Kondisi_Outfitting' => $kondisi,
			         'Depresiasi_Outfitting' => $depresiasi
			       );
			$this->db->where('id', $id);
			$this->db->update('survey_outfitting_kapal', $data);
		}

	}
	public function get_info($username){
		$this -> db -> select('nama, password');
	   	$this -> db -> from('user');
	   	$this -> db -> where('username', $username);
	   	$query = $this -> db -> get();
	   	if($query -> num_rows() == 1) return $query->first_row();
	    else return false;
	}

}