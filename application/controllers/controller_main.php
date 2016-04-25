<?php

/** class of main controller **/

class Controller_Main extends Controller
{

	function __construct()
	{
		$this->view = new View();
	}

	/**
	 * method for generate main view
	 */

	function action_index()
	{
		if (isset($_POST['button']) && $_POST['button']) {

			/** click button **/
			switch ($_POST['button']) {
				case 'edit':
					$data = $this->postCURL('/'.$_POST['id'].'/edit', $_POST, 'GET');
					$data = json_decode($data, true);
					$this->view->generate('add_view.php', 'template_view.php', $data);
					die();
					break;
				case 'show':
					$data = $this->postCURL('/'.$_POST['id'], $_POST, 'GET');
					$data = json_decode($data, true);
					$this->view->generate('show_view.php', 'template_view.php', $data);
					die();
					break;
				case 'delete':
					$data = $this->postCURL('/'.$_POST['id'].'/delete', $_POST, 'GET');
					break;
			}
		}
		$data = array('data' => $this->postCURL('', '', 'GET'));
		$data['data'] = json_decode($data['data'], true);
		$this->view->generate('main_view.php', 'template_view.php', $data['data']);
	}

}