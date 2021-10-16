<?php 
declare(strict_types=1);
include 'includes/header.php';

function usuarioAutenticado( bool $auntenticado ) : ?string  {
    if ($auntenticado) {
        return "El usuario esta autenticado";
    }else {
        return "No auntenticado";
    }
}

$usuario = usuarioAutenticado(true);

echo $usuario;


include 'includes/footer.php';