<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* class daftar agenda
*/
class Agenda extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->helper('url');
		$this->load->library('input');
		$this->load->model('daftaragenda/agenda_model');
	}
	// bagaian pengelolaan data
	public function index()
	{
		$data['title']="Data agenda";
		$data['daftar_agenda']=$this->agenda_model->select_all()->result();
		$this->load->view('agenda/daftar_agenda',$data);
	}
	public function tambah(){
	$this->load->view('agenda/form');
	}
	public function tambah_agenda(){
		$data['nama']=$this->input->post('nama');
		$data['keterangan']=$this->input->post('keterangan');
		$this->agenda_model->insert_agenda($data);
		redirect(site_url('agenda'));
	}
	public function edit($id_agenda){
		$data['title']="Edit Data agenda";
		$data['agenda']=$this->agenda_model->select_by_id($id_agenda)->row();
		$this->load->view('agenda/ubah',$data);
	}
	public function update_agenda(){
		$data['nama'] = $this->input->post('nama');
		$data['keterangan'] = $this->input->post('keterangan');
		$id_agenda=$this->input->post('id_agenda');
		$this->agenda_model->update_agenda($id_agenda, $data);
		redirect(site_url('agenda'));
	}
	public function delete($id_agenda){
		$this->agenda_model->delete_agenda($id_agenda);
		redirect(site_url('agenda'));
	}
}



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */