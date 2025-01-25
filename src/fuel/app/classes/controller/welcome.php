<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.9-dev
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Welcome extends Controller
{

	/**
	 * Get onmousedown params
	 *
	 * @param array $shop
	 * @return array
	 * @author b_ngoclam
	 */
	public function get_onmousedown_params(array $shop): array
	{
		return [];
	}

	/**
	 * Make onmousedown params to string
	 *
	 * @param array $shop
	 * @return string
	 * @author b_ngoclam
	 */
	public function make_onmousedown_str(array $param): string
	{
		return '';
	}

	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		// Test Git
		Debug::dump(Config::get('db.active'));
		exit();

		return Response::forge(View::forge('welcome/index'));
	}


    /**
     *
     *
     * @param array $shop
     * @param int $number
     * @param string $test
     * @return mixed
     */
    public function action_hello(array $shop = [], int $number = 0, string $test = '')
	{
		return Response::forge(Presenter::forge('welcome/hello'));
	}




	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
