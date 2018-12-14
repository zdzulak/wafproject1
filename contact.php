<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Contact | Nintendo Presents: Donkey Kong</title>
		<meta name="author" content="Zackary Zulak" />
		<meta name="description" content="Give us feedback or ask us questions about Donkey Kong!">
		<link rel="shortcut icon" href="images/dkicon.jpg" type="image/x-icon" />
		<link rel="stylesheet" href="css/fancy.css" />
	</head>

  <body id="about">
    <header>
      <img src="images/dklogo.png" height="100" width="275" alt="Donkey Kong Logo" />
			<?php
			require $_SERVER['DOCUMENT_ROOT'].'\includes\global-nav.php';
			?>
    </header>

    <main>
      <form>
        <input type="text" name="feedback" id="feedback" />
        <button type="submit">Submit</button>
    </form>
    </main>
  </body>
</html>
