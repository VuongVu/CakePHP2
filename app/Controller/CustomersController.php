<?php  

/**
 * User: vuongvu
 * Date: 2017/01/10
 * Time: 13:25
 */
class CustomersController extends AppController {
	
	public function index() {
		$this->set('title_for_layout', '顧客情報一覧');
		$customers = $this->Customer->find('all', array('order' => array('Customer.id ASC')));

		$this->set(array('customers' => $customers));
	}

	public function search() {
		
	}
}

?>