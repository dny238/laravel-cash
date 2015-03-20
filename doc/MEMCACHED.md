Install memcached
============

## Ubuntu 12.04

Instructions [here](https://www.digitalocean.com/community/articles/how-to-install-and-use-memcache-on-ubuntu-12-04)

## OSX

```sh
$ brew install memcached
$ brew tap homebrew/dupes
$ brew tap josegonzalez/homebrew-php
$ brew install php55-memcached
```

## CentOS
```sh
yum install memcached
yum install php-pear
yum install php-pecl-memcached
/etc/init.d/memcached start
```
If you are reading this, please make a pull request and improve this article.
