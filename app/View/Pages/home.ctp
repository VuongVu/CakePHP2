<div class="container">
	<div class="row">
		<?php 
			echo $this->Html->link(
				'ログイン',
				array(
					'controller' => 'users',
					'action' => 'authenticate',
				),
				array('class' => 'btn btn-primary col-sm-offset-4 col-sm-4')
			)
		?>
		<?php  
			echo $this->Html->link(
				'顧客情報一覧画面',
				array(
					'controller' => 'customers',
					'action' => 'index'
				),
				array(
					'class' => 'btn btn-primary col-sm-offset-4 col-sm-4',
					'style' => 'margin-top: 10px'
				)
			)
		?>
	</div>
</div>