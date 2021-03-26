<?php

class dosen_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	private $_table = 'dosen';

	public function doLogin()
	{
		$post = $this->input->post();
		$nip = $this->input->post('nip');

		$this->db->where('nip', $post["nip"]);
		$dosen = $this->db->get($this->_table)->row();
		if($dosen)
		{
			if($post["password"] == $dosen->password)
			{
				$this->session->set_userdata(	
					['username' => $nip],
				);
				return true;
			}
		}

		return false;
	}

	public function datatable()
	{
		$this->db->select('*')
			->from('bimbingan b')
			->join('dosen d', 'd.dosen_id= b.id_dosen', 'left')
			->join('mahasiswa m', 'm.id=b.id_mahasiswa', 'left')
			->where('d.nip', $this->session->userdata('username'));
		$_querry = $this->db->get();
		return $_querry->result();
	}
}
