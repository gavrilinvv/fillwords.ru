<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>404</title>
</head>
<body>
	<style>
		@font-face {
			font-family: 'Comfortaa';
			src: url('/src/fonts/Comfortaa-Bold.ttf');
		}

		* {
			font-family: sans-serif;
		}
		body {
			margin: 0;
			padding: 0;
			background: #323c68;
			background-size: cover;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100svh;
			position: relative;
			overflow: hidden;
		}
		.not-found {
			display: flex;
			align-items: center;
			flex-direction: column;
		}


		.not-found__wrapper {
			color: #fff;
			height: 100vh;
			display: flex;
			align-items: center;
			justify-content: space-around;
			padding-right: 20px;
			padding-left: 20px;
		}

		.not-found__code {
			display: block;
			font-weight: 700;
			font-size: 92px;
		}
		.not-found__text {
			display: block;
			font-size: 42px;
		}
		.not-found__link {
			font-size: 42px;
		}
	</style>
	<div class="not-found__wrapper">
		<div class="not-found">
			<span class="not-found__code">404</span>
			<span class="not-found__text">Страница не&nbsp;найдена</span>
		</div>
	</div>
</body>
</html>
