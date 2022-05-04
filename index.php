
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        *{padding: 0;margin: 0;box-sizing: border-box;}
        .lista__arquivo{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            max-width: 600px;
            box-shadow: 5px 5px black;
            animation-name: anime;
            transition: 1s;
            animation-duration: 4s;
            animation-iteration-count: infinite;
        }
        .lista__arquivo a{
            background-color: green;
            list-style-type: none;
            transition: 1s;
                text-decoration: none;
            color: white;
            padding: 10px;
            display: block;
            width: 440px;
        }
      
        .lista__arquivo a:hover{
            background-color: greenyellow;
            cursor: pointer;
            color: white;
        }
        @keyframes anime{
            0%{top:50%;}
            25%{top:49%;}
            50%{top:48%;}
            75%{top:49%;}
            90%{top:50%;}
        }
    </style>
</head>
<body>
    
<div class="lista__arquivo">
<?php

$files = scandir('files');
for($i = 0;$i < count($files);$i++){
    if(is_dir($files[$i]))
    continue;

    $file_extension = explode('.',$files[$i]);

    if(@$file_extension[1] == 'php' || @$file_extension[1] == 'css' || @$file_extension[1] == 'html'){

?>
    
        <a href="?file=<?= $files[$i] ?>"><?= $files[$i]?></a>
    
<?php } 

}?>

<?php  
    if(isset($_GET['file']) && file_exists('files/'.$_GET['file'])){
        echo '<h2>Editando o Arquivo: '.$_GET['file'].'</h2>';
        echo '<form method="POST" >';
        echo '<textarea id="texto" name="texto">'.file_get_contents('files/'.$_GET['file']).'</textarea>';
        echo '<input id="arquivo" type="hidden" name="arquivo" value="'.'files/'.$_GET['file'].'" >';
        echo '<input  name="editar" type="submit" value="Editar" >';
        echo '</form>';
    }
?>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script>
    $(()=>{
        $('[name=editar]').click(function(e){
         var texto = $('#texto').val();
         var arquivo = $('#arquivo').val();
           $.ajax({
                method:'POST',
                url:'ajax.php',
                data:{texto:texto,arquivo:arquivo}
            }).done((data)=>{
                console.log('atualizado com sucesso!!');
            })  
        })
       
    })
</script>
</body>
</html>