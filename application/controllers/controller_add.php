<?php

/** class of employee controller **/

class Controller_Add extends Controller
{

	function __construct()
	{
		$this->view = new View();
	}

	/**
	 * method for view add employees
	 */

	function action_index()
	{

		$data = $this->postCURL('/create', '', 'GET');
		$this->view->generate('add_view.php', 'template_view.php', $data);
	}

	/**
	 * method for save employee
	 */

	function action_save()
	{
		if (isset($_POST['id']) && $_POST['id']>0){
			$data = $this->postCURL('/'.$_POST['id'].'/update', $_POST, 'POST');
		}
		else {
			$data = $this->postCURL('', $_POST, 'POST');
		}
		$data = json_decode($data, true);
		if (isset($data['post_result']) && ($data['post_result'] == 'error_add' || $data['post_result'] == 'error_edit')){
			$this->view->generate('add_view.php', 'template_view.php', $data);
		}
		else
			header('Location:/');
	}

	}
