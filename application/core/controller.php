<?php

/** class of controller **/
class Controller {
	
	public $model;
	public $view;
	
	function __construct()
	{
		$this->view = new View();
	}
	
	/** default action **/
	function action_index()
	{
		// todo	
	}

	/**
	 * post CURL to other server
	 * @param $add_url - string after URL
	 * @param $data - POST data
	 * @param bool $post - is post
	 * @return mixed - answer
	 */
	function postCURL($add_url, $data, $request = 'POST')
	{
		if ($curl = curl_init())
		{
			curl_setopt($curl, CURLOPT_URL, POST_URL.$add_url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 30);
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $request);
			curl_setopt($curl, CURLOPT_POSTFIELDS, array('data' => json_encode($data)));
			$out = curl_exec($curl);

			curl_close($curl);


			return $out;
		}

	}


}
