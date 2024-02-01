<?php
define('SK_PAGE_TITLE', 'Загрузить SafeKuvert - простую программу для шифрования файлов');
define('SK_PAGE_DESCRIPTION', 'Страница загрузки. Простая программа для шифрования файлов для Windows. Создаёт цифровую подпись для файлов и упаковывет их в сообщения PKCS7');
define('SK_PAGE_KEYWORDS', 'загрузить,сертификат,X-509,64х разрядная');
include('segments.php');
display_head();
?>
					<div id="intro">
					<h1><a id="maincontent"></a>Загрузить SafeKuvert</h1>
					<p>
					На этой странице Вы можете скачать полнофункциональную версию SafeKuvert и попробовать её в работе в течение 31-го дня
					</p>
					</div>
					<div class="clear"></div>
					<h3 class="headerstyle">Установочные пакеты SafeKuvert</h3>
					<p>
					<b style="color:#f00;">Версия 1.0.2</b> (Требуется операционная система Windows XP или выше):
					</p>
					<ul>
    				<li>
					<a href="../files/SafeKuvertRus102.msi"><b>SafeKuvertRus102.msi</b></a> (32х разрядная, 1,11 MB) Русская.
					</li>
					<li>
					<a href="../files/SafeKuvertRus102x64.msi"><b>SafeKuvertRus102x64.msi</b></a> (64х разрядная, 1,13 MB) Русская.
					</li>
					<li>
					<a href="../files/SafeKuvert102.msi"><b>SafeKuvert102.msi</b></a> (32х разрядная, 1,00 MB) Английская.
					</li>
					<li>
					<a href="../files/SafeKuvert102x64.msi"><b>SafeKuvert102x64.msi</b></a> (64х разрядная, 1,02 MB) Английская.
					</li>
					</ul>
					<p>
					<b style="color:#f00;">Версия 1.0</b> (Работает в Windows 95 и других 32х разрядных ОС):
					</p>
					<ul>
					<li>
					<a href="../files/SafeKuvertRus10.msi"><b>SafeKuvertRus10.msi</b></a> (64х разрядная, 1,21 мБ) Русская.
					</li>
					<li>
					<a href="../files/SafeKuvert10.msi"><b>SafeKuvert10.msi</b></a> (32х разрядная, 1,10 MB) Английская.
					</li>
					</ul>
					<p>
					<b>ВНИМАНИЕ:</b> Пользователи, купившие лицензии на использование программы, могут использовать данный дистрибутив для обновления уже установленных у них версий.
					</p>
					<h3 class="headerstyle">Файлы, полезные для развертывания программы</h3>
					<p>
					<a type="application/x-x509-ca-cert" href="../files/vypress.crt"><b>vypress.crt</b></a> (0,8 кБ)
					- корневой сертификат X-509 центра сертификации VyPRESS Research, LLC.<br/>Необходим для проверки целостности загруженного с этого сервера дистрибутива или дистрибутива полученного любым другим способом.
					</p>
					<p>
					<a type="application/x-x509-ca-cert" href="../files/vypress_old.crt"><b>vypress_old.crt</b></a> (1,12 кБ)
					- предыдущий корневой сертификат X-509 центра сертификации VyPRESS Research, LLC., в настоящее время уже недействителен.</p>
<?php display_foot(); ?>