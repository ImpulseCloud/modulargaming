<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Controller for recovering the username or password.
 *
 * @package    MG User
 * @category   Controller
 * @author     Modular Gaming Team
 * @copyright  (c) 2012-2013 Modular Gaming Team
 * @license    BSD http://modulargaming.com/license
 */
class Controller_User_Forgot extends Abstract_Controller_User {

	/**
	 * Display the login page and handle login attempts.
	 */
	public function action_index()
	{
		if ($this->auth->logged_in())
		{
			$this->redirect(Route::get('user')->uri());
		}

		if ($this->request->method() == HTTP_Request::POST)
		{

		}

		$this->view = new View_User_Forgot;
	}

} // End User_Forgot