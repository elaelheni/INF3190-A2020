<?php
function checkbox(string $name, string $value, array $data) : string {
    $attribu = '';
    
    return <<<HTML
    <input type="checkbox" name="{$name}[]" value="$value">

HTML;
}

function radio(string $name, string $value, array $data) : string {
    return <<<HTML
    <input type="radio" name="$name" value="$value">

HTML;
}