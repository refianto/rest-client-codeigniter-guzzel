<?php
/**
 * 
 */
use GuzzleHttp\Client;

class BooksModel extends CI_Model
{
	private $_client, $_data;
	public function __construct()
	{
		require 'vendor/autoload.php';

		$this->_client = new Client([
			'base_uri' => 'https://26d19814.ngrok.io/'
		]);
		$response = $this->_client->request('GET', 'buku');
		$this->_data = json_decode($response->getBody()->getContents())->data;
	}

	public function getBooks()
	{
		return $this->_data;
	}

	public function addBooks()
	{

		$response = $this->_client->request('POST', 'buku/add', [
			'json' => [
				'judul' => $this->input->post('judul', true)
			]
		]);

		// $data = json_decode($response->getBody()->getContents(), true);
		// return $data;
	}

	public function editBooks()
	{
		$data = $this->input->post('id');

		// var_dump($data);
		// die;
		$response = $this->_client->request('POST', 'buku/edit',[
			'json' => [
				'id' => $this->input->post('id', true),
				'judul' => $this->input->post('judul', true)
			]
		]);
	}

	public function deleteBooks($id)
	{
		$response = $this->_client->request('GET', 'buku/delete/'.$id);
		// $d = $response->getBody()->getContents();
		return $this->_data;
	}
}

?>