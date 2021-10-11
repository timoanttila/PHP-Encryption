# How to encrypt and decrypt a PHP string

All personal information and keys should be encrypted before inserting those to the database. Making simple encryption is very easy.

The example consists of three files, but all actions can also be in the same file without functions. I like object-oriented programming (OOP) style, so I use **Class Secret**.

First declare a string and store it into variable and use **openssl_encrypt()** function to encrypt the given string and use **openssl_decrypt()** function to descrypt the given string. Sounds pretty simple, right?

### Functions

#### encrypt

Protect string using a PHP plugin **openssl_encrypt()**.

#### descrypt

Open encrypted string using a PHP plugin **openssl_decrypt()**  

#### getKey

Retrieves the encryption key.

#### getRandom

Generates a random number sequence for each query.

### Other things

#### ciphering AES-128-CTR

Encryption method ([Wikipedia](https://en.wikipedia.org/wiki/Advanced_Encryption_Standard)).

#### options

Holding the bitwise disjunction of the flags OPENSSL_RAW_DATA and OPENSSL_ZERO_PADDING.

### Example syntax

```
string openssl_encrypt(
  string $data,
  string $method,
  string $key,
  $options = 0,
  string $iv,
  string $tag= NULL,
  string $aad,
  int $tag_length = 16
)
```
