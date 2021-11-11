<?php
class Secret {
	private $ciphering = "AES-128-CTR";
	private $crypt;
	private $option = 0;

	function encrypt($item){
		if(!isset($this->crypt)) getRandom();
		return openssl_encrypt($item, $this->ciphering, $this->getKey()->Key, $this->option, $this->crypt);
	}

	function decrypt($item){
		if(!isset($this->crypt)) getRandom();
		return openssl_decrypt($item, $this->ciphering, $this->getKey()->Key, $this->option, $this->crypt);
	}

	function getKey(){
		return json_decode(file_get_contents(__DIR__ ."/secret.json"));
	}

	function getRandom(){
		return $this->crypt = bin2hex(openssl_random_pseudo_bytes(8));
	}
	function addKey($item){
		$this->crypt = $item;
	}
}

$hide = new Secret();
