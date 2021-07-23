#!/bin/sh

# テストの実行
/usr/bin/php /home/vagrant/php/test_kakikata/test3/vendor/bin/phpunit /home/vagrant/php/test_kakikata/test3/test

# グループ名がdevを定期実行
/usr/bin/php /home/vagrant/php/test_kakikata/test3/vendor/bin/phpunit /home/vagrant/php/test_kakikata/test3/test --group dev

# Sample.phpのAdd関数のみを定期実行
/usr/bin/php -r "include '/home/vagrant/php/test_kakikata/test3/src/Sample.php'; Vagrant\Test3\Sample::Add(3, 7);"