<div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#nav_colapsed" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="http://ombrevent.com"><img src="./dist/img/ombrevent-logo-complet-white.png" alt="Logo Ombrevent" class="img-brand pull-right"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="nav_colapsed">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://ombrevent.com/">Accueil</a></li>
                <li><a href="http://ombrevent.com/ombrevent/philosophie">Ombrevent</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jeux<span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li><a href="http://ombrevent.com/guild-wars/info">Guild Wars</a></li>
                        <li><a href="http://ombrevent.com/guild-wars-2/info">Guild Wars 2</a></li>
                    </ul>
                </li>
                <li class="disabled"><a href="#ancre">Tutoriel</a></li>
                <li><a href="http://ombrevent.com/ombrevent/chroniques">Chronique</a></li>
                <li><a href="http://board.ombrevent.com"><i class="fa fa-external-link" aria-hidden="true"></i> Forum</a></li>
                <?php if(isset($_SESSION["id"])){echo '<li><a href="http://board.ombrevent.com/ucp.php?mode=logout&sid='.$session_phpbb_id.'" onclick="logout()"><i class="fa fa-sign-out" aria-hidden="true"></i> Déconnexion</a></li>';}
                        else{echo'<li><a href="http://board.ombrevent.com/ucp.php?mode=login"><i class="fa fa-sign-in" aria-hidden="true"></i> Connexion</a></li>';}
                ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>