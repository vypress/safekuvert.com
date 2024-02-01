<?php
define('SK_PAGE_TITLE', 'Latest news about SafeKuvert');
define('SK_PAGE_DESCRIPTION', 'News about Safekuvert releases');
define('SK_PAGE_KEYWORDS', '64 bits encryption software, 64 bits version, shell extensions, file encryption');
include('segments.php');
display_head();
?>
					<div id="intro">
					<h1><a id="maincontent"></a>Latest news</h1>
					</div>
					<div class="clear"></div>
					<h3 class="headerstyle">04/11/2011 Version 1.0.2 of the SafeKuvert is released today.</h3>
					<b>New in this version:</b>
					<ul>
					<li>Fixed error with saving certificates for digital signatures;</li>
					<li>Fixed error that caused license information removing after exporting a private key from one CSP to other;</li>
					<li>Support for executing or opening decoded files;</li>
					<li>Support for executing or opening decoded files by the self decoding utility;</li>
					<li>Fixed several small bugs and glitches;</li>
					<li>Zlib 1.2.5 library  is used for compression/decompression;</li>
					<li>The software was compiled and assembled using the latest Microsoft SDK for Windows&nbsp;7.</li>
					</ul>
					<h3 class="headerstyle">07/14/2007 Version 1.0.1.1 of the SafeKuvert is released today.</h3>
					<p>
					This version fixes a bug where the SafeKuvert Shell Extension starts erroneously from the Start menu or the Control Panel in Windows Vista.
					</p>
					<h3 class="headerstyle">06/28/2007 Version 1.0.1 of the SafeKuvert is released today.</h3>
					<p>
					64 and 32 bits versions are available. It works under modern Windows Vista OS. It requres Windows XP or higher OS version.
					</p>
					<h3 class="headerstyle">03/27/2007 Version 1.0 of the SafeKuvert is released today.</h3>
					<p>
					Russian and English versions are available. Unfortunately Windows Vista shell extensions are not supported yet. We are going to release 32 and 64 bit versions for Vista till June 1st, 2007
					</p>
<?php display_foot(); ?>