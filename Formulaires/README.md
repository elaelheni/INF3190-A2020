# Formulaires HTML

Le but est de se familiariser avec le code HTML nécessaire pour produire des formulaires et le code PHP nécessaire pour traiter les données des formulaires.

## Objectifs
- Se familiariser avec les formulaires HTML.
- Manipuler les différents types de controles.
- Traiter les données d'un formulaire. 

## Exercices 

1- Dans la page `jeu.php` créez un champ d'un formulaire qui permet à l'utilisateur de deviner un chiffre entre 0 et 1000. 

Un message significatif devra s'afficher si le chiffre est trop petit, trop grand ou qu'il est bon.

2- Crèez un formulaire d'inscription à un agenda personnel dans la page `inscription.php` .

Le formulaire doit contenir :
- Un nom
- Un prénom
- L'age (max 2 caractères)
- Une liste déroulante pour choisir le sex suivant la norme ISO5218

Utilisez la méthode POST. Le serveur doit valider les données à la réception. L'age ne doit contenir que des chiffres et tous les champs (sauf la liste deroulante) sont obligatoires.

3- L'utilisateur devra pouvoir choisir son parfum de glace préféré. Il peut en choisir plusieurs.

4- Ajoutez un champ texte dans lequel l'utilisateur pourra expliquer comment il compte utiliser son agenda personnel.

5- Un bouton `S'inscrire` doit apparaitre en bas du formulaire.

6- Changez le fonctionnement de la validation pour permettre de retourner un message d'erreur significatif en cas d'erreur. Par exemple : "Le champ 'Prénom' est obligatoire."

S'il y a plusieurs erreurs à communiquer, on affiche tous les messages en même temps.

**Note** : Les squelettes des pages sont disponibles [ici](./Correction).


