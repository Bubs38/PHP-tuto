<?php

// Nav
function nav_item (string $lien, string $titre, string $linkClass = ''): string 
{
    $classe = 'nav-item';
    if ($_SERVER['SCRIPT_NAME'] === $lien) {
        $classe .= ' active';
    }
    return <<<HTML
    <li class="$classe">
        <a class="$linkClass" href="$lien">$titre</a>
    </li>
HTML;
}

function nav_menu (string $linkClass = ''): string
{
    return 
        nav_item('/index.php', 'Accueil', $linkClass) .
        nav_item('/contact.php', 'Contact', $linkClass) .
        nav_item('/jeu.php', 'Jeu', $linkClass);
}

// Créateur glace
function checkbox(string $name, string $value, array $data): string {
    $attributes = '';
    if (isset($data[$name]) && in_array($value, $data[$name]) ) {
        $attributes .= 'checked';
    }
    return <<<HTML
    <input type="checkbox" name="{$name}[]" value="$value" $attributes>
    HTML;
}

function radio(string $name, string $value, array $data): string {
    $attributes = '';
    if (isset($data[$name]) && $value === $data[$name]) {
        $attributes .= 'checked';
    }
    return <<<HTML
    <input type="radio" name="$name" value="$value" $attributes>
    HTML;
}

// Créneaux
function creneaux_html(array $creneaux) {
    if (empty($creneaux)) {
        return 'Fermé';
    }
    $phrases = [];
    foreach ($creneaux as $creneau) {
        $phrases[] = " <strong>{$creneau[0]}h</strong> à <strong>{$creneau[1]}h</strong>";
    }
    return 'Ouvert de' . implode(' et ', $phrases);
}


function dump ($variable) {
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}

function in_creneaux (int $heure, array $creneaux): bool {
    foreach ($creneaux as $creneau) {
        $debut = $creneau[0];
        $fin = $creneau[1];

        if ($heure >= $debut && $heure < $fin) {
            return true;
        } 
    }
    return false;
}
?>