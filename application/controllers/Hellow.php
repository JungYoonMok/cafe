<?
defined('BASEPATH') OR exit('No direct script access allowed');

  class Hellow extends CI_Controller
  {

    public function __construct()
    {
      parent::__construct();
    }

    public function index()
    {
      $this->load->model('board_model');
      $data['list'] = $this->board_model->GetBoardList();
      $data['total'] = $this->board_model->GetBoardTotal();
      
      $this->load->view('header');
      $this->load->view('board/hellow_board', $data);
      $this->load->view('footer');
    }

  }

?>