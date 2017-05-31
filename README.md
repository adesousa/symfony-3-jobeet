Industrialiser sa plateforme de développement
===

Ce projet est basé sur les travaux de tulik eux-mêmes basés sur le projet exemple de symfony1 pour apprendre à coder sous le framework symfony1. Tulik, l'a remis à jour en se basant sur symfony3 afin de permettre aux débutants de démarrer et apprendre simplement ce framework avec un projet de test.

Symfony 3 Jobeet Installation
===

1. Télécharger le projet au format zip ici https://github.com/adesousa/symfony-3-jobeet
2. Créer une base de données "symfony" et un utilisateur Mysql eisti avec le mot de passe eisti avec tous les droits sur la base de données symfony:  `GRANT ALL PRIVILEGES ON symfony.* TO 'eisti'@'%' IDENTIFIED BY 'eisti';`
3. `php composer.phar install`
4. `php bin/console doctrine:database:create`
5. `php bin/console doctrine:schema:create`

Industrialisation Niveau 0
===

1. Créer un virtualhost dev.jobeet.com sous Apache ou Nginx en prenant en compte les particularités du framework sf3, plus d'aide ici : http://symfony.com/doc/current/setup/web_server_configuration.html

Industrialisation Niveau 1
===

1. Suppression du projet local
2. Création d'un compte GitHub
3. Installation de git en local
4. Configuration de git
5. Clone de ce repo en local
6. Se familiariser avec quelques commandes essentielles de git, plus d'aide ici : https://git-scm.com/book/fr/v1/Les-bases-de-Git
6. Se familiariser avec le backlog du projet, ici : https://github.com/adesousa/symfony-3-jobeet/projects/1?fullscreen=true
7. Lire la story la plus prioritaire puis la découper en tâches dans l'outil git et se répartir le travail en équipe
8. Coder puis Commit avec lien de tâche en commentaire, push/pull chacun de son côté pour voir le rendu
9. Analyser l'outil de gestion git pour voir la liaison des commits avec leurs tâches respectives

Industrialisation Niveau 2
===

1. Prendre connaissance du feature branching et de sa méthode d'application, ainsi que les commandes git essentielles pour sa bonne mise en application, plus d'aide ici https://www.atlassian.com/git/tutorials/comparing-workflows#feature-branch-workflow
1. Lire les deux stories prioritaires suivantes, les découper en tâches dans l'outil git et se répartir le travail en 2 équipes. Chaque équipe est constituée de 2 personnes. Ainsi 2 personnes seront en simultanées sur une seule story
2. Créer les 2 branches de dev basées sur ces 2 stories et basculer dessus pour le développement
3. Coder puis Commit avec lien de tâche en commentaire, push/pull chacun de son côté pour voir le rendu
4. Analyser l'outil de gestion git pour voir la liaison des commits avec leurs tâches respectives
5. Merger son code sur la branche master puis détruire la branche de dev

Industrialisation Niveau 3
===

1. Installation de phpunit pour votre projet: php composer.phar require --dev phpunit/phpunit ^5.7
2. Lancement de phpunit via ./vendor/bin/phpunit (vous pouvez le mettre en global via les variables d'environnement) et voir les tests existants
3. Se familiariser avec quelques commandes de bases et un exemple concret : https://phpunit.de/getting-started.html
4. Se familiariser avec le développement des tests sous Symfony, plus d'aide ici : http://symfony.com/doc/current/testing.html, arrêtez-vous à la partie tests unitaires, on laisse de côté pour l'instant les tests fonctionnels.
5. Développement de quelques tests unitaires sur les repositories (la couche d'accès à la base de données), plus d'aide ici : http://symfony.com/doc/current/testing/doctrine.html, Tester unitairement le repo JobRepository et notamment sa fonction existante. Si vous souhaitez aller plus loin, créer d'autres fonctions dans ce repo et testez le unitairement

Industrialisation Niveau 4
===

1. Installation de Behat en ajoutant ces lignes au fichier composer.json dans la section require-dev :

        "behat/behat": "~3.1",
        "behat/symfony2-extension": "~2.1",
        "behat/mink": "~1.7",
        "behat/mink-extension": "~2.2",
        "behat/mink-selenium2-driver": "~1.3",
        "behat/mink-browserkit-driver": "~1.3",
        "emuse/behat-html-formatter": "dev-master"

2. Autoload des contextes behat en ajoutant cette ligne au fichier composer.json dans la section psr-4

>     "AppBundle\\Tests\\Behat\\Context\\": "features/context/"

3. On met à jour notre projet pour qu'il prenne en compte behat: php composer.phar update
4. Installation du serveur Selenium en téléchargeant le 3.4.0 jar ici https://goo.gl/s4o9Vx et le webdriver chrome ici https://chromedriver.storage.googleapis.com/index.html?path=2.29/
5. Le lancer dans une fenêtre shell en tapant: `java -jar selenium-server-standalone-3.4.0.jar`, s'assurer que le webdriver chrome téléchargé est dans le même dossier que le serveur selenium, plus d'aide sur la configuration du driver chrome selon votre environnement ici : https://github.com/SeleniumHQ/selenium/wiki/ChromeDriver
6. Lancer les tests existants de la fonctionalité joblist par exemple: `./vendor/bin/behat --suite=joblist`
7. Par défaut les suites de tests existantes se lancent sous selenium2, modifier la config pour les lancer sous symfony2 (mode browserless) pour voir la différence de comportement puis revenir en selenium2 pour la suite des tests
8. Consulter ensuite la sortie des tests en html ici : web/reports/behat
9. Développement de quelques tests d'acceptation sur les stories développées "Contact" et "Menu (de la page joblist)" (couvrir les critères d'acceptation demandés par le Product Owner), plus d'aide ici : http://www.jpsymfony.com/tests/behat-3-et-mink-avec-symfony2 et ici http://blog.lepine.pro/images/2012-03-behat-cheat-sheet-en.pdf

**Quelques précisions**
> Un dossier feature correpond à une fonctionnalité (feature Scrum)
> Un fichier .feature correspond à une User Story (En Scrum)
> Un à n scénario Gherkin d'un ".feature" correspondent à la couverture d'un critère d'acceptation en Scrum

Industrialisation Niveau 5
===

1. Installer Jenkins en téléchargeant le .war ici : https://jenkins.io/download/ section Generic Java Package et lancer le serveur via java -jar jenkins.war
2. Création d'une branche "preprod" sous git
3. Réalisation d'un "job on push" basé sur la branche master selon ces critères:
	- Plus d'aide ici : https://dunglas.fr/2014/11/continuous-integration-for-symfony-apps-the-modern-stack-quality-checks-private-composer-headless-browser-testing/
	- Si le sous ensemble des tests unitaires est ok, alors on intègre en préprod dans http://195.154.12.151:8080/preprod (on ne lance que les tests unitaires des users stories touchées par nos développements) puis on push sur la branche git preprod
	- Modifier le job d'intégration pour ajouter : Si sous ensemble de tests fonctionnels (on ne lance que les tests fonctionnels (BDD) des users stories touchées par nos développements et sous driver symfony2 car plus rapide et suffisant pour une préprod) ok, alors on intègre en préprod dans http://195.154.12.151:8080/preprod puis on push sur la branche git preprod
4. Créer un virtual host preprod.jobeet.com qui pointe sur http://195.154.12.151:8080/preprod

**(Facultatif): Faire de la qualité !**
> Installer les règles choisies en PHP
> Installer Sonar
> Installer un plugin du type sonore quand JobFail
> Appréhender les dashboards

Industrialisation Niveau 6
===

1. Création d'une branche "prod" sous git
2. Réalisation d'une plateforme de déploiement continue selon les critères suivants:
	- Plus d'aide ici : https://dunglas.fr/2014/11/continuous-integration-for-symfony-apps-the-modern-stack-quality-checks-private-composer-headless-browser-testing/
	- Lancer le job de déploiement en prod uniquement si push existant sur la branche préprod (c'est que tout le code est propre en préprod car vérifié par l'intégration continue) dans le job d'intégration
	- Lancer tous les tests unitaires et tous les tests fonctionnels (sous driver selenium2 car plus sur, plus complet pour une mise en prod) sur la branche préprod. Si ok, push vers la branche git prod puis déploiement dans http://195.154.12.151:8080/prod
3. Créer un virtual host www.jobeet.com qui pointe sur http://195.154.12.151:8080/prod et lancer la prod depuis votre virtual host (n'est nécessaire qu'au niveau scolaire, n'a pas d'intérêt au niveau industrialisation, l'idéal étant de pusher sur le serveur de prod plutôt que sur le serveur jenkins d'intégration)

