<?php
    echo $this->Html->charset();
    echo $this->Html->meta(array(
        'name' => 'viewport',
        'content' => 'width=device-width, initial-scale=1.0'
    ));
    echo $this->Html->meta(array(
        'http-equiv' => 'X-UA-Compatible',
        'content' => 'IE=Edge'
    ));
    echo $this->Html->meta('favicon.ico', '/favicon.ico', array('type' => 'icon'));
    echo $this->Html->css(array(
        'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        'style.css'
    ));
    echo $this->Html->script(array(
        'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'));
?>

<title><?php echo $title_for_layout; ?></title>
