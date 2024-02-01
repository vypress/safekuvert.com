<?php
define('SK_PAGE_TITLE', 'Словарь терминов SafeKuvert');
define('SK_PAGE_DESCRIPTION', 'Словарь криптографических терминов, используемых в описаниях и документации');
define('SK_PAGE_KEYWORDS', 'RSA, PKCS, PKCS#7, Сертификат, X-509, PKI, Цифровая подпись, Шифрование, Инфраструктура открытого ключа');
include('segments.php');
display_head();
?>
					<div id="intro">
					<h1><a id="maincontent"></a>Словарь терминов</h1>
					</div>
					<div class="clear"></div>
		<ul>
			<li>
				<a id='pki' name='pki'></a><b>Инфраструктура открытого ключа "PKI (Public Key Infrastructure)"</b>
			- является системой цифровых сертификатов, центров сертификации (ЦС) и других 
			центров регистрации (ЦР), которая производит проверку и подтверждение 
			подлинности каждой из сторон, участвующих в электронной операции, с помощью 
			криптографии открытых ключей.</li>
			<li>
				<b>Ключевая пара открытый/закрытый ключ "Public/private key pair"</b>
			- определяет ключевую пару несимметричного алгоритма ЭЦП (например, RSA, DSS) 
			или ключевого обмена (например, DH).</li>
			<li>
				<a id='pkcs7' name='pkcs7'></a><b>Криптографические стандарты открытых ключей "PKCS (Public Key Cryptographic 
					Standards)"</b>
			- криптографические стандарты RSADSI, описывающие различные аспекты применения 
			инфраструктуры открытых ключей.</li>
			<li>
				<b>Криптографический ключ "Cryptographic key"</b>
			- параметрический компонент криптографического преобразования, весь или 
			частично неизвестный противнику (злоумышленнику), выполняющему криптоанализ 
			(дешифрование). Данным термином обозначаются как симметричные ключи шифрования, 
			так и несимметричные ключи или ключевые пары. При работе в рамках 
			криптографического интерфейса под термином "ключ" понимается вся совокупность 
			ключевой информации, участвующей в процессе криптографического преобразования. 
			Точный набор параметров ключевой информации зависит от конкретного алгоритма 
			криптографического преобразования - шифрования, электронной цифровой подписи 
			или ключевого обмена. Например, для ключа блочного шифрования совокупность 
			ключевой информации составляют сам ключ, модификатор ключа (если он имеется), 
			синхропосылка, содержимое внутренних регистров шифра.</li>
			<li>
				<a id='csp' name='csp'></a><b>Криптографический модуль, криптопровайдер "Cryptographic service provider (CSP)"</b>
			- это независимый программный модуль, выполняющий криптографические алгоритмы 
			для проверки подлинности, кодировки и шифрования.</li>
			<li>
				<a id='pk' name='pk'></a><b>Секретный ключ ключевой пары "Private key"</b>
			- точный набор параметров, которые составляют секретный ключ, зависит от 
			конкретного алгоритма. Для одного и того же алгоритма представление секретного 
			ключа могут отличаться. Например, для стандарта RSA секретный ключ имеет два 
			варианта представления.</li>
			<li>
				<a id='cert' name='cert'></a><b>Сертификат открытого ключа</b>, обычно называемый просто сертификатом - 
			это документ с цифровой подписью, связывающий значение открытого ключа с 
			удостоверением пользователя, устройства или службы, которым принадлежит 
			соответствующий закрытый ключ. Большинство широко используемых сертификатов 
			основано на стандарте сертификата X.509v3. Сертификаты могут выдаваться для 
			различных целей, таких как проверка подлинности пользователя Интернета, 
			проверка подлинности веб-сервера, защита электронной почты (с использованием 
			S/MIME), безопасность IP (IPSec), безопасность на уровне транзакций (TLS) и 
			подписание кода. Кроме того, центры сертификации выдают сертификаты другим 
			центрам сертификации для создания иерархии сертификации.</li>
			<li>
				<b>Сессионный ключ "Session key"</b>
			- как правило, симметричный ключ блочного (например, DES, AES, RC2) или 
			поточного (например, RC4) шифрования. "Сессионный" означает временный, 
			используемый только для одного сеанса защищенной (закрытой) связи. В рамках 
			концепции PKI долговременными являются ключевые пары цифровой подписи и 
			ключевого обмена.</li>
			<li>
				<b>Служба каталогов "Directory"</b>
			- распределенная база данных, содержащая информацию о компьютерных ресурсах 
			организации и ее кадрах. Каждый ресурс представлен в ней в виде объекта - 
			записи в каталоге. Система каталогов обеспечивает иерархическое представление 
			записей, делая информацию наглядной и легко управляемой. В традиционной системе 
			каталоги представляют собой единую объединенную базу данных, обеспечивающую 
			аутентификацию пользователей, администрирование сетевой ОС, а также управление 
			правами доступа к различным ресурсам системы. Приложения, использующие 
			распределенную среду, такие как службы обмена сообщениями, системы группового 
			планирования или бизнес-системы, работающие с СУБД, как правило, имеют 
			собственные каталоги, используемые в аналогичных целях. Применение службы 
			каталогов, ведущей единую базу данных вместо разрозненных списков, позволяет 
			устранить избыточную информацию и снижает объем работ по ведению и 
			синхронизации каталогов.</li>
			<li>
				<b>Хранилище сертификатов</b>&nbsp;- Операционная система Windows хранит 
			сертификат локально на компьютере или устройстве, запросивших сертификат, или, 
			для пользователя - на компьютере или устройстве, использованном для запроса. 
			Место хранения называется хранилищем сертификатов. Хранилище сертификатов часто 
			содержит многочисленные сертификаты, возможно, полученные от различных центров 
			сертификации. Операционная система Windows может также публиковать сертификаты 
			в Active Directory. Опубликование сертификата в Active Directory позволяет всем 
			пользователям и компьютерам, имеющим соответствующие разрешения, извлекать 
			сертификат по мере необходимости.</li>
			<li>
				<b>Электронная цифровая подпись (ЭЦП), цифровая подпись, подпись "Digital 
					signature"</b>
			- строка бит, полученная в результате выполнения процесса формирования подписи.</li>
			<li>
			<a id='aes' name='aes'></a><b>"AES (Advanced Encryption Standard)"</b>
			-  американский стандарт шифрования данных. Это симметричный алгоритм шифрования
			использующий один ключ для шифрования и расшифровывания данных. Существуют
			разновидности алгоритма с длиной блока 128, 192, или 256 бит. Алгоритм AES
			в настоящее время заменил DES в качестве стандартного алгоритма шифрования,
			используемого в государственных учреждениях США.</li>
			<li>
				<a id='des' name='des'></a><b>DES (Data Encryption Standard)</b>
			- американский стандарт шифрования данных. DES - первый опубликованный в 
			открытых источниках блочный алгоритм с длиной блока 64 бита и длиной ключа 56 
			бит. DES принят еще в 1976 году, в настоящее время в США принят новый стандарт 
			шифрования данных(AES), прототипом которого послужил алгоритм шифрования 
			Rijndail.</li>
			<li>
				<b>MD2, MD4, MD5 (Message Digest)</b>
			- группа алгоритмов хеширования данных, разработанных Роном Райвестом. Во всех 
			трех алгоритмах вырабатывается хеш длиной 128 бит.</li>
			<li>
				<a id='rc2' name='rc2'></a><a id='rc4' name='rc4'></a><b>RC2, RC4 (Rivest Cipher), Алгоритм шифрования Райвеста</b>
			- группа алгоритмов шифрования данных, разработанных Роном Райвестом для 
			RSADSI. RC2 - блочный алгоритм с длиной блока 64 бита и эффективной длиной 
			ключа от 8 до 128 бит. RC4 — поточный алгоритм с изменяющейся длиной ключа. RSA 
			(Rivest, Shamir, Adleman) - алгоритм шифрования на несимметричных ключах, 
			разработанный Роном Райвестом, Ади Шамиром и Леонардом Адлеманом.</li>
			<li>
				<b>SHA (Secure Hash Algorithm)</b> - алгоритм хеширования данных, разработанный 
				NIST совместно с NSA для использования в паре с алгоритмом цифровой подписи 
				DSA. Алгоритм вырабатывает хеш длиной 160 бит.
			</li>
		</ul>
<?php display_foot(); ?>