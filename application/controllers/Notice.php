<?
defined('BASEPATH') OR exit('No direct script access allowed');

  class Notice extends CI_Controller
  {

    public function __construct()
    {
      parent::__construct();
    }

    public function index()
    {
      $this->load->model('notice_model');
      $data['list'] = $this->notice_model->GetBoardList();
      $data['total'] = $this->notice_model->GetBoardTotal();
      
      $this->load->view('header');
      $this->load->view('board/notice_board', $data);
      $this->load->view('footer');
    }

  }

?>