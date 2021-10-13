<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info_model extends CI_Model
{

	public function save_info()
	{
		$config['upload_path']          = './assets/image/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 720;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('image'))
		{
			$error = array('error' => $this->upload->display_errors());

			// echo "<pre>";
			// print_r($error);
			// exit;
		} else
		{
			$image_info = $this->upload->data();
		}

		$data = [
			'name' => $this->input->post('name', true),
			'phone' => $this->input->post('phone', true),
			'email' => $this->input->post('email', true),
			'address' => $this->input->post('address', true),
			'image' => $image_info['file_name']
		];

		// return $data;

		$save = $this->db->insert('add_info', $data);

		if ($save) {
			return ['status' => 'success', 'message' => 'Successfully data inserted.', 'data' => []];
		} else {
			return ['status' => 'error', 'message' => 'Fail to save data.', 'data' => []];
		}
	}

	public function get_all()
	{
		$data = $this->db->get("add_info")->result();

		return $data;

		// echo "<pre>";
		// print_r($data);
		// exit;
	}

	public function edit_info($id)
	{
		$this->db->select('*');
		$this->db->from('add_info');
		$this->db->where('id', $id);
		$edit_result = $this->db->get();
		$result = $edit_result->row();          //get one element from the database using row();

		return $result;
	}

	public function update_info()
	{
		//Update data form database
		$info_id = $this->input->post('id', true);

		// echo "<pre>";
		// print_r($_FILES);
		// exit;

		// if image update
		if($_FILES['image']['size']){
			$config['upload_path']          = './assets/image/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 720;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('image'))
			{
				$error = array('error' => $this->upload->display_errors());

				echo "<pre>";
				print_r($error);
				exit;
			}
			else
			{
				$image_info = $this->upload->data();
			}
		}

		// echo "<pre>";
		// print_r($info_id);
		// exit;

		$data = [
			// $info_id = $this->input->post('id', true),
			'name' => $this->input->post('name', true),
			'phone' => $this->input->post('phone', true),
			'email' => $this->input->post('email', true),
			'address' => $this->input->post('address', true)
		];

		if($_FILES['image']['size']){
			$data['image'] = $image_info['file_name'];
		}

		// echo "<pre>";
		// print_r($data);
		// exit;

		$this->db->where('id', $info_id);
		$update = $this->db->update('add_info', $data);

		if ($update) {
			return ['status' => 'success', 'message' => 'Successfully updated', 'data' => []];
		} else {
			return ['status' => 'error', 'message' => 'Fail to update', 'data' => []];
		}
	}

	public function delete_info($id)
	{
		$this->db->where('id', $id);
		$delete = $this->db->delete('add_info');

		if ($delete) {
			return ['status' => 'success', 'message' => 'Successfully delete', 'data' => []];
		} else {
			return ['status' => 'error', 'message' => 'Fail to delete', 'data' => []];
		}

		// echo "<pre>";
		// print_r($delete);
		// exit;
	}
}
