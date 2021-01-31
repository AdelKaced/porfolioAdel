<?php include './contact.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Adel Kaced PortFolio</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
  <header>
    <a href="#" class="logo">PortFolio</a>
    <div class="toggle" onclick=toggleMenu();></div>
    <ul class="menu">
      <li onclick=toggleMenu() ><a href="#home">Acceuil</a></li>
      <li onclick=toggleMenu() ><a href="#presentation">Presentation</a></li>
      <li onclick=toggleMenu() ><a href="#competence">Competence</a></li>
      <li onclick=toggleMenu() ><a href="#projet">Projets</a></li>
      <li onclick=toggleMenu() ><a href="#recherche">Ma recherche </a></li>
      <li onclick=toggleMenu() ><a href="#contact">Contact</a></li>
    </ul>
  </header>
  <section class="banner" id="home">
    <div class="textBx">
      <h2><span>Adel Kaced</span></h2>
      <h3>Develloppeur web full stack</h3>
      <a href="https://drive.google.com/file/d/1UpZ4Ahy6s-nAXcbaP9e5IYFftT49GXWN/view?usp=sharing" target="_blank" class="btn">MON CV </a>
    </div>
  </section>
  <section id="presentation" class="about">
    <div class="heading">
      <h2 >Presentation</h2>
    </div>
    <div class="content ">
      <div class="contentBx w50">
        <h3>Develloppeur web full stack</h3>
        <p>
          Après 8 années dans le domaine de la logistique, j'ai décidé d'entamer un tournant dans ma carrière. Curieux
          des nouvelles technologies et attiré par l'aspect technique et créatif, je me suis naturellement dirigé vers
          le métier de développeur web.
        </p>
      </div>
      <div class="zoom">
      <div class="w50">
        <img src="./images/maPhoto.jpg" class="img">
      </div>
      </div>
  </section>
  <section id="competence" class="services">
    <div class="heading white">
      <h2>Compétences</h2>
      <p>Langages maitrisés</p>
    </div>
    <div class="content">
      <div class=serviceBx>
        <img class="htmlimg" src="./images/html5.jpeg">
        <img src="./images/css.jpeg">
        <h2>HTML & CSS</h2>
        <p>Très à l'aise en HTML et CSS je continue à progesser à chaque projet</p>
      </div>
      <div class=serviceBx>
        <img src="./images/react.png">
        <h2>React JS </h2>
        <p> La librarie phare de Javascript me permet de réaliser les sites interactives </p>
      </div>
      <div class=serviceBx>
        <img src="./images/node.png">
        <h2>Node JS </h2>
        <p> Grace au frameWork Express je configure les routes qui communiqueront avec la base de donnée  </p>
      </div>
      <div class=serviceBx>
        <img src="./images/sql.jpeg">
        <h2> SQL</h2>
        <p>SQL me permet de creer les requetes qui alimenteront la base de donnée</p>
      </div>
    </div>
  </section>
  <section  id="projet" class="work">
    <div class="heading">
      <h2>Projets</h2>
      <p>Mes réalisations</p>
    </div>
    <div class="content">
      <div class="workBx">
        <img src='./images/photoprojet.png' />
      </div>
      <div class="workBx">
        <img src='./images/photoprojet.png' />
      </div>
      <div class="workBx">
        <img src='./images/photoprojet.png' />
      </div>
      <div class="workBx">
        <img src='./images/photoprojet.png' />
      </div>
    </div>
    <div class="heading">
      <a href="#" class="btn">View More</a>
    </div>
  </section>

  <section id="recherche" class="testimonial">
    <div class="heading">
      <h2>Ma recherche</h2>
      <p>Recherche un stage en dévelleppoment web de préféences en React pour le front et Node pour le back </p>
    </div>
    <div class="content annonce">
      <div class=testimonialBx>
        <p>
         A la recherche d'un stage de fin d'étude je souhaite mettre à profit mes compétences friachement acquises et continuer mon evolution.<br/>
        Socieux du travail bien fait vous pouvez compter sur ma motivation pour mener à bien les différentes missions qui me seront confiées <br/>
        Disponible immédiatement mon stage s'éffectuera sur une durée de 6 mois. 
        </p>
        <h3>Adel Kaced <br><span>Web devellopeur </span></h3>
    </div>
  </section>


<?php echo $alert; ?>

  <section class="contact" id="contact">
    <div class="heading white">
      <h2>Contactez moi </h2>
      <p>N'hésitez pas à m'écrire si mon profil vous intéresse</p>
    </div>
    <div class="content">
      <div class="contactInfo">
        <h3>Contact Info </h3>
        <div class="contactInfoBx">
          <div class="box" >
            <div class="icon">
              <i class="fa fa-map-marker"></i>
            </div>
            <div class="text">
              <h3>Adress</h3>
              <p>95800 Cergy France </p>
            </div>
          </div>
          <div class="box" >
            <div class="icon">
              <i class="fa fa-phone"></i>
            </div>
            <div class="text">
              <h3>Phone</h3>
              <p>06 52 54 36 21</p>
            </div>
          </div>
          <div class="box" >
            <div class="icon">
              <i class="fa fa-envelope-o"></i>
            </div>
            <div class="text">
              <h3>Email</h3>
              <p> adel.kaced@gmail.com</p>
            </div>
          </div>
          <div class="box" >
            <div class="icon">
            <i class="fa fa-linkedin"></i>
            </div>
            <div class="text">
              <h3>Linkedin</h3>
              <p><a href="https://www.linkedin.com/in/adelkaced/" class="linkedin"> adelkaced</a></p>
            </div>
          </div>
          
        </div>
      </div>
        <div class="formBx">
          <form action="contact.php" method="post" >
            <h3>Message me</h3>
            <input type="text" name="name" placeholder="your name"/>
            <input type="email" name="email" placeholder="email"/>
            <textarea name="message" placeholder="your messsage"></textarea>
            <input type="submit" value="SEND" />
          </form>
        </div>
      </div>
  </section>
  <script type="text/javascript">
    window.addEventListener('scroll', function () {
      const header = document.querySelector('header');
      header.classList.toggle('sticky', window.scrollY > 0);
      console.log(window.scrollY)
    })   
    function toggleMenu () {
      console.log('tooglee')
      const menuToggle = document.querySelector('.toggle') ;
      menuToggle.classList.toggle('active')
      const menu = document.querySelector('.menu');
      menu.classList.toggle('active');
    }

    if(window.history.replaceState) {
      window.history.replaceState(null,null,window.location.href);
    }
  </script>
</body>

</html>