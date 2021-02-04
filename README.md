INSTALLATION
git clone https://github.com/nassim-kechida/checkpoint4.git
cd checkpoint4
composer install

CONFIGURATION
Créer un fichier .env.local :

DATABASE_URL=mysql://root:password@127.0.0.1:3306/parc-auto

DEMARRER LE SERVEUR
symfony serve
