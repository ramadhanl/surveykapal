<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('surveykapal/home');
		if($this->session->userdata('nama')!= NULL)
			$this->load->view('surveykapal/home');
		else
			redirect(base_url("home/login/"));
	}
	public function teori_awal()
	{
		$this->load->view('teori/teori1');
	}
	public function teori_awal2()
	{
		$this->load->view('teori/teori2');
	}
	public function teori_awal3()
	{
		$this->load->view('teori/teori3');
	}
	public function teori1_awal()
	{
		$this->load->view('teori/subteori/teori1');
	}
	public function teori2_awal()
	{
		$this->load->view('teori/subteori/teori2');
	}
	public function teori_awal_kondisi_kapal()
	{
		$this->load->view('teori/subteori/teori_kondisi_kapal');
	}
	public function teori_awal_survey_kapal()
	{
		$this->load->view('teori/subteori/teori_survey_kapal');
	}
	public function teori_awal_lambung_kapal()
	{
		$this->load->view('teori/subteori/teori_lambung_kapal');
	}
	public function teori_awal_outfitting_kapal()
	{
		$this->load->view('teori/subteori/teori_outfitting_kapal');
	}
	public function teori_awal_permesinan_kapal()
	{
		$this->load->view('teori/subteori/teori_permesinan_kapal');
	}
	public function evaluasi1()
	{
		$this->load->view('evaluasi/evaluasi1');
	}
	public function evaluasi2()
	{
		$this->load->view('evaluasi/evaluasi2');
	}
	public function evaluasi3()
	{
		$this->load->view('evaluasi/evaluasi3');
	}
	public function evaluasi4()
	{
		$this->load->view('evaluasi/evaluasi4');
	}
	public function evaluasi5()
	{
		$this->load->view('evaluasi/evaluasi5');
	}
	public function evaluasi6()
	{
		$this->load->view('evaluasi/evaluasi6');
	}
	public function cek_evaluasi6()
	{
		$jawaban_benar = 47889261031;
		if ($this->input->post('jawaban')==$jawaban_benar)
			$this->load->view('evaluasi/evaluasi6_benar',array('jawaban'=>$this->input->post('jawaban')));
		else if($this->input->post('jawaban')>=43000000000 && $this->input->post('jawaban')<=48000000000)
			$this->load->view('evaluasi/evaluasi6_hampir',array('jawaban'=>$this->input->post('jawaban')));
		else
			$this->load->view('evaluasi/evaluasi6_salah',array('jawaban'=>$this->input->post('jawaban')));
	}
	public function evaluasi7()
	{
		$this->load->view('evaluasi/evaluasi7');
	}
	public function cek_evaluasi7()
	{
		$jawaban_benar = 18677904138;
		if ($this->input->post('jawaban')==$jawaban_benar)
			$this->load->view('evaluasi/evaluasi7_benar',array('jawaban'=>$this->input->post('jawaban')));
		else if($this->input->post('jawaban')>=15000000000 && $this->input->post('jawaban')<=19000000000)
			$this->load->view('evaluasi/evaluasi7_hampir',array('jawaban'=>$this->input->post('jawaban')));
		else
			$this->load->view('evaluasi/evaluasi7_salah',array('jawaban'=>$this->input->post('jawaban')));
	}
	public function evaluasi8()
	{
		$this->load->view('evaluasi/evaluasi8');
	}
	public function cek_evaluasi8()
	{
		$jawaban_benar = 19223992819;
		if ($this->input->post('jawaban')==$jawaban_benar)
			$this->load->view('evaluasi/evaluasi8_benar',array('jawaban'=>$this->input->post('jawaban')));
		else if($this->input->post('jawaban')>=14000000000 && $this->input->post('jawaban')<=17000000000)
			$this->load->view('evaluasi/evaluasi8_hampir',array('jawaban'=>$this->input->post('jawaban')));
		else
			$this->load->view('evaluasi/evaluasi8_salah',array('jawaban'=>$this->input->post('jawaban')));
	}
	public function evaluasi9()
	{
		$this->load->view('evaluasi/evaluasi9');
	}
	public function cek_evaluasi9()
	{
		$jawaban_benar = 16889677820;
		if ($this->input->post('jawaban')==$jawaban_benar)
			$this->load->view('evaluasi/evaluasi9_benar',array('jawaban'=>$this->input->post('jawaban')));
		else if($this->input->post('jawaban')>=13000000000 && $this->input->post('jawaban')<=16000000000)
			$this->load->view('evaluasi/evaluasi9_hampir',array('jawaban'=>$this->input->post('jawaban')));
		else
			$this->load->view('evaluasi/evaluasi9_salah',array('jawaban'=>$this->input->post('jawaban')));
	}
	public function evaluasi10()
	{
		$this->load->view('evaluasi/evaluasi10');
	}
	public function cek_evaluasi10()
	{
		$jawaban_benar = 22592037940;
		if ($this->input->post('jawaban')==$jawaban_benar)
			$this->load->view('evaluasi/evaluasi10_benar',array('jawaban'=>$this->input->post('jawaban')));
		else if($this->input->post('jawaban')>=19000000000 && $this->input->post('jawaban')<=23000000000)
			$this->load->view('evaluasi/evaluasi10_hampir',array('jawaban'=>$this->input->post('jawaban')));
		else
			$this->load->view('evaluasi/evaluasi10_salah',array('jawaban'=>$this->input->post('jawaban')));
	}
	public function teori1()
	{
		$this->load->view('surveykapal/teori1');
	}
	public function teori2()
	{
		$this->load->view('surveykapal/teori2');
	}
	public function teori_kondisi_kapal()
	{
		$this->load->view('surveykapal/teori_kondisi_kapal');
	}
	public function teori_survey_kapal()
	{
		$this->load->view('surveykapal/teori_survey_kapal');
	}
	public function teori_lambung_kapal()
	{
		$this->load->view('surveykapal/teori_lambung_kapal');
	}
	public function teori_outfitting_kapal()
	{
		$this->load->view('surveykapal/teori_outfitting_kapal');
	}
	public function teori_permesinan_kapal()
	{
		$this->load->view('surveykapal/teori_permesinan_kapal');
	}
	public function login()
	{
		$this->load->view('surveykapal/login');
	}
	public function datakapal()
	{
		$this->load->view('surveykapal/datakapal');
	}
	public function login_proses()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$this->load->model("data");
		$this->load->database();
		$result = $this->data->login($username, $password);
 		if($result)
		   {
		     $sess_array = array();
		     foreach($result as $row)
		     {
		       $sess_array = array(
		         'username' => $row->username,
		         'nama' => $row->nama,
		         'password' => $row->password
		       );
		       $this->session->set_userdata($sess_array);
		     }
		     redirect(base_url(""));
		     return TRUE;
		   }
	   else
	   {
	     $this->form_validation->set_message('check_database', 'Invalid username or password');
	     redirect(base_url("home/login/"));
	     return false;
	   }
		
	}
	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->sess_destroy();
		redirect(base_url());
	}
	public function keterangan_kapal()
	{
		$id = mt_rand(1,$this->db->count_all('contoh_kapal'));
		$this->load->model("data");
		$this->data->set_spesifikasi_kapal($id);
		$this->load->view('surveykapal/keterangan_kapal');
	}
	public function manual()
	{
		$lpp=$this->input->post('lpp');
		$tahun=$this->input->post('tahun');
		$engine=$this->input->post('engine');
		$l = (138563*$lpp)-3000000;
		$thn = abs((24130*(1967+(2012-$tahun))-50000000));
		$hp = ((675.07*$engine)-403123);
		$harga = (($l)+($thn)+$hp)/3;
		$data = array(
	         'loa' => 0,
	         'lpp' => $lpp,
	         'd_design' => 0,
	         'h_mld' => 0,
	         'b_mld' => 0,
	         'vs' => 0,
	         'complement' => 0,
	         'engine_output' => $engine,
	         'bollard_pull' => 0,
	         'harga' => $harga*13758,
	         'tahun' => $tahun
	       );
		$this->db->where('id', 1);
		$this->db->update('keterangan_kapal', $data);
		$data = array('Kondisi_Dokumen' => "belum_dibuka");
		$this->db->where('id', 1);
		$this->db->update('survey_dokumen', $data);
		$this->load->view('surveykapal/keterangan_kapal');
	}
	public function tambahkapal()
	{
		$this->load->view('surveykapal/tambahkapal');
	}
	public function rekapitulasi_hasil_survey()
	{
		$this->load->view('surveykapal/rekapitulasi_hasil_survey');
	}
	public function rekapitulasi_hasil_survey2()
	{
		$this->load->view('surveykapal/rekapitulasi_hasil_survey2');
	}
	public function survey_dokumen_kapal()
	{
		$this->load->model("data");
		$this->data->set_kondisi_dokumen();
		$this->data->set_lambung_kapal();
		$this->data->set_permesinan_kapal();
		$this->data->set_outfitting_kapal();
		$this->load->view('surveykapal/survey_dokumen_kapal');
	}
	public function survey_kapal_home()
	{
		$this->load->model("data");
		$this->load->view('surveykapal/survey_kapal_home');
	}
	public function survey_kondisi_kapal()
	{
		$this->load->view('surveykapal/survey_kondisi_kapal');
	}
	public function survey_lambung_kapal()
	{
		$this->load->view('surveykapal/survey_lambung_kapal');
	}
	public function survey_permesinan_kapal()
	{
		$this->load->view('surveykapal/survey_permesinan_kapal');
	}
	public function survey_outfitting_kapal()
	{
		$this->load->view('surveykapal/survey_outfitting_kapal');
	}
}
