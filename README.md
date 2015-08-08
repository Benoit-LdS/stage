# Stage
Stage BDE 2015

Live : http://46.101.250.245/

# Semaine 1 : 29 Juin - 5 Juillet : Mise en route
Projet Curriculum Vitae - Branche CV
- Prise en main de Github et de ses commandes
- Administration d'un VPS Debian 8.1
- Apprentissage du langage HTML5

# Semaine 2 : 6 Juillet - 12 Juillet : Plateforme d'achat
- Projet PHP/SQL - Branche PHP

Une plateforme d'achat simple devra être codé en HTML5 et PHP. Ce projet devra comporter 4 pages :
- Récupération du Nom, Prénom, Adresse et Numéro de téléphone du client
- Affichage de 5 articles au choix, un article comprend une image, un prix HT, un prix TTC, une quantité.
- Mise en panier des articles et affichage de la facture détaillée avec les coordonnées du client, la liste des articles, le sous-total par article HT et TTC en fonction de la quantité, le total HT et TTC (TTC à calculer par requête SQL uniquement).
- Création d'un tableau commande et facture et persistance de la commande dans la base de données {ID Commande, Nom, Prénom, Adresse, numéro, ID Facture} et {ID Facture, quantité article1, .., quantité article5, Total TTC} et affichage d'un message de fin.

Contraintes : Interdiction de sauvegarder l'utilisateur dans la base de données au début, pas de session, pas de cookie. Seuls les articles devront être dans la base de données au début.

# Semaines 3, 4 et 5 : 13 Juillet - 31 Juillet : Découverte de Symfony2
- Suivi du cours Openclassrooms pour créer sa propre application symfony. 
- Notions de conception MVC, bundle et routage.

# Semaines 6 et 7 : 3 Août - 14 Août : Site type Blog 
- Site avec plusieurs (3 ou plus) articles par page.
- Articles avec contenu et date, au moins 5 articles d'exemple, gérés par la base de donnée.
- Panel admin pour créer un article à l'aide d'un formulaire.
- Options du panel admin : créer, modifier, supprimer un article.
