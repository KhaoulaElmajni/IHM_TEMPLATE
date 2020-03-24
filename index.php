<!DOCTYPE html>
<html>
<title>ESTSB BY KHAOULA & IMANE & OUMAIMA</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<?php get_header(); ?>



<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">notre Profile</h4>
         <p class="w3-center"><img src="<?php bloginfo('template_url'); ?>/src/logo.png" class="w3-circle" style="height:106px;width:106px" alt="ESTSB"></p>
         <hr>
         <p><i class="fa fa-graduation-cap fa-fw w3-margin-right w3-text-theme"></i> école supérieure de technologie</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i>Sidi Bennour</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i>Date de création 2017</p>
         <p><i class="fa fa-university fa-fw w3-margin-right w3-text-theme"></i>Université Chouaib Doukkali</p>
         <p><i class="fa fa-facebook-official fa-fw w3-margin-right w3-text-theme"></i>ESTSB</p>
         <p><i class="fa fa-linkedin fa-fw w3-margin-right w3-text-theme"></i>ESTSB</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i>A propos</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Ecole Supérieure de Technologie Sidi Bennour : ( EST Sidi Bennour ou ESTS Sidi Bennour ), est un établissement public d’enseignement supérieur à finalité de formation des Techniciens Supérieurs. Elle a été créée en Août 2016 par le Ministère de l’Enseignement Supérieur, de la Formation des Cadres et de la Recherche Scientifique du Royaume du Maroc.</p>
          </div>
  
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i>notre programme</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>programmes d’enseignement comportent des Cours magistraux, des Travaux Pratiques (TP), des Travaux Dirigés (TD) et des Dossiers et Travaux de Réalisation, des Projets de Fin d’Etude, des Stages d’Initiation et des Stages Techniques dans les entreprises, les organismes socio-professionnels, les collectivités locales et les administrations publiques.</p>
          </div>
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i>Nos Filiéres</button>
          <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
             <p><ul>
             <li>Génie Informatique</li>
             <li>Technique de Management</li>
             <li>Génie Agroenvironnement</li>
             </ul></p>
           </div>
         </div>
          </div>
        </div>      
      </div>
      <br>
      
      <!-- Interests --> 
      <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Activités</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">Des Forums</span>
            <span class="w3-tag w3-small w3-theme-d4">Compétitions</span>
            <span class="w3-tag w3-small w3-theme-d3">Evénements</span>
            <span class="w3-tag w3-small w3-theme-d2">Jeux</span>
            <span class="w3-tag w3-small w3-theme-d1">Sport</span>
            <span class="w3-tag w3-small w3-theme">Clubes</span>
            <span class="w3-tag w3-small w3-theme-l1">Theatre</span>
            <span class="w3-tag w3-small w3-theme-l2">Championats</span>
            <span class="w3-tag w3-small w3-theme-l4">Art</span>
            
          </p>
        </div>
      </div>
      <br>
      
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <h4><strong>Bonjour cher(e) visiteur(e) !</strong></h4>
        <p>Bienvenue dans notre plateforme. 
        <br>le cadre administratif et le corps pédagogique de <b  style="background-color:powderblue;">l'école sipérieure de technologie de sidi bennour</b> vous souhaite une trés bonne visite.</p>
      </div>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
   
    
    <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h2 class="w3-opacity" style="border: 2px solid DodgerBlue; color: blue"><center>Ecole Superieure De Technologie de Sidi Bennour</center></h2>
                  <img   src="<?php bloginfo('template_url'); ?>/src/estsb.png" style="height:400px;width:640px" alt="ESTSB">
                  <br>
            </div>
          </div>
        </div>
      </div>
    <br>
    
    <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h2 class="w3-opacity" style="border: 2px solid DodgerBlue  ; color: blue"><center>La famille ESTSB: </center></h2>
              <img   src="<?php bloginfo('template_url'); ?>/src/famille.png" style="height:400px;width:640px" alt="ESTSB">
            </div>
          </div>
        </div>
      </div>
    
    <br>
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h2 class="w3-opacity" style="border: 2px solid DodgerBlue; color: blue"><center>&loz; Présentation</center> </h2>
              <p class="w3-border w3-padding">L’Ecole Supérieure de Technologie Sidi Bennour (ESTSB) est un établissement public d’enseignement supérieur à finalité de formation des Techniciens Supérieurs. Elle a été créée en Août 2016 par le Ministère de l’Enseignement Supérieur, de la Formation des Cadres et de la Recherche Scientifique du Royaume du Maroc. L’ESTSB est une composante de l’Université Chouaib Doukkali d’El Jadida. Sa vocation est de former des Techniciens Supérieurs polyvalents, hautement qualifiés et immédiatement opérationnels après leur sortie de l’Ecole en tant que collaborateurs d’ingénieurs et de managers. Sont admis à l’ESTSB, les bacheliers de l’enseignement secondaire technique, scientifique et tertiaire. L’admission à l’Ecole (au de Diplôme Universitaire de Technologie « DUT ») se fait par voie de sélection par ordre de mérite après une présélection sur la base des notes obtenues au baccalauréat. Les candidats doivent être âgés de 22 ans au plus au 31 Décembre de l’année du concours et doivent déposer leurs dossiers de pré-inscription avant le 30 Juin de chaque année universitaire. </p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
    
     
        <h4 style="border: 2px solid DodgerBlue; color: blue"> <center> &loz; Orientation appliquée de l’enseignement</center></h4>
        <hr class="w3-clear">
        <p>

La formation appliquée à l’ESTSB est largement tournée vers les Technologies d’Information et de Communication, les Techniques de Gestion, les langues vivantes, les Systèmes et Réseaux Informatiques, les conceptions et les réalisations informatiques, c’est pourquoi ses programmes ont toujours le souci de répondre aux exigences et aux attentes de l’environnement socio-économique de l’Ecole et font appel à des méthodes pédagogiques actives et évoluées. 
<br>
Les programmes d’enseignement comportent des Cours magistraux, des Travaux Pratiques (TP), des Travaux Dirigés (TD) et des Dossiers et Travaux de Réalisation, des Projets de Fin d’Etude, des Stages d’Initiation et des Stages de Stages Techniques dans les entreprises, les organismes socio-professionnels, les collectivités locales et les administrations publiques.
<br>
Durée des études

La durée des études est de deux années universitaires avec 16 modules d’enseignement. La première année s’étale sur 32 semaines suivies de quatre semaines de stage d’initiation après la fin de S2 et avant le démarrage de S3 dans l’entreprise en Juillet ou Aout à raison de 24 jours avec un rapport et une soutenance. La deuxième année est de 36 semaines dont 8 semaines de stage technique et dispensé à raison de 48 jours pour 36 heures par semaine en moyenne avec un rapport et une soutenance.</p>
          
    
      </div>
      
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
   
        <h4 style="border: 2px solid DodgerBlue; color: blue"><center>  &loz; Activités</center></h4>
        <hr class="w3-clear">
        <p>l'ESTSB est trés active coté activités.
        <br>
        Parmi les activités que notre école organise ou participe, nous vous présentons: </p>
        <br>
        
        <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
              <img src="<?php bloginfo('template_url'); ?>/src/activite1.png" style="width:100%" alt="activités" class="w3-margin-bottom">
              <p style="color: black;"><center>Participation des étudiants d'ESTSB dans la compétition nationale INJAZ</center></p>
            </div>

          <div class="w3-half">
              <img src="<?php bloginfo('template_url'); ?>/src/activite3.png" style="width:100%" alt="activités" class="w3-margin-bottom">
              <p style="color: black;"><center>Participation d'ESTSB dans le FORUM d'étudiant 2020</center></p>
          </div>
          <div class="w3-half">
              <img src="<?php bloginfo('template_url'); ?>/src/activite4.png" style="width:100%" alt="activités" class="w3-margin-bottom">
              <p style="color: black;"><center>Participation d'ESTSB dans la CMPC 2020</center></p>
              <div class="w3-half">
              <img src="<?php bloginfo('template_url'); ?>/src/activite6.png" style="width:200%" alt="activités" class="w3-margin-bottom">
              <p style="color: black;"><center>Participation d'ESTSB dans la compétition HACKATHON ENSAJ 2019</center></p>
          </div>
          </div>
          
          
          <div class="w3-half">
              <img src="<?php bloginfo('template_url'); ?>/src/activite2.png" style="width:100%" alt="activités" class="w3-margin-bottom">
              <p style="color: black;"><center>La commuté nationale INJAZ prends sa place entre le corps personnel d'ESTSB</center></p>
          </div>
           <div class="w3-half">
              <img src="<?php bloginfo('template_url'); ?>/src/activite8.png" style="width:100%" alt="activités" class="w3-margin-bottom">
              <p style="color: black;"><center>Participation d'ESTSB dans le FORUM d'étudiant 2020</center></p>
          </div>


          <div class="w3-half">
              <img src="<?php bloginfo('template_url'); ?>/src/activite5.png" style="width:100%" alt="activités" class="w3-margin-bottom">
              <p style="color: black;"><center>Des étudiants actives d'ESTSB préparent un workshop à propos de WORDPRESS pour le bien de leurs collégues </center></p>
          </div>
        </div>
        
      </div>  

      
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Evenement marqués</p>
          <p class="w3-center">
            <img src="<?php bloginfo('template_url'); ?>/src/rentre.png" class="w3-circle" style="height:106px;width:106px" alt="ESTSB"></p>
          <p><strong>Rentrée Scolaire</strong></p>
          <p> Lundi 2 Septembre</p>
         
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
         <p>   </p>
          <img src="<?php bloginfo('template_url'); ?>/src/anne.png" class="w3-circle" alt="année" style="height:106px;width:106px" alt="ESTSB">
          <p><strong>Vaccances du 1er d'année</strong></p>
          <p> Du samedi 31 decembre au lundi 2  Janvier</p>
         
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
         <p>   </p>
          <img src="<?php bloginfo('template_url'); ?>/src/printemps.png" class="w3-circle" alt="Vaccances" style="height:106px;width:106px" alt="ESTSB">
          <p><strong>Vaccances de Printemps</strong></p>
          <p> Du samedi 10 Avril au lundi 22 Février</p>
         
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
         <p>   </p>
          <img src="<?php bloginfo('template_url'); ?>/src/travail.png" class="w3-circle" alt="Vaccances" style="height:106px;width:106px" alt="ESTSB">
          <p><strong>Fete du travail</strong></p>
          <p> Le 1er Mai</p>
         
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
         <p>   </p>
          <img src="<?php bloginfo('template_url'); ?>/src/ete.png" class="w3-circle" alt="Vaccances" style="height:106px;width:106px" alt="ESTSB">
          <p><strong>Vaccances d'été</strong></p>
          <p> Du samedi 4 Juiellet</p>
         
        </div>
      </div>
      <br>
      
      
      
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Evénement marqués</p>
          <img src="<?php bloginfo('template_url'); ?>/src/conf.png" class="w3-circle" alt="Conférence" style="height:106px;width:106px" alt="ESTSB">
          <br>
          <span><b>Conférence à propos du Réseau informatique</b>
          <br>
          <p>Le 22 mars 2020 a salle de doctorat à la UCD Faculté de Lettre</p>
          
          </span>
         
        </div>
      </div>
      <br>
      
     <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Evénement marqués</p>
          <img src="<?php bloginfo('template_url'); ?>/src/visite.png" class="w3-circle" alt="Visite" style="height:106px;width:106px" alt="ESTSB">
          <br>
          <span><b>Visite à la cité Portugaise.</b>
          <br>
          <p>Le 03 Avril 2020 </p>
          
          </span>
         
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Evénement marqués</p>
          <img src="<?php bloginfo('template_url'); ?>/src/activite5.png" class="w3-circle" alt="workshop" style="height:106px;width:106px" alt="ESTSB">
          <br>
          <span><b>Workshop sous théme de créer votre site web avec WordPress.</b>
          <br>
          
          </span>
         
        </div>
      </div>
      <br>
     
      
      
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<?php get_footer(); ?>
 
<script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html> 
