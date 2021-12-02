<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/inicial.css">
    <title>GCM
    </title>

</head>

<body>
    <div class="barra">
        <div class="content">
            <h1>GCM - FALA COMIGO</h1><br><br><br><br>
            <h2>FACA O SEU LOGIN/CADASTRO CLICANDO AQUI</h2>

            <div>
                <button class="button" id="myButton" class="float-left submit-button"><b>LOGIN</b></button>
                <script type="text/javascript">
                    document.getElementById("myButton").onclick = function() {
                        location.href = "login.php";
                    };
                </script>
            </div>
            <div>
                <button class="button1" id="myyButton" class="float-left submit-button"><b>CADASTRAR</b></button>
                <script type="text/javascript">
                    document.getElementById("myyButton").onclick = function() {
                        location.href = "crud/view/usuario_create.php";
                    };
                </script>
            </div>
        </div>
    </div><br><br><br>
<Center>
<h1>DECLACOES DOS USUARIOS</h1><br>
    <div class="gallery">
        <div class="desc">Após o uso contínuo de aplicativos que ajudam na saúde mental,percebi uma melhora significativa em aspectos como depressão e ansiedade,através da ajuda dos profissionais dos mesmos”</div>
    </div>
    <div class="gallery">
       
        <div class="desc">Esses apps me ajudaram a não me sentir sozinho,sempre que precisava marcava uma reunião com algum psicológico ou voluntario desses aplicativos,o que foi fundamental para eu não tirar minha vida</div>
    </div>
    <div class="gallery">
        
        <div class="desc">Através das reuniões dos apps,eu pude tomar decisões importantes para a minha vida,consegui diminuir minha ansiedade e sempre que me senti sozinho tinha alguém parar me ajudar </div>
    </div>
</Center>
    
</body>

</html>