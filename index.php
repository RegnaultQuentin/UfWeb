<?php
include ('info.php');

$title = 'Quentin Regnault';
$requete_description = $pdo->prepare('SELECT * FROM moi');
$requete_description->excute();
//$requete_description = $bdd->query('SELECT * FROM moi'); 
$datadescription = $requete_description->fetch();
$description = $datadescription['description'];



$html = '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>'.$title.'</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

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
          <h3>Etudiant en Informatique | contact@example.com</h3>
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
            <p>'.$description.'</p>
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
        </div>
        <div class="col-lg-6">
          <p>
            <t>Bachelor</t><br/> Ynov Bordeaux <br/>
            <i></i>
          </p>
        </div>
        <div class="col-lg-3">
          <p>
            <sm>Commencé en 2018</sm><br/>
            <imp>
              <sm>Toujours en cours</sm>
            </imp>
          </p>
        </div>

        <div class="col-lg-6 col-lg-offset-3">
          <p>
            <t>Bac professionnel</t><br/> Montmorot JURA<br/>
            <i>3 ans de formation</i>
          </p>
        </div>
        <div class="col-lg-3">
          <p>
            <sm>Obtenu en 2016</sm>
          </p>
        </div>
        <div class="col-lg-6 col-lg-offset-3">
          <p>
            <t>B.E.P agricole et travaux paysager</t><br/> Montmorot JURA<br/>
            <i>Durant ma formation de bac professionnel</i>
          </p>
        </div>
        <div class="col-lg-3">
          <p>
            <sm>Obtenu en 2015</sm>
          </p>
        </div>
      </div>
      <!--/.row -->
      <br>
      <hr>
    </div>
    <!--/.container -->
  </section>


  <!--WORK DESCRIPTION -->
  <div class="container desc">
    <div class="row">

      <div class="col-lg-2 col-lg-offset-1">
        <h5>Emploi</h5>
      </div>
      <div class="col-lg-6">
        <p>
          <t>Emploi saisonier</t><br/> Communauté de Salins Les Bains/Espace vert<br/>
        </p>
        <p>
          <more>Ce travail saisonnier avait pour but de me faire travailler entre mon année de premiere et terminal</more>
        </p>
      </div>
      <div class="col-lg-3">
        <p>
          <sm>Juillet 2015</sm>
        </p>
      </div>

      <div class="col-lg-6 col-lg-offset-3">
        <p>
          <t>Salarié Interim</t><br/>Ds smith(Marnoz)/Naturalim(Port Lesney)<br/>
        </p>
        <p>
          <more>Le travail en intérim demande une certaine autonomie, cela ma donc permis d\'être plus autonome et aussi d\'acquérir des compétences dans le monde du travail.</more>
        </p>
      </div>
      <div class="col-lg-3">
        <p>
          <sm>Novembre 2016/ Juillet 2018</sm>
        </p>
      </div>
    </div>
    <!--/.row -->
    <br>
    <hr>
  </div>
  <!--/.container -->

  <!--SKILLS DESCRIPTION -->
  <section id="work" name="work">
  <div id="skillswrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-lg-offset-1">
          <h5>Talents</h5>
        </div>
        <div class="col-lg-3 centered">
          <canvas id="javascript" height="130" width="130"></canvas>
          <p>Javascript</p>
          <br>
        </div>
        <div class="col-lg-3 centered">
          <canvas id="premiere_pro" height="130" width="130"></canvas>
          <p>Premiere pro</p>
          <br>
        </div>
        <div class="col-lg-3 centered">
          <canvas id="sql" height="130" width="130"></canvas>
          <p>SQL</p>
          <br>
        </div>

        <div class="col-lg-3 col-lg-offset-3 centered">
          <canvas id="html" height="130" width="130"></canvas>
          <p>HTML/CSS</p>
          <br>
        </div>
        <div class="col-lg-3 centered">
          <canvas id="python" height="130" width="130"></canvas>
          <p>Python</p>
          <br>
        </div>
        <div class="col-lg-3 centered">
          <canvas id="linux" height="130" width="130"></canvas>
          <p>Linux</p>
          <br>
        </div>

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
          <div class="col-lg-4">
            <p>
              <t>Email</t><br/> contact@example.com <br/>
            </p>
          </div>
          <div class="col-lg-6">
            <p>
              <sm>CONTACT FORM</sm>
            </p>
            <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

              <div class="form-group">
                <label for="contact-name">Votre Nom</label>
                <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="contact-email">Votre Email</label>
                <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="contact-subject">Sujet</label>
                <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <label for="contact-message">Votre message</label>
                <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>

              <div class="loading"></div>
              <div class="error-message"></div>
              <div class="sent-message">Votre message c\'est envoyé, merci.</div>

              <div class="form-send">
                <button type="submit" class="btn btn-large">Envoyer</button>
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
</html>';

echo $html;
?>


