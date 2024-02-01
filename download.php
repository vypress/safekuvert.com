<?php
define('SK_PAGE_TITLE', 'Download SafeKuvert - a simple ecryption software for Windows');
define('SK_PAGE_DESCRIPTION', 'Links for downloading the Safekuvert for different Windows versions');
define('SK_PAGE_KEYWORDS', 'download trial version, encryption software, file encryption, security software, X-509 certificate');
include('segments.php');
display_head();
?>
					<div id="intro">
					<h1><a id="maincontent"></a>Downloads</h1>
					</div>
					<div class="clear"></div>
					<h3 class="headerstyle">Download a complete 31-day trial edition of SafeKuvert</h3>
					<p><b style="color:#f00;">Version 1.0.2</b> (It requires Windows XP or higher):
					</p>
					<ul>
						<li><a href="files/SafeKuvert102.msi"><b>SafeKuvert102.msi</b></a> (32 bits, 1,00 MB) English version.</li>
						<li><a href="files/SafeKuvert102x64.msi"><b>SafeKuvert102x64.msi</b></a> (64 bits, 1,02 MB) English version.</li>
					</ul>
					<p><b style="color:#f00;">Version 1.0</b> (It works under Windows 95 and other OS which are earlier than Windows XP):</p>
					<ul>
						<li><a href="files/SafeKuvert10.msi"><b>SafeKuvert10.msi</b></a> (32 bits, 1,10 MB) English version.</li>
					</ul>
					<p><b>NOTE:</b> Licensed users can download and install the trial edition over their existing licensed installation to update.</p>
					<div class="clear"></div>
					<h3 class="headerstyle">Supplemental files and utilities</h3>
					<p><a type="application/x-x509-ca-cert" href="files/vypress.crt"><b>vypress.crt</b></a> (0,8 KB) - The VyPRESS Research, LLC  root X-509 certificate. This root certificate helps your computer determine if installation packages of SafeKuvert, which you get from this server or from any other servers, are trustworthy. Download the certificate and set it to be trusted.</p>
					<p><a type="application/x-x509-ca-cert" href="files/vypress_old.crt"><b>vypress_old.crt</b></a> (1,12 KB) - Expired previous VyPRESS Research, LLC  root X-509 certificate.</p>
<?php display_foot(); ?>