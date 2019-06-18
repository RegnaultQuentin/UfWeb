<?php
include ('info.php');


if(isset($_POST['themail']))
{
  $name = $_POST['nom'];
  $email = $_POST['email']; 
  $subject = $_POST['sujet'];
  $message = $_POST['message'];
  $mailuser = $bdd->prepare("INSERT INTO message (nom, email, sujet, message) VALUES (?, ?, ?, ?)");
  $mailuser->execute(array($name, $email, $subject, $message));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Regnault Quentin</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body data-spy="scroll" data-offset="64" data-target="#section-topbar">

  <div id="section-topbar">
    <div id="topbar-inner">
      <div class="container">
        <div class="row">
          <div class="dropdown">
            <ul id="nav" class="nav">
              <li class="menu-item"><a class="smothscroll" href="#about" title="About"><i class="fa fa-user"></i></a></li>
              <li class="menu-item"><a class="smothscroll" href="#resume" title="Resume"><i class="fa fa-file-text-o"></i></a></li>
              <li class="menu-item"><a class="smothscroll" href="#work" title="Works"><i class="fa fa-briefcase"></i></a></li>
              <li class="menu-item"><a class="smothscroll" href="#contact" title="Contact"><i class="fa fa-envelope"></i></a></li>
            </ul>
            <!--/ uL#nav -->
          </div>
          <!-- /.dropdown -->

          <div class="clear"></div>
        </div>
        <!--/.row -->
      </div>
      <!--/.container -->

      <div class="clear"></div>
    </div>
    <!--/ #topbar-inner -->
  </div>
  <!--/ #section-topbar -->

  <div id="headerwrap">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-12">
          <h1>Quentin Regnault</h1>
          <h3>Etudiant en Informatique | Joueur esport semi-pro</h3>
        </div>
        <!--/.col-lg-12 -->
      </div>
      <!--/.row -->
    </div>
    <!--/.container -->
  </div>
  <!--/.#headerwrap -->


  <section id="about" name="about">
    <div id="intro">
      <div class="container">
        <div class="row">

          <div class="col-lg-2 col-lg-offset-1">
            <h5>A propos de moi.</h5>
          </div>
          <div class="col-lg-6">
              <?php
                $requete_description = $bdd->query('SELECT description FROM moi'); 
                $data_description = $requete_description->fetchall();
                foreach($data_description as $description):
              ?>
              <p><?=$description['description']?></p>
              <?php endforeach ?>
          </div>

        </div>
        <!--/.row -->
      </div>
      <!--/.container -->
    </div>
    <!--/ #intro -->
  </section>


  <section id="resume" name="resume">
    <!--EDUCATION DESCRIPTION -->
    <div class="container desc">
      <div class="row">

        <div class="col-lg-2 col-lg-offset-1">
          <h5>Parcours scolaire</h5>
          <?php 
          $requete_etudes = $bdd->query('SELECT * FROM etudes ORDER BY id DESC');
          $requete_etudes = $requete_etudes->fetchAll();
        
          ?>
        </div>

      </div>
      <!--/.row -->
      <div style='text-align:center'; class="row">
      <?php foreach($requete_etudes as $etude): ?>
            <div class="col-lg-6">
              <p>
                <t><?= $etude['niveau'] ?></t><br/><?=$etude['lieux']?><br/>
                <i></i>
              </p>
            </div>
        <div class="col-lg-3">
          <p>
            <sm><?=$etude['obtention'] ?></sm><br/>
            <imp>
              <sm><?=$etude['duree'] ?></sm>
            </imp>
          </p>
        </div>

        <?php endforeach ?>
      </div>
      <hr>
    </div>
    <!--/.container -->



  <!--WORK DESCRIPTION -->
  <div class="container desc">
    <div class="row">

      <div class="col-lg-1 ">
        <h5>Emploi</h5>
        <?php 
          $requete_travaille = $bdd->query('SELECT * FROM emploi');
          $requete_travaille = $requete_travaille->fetchAll();
        
          ?>
      </div>
    </div>
    <div class="row">
    <?php foreach($requete_travaille as $travail): ?>
      <div class="col-lg-6">
        <p>
          <t><?=$travail['nom']?></t><br/><?=$travail['entreprise']?><br/>
        </p>
        <p>
          <more><?=$travail['description']?></more>
        </p>
      </div>
      <!-- <div class="col-lg-3">
        <p>
          <sm><?=$travail['date']?></sm>
        </p>
      </div> -->
      <?php endforeach ?>
    </div>
    <!--/.row -->
    <br>
    <hr>
  </div>
  <!--/.container -->
  </section>

  <!--SKILLS DESCRIPTION -->
  <section id="work" name="work">
  <div id="skillswrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-2">
          <h5>Talents</h5>
        </div>
        <?php
        $requete_competences = $bdd->query('SELECT * FROM competences');
        $requete_competences = $requete_competences->fetchAll();
        foreach($requete_competences as $competence):
        ?>
            <div class="col-lg-3 centered">
              <canvas class="levelcanvas" height="130" width="130" level="<?=$competence['valeur'] ?>"></canvas>
              <p><?=$competence['competences'] ?></p>
              <br>
            </div>
          <?php endforeach ?>
      </div>
      <!--/.row -->
      <br>
    </div>
    <!--/.container -->
  </div>
  <!--/ #skillswrap -->
  </section>

  <section id="contact" name="contact">
    <!--FOOTER DESCRIPTION -->
    <div id="footwrap">
      <div class="container">
        <div class="row">

          <div class="col-lg-2">
            <h5>Contact</h5>
          </div>
          <div class="col-lg-6">
            <p>
            Formulaire de contact
            </p>
            <form class="contact-form php-mail-form" role="form" action="" method="POST">

              <div class="form-group">
                <label for="contact-name">Votre Nom</label>
                <input type="name" name="nom" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="contact-email">Votre Email</label>
                <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="contact-subject">Sujet</label>
                <input type="text" name="sujet" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <label for="contact-message">Votre message</label>
                <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>

              <div class="loading"></div>
              <div class="error-message"></div>
              <div class="sent-message">Votre message c'est envoyé, merci.</div>

              <div class="form-send">
                <button type="submit" class="btn btn-large" name='themail'>Envoyer</button>
              </div>

            </form>

          </div>
        </div>
        <!--/.row -->
      </div>
      <!--/.container -->
    </div>
    <!--/ #footer -->
  </section>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/chart/chart.js"></script>
  <script src="lib/easing/easing.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>

