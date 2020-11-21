<?php
namespace Menu;

function read(){
    return json_decode(file_get_contents('./JSON/menu.json'), true);
}

function write($ary){
    file_put_contents('./JSON/menu.json', json_encode($ary));
}

function findAll() {
    $menu = read();
    usort($menu, function ($a, $b) { return $a['id'] <=> $b['id']; });
    return $menu;
}

function findById(int $id) {
    $found = array_values(array_filter(read(), function ($c) use ($id) { return $c['id'] == $id; }));
    return count($found) ? $found[0] : null;
  }

function create($menu) {
    $plats = read();
    $highestId = array_reduce(array_column($plats, 'id'), 'max') ?? 0;
    $menu['id'] = $highestId + 1;
    $plats[] = $menu;
    write($plats);
    return $menu['id'];
}


?>