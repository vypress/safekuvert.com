<?php
define('SK_PAGE_TITLE', 'File encryption software for Windows');
define('SK_PAGE_DESCRIPTION', 'File encryption software for Windows that supports for different encryption algorithms and X-509 certificates');
define('SK_PAGE_KEYWORDS', 'encrypt,digital signature,encode,certificate,pkcs7,pkcs7 message,PKCS#7,X-509,RSA,RC2,RC4,AES,DES,compress,encryption, encryption software, data encryption, security encryption, file encryption, security software, file encryption software, file security, encryption program, file encrypt, data encryption software, best encryption software');
include('segments.php');
display_head();
?>
				<noscript>
					<p>
						<b style="color:#f00;">Your browser has JavaScript turned off.</b><br />
						You will experience a more enjoyable time at this Web site if you turn 
						JavaScript on.
					</p>
				</noscript>
				<div id="logo">
					<a href="#sitemenu"></a>
					<img src="img/splash.jpg" alt="SafeKuvert keeps conveniently your secrets!"/>
					
				</div>
				<div id="intro">
					<h1><a id="maincontent"></a>About SafeKuvert</h1>
					<p>SafeKuvert is a file encryption software that ensures the confidentiality of your
						data and provides you with the 
						ability to identify the owner of the data. SafeKuvert is a Windows application 
						that enables you to encode (encrypt and digitally sign) data from any file into 
						a standard <a href='glossary.php#pkcs7'>PKCS#7</a> message, and save the result to a file with a ".pkcs7" 
						extension. The encrypted files can be decrypted only on the computer where the 
						<a href='glossary.php#pk'>private key</a> of a certificate of encryption was saved, but a private key of a 
						recipient's certificate is not required in order to create an encoded file. The 
						digital signatures can be verified on any computer where SafeKuvert is 
						installed. The files can also be compressed before encoding is applied. 
						<a href='glossary.php#rsa'>Algorithms of asymmetrical encryption (RSA)</a> ensure that data cannot be accessed 
						even if the hardware in which an encoded file was stored is lost, or if the 
						file is transferred through public, unsecured computer networks. The 
						application actively uses the <a href='glossary.php#pki'>Public Key Infrastructure (PKI)</a>, which is built 
						into Windows, as well as the standard <a href='glossary.php#cert'>X-509 certificates</a> and the Windows Shell 
						extensions, which makes using the program very easy and convenient.</p>
				</div>
				<div class="clear"></div>
				<h3 class="headerstyle">Some of the application features</h3>
				<ul>
					<li>
					The use of standard <a href='glossary.php#csp'>Cryptographic Service Providers (CSP)</a>, system certificate 
					stores, and standard <a href='glossary.php#cert'>X-509 certificates</a> enable you to use certificates from any 
					well-known <a href='glossary.php#ca'>Certification Authorities (CA)</a>. These can be certificates already 
					installed or created on your computer, or they can be new certificates that are 
					issued by CAs or Certification Servers.
					</li>
					<li>
					The program supports different algorithms depending on the installed <a href='glossary.php#csp'>CSP</a>s: <a href='glossary.php#rc2'>RC2</a>, 
					<a href='glossary.php#rc4'>RC4</a>, <a href='glossary.php#des'>DES</a>, 3DES, <a href='glossary.php#aes'>AES</a>. The AES algorithm is a block cipher adopted as an 
					encryption standard by the U.S. government.
					</li>
					<li>
					The support of the Directory Services (LDAP) enables you to easily set up 
					central access to the certificates of the users in your company or your home.
					</li>
					<li>
						Support for Unicode file names. SafeKuvert is a Unicode Application, which 
						supports the<a href="http://www.microsoft.com/globaldev/handson/dev/mslu_announce.mspx">
							Microsoft Layer for Unicode</a>
					in Windows 95/98/Me Systems. With this support users do not encounter problems 
					with localized fonts and texts.
					</li>
					<li>
					The program works in all versions of Windows from 95 (Internet Explorer 
					4.0 required) to Vista, 32 and 64 bits.
					</li>
					<li>
					The program enables you to safely delete files by multiple overwrites of the 
					contents of the files, which makes restoration of deleted files practically 
					impossible.
					</li>
					<li>
					You can select different <a href='glossary.php#csp'>CSP</a>s, different ways of storing your private keys, 
					algorithms of encryption etc.
					</li>
					<li>
					By creating a self-decoded file, you can transfer files to computers where 
					SafeKuvert is not installed, and which has no support for Unicode.
					</li>
					<li>
					Additional items in the File context menu of Windows Explorer and the icon on 
					the desktop make using the program convenient and quick.
					</li>
				</ul>
				<h3 class="headerstyle">How the application is used</h3>
				<ul>
					<li>
					To encode files before being saved onto removable hardware (CD-ROM, disk, Flash 
					etc.), if you do not want this data to become accessible in the event of the 
					hardware being lost.
					</li>
					<li>
					To encode files using the certificates of the receiver of the Email message 
					when the files are being sent through public, unsecured computer networks.
					</li>
					<li>
					To encode important files on your computer, when you do not use various smart 
					cards to gain access to the computer. But in this case the private key must be 
					stored on the removable hardware (not in the operating system as it is done in 
					the Encryption File System).
					</li>
					<li>
					To encrypt and digitally sign files in operational systems that do not support 
					the Encrypted File System.
					</li>
				</ul>
				<p class="block"><a href="download.php">You can download our 31-day trial 
						version for free and find out for yourself how encrypted files are easy to use, 
						convenient and secure!</a></p>
<?php display_foot(); ?>