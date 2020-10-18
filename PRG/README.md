POST-REDIRECT-GET
================

Le but de cet atelier est de prévenir la soumission multiple des formulaires.

Objectifs
---------

* Manipuler différents types de contrôles.
* Traiter les données d'un formulaire.
* Se familiariser avec les classes et les méthodes PHP.

Exercices
---------

1. Commencez par créer une classe `header.php` et une deuxième classe `footer.php` . On fera appel à ces classes dans le reste des pages de cet exercie.

2. Créez un fomulaire d'inscription (avec la méthode POST) à un site de rencontre.

   Le formulaire doit contenir les champs suivants :
   - Nom (35 caractères max)
   - Prénom (25 caractères max)
   - Adresse courriel
   - Nom d'utilisateur (8 caractères max) 
   - Mot de passe
   - Age (Le candidat doit avoir au moins 18 ans et au plus 35 ans pour pouvoir s'inscrire au site)
   - Le sex suivant la norme ISO-5218 (boutons radios, un seul choix possible).


2. Ajoutez le champ pour permettre au candidat d'ajouter sa photo de profil. Les seules extensions accéptées seront `.png` et `.jpeg`.

3. Le candidat doit spécifier quel type d'admission il aimerait choisir (boutons radios, un seul choix possible) parmi les suivants :
   - Membre régulier
   - Membre prémium
   - Membre observateur
 

4. Un bouton `Soumettre` doit permettre au candidat de soumettre sa demande d'admission. Si toutes les contraintes sont respectées une page de confirmation devra etre affichée.

6. En cas d'erreur, un message significatif devra s'afficher à l'écran.
