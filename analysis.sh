#!/bin/bash

wget -O /usr/local/bin/phpunit https://phar.phpunit.de/phpunit-7.phar
chmod +x /usr/local/bin/phpunit

wget -O /usr/local/bin/phpcs https://squizlabs.github.io/PHP_CodeSniffer/phpcs.phar
chmod +x /usr/local/bin/phpcs

wget -O /usr/local/bin/phploc https://phar.phpunit.de/phploc.phar
chmod +x /usr/local/bin/phploc

wget -O /usr/local/bin/pdepend http://static.pdepend.org/php/latest/pdepend.phar
chmod +x /usr/local/bin/pdepend

wget -O /usr/local/bin/phpmd http://static.phpmd.org/php/latest/phpmd.phar
chmod +x /usr/local/bin/phpmd

wget -O /usr/local/bin/phpcpd https://phar.phpunit.de/phpcpd.phar
chmod +x /usr/local/bin/phpcpd

wget -O /usr/local/bin/phpdox http://phpdox.de/releases/phpdox.phar
chmod +x /usr/local/bin/phpdox
