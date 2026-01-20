# Installation

-   Si vous souhaitez utiliser l'exemple du cours *(ou récupérer un projet existant déjà sur git, c'est à dire sans l'installer avec composer)*, voici la marche à suivre:
    -   On clone le repo (`git clone https://github.com/MIASHS-UGA-PWS/example-cours-2026`)
    -   On initialise le projet et installe les dépendances (`composer run setup`) Cette commande remplace les commandes suivantes:
        
        -   ~~on «créer» un `.env` (`cp .env.example .env`)~~
        -   ~~on installe les dépendances du projet (`composer install`)~~
        -   ~~on installe les dépendances front-end (`npm install && npm run build`)~~
        -   ~~on genere une clé d'application (`php artisan key:generate`)~~
        -   ~~on crée la base de donnée sqlite (`touch database/database.sqlite`)~~
        -   ~~on lance les migrations (`php artisan migrate`)~~
        
        ```shell 
        git clone https://github.com/MIASHS-UGA-PWS/example-cours-2026
        composer run setup
        ```

-   Cette opération est à réaliser une seule fois. Ensuite il suffira de faire un `git pull` pour récupérer les mises à jour du projet.
-   On peut ensuite lancer le projet:
    
    ```shell 
    composer run dev
    ```
