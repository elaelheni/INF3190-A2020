<?php

//Fonction pour générer mes balises input
//Les fonctions auront comme paramètres : le nom du champ + la valeur du champ + le tableau qui contiendra mes données


function checkbox(string $name, string $value, array $data): string
{
    //pour 'checked'
    $attribut = '';

    //J'ai besoin d'accéder a l'array POST donc je verifie si il existe, en suite je doit verifier que mon parfum est dans cet array
    //si c'est le cas il restera selectionné
    if (isset($data[$name]) && in_array($value, $data[$name])) {
        $attribut .= 'checked';
    }
    return <<<HTML
    <input type="checkbox" name="{$name}[]" value="$value" $attribut>

HTML;
}

function radio(string $name, string $value, array $data): string
{

    $attribut = '';
    //ici ça va differer un peu, il ne s'agit pas d'un tableau => avec les checkbox je ne peux avoir qu'une seule possibilité
    //donc pas besoin de la methode in_array une simple egalié suffit
    if (isset($data[$name]) && $value === $data[$name]) {
        $attribut .= 'checked';
    }
    return <<<HTML
    <input type="radio" name="$name" value="$value" $attribut>

HTML;
}
