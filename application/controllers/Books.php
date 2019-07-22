<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {

	// private $data;
	public function __construct()
	{
		parent::__construct();
	    $this->load->helper('form');
    	$this->load->helper('url');
	}

	public function index()
	{
		$this->load->model('booksModel');
		$data['datas'] = $this->booksModel->getBooks();

		// var_dump($datas);
		// die;
		$this->load->view('books', $data);	
	}

	public function form($id=NULL)
	{	
		if (isset($id)) {

			// var_dump("hi");
			$this->load->model('booksModel');
			$values = $this->booksModel->getBooks();
			foreach ($values as $value) {
				if ($value->id == $id) {
					$val = [
						'id' => $value->id,
						'judul' => $value->judul
					];
				}
			}

			$data['data'] = $val;
			// $this->load->view('bookForm');
			$this->load->view('bookForm', $data);
		}else{	
			$this->load->view('bookForm');
		}
	}

	public function add()
	{
		$this->load->model('booksModel');
		$this->booksModel->addBooks();
		// $this->load->view('bookForm');

		return redirect('/books/index');
	}

	public function edit()
	{
		$this->load->model('booksModel');
		$this->booksModel->editBooks();

		return redirect('/books/index');
		// $this->load->view('bookForm');
		// echo "This is Edit ".$id;
	}

	public function delete($id)
	{
		// return redirect('books/index');
		$this->load->model('booksModel');
		$data['datas'] = $this->booksModel->deleteBooks($id);
		// $this->load->view('books', $data);
		return redirect('/books');
	}
}
