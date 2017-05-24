Industrialiser sa plateforme de développement
===

Ce projet est basé sur les travaux de tulik eux-même basés sur le projet exemple de symfony1 pour apprendre à coder sous le framework symfony1. Tulik, l'a remis à jour en se basant sur symfony3 afin de permettre aux débutants de démarrer et apprendre simplement ce framework avec un projet de test.

Symfony 3 Jobeet Installation
===

1. php composer.phar install
2. php bin/console doctrine:database:create
3. php bin/console doctrine:schema:create

Industrialisation Niveau 0
===

1. Créer un virtualhost dev.jobeet.com sous Apache ou Nginx en prenant en compte les particularités du framework sf3, plus d'aide ici : [http://symfony.com/doc/current/setup/web_server_configuration.html]

Industrialisation Niveau 1
===

1. Suppression du projet local
2. Création d'un compte GitHub
3. Installation de git en local
4. Configuration de git
5. Clone de ce repo en local
6. Se familiariser avec quelques commandes essentielles de git, plus d'aide ici : [link git essential commands]
7. Lire la story la plus prioritaire puis la découper en tâches dans l'outil git et se répartir le travail en équipe
8. Coder puis Commit avec lien de tâche en commentaire, push/pull chacun de son côté pour voir le rendu
9. Analyser l'outil de gestion git pour voir la liaison des commits avec leurs tâches respectives

Industrialisation Niveau 2
===

1. Lire les deux stories prioritaires suivantes, les découper en tâches dans l'outil git et se répartir le travail en 2 équipes. Chaque équipe est constituée de 2 personnes. Ainsi 2 personnes seront en simultanées sur une seule story
2. Crée les 2 branches de dev basées sur ces 2 stories et basculer dessus pour le développement
3. Coder puis Commit avec lien de tâche en commentaire, push/pull chacun de son côté pour voir le rendu
4. Analyser l'outil de gestion git pour voir la liaison des commits avec leurs tâches respectives
5. Merger son code sur la branche master puis détruire la branche de dev

Industrialisation Niveau 3
===

1. Installation de phpunit pour votre projet: php composer.phar require --dev phpunit/phpunit ^5.7
2. Lancement de phpunit via ./vendor/bin/phpunit (vous pouvez le mettre en global via les variables d'environnement) et voir les tests existants
3. Se familiariser avec quelques commandes de bases et un exemple concret : [https://phpunit.de/getting-started.html]
4. Se familiariser avec le développement des tests sous Symfony, plus d'aide ici : [http://symfony.com/doc/current/testing.html], arrêtez-vous à la partie tests unitaires, on laisse de côté pour l'instant les tests fonctionnels.
5. Développement de quelques tests unitaires sur les repositories (la couche d'accès à la base de données), plus d'aide ici : [http://symfony.com/doc/current/testing/doctrine.html], Tester unitairement le repo JobRepository et notamment sa fonction existante. Si vous souhaitez aller plus loin, créer d'autres fonctions dans ce repo et testez le unitairement

Industrialisation Niveau 4
===

1. Installation de Behat
2. Lancer les tests existants: bin/behat
3. Développement de quelques tests d'acceptation sur les 2 dernières stories développées (couvrir les critères d'acceptation demandés par le Product Owner), plus d'aide ici : [http://www.jpsymfony.com/tests/behat-3-et-mink-avec-symfony2]










