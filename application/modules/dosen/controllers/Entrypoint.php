<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entrypoint extends Dosen 
{
	public $data = array();

	public $thn_akademik;

	public $semester;

	public $param;

	public function __construct()
	{
		parent::__construct();

		$this->thn_akademik = $this->input->get('thn_akademik');

		$this->load->helper(array('akademik'));

		$this->semester = $this->input->get('semester');

		$this->param = $this->uri->segment(4);

		$this->load->model('schedule');

		$this->breadcrumbs->unshift(1, 'Entry Nilai', "akademik/entrypoint?{$this->input->server('QUERY_STRING')}");

		//$this->load->js(base_url("assets/app/akademik/entrypoint.js"));
	}

	/* TESTED 
	*	course_id 39 
	*	leturer_id 3
	* 	genap 
	* 	SELECT * FROM `study_point` WHERE `course_id` = 39 AND semester = 'ganjil'
	*/
	public function index()
	{
		$this->page_title->push('Entry Nilai', 'Cari Jadwal Mengajar');

		$this->form_validation->set_data($this->input->get());

		$this->form_validation->set_rules('thn_akademik', 'Tahun Ajaran', 'trim|required');
		$this->form_validation->set_rules('semester', 'Semester', 'trim|required');

		$this->form_validation->run();

		$this->data = array(
			'title' => "Entry Nilai", 
			'breadcrumb' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			'js' => $this->load->get_js_files(),
			'jadwal_mengajar' => $this->schedule->get(),
		);

		$this->template->view('entry-point/cari-kelas', $this->data);
	}

	public function set($param = '')
	{
		$this->page_title->push('Entry Nilai', 'Entry Nilai Mahasiswa');

		$this->data = array(
			'title' => "Entry Nilai", 
			'breadcrumb' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			'js' => $this->load->get_js_files(),
			'jadwal' => $this->schedule->row($param),
			'mahasiswa' => $this->schedule->get_nilai_mhs($param),
		);

		$this->template->view('entry-point/entry-nilai', $this->data);
	}

	public function set_nilai($param = 0)
	{
		$this->schedule->entry_nilai();

		redirect("dosen/entrypoint/set/{$param}");
	}

	public function cetak_nilai_kelas($param = 0)
	{
		$this->data = array(
			'title' => "DAFTAR NILAI MAHASISWA",
			'jadwal' => $this->schedule->row($param),
			'mahasiswa' => $this->schedule->get_nilai_mhs($param)
		);

		$this->load->view('entry-point/print-nilai-kelas', $this->data);
	}
}

/* End of file Entrypoint.php */
/* Location: ./application/modules/Dosen/controllers/Entrypoint.php */