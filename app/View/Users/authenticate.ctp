<?php echo $this->Html->css('login.css'); ?>

<div class="form">
	<ul class="tab-group">
		<li class="tab active"><a href="#login">Log In</a></li>
		<li class="tab"><a href="#signup">Sign Up</a></li>
	</ul>

	<div class="tab-content">
		<!-- LOG IN START -->
		<div id="login">
			<h1>Welcome Back</h1>

			<?php echo $this->Form->create('User', array('action' => 'login')); ?>
				<div class="field-wrap">
            		<?php echo $this->Form->input(
            			'username', 
            			array(
            				'type' =>'text', 
            				'label' => false, 
            				'placeholder' => 'Username'
            			)) 
            		?>
          		</div>
          
          		<div class="field-wrap">
            		<?php echo $this->Form->input(
            			'password', 
            			array(
            				'type' =>'password', 
            				'label' => false, 
            				'placeholder' => 'Password'
            			)) 
            		?>
          		</div>
          
          		<p class="forgot"><a href="#">Forgot Password?</a></p>
			<?php echo $this->Form->end(
				array(
					'label' => 'Log in',
					'class' => 'button button-block',
					'div' => false
				)); 
			?>
		</div>
		<!-- LOGIN END -->

		<!-- SIGN UP START -->
		<div id="signup">
			<h1>Sign up for an account</h1>

			<?php echo $this->Form->create('User', array('action' => 'signup')); ?>
				<div class="field-wrap">
            		<?php echo $this->Form->input(
            			'username', 
            			array(
            				'type' =>'text', 
            				'label' => false, 
            				'placeholder' => 'Username'
            			)) 
            		?>
          		</div>

          		<div class="field-wrap">
            		<?php echo $this->Form->input(
            			'email', 
            			array(
            				'type' =>'email', 
            				'label' => false, 
            				'placeholder' => 'Email Address'
            			)) 
            		?>
          		</div>
          
          		<div class="field-wrap">
            		<?php echo $this->Form->input(
            			'password', 
            			array(
            				'type' =>'text', 
            				'label' => false, 
            				'placeholder' => 'Set a Password'
            			)) 
            		?>
          		</div>

			<?php echo $this->Form->end(
				array(
					'label' => 'Sign Up',
					'class' => 'button button-block',
					'div' => false,
				)); 
			?>
		</div>
		<!-- SIGN UP END -->
	</div>
</div>

<?php echo $this->Html->script('login.js'); ?>