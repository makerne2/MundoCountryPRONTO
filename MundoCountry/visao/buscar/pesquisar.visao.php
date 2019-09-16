<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <form action="" method="POST">   

        <ul>
            <?php foreach ($buscar as $busca) :?>
            
            <li><a href ="./produto/ver/<?=$busca['codigo']?>"><?= $busca['nomeproduto'];?></a></li>
        
        
        <?php endforeach;?>
        </ul>   
    </form>    
    </body>
</html>