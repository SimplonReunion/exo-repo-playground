Les Repository de Symfony
=========================

# L'objectif

Un exo pour s'exercer avec les *repositories* de Symfony.

# Installation

* Cloner ce repo
* Installer les *vendors* de Symfony en faisant ```composer install```
* Créer la base de données et son schéma. (N'oubliez pas de mettre vos identifiants de base)
```
bin/console doctrine:database:create
```
```
bin/console doctrine:schema:create
```
* Charger les données en base de données
```
bin/console doctrine:fixtures:load
```

# Enoncé 

Vous devez créer les vues qui remplissent les conditions suivantes :

* Liste des gestionnaires
* Liste des gites
* Liste des chambres selon le gite sélectionné
* Liste des chambres disponibles pour tous les gites
* Liste des chambres non disponibles pour tous les gites
* Liste des clients
* Liste des réservations pour un client sélectionné
* Liste des réservations qui ont le statut "En cours" pour tous les gites
* Liste des réservation qui ont le statut "Réservé" pour tous les gites

** Une vue par condition **

Je vous laisse libre cours au format d'affichage (tableaux, paragraphes, etc.) 
*mais vous ne devez pas perdre du temps sur la mise en forme*




