<?php
class pengumuman extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengumuman_models');
	}
public function index()
	{
		
		$data['judul'] = 'Pengumuman';
		$data['sub_judul'] = 'Halaman Pengumuman';
		$data['halaman'] = 'admin/v_pengumuman';
		//parsing data dari model ke view
		$data['isi_tabel'] = $this->pengumuman_models->all();


		$this->load->view('admin/v_template',$data);
		}
		public function tambah()
		{
		$data['judul'] = 'Tambah Pengumuman';
		$data['sub_judul'] = 'Tambah Pengumuman';
		$data['halaman'] = 'admin/v_tambah_pengumuman';
		$this->load->view('admin/v_template',$data);
		

		}
		public function proses_tambah()
		{
			$judul = $this->input->post('judul');
			$isi = $this->input->post('isi');
			$penulis = $this->input->post('penulis');

			$objek = array(
				'judul' => $judul,
				'isi' => $isi,
				'penulis' => $penulis
			);
			if ($this->pengumuman_models->create($objek)) {
				//echo 'Berhasil';
				$this->session->set_flashdata('info','Data Berhasil Disimpan !');
				redirect('admin/pengumuman');
			}else{
				//echo 'Gagal';
				$this->session->set_flashdata('info','Data Gagal Disimpan !');
				redirect('admin/pengumuman');
			}

			//var_dump($objek);

		}

		public function hapus($kode)
		{
			if ($this->pengumuman_models->remove($kode)) {
				$this->session->set_flashdata('info','Data Berhasil Disimpan !');
				redirect('admin/pengumuman');
			}else{
				//echo 'Gagal';
				$this->session->set_flashdata('info','Data Gagal Disimpan !');
				redirect('admin/pengumuman');
			}
		}
		public function edit($id)
		{
			// echo "Halaman Edit";
		$data['judul'] = 'Edit Pengumuman';
		$data['sub_judul'] = 'Edit Pengumuman';
		$data['halaman'] = 'admin/v_edit_pengumuman';

		$data['isi_data'] = $this->pengumuman_models->get_id($id);
		//var_dump($data);

		$this->load->view('admin/v_template',$data);
		}
		public function proses_edit()
		{
			$judul = $this->input->post('judul');
			$isi = $this->input->post('isi');
			$penulis = $this->input->post('penulis');

			$id=$this->input->post('id_pengumuman');

			$objek = array(
				'judul' => $judul,
				'isi' => $isi,
				'penulis' => $penulis
			);
			if ($this->pengumuman_models->update($id,$objek)) {
				//echo 'Berhasil';
				$this->session->set_flashdata('info','Data Berhasil Di Update!');
				redirect('admin/pengumuman');
			}else{
				//echo 'Gagal';
				$this->session->set_flashdata('info','Data Gagal Di Update !');
				redirect('admin/pengumuman');
			}

			//var_dump($objek);

		}



		}


?>