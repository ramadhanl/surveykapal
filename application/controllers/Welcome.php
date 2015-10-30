<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('surveykapal/home');
	}
	public function keterangan_kapal()
	{
		$this->load->view('surveykapal/keterangan_kapal');
	}
	public function rekapitulasi_hasil_survey()
	{
		$this->load->view('surveykapal/rekapitulasi_hasil_survey');
	}
	public function survey_dokumen_kapal()
	{
		$this->load->view('surveykapal/survey_dokumen_kapal');
	}
	public function survey_kapal_home()
	{
		$this->load->view('surveykapal/survey_kapal_home');
	}
	public function survey_kondisi_kapal()
	{
		$this->load->view('surveykapal/survey_kondisi_kapal');
	}
}
