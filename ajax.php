<?php 
$texto = $_POST['texto'];
$arquivo = $_POST['arquivo'];
file_put_contents($arquivo,$texto);
echo '<div>Editado com sucesso!!</div>';