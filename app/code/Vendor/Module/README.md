Instrukcje Instalacji:

Przenieś folder Vendor do app/code.

Uruchom następujące komendy w katalogu głównym Magento 2:

php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f
php bin/magento cache:clean
