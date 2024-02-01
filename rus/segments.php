<?php
if(!defined('SK_PAGE_TITLE')) define('SK_PAGE_TITLE', 'Простая программа для шифрования файлов SafeKuvert');
if(!defined('SK_PAGE_DESCRIPTION')) define('SK_PAGE_DESCRIPTION', 'Простая программа для шифрования файлов для Windows. Создаёт цифровую подпись для файлов и упаковывет их в сообщения PKCS7');
if(!defined('SK_PAGE_KEYWORDS')) define('SK_PAGE_KEYWORDS', 'шифрование,алгоритм,кодирование,цифровая подпись,сертификат,сжатие,pkcs7,PKCS#7,X-509,RSA,RC2,RC4,AES,DES,шифрование файлов,подпись файлов');
//Header and footer for all pages are included to all web site files
function display_head()
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?=SK_PAGE_TITLE?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta content="<?=SK_PAGE_DESCRIPTION?>" name="description" />
		<meta content="<?=SK_PAGE_KEYWORDS?>" name="keywords" />
		<meta content="VyPRESS Research, LLC." name="author" />
		<link href="../main.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="/screens.js"></script>
	</head>
	<body>
		<div id="thetop"><a id="top"></a>
			<p class="hide">
				Перейти к: <a accesskey="1" href="#sitemenu">Карте сайта</a> | <a accesskey="2" href="#maincontent">Началу</a>
			</p>
		</div>
		<div id="container">
			<div id="main">
<?php
} //end of display_head()

function display_foot()
{
?>
			</div>
				<div id="sidebar">
				<h2 class="sidelink menuheader"><a id="sitemenu"></a>Карта сайта:</h2>
				<a class="sidelink" href="index.php">Главная</a>
				<span class="hide">| </span><a accesskey="D" class="sidelink" href="download.php">Загрузить</a>
				<span class="hide">| </span><a accesskey="O" class="sidelink" href="order.php">Купить</a>
				<span class="hide">| </span><a accesskey="S" class="sidelink" href="screens.php">Снимки экранов</a>
				<span class="hide">| </span><a accesskey="C" class="sidelink" href="writeus.php">Контакты</a>
				<h3>Новости</h3>
				<p>11/04/2011 - <a href="news.php">Выпущен SafeKuvert версия 1.0.2</a><br />
				</p>
				<h3>Выбрать язык:</h3>
				<p><a href="../index.php">English</a><br />
				</p>
				<div class="clear"></div>
				<p>
					<a href="download.php"><img height="31" width="88" src="../img/button.gif" alt="Get SafeKuvert Now!"/>
					</a>
				</p>
			</div>
			<div class="clear"></div>
		</div>
		<div id="footer">
		<p>Авторские права &copy;2024 <a href="http://www.vypress.com">VyPRESS Research, LLC.</a></p>
		</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-1684303-3");
pageTracker._trackPageview();
} catch(err) {}</script>
	</body>
</html>
<?php
} //end of display_foot()
?>