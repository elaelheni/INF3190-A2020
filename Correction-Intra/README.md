# INF3190 Introduction à la programmation web
​
## Examen intra - Automne 2020
​
### Travail à faire
​
Vous devez construire un formulaire d'examen en ligne pour un cours
d'introduction à la programmation web. L'examen sera composé de 5 questions
à choix multiples et votre logiciel doit être en mesure de calculer
automatiquement la note de l'étudiant.
​
​
### Questions du formulaires:
​
En plus d'un champ de saisie pour le code permenant, le formulaire doit
contenir ces 5 questions:
​
**1. Vrai ou Faux. Lorsque le fureteur affiche une page HTML, les espaces
consécutives sont remplacées par une seule espace.**
​
**2. Vrai ou Faux. La balise <link> est la version "HTML5" de la balise <a>.**
​
**3. Quelle est la priorité du sélecteur CSS suivant:**
​
    #grille-principale > div.rangee > div.colonne
​
- 0, 0, 0, 1
- 0, 0, 1, 1
- 0, 1, 2, 2
- 0, 1, 3, 2
​
**4. L'attribut "for" de la balise <label> doit avoir la même valeur que:**
​
- l'attribut "class" de l'input associé
- l'attribut "id" de l'input associé
- l'attribut "name" de l'input associé
- l'attribut "value" de l'input associé
​
**5. HTTP est un protocole sans état. Quelles techniques permettent de conserver
des données entre deux requêtes HTTP?**
​
*Cochez toutes les réponses qui s'appliquent.*
​
- En ajoutant des paramètres à l'URL de redirection
- En ajoutant des cookies
- En utilisant une session web
- En utilisant HTTP 1.1
​
​
### Validation
​
Chaque question du formulaire est obligatoire. Lors de la soumission du
formulaire, si une question n'a pas été répondue, le formulaire doit se
réafficher avec les réponses de l'étudiantE et des messages d'erreurs indiquant
clairement quelles questions n'ont pas été répondues (en mettant le texte de la
question en rouge).
​
​
### Post Redirect Get
​
Si toutes les questions de l'examen ont été répondues, l'application
web doit calculer la note obtenue et l'afficher en appliquant le patron
Post-Redirect-Get. Le message affiché à l'étudiant doit être différent si
l'examen a été échoué ou réussi (la note de passage est de 60%).
​
​
### Pondération des questions
​
Les quatre premières questions ont une valeur de 15 points chacune. La dernière
question vaut 40 points. Pour chaque bonne réponse, l'étudiant reçoit tous les
points de la question. L'étudiant reçoit cependant 0 point si la réponse n'est
pas parfaite. (Ne vous inquiétez pas, nous ne corrigeons pas votre examen de
cette façon.)
​
​
### Les bonnes réponses
​
Vous devez vous-même trouver les bonnes réponses aux 5 questions. Ces réponses
font également parti de l'évaluation de l'intra.
​
Si jamais vous n'avez pas le temps de programmer la correction des bonnes
réponses, assurez-vous de les indiquer quand même en commentaire dans le code
afin d'obtenir vos points sur cette partie de l'évaluation.
​
​
### Contraintes technologiques
​
Les technologies impliquées dans cette évaluation sont PHP et CSS (le HTML étant
produit strictement par des fichiers PHP).
​
Les versions à utiliser :
- HTML 5
- CSS 3
- PHP 7
​
Le CSS doit être dans un fichier .css. Il n'est pas permis d'utiliser l'attribut
"style". L'application web est réalisable avec un minimum de 2 fichiers PHP (il
est permis d'en créer plus selon votre préférence). Aucun framework et aucune
librairie ne sont permis.
​
Vous devez utiliser les mêmes contrôles graphiques (input) que dans l'image
fournie. La présentation devrait être la plus proche possible de l'image.
Conseil: Assurez-vous que le logiciel fonctionne avant de rendre l'interface
jolie.
​
L'esthétisme, l'ergonomie et l'utilisabilité de l'interface ne seront pas
évaluées. Cependant, une attention raisonnable doit être apportée à la
lisibilité du code source.
​
​
### Remise de l'examen
​
La remise de l'intra se fait de la même façon que la remise des travaux
pratiques. Créez un nouveau repo Github et ajoutez mon compte comme contributeur
(`fxg42`). Vous devez _obligatoirement_ m'envoyer votre code permanent et
l'hyperlien vers la page github du repo dans un message privé (DM) dans le Slack
du cours.
​
Pour la correction, j'utiliserai le commit le plus proche de la date et l'heure
de remise soit dimanche le 1er novembre, 12h30.
​
N'oubliez pas de commiter votre code et n'oubliez pas de le pousser vers github!
​
Si vous n'arrivez pas à utiliser git ou github, vous pouvez _exceptionnellement_
zipper les fichiers sources et me les envoyer dans un message privé sur Slack
avec votre code permanent.
​
Pensez à écrire votre nom et code permanent dans l'entête des fichiers sources.