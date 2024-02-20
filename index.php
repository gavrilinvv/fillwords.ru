<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fillwords</title>
</head>
<body>
	<div id="app">
		<div class="banner banner-left"></div>
		<?include('screens/start.php');?>
		<?include('screens/about.php');?>
		<?//include('screens/levels.php');?>
		<?include('screens/settings.php');?>
		<?include('screens/game.php');?>
		<div class="banner banner-right"></div>
	</div>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.0/velocity.min.js"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>-->

	<script src="/src/js/jquery.min.js"></script>
	<script src="/src/js/velocity.min.js"></script>
	<script src="/src/js/lazy-line-painter-2.0.3.min.js"></script>
	<script src="/dest/script.js"></script>
</body>
</html>
