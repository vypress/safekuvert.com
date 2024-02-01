<?php
define('SK_PAGE_TITLE', 'SafeKuvert Terms');
define('SK_PAGE_DESCRIPTION', 'Cryptography terms that are used in description and documentation');
define('SK_PAGE_KEYWORDS', 'RSA, PKCS, PKCS#7, Certificate, X-509, PKI, Digital signature, Encryption, Public key cryptography');
include('segments.php');
display_head();
?>
					<div id="intro">
					<h1><a id="maincontent"></a>Glossary</h1>
					</div>
					<div class="clear"></div>
		<ul>
			<li>
				<a id='aes' name='aes'></a><b>"Advanced Encryption Standard"</b>
			(AES) -  A block cipher that encrypts data in 128, 192, or 256-bit blocks.
			It is a symmetric algorithm that uses the same algorithm and key for encryption
			and decryption. AES has replaced the earlier Data Encryption Standard (DES)
			as the official U.S. government encryption standard.</li>
			<li>
				<b>"CryptoAPI"</b>
			(CAPI) - The component of Microsoft Windows-based platforms that provides 
			cryptographic services to applications. These services include the encryption 
			and decryption of data, creation and verification of digital signatures, and 
			generation and exchange of cryptographic keys.</li>
			<li>
				<b>"Cryptographic key"</b>
			- The session (symmetric) key used during the encryption and decryption 
			processes, and the public and private keys used during the authentication 
			process. Of these three keys, the session key and private key must always 
			remain secret.</li>
			<li>
				<a id='csp' name='csp'></a><b>"Cryptographic Service Provider"</b>
			(CSP) - A provider of cryptographic functions to Microsoft CryptoAPI (CAPI).</li>
			<li>
				<a id='cert' name='cert'></a><b>"Certificate"</b>
			- A digitally signed statement that contains information about an entity and 
			the entity's public key, thus binding these two pieces of information together. 
			A certificate is issued by a trusted organization (or entity) called a 
			certification authority (CA) after the CA has verified that the entity is who 
			it says it is. Certificates can contain different types of data. For example, 
			an X.509 certificate includes the format of the certificate, the serial number 
			of the certificate, the algorithm used to sign the certificate, the name of the 
			CA that issued the certificate, the name and public key of the entity 
			requesting the certificate, and the CA's signature.</li>
			<li>
				<b>"Certificate Revocation List"</b>
			(CRL) - A document maintained and published by a certification authority (CA) 
			that lists certificates issued by the CA that are no longer valid.</li>
			<li>
				<b>"Certificate store"</b>
			- A permanent storage where certificates, certificate revocation lists (CRLs), 
			and certificate trust lists (CTLs) are stored. It is possible, however, to 
			create and open a certificate store solely in memory when working with 
			certificates that do not need to be put in permanent storage.</li>
			<li>
				<b>"Certificate Trust List"</b>
			(CTL) - A predefined list of items that have been signed by a trusted entity. A 
			CTL can be anything, such as a list of hashes of certificates, or a list of 
			file names. All the items in the list are authenticated (approved) by the 
			signing entity.</li>
			<li>
				<a id='ca' name='ca'></a><b>"Certification Authority"</b>
			(CA) - An entity entrusted to issue certificates asserting that the recipient 
			individual, machine or organization requesting the certificate fulfills the 
			conditions of an established policy.</li>
			<li>
				<a id='des' name='des'></a><b>"Data Encryption Standard"</b>
			(DES) - A block cipher that encrypts data in 64-bit blocks. DES is a symmetric 
			algorithm that uses the same algorithm and key for encryption and decryption. 
			Developed in the early 1970s, DES is also known as the DEA (Data Encryption 
			Algorithm) by ANSI and the DEA-1 by ISO.</li>
			<li>
				<b>"Digital signature"</b>
			- A digital string that is bundled with the message or transmitted separately. 
			They are used to authenticate messages. A valid digital signature confirms that 
			the message has not been tampered with, and may also identify the entity who 
			signed the message. Signing a message does not alter the message itself.</li>
			<li>
				<b>"Digital Signature Algorithm"</b>
			(DSA) - A public-key algorithm specified by Digital Signature Standard (DSS). 
			DSA is only used to generate digital signatures. It cannot be used for data 
			encryption.</li>
			<li>
				<b>"Directory service"</b>
			- A software application or a set of applications that stores and organizes 
			information about a computer network's users and network resources, and that 
			allows network administrators to manage users' access to the resources.</li>
			<li>
				<b>"Hash"</b>
			- A fixed-size result obtained by applying a mathematical function (the hashing 
			algorithm) to an arbitrary amount of data. (Also known as "message digest.").</li>
			<li>
				<b>"Hashing algorithm"</b>
			- An algorithm used to produce a hash value of some piece of data, such as a 
			message or session key. Typical hashing algorithms include MD2, MD4, MD5, and 
			SHA-1.</li>
			<li>
				<b>"Hashing functions"</b>
			- A set of functions used to create and destroy hash objects, get or set the 
			parameters of a hash object, and hash data and session keys.</li>
			<li>
				<b>"MD2 algorithm"</b>
			(MD2) - A hashing algorithm that creates a 128-bit hash value. MD2 was 
			optimized for use with 8-bit computers. MD2 was developed by RSA Data Security, 
			Inc.</li>
			<li>
				<b>"MD4 algorithm"</b>
			(MD4) - A hashing algorithm that creates a 128-bit hash value. MD4 was 
			optimized for 32-bit computers. It is now considered broken because collisions 
			can be found too quickly and easily. MD4 was developed by RSA Data Security, 
			Inc.</li>
			<li>
				<b>"PKCS"</b>
			- Stands for public key cryptography standards, a series of specifications
			for Public Key Infrastructure (PKI) implementation.</li>
			<li>
				<a id='pkcs7' name='pkcs7'></a><b>"PKCS#7"</b>
			- A specification for cryptographic message syntax.</li>
			<li>
				<a id='pk' name='pk'></a><b>"Private key"</b>
			- The secret half of a key pair used in a public key algorithm. Private keys 
			are typically used to encrypt a symmetric session key, digitally sign a 
			message, or decrypt a message that has been encrypted with the corresponding 
			public key.</li>
			<li>
				<b>"Public key"</b>
			- A cryptographic key typically used when decrypting a session key or a digital 
			signature. The public key can also be used to encrypt a message, guaranteeing 
			that only the person with the corresponding private key can decrypt the 
			message.</li>
			<li>
				<b>"Public key algorithm" -</b>
			An asymmetric cipher that uses two keys, one for encryption, the public key, 
			and the other for decryption, the private key. As implied by the key names, the 
			public key used to encode plaintext can be made available to anyone. However, 
			the private key must remain secret. Only the private key can decrypt the 
			ciphertext. The public-key algorithm used in this process is slow (on the order 
			of 1,000 times slower than symmetric algorithms), and is typically used to 
			encrypt session keys or digitally sign a message.</li>
			<li>
				<b>"Public key cryptography"</b>
			- A form of cryptography in which a user has a pair of cryptographic keys - a 
			public key and a private key. The private key is kept secret, while the public 
			key may be widely distributed. The keys are related mathematically, but the 
			private key cannot be practically derived from the public key. A message 
			encrypted with the public key can only be decrypted with the corresponding 
			private key.</li>
			<li>
				<b>"Public Key Cryptography Standards"</b>
			(PKCS) - A series of specifications for Public Key Infrastructure (PKI) 
			implementation.</li>
			<li>
				<a id='pki' name='pki'></a><b>"Public Key Infrastructure"</b>
			(PKI) - A set of technologies and policies for authenticating entities using 
			public key cryptography.</li>
			<li>
				<a id='rc2' name='rc2'></a><b>"RC2"</b>
			(Rivest Cipher) - A block cipher developed by Ron Rivest. RC2 is a block cipher 
			with variable key length that can be used as a replacement for Data Encryption 
			Standard (DES) for encryption and decryption of information. It is used 
			particularly in software exported internationally since RC2 is not subject to 
			the same restrictions as DES is for export control. RC2 employs a block size of 
			64 bits and adds a random "salt" to encryption keys to reduce the possibility 
			of certain types of cryptanalytic attack. RC2 is several times faster than DES 
			on comparable hardware and can be made more secure than DES by choosing a 
			suitably long key.</li>
			<li>
				<a id='rc4' name='rc4'></a><b>"RC4"</b>
			(Rivest Cipher) - A stream cipher developed by Ron Rivest. RC4 is a stream 
			cipher with variable key length that uses an algorithm based on random 
			permutations. RC4 performs encryption by generating a one-time pad and XORing 
			it bitwise with the stream of plaintext to create a corresponding stream of 
			ciphertext. The RC4 algorithm was originally proprietary and belonged to RSA 
			Security but was "outed" in 1994, which has allowed it to be extensively 
			analyzed by the cryptanalytic community. As a result, the cipher has been found 
			to be secure as long as the initial portion of the one-time pad is discarded. 
			RC4 can also be used as a pseudorandom number generator (PRNG) and is used for 
			encrypting Hypertext Transfer Protocol (HTTP) traffic in Secure Sockets Layer 
			(SSL) communications on the Internet.</li>
			<li>
				<a id='rsa' name='rsa'></a><b>"RSA"</b>
			- RSA Data Security, Inc., a major developer and publisher of public-key 
			cryptography standards (PKCS). The "RSA" in the name stands for the names of 
			the company's three developers and the owners: Rivest, Shamir, and Adleman.</li>
			<li>
				<b>"Session key"</b>
			- A randomly-generated key that is used one time, then discarded. Session keys 
			are symmetric (used for both encryption and decryption). They are sent with the 
			message, protected by encryption with a public key from the intended recipient. 
			A session key consists of a random number of approximately 40 to 2000 bits.</li>
			<li>
				<b>"Secure Hash Algorithm"</b> (SHA) - A hashing algorithm that generates a 
			message digest. SHA is used with the Digital Signature Algorithm (DSA) in the 
			Digital Signature Standard (DSS), among other places. There are four varieties 
			of SHA: SHA-1, SHA-256, SHA-384, and SHA-512. SHA-1 generates a 160-bit message 
			digest. SHA-256, SHA-384, and SHA-512 generate 256-bit, 384-bit, and 512-bit 
			message digests, respectively. SHA was developed by the National Institute of 
			Standards and Technology (NIST) and by the National Security Agency (NSA).</li></ul>
<?php display_foot(); ?>
