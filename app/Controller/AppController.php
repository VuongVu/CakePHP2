<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $helpers = array('Html', 'Form', 'Js');
    public $components = array(
    	'DebugKit.Toolbar', 
    	'Session'
    	// 'Auth' => array(
    	// 	'loginRedirect' => array(
    	// 		'controller' => 'users',
    	// 		'action' => 'login'
    	// 	),
    	// 	'logoutRedirect' => array(
    	// 		'controller' => 'users',
    	// 		'action' => 'authenticate'
    	// 	)
    	// )
	);

    public function beforeFilter() {
        $this->layout = 'basePage';

        // Security::setHash('md5');
        // $this->set('logged_in', $this->isLogin());
        // $this->set('admin', $this->isAdmin());
        // $this->set('users_userid', $this->usersUserID());
        // $this->set('users_username', $this->usersUsername());
    }

  //   private function isLogin() {
  //   	$loggin = FALSE;
  //   	if ($this->Auth->user()) {
  //   		$loggin = TRUE;
  //   	}

  //   	return $loggin;
  //   }

  //   private function isAdmin() {
  //   	$admin = FALSE;
  //   	if ($this->Auth->user('role') == "admin") {
  //   		$admin = TRUE;
  //   	}

  //   	return $admin;
  //   }

  //   private function usersUserID() {
		// $users_userid = NULL;
	 //    if ($this->Auth->user()) {
	 //        $users_userid = $this->Auth->user("id");
	 //    }
    	
  //   	return $users_userid;
  //   }

  //   private function usersUsername() {
  //   	$users_username = NULL;
  //   	if ($this->Auth->user()) {
  //   		$users_userid = $this->Auth->user("username");
  //   	}

  //   	return $users_username;
  //   }
}
