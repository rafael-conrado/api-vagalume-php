<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../../public/assets/css/style-result.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
    </head>

<?php
$document_root = $_SERVER['DOCUMENT_ROOT'];
//echo "root: $document_root";
include($document_root.'/projetos back end/api vagalume php/app/classes/functions.php');

$music = $_POST['music'];
$artist = $_POST['artist'];

$resul = ValidacaoMusicaArtista($music,$artist);
?>


<div class="resultado-letra">
   
<?php

if ($resul == false ) {
    echo "<h1>Dados inválidos!</h1>";
    $resul = "Verifique se os campos estão preenchidos corretamente, ou selecione outro Artista/Música";
    echo $resul;
    echo "<a href='../../public/index.php'><h3>VOLTAR</h3></a>";
    return;
}
echo "<h1>Sua letra</h1>";
echo $resul;
echo " <a href='../../public/index.php'><h3>VOLTAR</h3></a> ";

?>
</div>
