<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>About | Nintendo Presents: Donkey Kong</title>
		<meta name="author" content="Zackary Zulak" />
		<meta name="description" content="Learn about Nintendo's hit new arcade game, Donkey Kong!">
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
      <h3>About the Game</h3>
      <p>Donkey Kong stars Mario attempting to reach the top of a construction site where Lady is held captive. He can walk along platforms, jump, and climb ladders as well. In the process, Donkey Kong may attempt to hinder Mario from a higher location by sending obstacles at him. Mario has the ability to jump over these obstacles or obliterate them using a Hammer; in both cases, he obtains a number of points that are added to a score. However, if Mario ends up falling off the side of a platform and lands on one below him (or none), and the difference in height is greater than Mario's by one and a half, he loses a life. Each time Mario reaches Lady, Donkey Kong will carry her away on a pair of ladders to the next level until the fourth stage, where he is defeated upon completion.</p>

      <h3>Meet the Characters</h3>
      <ul id="Gallery">
        <li><a href="images/donkeykong.jpg" title="The Villain" alt="Donkey Kong">Donkey Kong</a></li>

        <li><a href="images/mario.jpg" title="The Carpenter" alt="Mario">Mario</a></li>

        <li><a href="images/Lady.jpg" title="The Damsel in Distress" alt="Lady">Lady</a></li>
      </ul>

      <img id="placeholder" src="images/donkeykong.jpg" alt="Donkey Kong" />
      <p id="description">Click the links for information on the character.</p>
    </main>

    <script src="js/characters.js" type="text/javascript"></script>

  </body>
</html>
