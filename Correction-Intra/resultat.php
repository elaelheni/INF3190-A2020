<!DOCTYPE html>
<html>
  <head>
    <title>Résultat de l'examen</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Vous avez <?= $_GET['resultat'] == 'pass' ? 'réussi' : 'échoué' ?> l'examen.</h1>
    <h2>Votre note est de <?= $_GET['note'] ?>%</h2>
  </body>
</html>

