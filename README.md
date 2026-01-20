# Installation

-   Si vous souhaitez utiliser l'exemple du cours *(ou récupérer un projet existant déjà sur git, c'est à dire sans l'installer avec composer)*, voici la marche à suivre:
    -   on clone le repo (`git clone https://github.com/MIASHS-UGA-PWS/example-cours-2026`)
    -   on «créer» un `.env` (`cp .env.example .env`)
    -   on installe les dépendances du projet (`composer install`)
    -   on installe les dépendances front-end (`npm install && npm run build`)
    -   on genere une clé d'application (`php artisan key:generate`)
    -   on crée la base de donnée sqlite (`touch database/database.sqlite`)
    -   on lance les migrations (`php artisan migrate`)
    -   on lance l'application (`composer run dev`)

```bash 
git clone https://github.com/MIASHS-UGA-PWS/example-cours-2026
cp .env.example .env
composer install
npm install && npm run build
php artisan key:generate
touch database/database.sqlite
php artisan migrate
composer run dev
```
