<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function login(){
		check_already_login();
		$this->load->view('login');
	}

	public function process(){
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			$this->load->model('UserModel');
			$query = $this->UserModel->login($post);
			if($query->num_rows()>0){
				$row = $query->row();
				if($row->foto==NULL){
					if($row->gender=="L"){
						$foto="0m.png";
					}else{
						$foto="0f.png";
					}
				}else{
					$foto=$row->foto;
				}
				$params = array(
					'posuserid' => $row->id,
					'poslevel' => $row->level,
					'posusername' => $row->username,
					'posnama' => $row->nama,
					'posgender' => $row->gender,
					'posemail' => $row->email,
					'posfoto' => $foto,
				);
				$this->session->set_userdata($params);
				redirect('dashboard');
				/* echo "<script>
					alert('Selamat, login berhasil');
					window.location='".site_url('dashboard')."';
				</script>"; */
			}else{
				echo "<script>
					alert('Maaf ada yang salah');
					window.location='".site_url('auth/login')."';
				</script>";
			}
		}else{
			echo "tidak dicek login-nya";
		}
	}

	public function logout(){
		$params=array('posuserid', 'poslevel', 'posusername', 'posnama', 'posemail', 'posfoto');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}
}
