<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="author" content="Cathy Ji">
      <meta name="description" content="Cathy Ji's web portfolio and resume" />
      <meta name="keywords"  content="cathy, ji, usc, programmer, developer, design, computers, technology, student, university, southern, california" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="HandheldFriendly" content="true">
      <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
      
      <?php include("includes/resources.php"); ?>

      <title>Cathy Ji</title>
   </head>
   <body>
      <div id="top">
         <header>
            <a href="index.php"><img src="images/hi_plain.png"/></a>
            <img id="headshot" src="images/headshot_200x200.jpg"/>
         </header>
         <nav>
            <ul id="menu">
               <li data-menuanchor="top" class="active"><a href="#top">Home</a></li>
               <li data-menuanchor="resume"><a href="#resume">Resume</a></li>
               <li data-menuanchor="projects"><a href="#projects">Projects</a></li>
               <li data-menuanchor="interests"><a href="#interests">Interests</a></li>
               <li data-menuanchor="contact"><a href="#contact">Contact</a></li>
            </ul>
         </nav>
      </div> <!-- top -->

       <div class="fullpage">
          <?php include("resume.php"); ?>
          <?php include("projects.php"); ?>
          <?php include("interests.php"); ?>
          <?php include("contact.php"); ?>
          <div class="clear"></div>

        </div> <!-- fullpage-->
      
      <footer>
         <div class="logo"></div>
         <div class="clear"></div>
      </footer>

      <script>
       $("#menu > ul > li").click(function() 
        {
          $(this).closest('ul').find('li').each(function()
          {
              $(this).removeClass('active');
          });
          $(this).addClass('active');
        });

      </script>

   </body>
</html>