<div class="main">
<div id="preheader" style="display:none">
    <?php print $site_name; ?>
</div>
<header>
    <div id="contenu-header">
        <div id="honest">
          <div>
                      <a rel="dofollow" href="<?php print base_path(); ?>">
                        <img src="<?php print $logo; ?>" alt="" />
                      </a>
            </div>
            <div id="spon">
                <?php print render($page['sponsors']) ;?>
            </div>
        </div>
        <div class="social-icons">
                <?php print render($page['social']) ;?>
        </div>
            <div id="navbarwrapper">
                <?php print render($page['navbar']);?>
            </div><!--navbarwrapper-->
    <!--slider page accueil-->
        <div id="slide">
            <a class="prev"></a>
            <a class="next"></a>
            <div class="slider">
                <div class="item">
                  <img class="illu" src="images/1.jpg"/>
                    <div class="infos">
                    <h3>Atelier de validation des outils d'intervention</h3>
                    <p>CRASC Stiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
Sed posuere consectetur est at lobortis. Maecenas faucibus mollis interdum. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>
          </div>
                </div>
                <div class="item">
                    <img class="illu" src="images/2.jpg"/>
                    <div class="infos">
                    <h3>Lancement des activités du programme LIANE</h3>
                    <p>Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
Sed posuere consectetur est at lobortis. Maecenas faucibus mollis interdum. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>
                    </div>
                </div>
        </div>
    </div>
</header>
<section id="content"><div class="ic"></div>
    <div class="container_12" id="homemsg">
            <?php print render($page['actu']);?>
    </div>
    <div class="container_12" id="principal">
    <div class="grid_8">
        <!--actualites de la crasc sud-->
        <div class="crasc">
              <?php print render($page['crasc-sud']);?>
        </div><!--crasc-->
        <div class="crasc">
            <h2 class="p6" id="crasc-nord">CRASC Nord</h2>
            <div class="wrap block-1">
                <!--6 dernieres actus-->
                <div class="actu">
                    <h3>Actualité</h3>
                    <img src="http://lorempixel.com/180/90/business" alt="" class="img-border">
                    <span class="date">03/06/2013</span>
                    <p>Nam liber tempor cum soluta no eleifend option congue nihil imperdiet doming iquod mazim placerat.</p>
                    <a rel="dofollow" href="#" class="button">En savoir plus</a>
                </div>
                 <div class="actu">
                    <h3>Actualité</h3>
                    <img src="http://lorempixel.com/180/90/sports" alt="" class="img-border">
                    <span class="date">03/06/2013</span>
                    <p>Nam liber tempor cum soluta no eleifend option congue nihil imperdiet doming iquod mazim placerat.</p>
                    <a rel="dofollow" href="#" class="button">En savoir plus</a>
                </div>
                 <div class="actu">
                    <h3>Actualité</h3>
                    <img src="http://lorempixel.com/180/90/nature" alt="" class="img-border">
                    <span class="date">03/06/2013</span>
                    <p>Nam liber tempor cum soluta no eleifend option congue nihil imperdiet doming iquod mazim placerat.</p>
                    <a rel="dofollow" href="#" class="button">En savoir plus</a>
                </div>
            </div>
        </div><!--crasc-->
        <div class="crasc">
            <h2 class="p6" id="crasc-ouest">CRASC Ouest</h2>
            <div class="wrap block-1">
                <!--6 dernieres actus-->
                <div class="actu">
                    <h3>Actualité</h3>
                    <img src="http://lorempixel.com/180/90/business" alt="" class="img-border">
                    <span class="date">03/06/2013</span>
                    <p>Nam liber tempor cum soluta no eleifend option congue nihil imperdiet doming iquod mazim placerat.</p>
                    <a rel="dofollow" href="#" class="button">En savoir plus</a>
                </div>
                 <div class="actu">
                    <h3>Actualité</h3>
                    <img src="http://lorempixel.com/180/90/sports" alt="" class="img-border">
                    <span class="date">03/06/2013</span>
                    <p>Nam liber tempor cum soluta no eleifend option congue nihil imperdiet doming iquod mazim placerat.</p>
                    <a rel="dofollow" href="#" class="button">En savoir plus</a>
                </div>
                 <div class="actu">
                    <h3>Actualité</h3>
                    <img src="http://lorempixel.com/180/90/nature" alt="" class="img-border">
                    <span class="date">03/06/2013</span>
                    <p>Nam liber tempor cum soluta no eleifend option congue nihil imperdiet doming iquod mazim placerat.</p>
                    <a rel="dofollow" href="#" class="button">En savoir plus</a>
                </div>
            </div>
        </div><!--crasc-->
        <div class="crasc">
            <h2 class="p6" id="crasc-est">CRASC Est</h2>
            <div class="wrap block-1">
                <!--6 dernieres actus-->
                <div class="actu">
                    <h3>Actualité</h3>
                    <img src="http://lorempixel.com/180/90/business" alt="" class="img-border">
                    <span class="date">03/06/2013</span>
                    <p>Nam liber tempor cum soluta no eleifend option congue nihil imperdiet doming iquod mazim placerat.</p>
                    <a rel="dofollow" href="#" class="button">En savoir plus</a>
                </div>
                 <div class="actu">
                    <h3>Actualité</h3>
                    <img src="http://lorempixel.com/180/90/sports" alt="" class="img-border">
                    <span class="date">03/06/2013</span>
                    <p>Nam liber tempor cum soluta no eleifend option congue nihil imperdiet doming iquod mazim placerat.</p>
                    <a rel="dofollow" href="#" class="button">En savoir plus</a>
                </div>
                 <div class="actu">
                    <h3>Actualité</h3>
                    <img src="http://lorempixel.com/180/90/nature" alt="" class="img-border">
                    <span class="date">03/06/2013</span>
                    <p>Nam liber tempor cum soluta no eleifend option congue nihil imperdiet doming iquod mazim placerat.</p>
                    <a rel="dofollow" href="#" class="button">En savoir plus</a>
                </div>
            </div>
        </div><!--crasc-->
<div class="crasc">
            <h2 class="p6" id="crasc-centre">CRASC Centre</h2>
            <div class="wrap block-1">
                <!--6 dernieres actus-->
                <div class="actu">
                    <h3>Actualité</h3>
                    <img src="http://lorempixel.com/180/90/business" alt="" class="img-border">
                    <span class="date">03/06/2013</span>
                    <p>Nam liber tempor cum soluta no eleifend option congue nihil imperdiet doming iquod mazim placerat.</p>
                    <a rel="dofollow" href="#" class="button">En savoir plus</a>
                </div>
                 <div class="actu">
                    <h3>Actualité</h3>
                    <img src="http://lorempixel.com/180/90/sports" alt="" class="img-border">
                    <span class="date">03/06/2013</span>
                    <p>Nam liber tempor cum soluta no eleifend option congue nihil imperdiet doming iquod mazim placerat.</p>
                    <a rel="dofollow" href="#" class="button">En savoir plus</a>
                </div>
                 <div class="actu">
                    <h3>Actualité</h3>
                    <img src="http://lorempixel.com/180/90/nature" alt="" class="img-border">
                    <span class="date">03/06/2013</span>
                    <p>Nam liber tempor cum soluta no eleifend option congue nihil imperdiet doming iquod mazim placerat.</p>
                    <a rel="dofollow" href="#" class="button">En savoir plus</a>
                </div>
            </div>
        </div><!--crasc-->
  </div><!--grid8-->
      <div class="grid_4" id="leright">

                    <h2 class="p3">Newsletter</h2>

            <!--ok maggots here goes the pecking order-->
<a rel="dofollow" href="#myModal" role="button" class="btn" data-toggle="modal">Cliquez ici pour vous abonner à la newsletter</a>
            <!--first annonces-->
            <h2 class="top-1 p3">Annonces & Opportunités</h2>
                <ul class="list-1" id="annonces-defilantes">
                    <li>
                        <h4><a rel="dofollow" href="#">Annonce 1</a></h4>
                        <p>
                            Vestibulum id ligula porta felis euismod semper. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam quis risus eget urna mollis ornare vel eu leo.
                        </p>
                        <span>10 juin 2013</span>
                    </li>
                    <li>
                        <h4><a rel="dofollow" href="#">Annonce 2</a></h4>
                        <p>
                            Vestibulum id ligula porta felis euismod semper. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam quis risus eget urna mollis ornare vel eu leo.
                        </p>
                        <span>10 juin 2013</span>
                    </li>
                    <li>
                        <h4><a rel="dofollow" href="#">Annonce 3</a></h4>
                        <p>
                            Vestibulum id ligula porta felis euismod semper. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam quis risus eget urna mollis ornare vel eu leo.
                        </p>
                        <span>10 juin 2013</span>
                    </li>
                </ul>
            <!--then the database-->
            <h2 class="p3">Base de données des OSC</h2>
                <a rel="dofollow" href="#">
                  <img id="bbdosc" src="images/bdd.jpg" height="200px" alt="cliquez ici pour consulter la base de données des OSC ivoiriennes"/>
                </a>
            <!--then an calendar-->
            <h2 class="p3">Agenda</h2>
<ul class="list-1" id="annonces-non-defilantes">
                    <li>
                        <h4><a rel="dofollow" href="#">Event 1</a></h4>
                        <span>10 juin 2013</span>

                        <p>
                            Vestibulum id ligula porta felis euismod semper. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam quis risus eget urna mollis ornare vel eu leo.
                        </p>
                    </li>
                    <li>
                        <h4><a rel="dofollow" href="#">Evenement 2</a></h4>
                        <span>10 juin 2013</span>

                        <p>
                            Vestibulum id ligula porta felis euismod semper. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam quis risus eget urna mollis ornare vel eu leo.
                        </p>
                    </li>
                    <li>
                        <h4><a rel="dofollow" href="#">Evenement 3</a></h4>
                        <span>10 juin 2013</span>

                        <p>
                            Vestibulum id ligula porta felis euismod semper. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam quis risus eget urna mollis ornare vel eu leo.
                        </p>
                    </li>
                </ul>
            <!--then some links-->
            <h2 class="p3">Liens utiles</h2>
            <div class="lists">
                <ul class="list-1">
                    <li><a rel="dofollow" href="#">Lien 1</a></li>
                    <li><a rel="dofollow" href="#">Lien 2</a></li>
                    <li><a rel="dofollow" href="#">Lien 3</a></li>
                </ul>
                <ul class="list-1 last">
                    <li><a rel="dofollow" href="#">Lien 1</a></li>
                    <li><a rel="dofollow" href="#">Lien 2</a></li>
                    <li><a rel="dofollow" href="#">Lien 3</a></li>
                </ul>
            </div>
            <h2 class="p3">Rapports d'activités</h2>
      </div>
      <!--summmon the connexion form.here. Terminate it on site launch-->
      <div class="clear"></div>
    </div>
</section>
</div>
    <footer class="container_12">
        <div class="grid_7" id="coordo">
            <div class="grid_12" id="ree">
                <img src="images/logo.gif" alt="">
                <img id="ue" src="images/Untitled1.png"/>
                <img id="ceraplogo" src="images/Untitled2.png"/>
                <img src="images/untitled.jpg"/><br/>
            </div>
            <p>© 2013 | Programme Leadership et Initiatives des Acteurs non Étatiques (LIANE)  |<a rel="dofollow" href="#myModal2" data-toggle="modal">Se connecter</a>
</p>
        </div>
        <div class="grid_5" id="ifrapport">
            <h3 class="p3" id="footsie">partenaires</h3>
            <ul id="potz">
                <li><a class="potnas" href="#"><img src="images/Logo_ARK.jpg"/></a></li>
                <li><a class="potnas" href="#"><img src="images/Logo_ASAPSU.jpg"/></a></li>
                <li><a class="potnas" href="#"><img src="images/Logo_COAB.jpg"/></a></li>
                <li><a class="potnas" href="#"><img src="images/Logo_COVABLCI.jpg"/></a></li>
            </ul>
        </div>
    </footer>
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Newsletter</h3>
  </div>
  <div class="modal-body">
<form class="form-horizontal">
  <div class="control-group">
    <label class="control-label" for="inputEmail">Nom et prénoms</label>
    <div class="controls">
      <input type="text" id="inputEmail" placeholder="Noms prenoms">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Email</label>
    <div class="controls">
      <input type="password" id="inputPassword" placeholder="Email">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn">S'abonner</button>
    </div>
  </div>
</form>  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Fermer cette fenêtre</button>
  </div>
</div>
<!--formulaire de connexion a l interface d admin-->
<div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Newsletter</h3>
  </div>
    <div class="modal-body">

<?php
  if(!user_is_logged_in() ){
    print drupal_render(drupal_get_form('user_login'));
  }else{
    print "You are already logged in!";
  }
?>

    </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Fermer cette fenêtre</button>
  </div>
</div>
