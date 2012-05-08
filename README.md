REDISKO
=======

REDISKO - singleton style class for interaction between PHP and NoSQL Database Redis
Redis is an open source, advanced key-value store. It is often referred to as a data
structure server since keys can contain strings, hashes, lists, sets and sorted sets.

This project in mainly inspired by <a href="https://github.com/vodolaz095/redisent">redisent</a> class by
<a href="https://github.com/jdp">JDP</a>, but in difference it has a different class assembly, based on my
<a href="https://github.com/vodolaz095/DBq">DBq</a> class for interaction between PHP and MySQL


## Introduction

If you're at all familiar with the Redis protocol and PHP objects, you've already mastered Redisent.
Redisent translates method calls to their [Redis protocol](http://redis.io/topics/protocol) equivalent, abstracting away the nitty-gritty, and then makes the return values PHP compatible.

## Features

### Shared Redis API

The REDISKO method names map directly to their Redis command counterparts.
The full list is available in the [command reference](http://redis.io/commands).

#### Setting Keys

```php
REDIS::set('foo', 'bar')
// SET foo bar
```

#### Working with lists

```php
REDIS::lpush('particles', 'electron')
// LPUSH particles electron
REDIS::lpush('particles', 'proton')
// LPUSH particles proton
REDIS::lpush('particles', 'neutron')
// LPUSH particles neutron
REDIS::llen('particles')
// LLEN particles
```

#### Getting statistical and debug information
```php
print_r(REDIS::s());
```
This command will output an array with usefull information about all redis command issued since the beginning of the script execution

## Quick Start

Redisko has no dependencies aside from requiring PHP versions 5.3 and later.
To add it to your project, simply drop the Redisko.php file into your project structure, instantiate a Redis instance, and start issuing commands.

```php
require_once 'REDISKO.php';
$REDIS::set('x', '5');
echo "x=".$REDIS::get('x').PHP_EOL;
```

Any errors originating from Redis will be wrapped in a `Exception` and thrown.


## Contributing

Pull requests please! Feature/topic branches are especially appreciated.

## Roadmap

Redis has grown to be very feature rich, and Redisent is lagging behind.

* Publish/subscribe
* Transactions

## About

Copyright &copy; 2003-2012 [Anatoly Ostroumov](http://teksi.ru/webdev)

## License

Licensed under the [ISC License](http://www.opensource.org/licenses/ISC).

Copyright (c) 2003-2012 Anatoly Ostroumov <info@fotobase.org>

Permission to use, copy, modify, and/or distribute this software for any purpose with or without fee is hereby granted, provided that the above copyright notice and this permission notice appear in all copies.

THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS SOFTWARE.