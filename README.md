Guide d'installation et d'exécution du projet Laravel

Prérequis
Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre machine :

- [PHP](https://www.php.net/downloads.php) (>= 8.0)
- [Composer](https://getcomposer.org/download/)
- [MySQL](https://dev.mysql.com/downloads/) ou [MariaDB](https://mariadb.org/download/)
- [Node.js et npm](https://nodejs.org/en/download/)
- [Git](https://git-scm.com/downloads) (optionnel, mais recommandé)

Installation du projet

1. Cloner le projet

git clone https://github.com/votre-repo/projet-laravel.git
cd projet-laravel


2. Installer les dépendances PHP
bash
composer install


3. Créer et configurer l'environnement
bash
cp .env.example .env


Modifiez ensuite le fichier `.env` pour configurer la base de données :

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nom_de_votre_base
DB_USERNAME=votre_utilisateur
DB_PASSWORD=votre_mot_de_passe
```

4.Générer la clé d'application

php artisan key:generate


5. Exécuter les migrations et seeder les données (optionnel)

php artisan migrate --seed
```

6. Installer les dépendances JavaScript

npm install && npm run dev
```

Lancer le serveur

1. Démarrer le serveur Laravel

php artisan serve

Accédez ensuite à [http://127.0.0.1:8000](http://127.0.0.1:8000)

2. Lancer Vite (si nécessaire pour le frontend)

npm run dev


Tests
Pour exécuter les tests :

php artisan test


