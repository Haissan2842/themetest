<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curriculum Vitae - Thomas Martin</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
</head>
<body>
  <header>
  <?php wp_head(); ?>
  </header>
  <section class="section">
    <div class="titre">
      <h1>Curriculum Vitae</h1>
      <h2>Chloé Duquesne</h2>
    </div>

  <div class="infos">
    <h3>Informations Personnelles</h3>
      <ul>
        <li><strong>Nom :</strong> Chloé</li>
        <li><strong>Prénom :</strong> Duquesne</li>
        <li><strong>Date de Naissance :</strong> 26 aout 2004, 19 ans</li>
        <li><address><strong>Adresse :</strong> Avenue Brugmann n°499, 1180 Uccle</address></li>
        <li><strong>Téléphone :</strong> <a href="tel:+32 4 98 77 80 25">+32 4 98 77 80 25</a></li>
        <li><strong>Email :</strong> <a href="mailto:duquesnechloe143@gmail.com">duquesnechloe143@gmail.com</a></li>
      </ul>
  </div>

  <div class="photodeprofil">
    <img src="<?php echo get_template_directory_uri(); ?>/img\384828817_1015074009830930_8374194518746469135_n.jpg" alt="Chloé Duquesne" class="photo">
  </div>

  <div class="lereste">
    <hr>
    <h3>Formations</h3>
    <ul>
      <li>2010-2014 : Bachelier en Informatique Appliquée, Haute École de Technologie de Liège</li>
      <li>2014-2016 : Master en Développement Web, Université de Bruxelles</li>
   </ul>
  
  <h3>Expériences Professionnelles</h3>
  <ul>
    <li>Avril 2016 - Présent : Développeur Front-End, Société TechVision, Bruxelles
      <ul>
        <li>Conception et développement d'interfaces utilisateur pour des applications web et mobiles en utilisant HTML, CSS et JavaScript.</li>
        <li>Collaboration étroite avec les designers pour transformer des maquettes en interfaces interactives et conviviales.</li>
        <li>Expérience dans la mise en œuvre de projets Agile, avec des sprints et des réunions de planification et de rétrospective.</li>
        <li>Utilisation de frameworks tels que React et Vue.js pour créer des expériences utilisateur dynamiques et réactives.</li>
        <li>Intégration de services RESTful et utilisation de Git pour le contrôle de version.</li>
      </ul>
    </li>
    <li>Juin 2015 - Mars 2016 : Stagiaire en Développement Web, Startup WebCraft, Liège
      <ul>
        <li>Assistance dans la création d'une application web responsive utilisant les dernières technologies front-end.</li>
        <li>Participation à l'optimisation des performances du site et à l'assurance de sa compatibilité avec différents navigateurs.</li>
        <li>Contribution à la mise en place d'une méthodologie de développement Agile au sein de l'équipe.</li>
      </ul>
    </li>
  </ul>
  
<?php 
  $skillslist = new WP_Query(['post_type' => 'skills'])
?>

<?php if ($skillslist->have_posts()): ?>
  <h3>Compétences</h3>
    <ul>
      <?php while ($skillslist->have_posts()): $skillslist->the_post(); ?>
        <li><?php the_title(); ?></li>
      <?php endwhile; ?>
    </ul>
<?php endif ?>
 

<?php 
  $langueslist = new WP_Query(['post_type' => 'langues'])
?>

<?php if ($langueslist->have_posts()): ?>
  <h3>Langues</h3>
    <ul>
      <?php while ($langueslist->have_posts()): $langueslist->the_post(); ?>
        <li><?php the_title(); ?></li>
      <?php endwhile; ?>
    </ul>
<?php endif ?>

<?php 
  $loisirslist = new WP_Query(['post_type' => 'loisirs'])
?>

<?php if ($loisirslist->have_posts()): ?>
  <h3>Centres d'intérêt</h3>
    <ul>
      <?php while ($loisirslist->have_posts()): $loisirslist->the_post(); ?>
        <li><?php the_title(); ?></li>
      <?php endwhile; ?>
    </ul>
<?php endif ?>
 


  <br>
  <br>
  <br>
  </div>
</section>

<?php wp_footer(); ?>

</body>

</html>
