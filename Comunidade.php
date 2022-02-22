<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    
    <title>Se Joga!</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="style1.css">
   
</head>
<header>
       
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu">&#9776</label>
        
        <nav class="menu">
            
            <ul class="logo"><img src="assets/se joga logo3 1.png" width="150"></ul>
                
                <ul>
           
               
                <li><a href="#">Vagas</a></li>
                <li><a href="#">Notícias</a></li>
                <li><a href="#">Stream</a></li>
                <li><a href="#">Cursos</a></li>
                <li><a href="#">Jogos</a></li>
                <li><a href="#">Comunidade</a></li>
                
                </ul>
                <ul class="rect"></ul>
                <ul class="login"><li><a href="#">Login</a></li></ul>
                
                


            </nav>


    </header>
<body>
    <main>

    <img class="flat-young-woman-pla" src="assets/flat-young-woman.png"/>
    <img class="vector-4" src="assets/Vector 4.png"/>
    
    <div class="formLogin">
        <h1 class="por-um-universo-gamevalign-text-middle">
            <span>
            <span class="poppins-semi-bold-midnight-moss-44px">Por um </span>
            <span class="span1">universo gamer<span class="span1"> seguro</span >
            <span class="poppins-semi-bold-midnight-moss-44px"> para as minas</span>
            </span>
        </h1>
    
        <form action="enviar-email.php" class="formulario" method="post">
            <div class="mb-3">
                
                <input type="text" class="formLoginInputE" id="email">
                <label for="email" class="formLoginLabelE">e-mail</label>
                <input type="text" class="formLoginInputS" id="senha">
                <label for="email" class="formLoginLabelS">senha</label>
                
            </div>
            <a class="rotEsquecerSenha" href="#">Esqueceu a senha?</a>
            
            <input type="submit" name="acao"  value="Entrar" class="formLoginBtn">
            <div> <a class="rotCliqueAqui" href="#">Ainda não tem conta? Clique aqui e crie uma!</a></div>

       
        </div>
    </div>
       

    </main>
    <footer>
    <ul class="logo"><img class="union-1" src="assets/Vector.png" />
    <img class="se-joga-2022" src="assets/Se joga2022.png"/></ul>
    <div class="rodape">
                <ul>
           
                <li><a href="#">Doar</a></li>
                <li><a href="#">Denunciar</a></li>
                <li><a href="#">Parcerias</a></li>
                <li><a href="#">Sobre nós</a></li>
                <li><a href="#">Termos de uso</a></li>
                <li><a href="#">Comunidade</a></li>
                <li><a href="https://www.linkedin.com/company/se-joga-garota/" target="_blank"><img class="linkedin-logo-2" src="assets/linkedin-logo 2.png" width="25"/></a></li>
                <li><a href="https://www.instagram.com/sejoga.garota/" target="_blank"><img class="instagram-2" src="assets/instagram 2.png" width="25"/></a></li>
                
                </ul>

    </div>
    </footer>
</body>

</html>