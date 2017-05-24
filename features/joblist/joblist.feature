# Ici mettre la description de la user story
Feature: Amélioration de l'expérience utilisateur de la Liste des Jobs
	EN TANT QUE Gestionnaire de la plateforme jobeet,
	JE VEUX accéder à une plateforme user friendly
	AFIN DE mettre à jour les offres existantes

# Ici créer 1 à n scénarios qui vont valider les critères d'acceptation du product owner
Scenario: Infos essentielles présentes
    Given I am on "/job"
    Then I should see "Jobs list"