<?php require('randomQuoteLogic.php'); ?>
<!DOCTYPE html>
<html>
 <head>
  <title>Project 1 DWA</title>
  <link href="style.css" rel="stylesheet">
 </head>
 <body>
  <div class="main">
    <h1>Ricardo Alcantar</h1>
    <img class="pic" src="pic.png" alt="my photo" />
    <h2>About Me</h2>
    <p>I am a software developer working on my Master's at the Harvard Extension School. At the moment I am enrolled in two classes. When I am not working or doing homework, I like to spend time with friends. I am terrible at writing bios, but if you want to know anything about me just ask.</p>
    <h2>Random Quote</h2>
    <p class="quote">
      <?php echo $selectedQuote; ?>
    </p>
  </div>
 </body>
</html>
