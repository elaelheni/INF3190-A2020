<?php
$erreurs = [ ];
$reponses = [ ];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  # lecture des réponses recues
  foreach (['q0', 'q1', 'q2', 'q3', 'q4', 'q5'] as $q) {
    $reponses[$q] = $_POST[$q];
    if (! $reponses[$q]) { $erreurs[] = $q; }
  }

  # correction et redirection
  if (count($erreurs) == 0) {
    $note = 0;
    if ($reponses['q1'] == 'q1_v') { $note += 15; }
    if ($reponses['q2'] == 'q2_f') { $note += 15; }
    if ($reponses['q3'] == 'q3_c') { $note += 15; }
    if ($reponses['q4'] == 'q4_b') { $note += 15; }
    if (count($reponses['q5']) == 3
      && in_array('q5_a', $reponses['q5'])
      && in_array('q5_b', $reponses['q5'])
      && in_array('q5_c', $reponses['q5'])) { $note += 40; }

    $resultat = $note >= 60 ? 'pass' : 'fail';
    header("Location: resultat.php?resultat={$resultat}&note={$note}");
    exit;
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Examen</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Examen</h1>
    <form method="POST">
      <div>
        <label class="<?= in_array('q0', $erreurs) ? 'err' : '' ?>">Code permanent</label>
        <input name="q0" value="<?= $reponses['q0'] ?? '' ?>">
      </div>
      <div>
        <p class="<?= in_array('q1', $erreurs) ? 'err' : '' ?>"><strong>1. Vrai ou Faux. Lorsque le fureteur affiche une page HTML, les espaces consécutives sont remplacées par un seule espace.</strong></p>
        <ol>
        <li><label><input type="radio" name="q1" value="q1_v" <?= $reponses['q1'] == 'q1_v' ? 'checked' : '' ?>> Vrai</label></li>
        <li><label><input type="radio" name="q1" value="q1_f" <?= $reponses['q1'] == 'q1_f' ? 'checked' : '' ?>> Faux</label></li>
        </ol>
      </div>
      <div>
        <p class="<?= in_array('q2', $erreurs) ? 'err' : '' ?>"><strong>2. Vrai ou Faux. La balise &lt;link> est la version "HTML5" de la balise &lt;a>.</strong></p>
        <ol>
          <li><label><input type="radio" name="q2" value="q2_v" <?= $reponses['q2'] == 'q2_v' ? 'checked' : '' ?>> Vrai</label></li>
          <li><label><input type="radio" name="q2" value="q2_f" <?= $reponses['q2'] == 'q2_f' ? 'checked' : '' ?>> Faux</label></li>
        </ol>
      </div>
      <div>
        <p class="<?= in_array('q3', $erreurs) ? 'err' : '' ?>"><strong>3. Quelle est la priorité du sélecteur CSS suivant:</strong></p>
        <pre>#grille-principale > div.rangee > div.colonne</pre>
        <ol>
          <li><label><input type="radio" name="q3" value="q3_a" <?= $reponses['q3'] == 'q3_a' ? 'checked' : '' ?>> 0, 0, 0, 1</label></li>
          <li><label><input type="radio" name="q3" value="q3_b" <?= $reponses['q3'] == 'q3_b' ? 'checked' : '' ?>> 0, 0, 1, 1</label></li>
          <li><label><input type="radio" name="q3" value="q3_c" <?= $reponses['q3'] == 'q3_c' ? 'checked' : '' ?>> 0, 1, 2, 2</label></li>
          <li><label><input type="radio" name="q3" value="q3_d" <?= $reponses['q3'] == 'q3_d' ? 'checked' : '' ?>> 0, 1, 3, 2</label></li>
        </ol>
      </div>
      <div>
        <p class="<?= in_array('q4', $erreurs) ? 'err' : '' ?>"><strong>4. L'attribut "for" de la balise &lt;label> doit avoir la même valeur que:</strong></p>
        <ol>
          <li><label><input type="radio" name="q4" value="q4_a" <?= $reponses['q4'] == 'q4_a' ? 'checked' : '' ?>> l'attribut "class" de l'input associé</label></li>
          <li><label><input type="radio" name="q4" value="q4_b" <?= $reponses['q4'] == 'q4_b' ? 'checked' : '' ?>> l'attribut "id" de l'input associé</label></li>
          <li><label><input type="radio" name="q4" value="q4_c" <?= $reponses['q4'] == 'q4_c' ? 'checked' : '' ?>> l'attribut "name" de l'input associé</label></li>
          <li><label><input type="radio" name="q4" value="q4_d" <?= $reponses['q4'] == 'q4_d' ? 'checked' : '' ?>> l'attribut "value" de l'input associé</label></li>
        </ol>
      </div>
      <div>
        <p class="<?= in_array('q5', $erreurs) ? 'err' : '' ?>"><strong>5. HTTP est un protocole sans état. Quelles techniques permettent de conserver des données entre deux requêtes HTTP?</strong></p>
        <p><em>Cochez toutes les réponses qui s'appliquent.</em></p>
        <ol>
          <li><label><input type="checkbox" name="q5[]" value="q5_a" <?= in_array('q5_a', $reponses['q5'] ?? []) ? 'checked' : '' ?>> En ajoutant des paramètres à l'URL de redirection</label></li>
          <li><label><input type="checkbox" name="q5[]" value="q5_b" <?= in_array('q5_b', $reponses['q5'] ?? []) ? 'checked' : '' ?>> En ajoutant des cookies</label></li>
          <li><label><input type="checkbox" name="q5[]" value="q5_c" <?= in_array('q5_c', $reponses['q5'] ?? []) ? 'checked' : '' ?>> En utilisant une session web</label></li>
          <li><label><input type="checkbox" name="q5[]" value="q5_d" <?= in_array('q5_d', $reponses['q5'] ?? []) ? 'checked' : '' ?>> En utilisant HTTP 1.1</label></li>
        </ol>
      </div>
      <div>
        <input type="submit" value="Corriger">
      </div>
    </form>
  </body>
</html>
