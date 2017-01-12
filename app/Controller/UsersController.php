<?php

/**
 * User: vuongvu
 * Date: 2017/01/10
 * Time: 13:23
 */
class UsersController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter();
		// $this->Auth->allow('signup', 'logout');
	}

	public function index() {
		$this->set('title_for_layout', 'User Information');
	}

    public function authenticate() {
        $this->set('title_for_layout', 'Login/Sign Up Page');
    }

    public function login() {
    	if ($this->request->is('post')) {
        	$username = $this->request->data['User']['username'];
        	$password = $this->request->data['User']['password'];

        	echo $this->User->username . ' ' . $this->User->password;

        	if (!$username) {
        		throw new NotFoundException(__('A username is required.'));
        	}

        	if (!$password) {
        		throw new NotFoundException(__('A password is required.'));
        	}

        	if ($username != $this->User->username) {
        		throw new NotFoundException(__('Invalid username! Please sign up an account.'));
        	} else if($password != $this->User->password) {
        		throw new NotFoundException(__('Invalid password!'));
        	} else {
        		$this->redirect(array(
					'controller' => 'users',
					'action' => 'index'
				));
        	}
        } else {
        	throw new MethodNotAllowedException(__('This method is not allowed!'));
        }
    }

    public function signup() {
    	$this->redirect(array(
			'controller' => 'users',
			'action' => 'index'
		));
    }
}