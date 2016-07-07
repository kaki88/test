<nav class="navbar navbar-light bg-faded">
    <a class="navbar-brand" href="#">LOGO</a>
    <ul class="nav navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" <?php echo $this->Html->link('Accueil','/')?> </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">News</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Tarifs</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" <?php echo $this->Html->link('Nous contacter','/emails/add')?> </a>
        </li>
    </ul>
    <!--<form class="form-inline pull-xs-right">-->
        <!--<input class="form-control" type="text" placeholder="Search">-->
        <!--<button class="btn btn-success-outline" type="submit">Search</button>-->
    <!--</form>-->
</nav>
