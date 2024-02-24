<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Филворды | Браузерная игра</title>

	<meta property="og:title" content="Филворды | Браузерная игра"/>
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://fillwords.ru" />
	<meta name="description" content="Находите слова в простой головоломке для всей семьи. Онлайн, бесплатно и без регистрации" />
	<meta property="og:description" content="Находите слова в простой головоломке для всей семьи. Онлайн, бесплатно и без регистрации" />
	<meta name="keywords" content="Филворды, бесплатная браузерная игра, головоломка, играть без регистрации, онлайн, найти слова, на поле" />
	<meta name="yandex-verification" content="738fcd3e75cf5f96" />

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
</head>
<body>
	<div id="app">
		<div class="banner banner-left"></div>
		<?include('screens/start.php');?>
		<?include('screens/about.php');?>
		<?//include('screens/levels.php');?>
		<?include('screens/settings.php');?>
		<?include('screens/game.php');?>
		<?include('screens/not-support-screen.php');?>
		<div class="banner banner-right"></div>
	</div>

	<script src="/src/js/jquery.min.js"></script>
	<script src="/src/js/velocity.min.js"></script>
	<script src="/src/js/lazy-line-painter-2.0.3.min.js"></script>
	<script src="/dest/script.js"></script>
</body>
</html>
