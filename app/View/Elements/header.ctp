<!-- MENU BAR START -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li>
                    <?php echo $this->Html->link(
                    	'メニュー', 
                    	'/'
                    ) ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- MENU BAR END -->

<script type="text/javascript">
    var url = window.location.pathname;

    // Will only work if string in href matches with location
    $('ul.nav a[href="' + url +'"]').parent().addClass('active');

</script>