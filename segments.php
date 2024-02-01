<?php
//Header and footer for all pages are included to all web site files
if(!defined('SK_PAGE_TITLE')) define('SK_PAGE_TITLE', 'File encryption software for Windows');
if(!defined('SK_PAGE_DESCRIPTION')) define('SK_PAGE_DESCRIPTION', 'File encryption software for Windows that supports for different encryption algorithms and X-509 certificates');
if(!defined('SK_PAGE_KEYWORDS')) define('SK_PAGE_KEYWORDS', 'encrypt,digital signature,encode,certificate,pkcs7,pkcs7 message,PKCS#7,X-509,RSA,RC2,RC4,AES,DES,compress,encryption, encryption software, data encryption, security encryption, file encryption, security software, file encryption software, file security, encryption program, file encrypt, data encryption software, best encryption software');
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
		<link href="main.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="/screens.js"></script>
	</head>
	<body>
		<div id="thetop"><a id="top"></a>
			<p class="hide">
				Skip to: <a accesskey="1" href="#sitemenu">Site menu</a> | <a accesskey="2" href="#maincontent">Main content</a>
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
				<h2 class="sidelink menuheader"><a id="sitemenu"></a>Site menu:</h2>
				<a class="sidelink" href="index.php">Home</a>
				<span class="hide">| </span><a accesskey="D" class="sidelink" href="download.php">Download</a>
				<span class="hide">| </span><a accesskey="O" class="sidelink" href="order.php">Order</a>
				<span class="hide">| </span><a accesskey="S" class="sidelink" href="screens.php">Screenshots</a>
				<span class="hide">| </span><a accesskey="C" class="sidelink" href="writeus.php">Write us</a>
				<h3>Latest news</h3>
				<p>04/11/2011 - <a href="news.php">SafeKuvert&nbsp;1.0.2 is released now!</a><br />
				</p>
				<h3>Localized sites</h3>
				<p><a href="rus/index.php">Russian</a><br />
				</p>
				<div class="clear"></div>
				<p>
					<a href="download.php"><img height="31" width="88" src="img/button.gif" alt="Get SafeKuvert Now!"/>
					</a>
				</p>
			</div>
			<div class="clear"></div>
		</div>
		<div id="footer">
		<p>&copy;2024 <a href="http://www.vypress.com">VyPRESS Research, LLC.</a> All rights reserved.</p>
		</div>
<div id="adv">
<p>Our other products:</p>
<ul>
<li>Vypress Chat - <a href="http://www.vypress.com/lan_chat">chat for LAN</a></li>
<li>Vypress Messenger - <a href="http://www.vypress.com/lan_instant_messenger">instant messenger for LAN</a></li>
<li>Vypress Auvis - <a href="http://www.vypress.com/products/auvis">receive only instant messenger client</a></li>
</ul>
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