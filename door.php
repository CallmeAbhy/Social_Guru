<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: sign_in.php");
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>Responsive Video Background Landing Page</title>
  </head>
  <body>
    <section id="main">
      <div class="container">
        <video class="video" autoplay muted loop>
          <source src="Untitled.mp4" type="video/mp4" />
        </video>
      </div>

      <div class="page-content">
        <h1>Social Gurus Welcomes You  <span><?php echo "". $_SESSION['username']?></span></h1>
        <h3>
          Use your Skillset to get hired with flexibility of time and all options available of time duration. get hired generate your secondary income.
        </h3>
        <span
          ><a
            href="#"
            target="_blank"
            >Click Here</a
          ></span
        >
      </div>
    </section>
  </body>
</html>