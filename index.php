<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <title>Welcome to the jungle</title>
</head>
<body>
    <header></header>
    <main>
        <div class="planoDeFundo">
            <img src="./img/iconeAdvertencia.png" class="advertencia" alt="">
            <h1>PAGINA EM CONSTRUÇÃO</h1>
            <p>Américo agradece a visita :)</p>  
            <div class = "n-acessos">
                <h1> Visitante nº:  </h1>
                <?php
                    include ("contadorIp.php");
                    $Visitas = new ClassVisitas();
                    $Visitas -> VerificaUsuario();
                ?>
                <h1> Café de amanhã sera de:  </h1>
                <?php
                    include ("sort.php")
                ?>
            </div>      
        </div>
    </main>
    <footer></footer>
    
    
</body>
</html>
