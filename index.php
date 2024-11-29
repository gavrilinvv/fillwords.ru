<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta http-equiv="Cache-Control" content="no-cache" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
	<link rel="canonical" href="https://fillwords.ru"/>
	<title>Филворды | Бесплатная браузерная игра</title>
	<meta property="og:title" content="Филворды | Бесплатная браузерная игра"/>
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://fillwords.ru" />
	<meta name="description" content="Филворды это простая словесная головоломка для всей семьи, в которой надо искать разные слова на игровом поле. Онлайн, бесплатно и без регистрации, на русском и английском языке" />
	<meta property="og:description" content="Филворды это простая словесная головоломка для всей семьи, в которой надо искать разные слова на игровом поле. Онлайн, бесплатно и без регистрации, на русском и английском языке" />
	<meta name="keywords" content="Филворды, бесплатная браузерная игра, словесная головоломка, онлайн, найти слова, на поле, поиск слов, словарный запас, игра на русском и английском, играть без регистрации" />
	<meta name="yandex-verification" content="738fcd3e75cf5f96" />

	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

	<script src="/src/js/jquery.min.js"></script>
	<script src="/src/js/velocity.min.js"></script>
	<script src="/dest/script.js?<?=date('Hdmy')?>"></script>

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
		(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
		m[i].l=1*new Date();
		for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
		k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		ym(96564571, "init", {
				clickmap:true,
				trackLinks:true,
				accurateTrackBounce:true,
				webvisor:true
		});
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/96564571" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->

	<!-- Yandex.RTB  -->
	<script>window.yaContextCb=window.yaContextCb||[]</script>
	<script src="https://yandex.ru/ads/system/context.js" async></script>
</head>
<body>
	<div id="app">
		<div class="modal-bg"></div>
		<div class="banner banner-bottom">
			<div id="yandex_rtb_R-A-7019864-3"></div>
		</div>
		<div class="banner banner-left">
			<div id="yandex_rtb_R-A-7019864-1"></div>
		</div>
		<?//include('screens/dots.php');?>
		<?include('screens/start.php');?>
		<?include('screens/about.php');?>
		<?//include('screens/levels.php');?>
		<?include('screens/settings.php');?>
		<?include('screens/game.php');?>
		<?include('screens/other-games.php');?>
		<?//include('screens/not-support-screen.php');?>
		<div class="banner banner-right">
			<div id="yandex_rtb_R-A-7019864-2"></div>
		</div>
	</div>

	<script src="/src/js/mo.js"></script>
	<script>
		function renderAds() {
			// left
			window.yaContextCb.push(()=>{
				Ya.Context.AdvManager.render({
					"blockId": "R-A-7019864-1",
					"renderTo": "yandex_rtb_R-A-7019864-1"
				})
			})
			// right
			window.yaContextCb.push(()=>{
				Ya.Context.AdvManager.render({
					"blockId": "R-A-7019864-2",
					"renderTo": "yandex_rtb_R-A-7019864-2"
				})
			})
			// bottom
			window.yaContextCb.push(()=>{
				Ya.Context.AdvManager.render({
					"blockId": "R-A-7019864-3",
					"renderTo": "yandex_rtb_R-A-7019864-3"
				})
			})

			setTimeout(function(){
				renderAds();
			}, 60000);
		}
		renderAds();
	</script>
</body>
</html>
