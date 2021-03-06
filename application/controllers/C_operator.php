<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_operator extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->model('M_user');
      $this->load->model('M_pns');
      $this->load->model('M_pengumuman');
      $this->load->model('M_profil');
      $this->load->model('M_file');

      // session login
      if ($this->session->userdata('operator') != true) {
        $url = base_url('c_login');
        redirect($url);
      }
  }

  public function index()
	{
    $this->load->view('template/header-op');
    $this->load->view('dashboard');
    $this->load->view('template/footer');
	}

// permintaan file
public function permintaan_file()
{
  $data['kode_permintaan'] = $this->M_file->tampil_permintaan_op();

  $this->load->view('template/header-op');
  $this->load->view('operator/v_permintaan_file', $data);
  $this->load->view('template/footer');
}


public function permintaan_file_tambah()
{
  $this->load->view('template/header-op');
  $this->load->view('operator/v_permintaan_file_tambah');
  $this->load->view('template/footer');
}

public function permintaan_file_tambah_up()
{
  $nama_keterangan  = $this->input->post('nama_keterangan');
  $kondisi = $this->input->post('kondisi');

  $kode_tambah = array(
    'nama_keterangan' => $nama_keterangan,
    'kondisi' => $kondisi
  );

  $this->M_file->tambah_permintaan($kode_tambah);
  redirect('C_operator/permintaan_file');
}

public function permintaan_file_hapus($id_keterangan)
{
  $id_keterangan = array('id_keterangan' => $id_keterangan);
  $this->M_file->hapus_permintaan($id_keterangan);
  redirect('C_operator/permintaan_file');
}

public function permintaan_file_edit($id_keterangan)
{
  $kode_permintaan= array('id_keterangan' => $id_keterangan);
  $data['kode_permintaan'] = $this->M_file->cari_data_permitaan($kode_permintaan);

  $this->load->view('template/header-op');
  $this->load->view('operator/v_permintaan_file_edit', $data);
  $this->load->view('template/footer');
}

public function permintaan_file_edit_up()
{
  $id_keterangan = $this->input->post('id_keterangan');
  $nama_keterangan = $this->input->post('nama_keterangan');
  $kondisi = $this->input->post('kondisi');
  $kode_keterangan = array('id_keterangan' => $id_keterangan);

  $data_permintaan = array(
    'id_keterangan' => $id_keterangan,
    'nama_keterangan' => $nama_keterangan,
    'kondisi' => $kondisi
  );

  $this->M_file->edit_permintaan($data_permintaan, $kode_keterangan);
  redirect('C_operator/permintaan_file');
}

// pengumuman
public function pengumuman()
{
  $data['kode_pengumuman'] = $this->M_pengumuman->tampil_pengumuman();

  $this->load->view('template/header-op');
  $this->load->view('operator/v_pengumuman', $data);
  $this->load->view('template/footer');
}

public function pengumuman_tambah()
{
  $this->load->view('template/header-op');
  $this->load->view('operator/v_pengumuman_tambah');
  $this->load->view('template/footer');
}

public function pengumuman_tambah_up()
{
  $penulis = $this->input->post('penulis');
  $isi_pengumuman = $this->input->post('isi_pengumuman');
  $kondisi = $this->input->post('kondisi');
  $tgl_upload = date('d-m-Y  H:i' );

  $tambah_pengumuman = array(
    'isi_pengumuman' => $isi_pengumuman,
    'tgl_upload' => $tgl_upload,
    'penulis' => $penulis,
    'kondisi' => $kondisi,
  );

  $this->M_pengumuman->tambah_pengumuman($tambah_pengumuman);
  redirect('C_operator/pengumuman');
}

public function hapus_pengumuman($id_pengumuman)
{
  $id_pengumuman = array('id_pengumuman' => $id_pengumuman);
  $this->M_pengumuman->hapus_pengumuman($id_pengumuman);
  redirect('C_operator/pengumuman');
}

public function edit_pengumuman($id_pengumuman)
{
    $kode_pengumuman = array('id_pengumuman' => $id_pengumuman);
    $data['kode_pengumuman'] = $this->M_pengumuman->cari_data_pengumuman($kode_pengumuman);

    $this->load->view('template/header-op');
    $this->load->view('operator/v_pengumuman_edit',$data);
    $this->load->view('template/footer');
}

public function pengumuman_edit_up()
{
  $id_pengumuman = $this->input->post('id_pengumuman');
  $isi_pengumuman = $this->input->post('isi_pengumuman');
  $penulis = $this->input->post('penulis');
  $kondisi = $this->input->post('kondisi');

  $kode_pengumuman = array('id_pengumuman' => $id_pengumuman);

  $data_pengumuman = array(
    'isi_pengumuman' => $isi_pengumuman,
    'penulis' => $penulis,
    'kondisi' => $kondisi
  );

  $this->M_pengumuman->edit_data($data_pengumuman, $kode_pengumuman);
  redirect('C_operator/pengumuman');

}

// profil user
public function profil_user()
{
  $ses_username = $this->session->userdata('ses_username');
  $data['kode_user'] = $this->M_profil->cari_data($ses_username);

  $this->load->view('template/header-op');
  $this->load->view('operator/v_profil_user',$data);
  $this->load->view('template/footer');
}


public function profil_password()
{
  $ses_username = $this->session->userdata('ses_username');
  $data['kode_user'] = $this->M_profil->cari_data($ses_username);

  $this->load->view('template/header-op');
  $this->load->view('operator/v_profil_pass',$data);
  $this->load->view('template/footer');
}

public function profil_pass_up()
{
  $id_user = $this->input->post('id_user');
  $password = $this->input->post('password');
  $password_konfirimasi = $this->input->post('password_konfirmasi');

  if ($password == $password_konfirimasi) {
    $pass_enk = md5($password);
    // echo $pass_enk;

    $data_pass = array(
      'password' => $pass_enk
    );

    echo $id_user;

    $this->M_profil->ganti_pass($data_pass, $id_user);
    $this->session->set_flashdata('pass_up', 'Password berhasil update');
    redirect('C_operator/profil_user');

  }

}


// pns

	public function operator()
	{

    $this->load->view('template/header-op');
    $this->load->view('operator/index');
    $this->load->view('template/footer');
	}

//fungsi awal pns
    public function tampil_pns()
  	{
  		$data['kode_pegawai'] = $this->M_pns->tampil_data();

  		$this->load->view('template/header-op');
  		$this->load->view('operator/v_pns', $data);
  		$this->load->view('template/footer');
  	}

  	public function profil_pns($id_pegawai)
  	{
  		$kode_pegawai = array('id_pegawai' => $id_pegawai);
  		$data['kode_pegawai'] = $this->M_pns->lihat_pns($kode_pegawai);

  		$this->load->view('template/header-op');
  		$this->load->view('operator/v_pns_profil', $data);
  		$this->load->view('template/footer');
  	}

    public function berkas_pns($id_pegawai)
    {
      // $kode_pegawai = array('id_pegawai' => $id_pegawai);
      $data['tampil_file'] = $this->M_pns->cari_file_pns($id_pegawai);

      $this->load->view('template/header-op');
      $this->load->view('operator/v_pns_berkas', $data);
      $this->load->view('template/footer');
    }

    public function hapus_berkas_pns($id_file)
    {
        $_id = $this->db->get_where('tb_file',['id_file' => $id_file])->row();
        $query = $this->db->delete('tb_file', ['id_file' => $id_file]);
        if ($query) {
          unlink('file_upload/'.$_id->nama_file);
        }
        // redirect('C_operator');
    }

    public function hapus_pns($id_pegawai)
  	{
  		$id_pegawai = array('id_pegawai' => $id_pegawai);
  		$this->M_pns->hapus_pns($id_pegawai);
  		redirect('C_operator/tampil_pns');
  	}

    public function tambah_pns()
    {
      $this->load->view('template/header-op');
      $this->load->view('operator/v_pns_tambah');
      $this->load->view('template/footer');
    }

    public function tambah_pns_up()
    {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $status = 'pns';
      $nama_pegawai = $this->input->post('nama_pegawai');
      $tempat_lahir = $this->input->post('tempat_lahir');
      $tgl_lahir = $this->input->post('tgl_lahir');
      $jk = $this->input->post('jk');
      $agama = $this->input->post('agama');
      $pangkat = $this->input->post('pangkat');
      $jabatan = $this->input->post('jabatan');
      $masa_kerja = $this->input->post('masa_kerja');
      $gaji_pokok = $this->input->post('gaji_pokok');
      $nama_istri = $this->input->post('nama_istri');
      $anak_1 = $this->input->post('anak_1');
      $anak_2 = $this->input->post('anak_2');
      $anak_3 = $this->input->post('anak_3');
      $anak_4 = $this->input->post('anak_4');
      $anak_5 = $this->input->post('anak_5');
      $nip = $this->input->post('nip');
      $unit_kerja = $this->input->post('unit_kerja');
      $gaji_pokok_lama = $this->input->post('gaji_pokok_lama');
      $gaji_pokok_baru = $this->input->post('gaji_pokok_baru');
      $mulai_tgl = $this->input->post('mulai_tgl');

      $tambah_pns = array(
        'nama_pegawai' => $nama_pegawai,
        'tempat_lahir' => $tempat_lahir,
        'tgl_lahir' => $tgl_lahir,
        'jk' => $jk,
        'agama' => $agama,
        'pangkat' => $pangkat,
        'jabatan' => $jabatan,
        'masa_kerja' => $masa_kerja,
        'gaji_pokok' => $gaji_pokok,
        'nama_istri' => $nama_istri,
        'anak_1' => $anak_1,
        'anak_2' => $anak_2,
        'anak_3' => $anak_3,
        'anak_4' => $anak_4,
        'anak_5' => $anak_5,
        'nip' => $nip,
        'unit_kerja' => $unit_kerja,
        'gaji_pokok_lama' => $gaji_pokok_lama,
        'gaji_pokok_baru' =>$gaji_pokok_baru,
        'mulai_tgl' => $mulai_tgl,

        'username'=>$username,
        'password'=>md5($password),
        'status'=>$status
      );

      $this->M_pns->tambah_pns_up($tambah_pns);
      redirect('C_operator/tampil_pns');
    }


    public function pns_edit($id_pegawai)
    {
        $kode_pegawai = array('id_pegawai' => $id_pegawai);
        $data['kode_pegawai'] = $this->M_pns->cari_data_pns($kode_pegawai);

        $this->load->view('template/header-op');
        $this->load->view('operator/v_pns_edit',$data);
        $this->load->view('template/footer');
    }

    public function pns_edit_up()
    {
      $id_pegawai = $this->input->post('id_pegawai');
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $nama_pegawai = $this->input->post('nama_pegawai');
      $tempat_lahir = $this->input->post('tempat_lahir');
      $tgl_lahir = $this->input->post('tgl_lahir');
      $jk = $this->input->post('jk');
      $agama = $this->input->post('agama');
      $pangkat = $this->input->post('pangkat');
      $jabatan = $this->input->post('jabatan');
      $masa_kerja = $this->input->post('masa_kerja');
      $gaji_pokok = $this->input->post('gaji_pokok');
      $nama_istri = $this->input->post('nama_istri');
      $anak_1 = $this->input->post('anak_1');
      $anak_2 = $this->input->post('anak_2');
      $anak_3 = $this->input->post('anak_3');
      $anak_4 = $this->input->post('anak_4');
      $anak_5 = $this->input->post('anak_5');
      $nip = $this->input->post('nip');
      $unit_kerja = $this->input->post('unit_kerja');
      $gaji_pokok_lama = $this->input->post('gaji_pokok_lama');
      $gaji_pokok_baru = $this->input->post('gaji_pokok_baru');
      $mulai_tgl = $this->input->post('mulai_tgl');
      $kode_pegawai = array('id_pegawai' => $id_pegawai);

      $data_pegawai = array(
        'nama_pegawai' => $nama_pegawai,
        'tempat_lahir' => $tempat_lahir,
        'tgl_lahir' => $tgl_lahir,
        'jk' => $jk,
        'agama' => $agama,
        'pangkat' => $pangkat,
        'jabatan' => $jabatan,
        'masa_kerja' => $masa_kerja,
        'gaji_pokok' => $gaji_pokok,
        'nama_istri' => $nama_istri,
        'anak_1' => $anak_1,
        'anak_2' => $anak_2,
        'anak_3' => $anak_3,
        'anak_4' => $anak_4,
        'anak_5' => $anak_5,
        'nip' => $nip,
        'unit_kerja' => $unit_kerja,
        'gaji_pokok_lama' => $gaji_pokok_lama,
        'gaji_pokok_baru' =>$gaji_pokok_baru,
        'mulai_tgl' => $mulai_tgl,
      );

      $this->M_pns->edit_data($data_pegawai, $kode_pegawai);
      redirect('C_operator/tampil_pns');
    }

//fungsi akhir pns


  	public function edit_up()
  	{
  		$id_pegawai = $this->input->post('id_pegawai');
  		$username = $this->input->post('username');
  		$password = $this->input->post('password');
  		$nama_pegawai = $this->input->post('nama_pegawai');
  		$tempat_lahir = $this->input->post('tempat_lahir');
  		$tgl_lahir = $this->input->post('tgl_lahir');
  		$jk = $this->input->post('jk');
  		$agama = $this->input->post('agama');
  		$pangkat = $this->input->post('pangkat');
  		$jabatan = $this->input->post('jabatan');
  		$masa_kerja = $this->input->post('masa_kerja');
  		$gaji_pokok = $this->input->post('gaji_pokok');
  		$nama_istri = $this->input->post('nama_istri');
  		$anak_1 = $this->input->post('anak_1');
  		$anak_2 = $this->input->post('anak_2');
  		$anak_3 = $this->input->post('anak_3');
  		$anak_4 = $this->input->post('anak_4');
  		$anak_5 = $this->input->post('anak_5');
  		$nip = $this->input->post('nip');
  		$unit_kerja = $this->input->post('unit_kerja');
  		$gaji_pokok_lama = $this->input->post('gaji_pokok_lama');
  		$gaji_pokok_baru = $this->input->post('gaji_pokok_baru');
  		$mulai_tgl = $this->input->post('mulai_tgl');
  		$kode_pegawai = array('id_pegawai' => $id_pegawai);

  		$data_pegawai = array(
  			'nama_pegawai' => $nama_pegawai,
  			'tempat_lahir' => $tempat_lahir,
  			'tgl_lahir' => $tgl_lahir,
  			'jk' => $jk,
  			'agama' => $agama,
  			'pangkat' => $pangkat,
  			'jabatan' => $jabatan,
  			'masa_kerja' => $masa_kerja,
  			'gaji_pokok' => $gaji_pokok,
  			'nama_istri' => $nama_istri,
  			'anak_1' => $anak_1,
  			'anak_2' => $anak_2,
  			'anak_3' => $anak_3,
  			'anak_4' => $anak_4,
  			'anak_5' => $anak_5,
  			'nip' => $nip,
  			'unit_kerja' => $unit_kerja,
  			'gaji_pokok_lama' => $gaji_pokok_lama,
  			'gaji_pokok_baru' =>$gaji_pokok_baru,
  			'mulai_tgl' => $mulai_tgl,
  		);

  		$this->M_pegawai->edit_data($data_pegawai, $kode_pegawai);
  		redirect('C_pegawai');
  	}

  	public function hapus($id_pegawai)
  	{
  		$kode_pegawai = array('id_pegawai' => $id_pegawai);
  		$this->M_pegawai->hapus_data($kode_pegawai);
  		redirect('C_pegawai');
  	}


//validasi naik gaji
    public function validasi_naik_gaji()
    {
      $data['tampil'] = $this->M_file->validasi_naik_gaji()->result();

      $this->load->view('template/header-op');
      $this->load->view('operator/v_validasi_naik_gaji', $data);
      $this->load->view('template/footer');
    }

    public function validasi_naik_gaji_lihat($id_file)
    {
        $kode_file = array('id_file' => $id_file);
        $data['kode_file'] = $this->M_file->cari_file_view($kode_file);

        $this->load->view('template/header-op');
        $this->load->view('operator/v_validasi_naik_gaji_lihat', $data);
        $this->load->view('template/footer');
    }

    public function validasi_naik_gaji_tolak($id_file)
    {
      $kode_file = array('id_file' => $id_file);
      $validasi_tolak = array(
        'status_validasi' => 'tolak',
      );

     $this->M_file->validasi_naik_gaji_tolak($validasi_tolak, $kode_file);
     redirect('C_operator/validasi_naik_gaji');
    }

    public function validasi_naik_gaji_terima($id_file)
    {
      $kode_file = array('id_file' => $id_file);
      $validasi_tolak = array(
        'status_validasi' => 'terima',
      );

     $this->M_file->validasi_naik_gaji_terima($validasi_tolak, $kode_file);
     redirect('C_operator/validasi_naik_gaji');
    }

//validasi naik pangkat
    public function validasi_naik_pangkat()
    {
      $data['tampil'] = $this->M_file->validasi_naik_pangkat()->result();

      $this->load->view('template/header-op');
      $this->load->view('operator/v_validasi_naik_pangkat', $data);
      $this->load->view('template/footer');
    }

    public function validasi_naik_pangkat_lihat($id_file)
    {
        $kode_file = array('id_file' => $id_file);
        $data['kode_file'] = $this->M_file->cari_file_view($kode_file);

        $this->load->view('template/header-op');
        $this->load->view('operator/v_validasi_naik_pangkat_lihat', $data);
        $this->load->view('template/footer');
    }

    public function validasi_naik_pangkat_tolak($id_file)
    {
      $kode_file = array('id_file' => $id_file);
      $validasi_tolak = array(
        'status_validasi' => 'tolak',
      );

     $this->M_file->validasi_naik_gaji_tolak($validasi_tolak, $kode_file);
     redirect('C_operator/validasi_naik_pangkat');
    }

    public function validasi_naik_pangkat_terima($id_file)
    {
      $kode_file = array('id_file' => $id_file);
      $validasi_tolak = array(
        'status_validasi' => 'terima',
      );

     $this->M_file->validasi_naik_gaji_terima($validasi_tolak, $kode_file);
     redirect('C_operator/validasi_naik_pangkat');
    }

//validasi tunjangan
    public function validasi_tunjangan()
    {
      $data['tampil'] = $this->M_file->validasi_tunjangan()->result();

      $this->load->view('template/header-op');
      $this->load->view('operator/v_validasi_tunjangan', $data);
      $this->load->view('template/footer');
    }

    public function validasi_tunjangan_lihat($id_file)
    {
        $kode_file = array('id_file' => $id_file);
        $data['kode_file'] = $this->M_file->cari_file_view($kode_file);

        $this->load->view('template/header-op');
        $this->load->view('operator/v_validasi_tunjangan_lihat', $data);
        $this->load->view('template/footer');
    }

    public function validasi_tunjangan_tolak($id_file)
    {
      $kode_file = array('id_file' => $id_file);
      $validasi_tolak = array(
        'status_validasi' => 'tolak',
      );

     $this->M_file->validasi_tunjangan_tolak($validasi_tolak, $kode_file);
     redirect('C_operator/validasi_tunjangan');
    }

    public function validasi_tunjangan_terima($id_file)
    {
      $kode_file = array('id_file' => $id_file);
      $validasi_tolak = array(
        'status_validasi' => 'terima',
      );

     $this->M_file->validasi_naik_gaji_terima($validasi_tolak, $kode_file);
     redirect('C_operator/validasi_tunjangan');
    }

}
