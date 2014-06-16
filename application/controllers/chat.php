<?php if ( ! defined( 'BASEPATH')) exit('No direct script access allowed');

	class Chat extends CI_Controller {

		public function index() {
			$this->load->view('chat-view');
		}

		public function get_chats() {
			$dbconnect = $this->load->database();
			$this->load->model('Chat_model');
			echo json_encode($this->Chat_model->get_chat_after($_REQUEST["time"]));
		}

		public function insert_chat() {
			$dbconnect = $this->load->database();
			$this->load->model('Chat_model');
			$this->Chat_model->insert_message($_REQUEST["message"]);
		}

		public function time() {
			echo "[{\"time\":" + time() + "}]";
		}
	}
?>