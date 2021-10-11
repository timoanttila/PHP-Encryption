# How to encrypt and decrypt a PHP string

All personal information and keys should be encrypted before inserting those to the database. Making simple encryption is very easy. I use similar protection for all the customers of the online stores I make.

The example consists of three files, but all actions can also be in the same file without functions. I like object-oriented programming (OOP) style, so I use *Class Secret*.

There are four functions within the Class Secret. Functions *encrypt* and *decrypt* handle string protection, *getKey* retrieves the encryption key, and *getRandom* generates a random number sequence for each query.

**openssl_encrypt()**  
Used to encrypt the data.

**openssl_decrypt()**  
Used to decrypt the data.

**$options**  
Holding the bitwise disjunction of the flags OPENSSL_RAW_DATA and OPENSSL_ZERO_PADDING.

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
