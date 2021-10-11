<?php
class Secret {
	private $ciphering = "AES-128-CTR";
	private $option = 0;

	function encrypt($item){
		return openssl_encrypt($item, $this->ciphering, $this->getKey()->Key, $this->option, $this->getRandom());
	}

	function decrypt($item){
		return openssl_decrypt($item, $this->ciphering, $this->getKey()->Key, $this->option, $this->getRandom());
	}

	function getKey(){
		return json_decode(file_get_contents(__DIR__ ."/secret.json"));
	}

	function getRandom(){
		return random_bytes(openssl_cipher_iv_length($this->ciphering));
	}
}

$hide = new Secret();
