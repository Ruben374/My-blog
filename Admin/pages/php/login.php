
<head>
  <meta charset="UTF-8" />
  <title><?php echo BLOG_TITLE ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <base href="<?php echo URL ?>">
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
 

</head>

<body>
<div class="container">
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>

    <div class="content">
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="POST">
          <h1>Login</h1>
          <p>
            <label for="email_login">Seu email</label>
            <input id="email_login" name="email_login" type="text" placeholder="ex. contato@htmlecsspro.com" required="required" />
          </p>

          <p>
            <label for="senha_login">Sua senha</label>
            <input id="senha_login" name="senha_login"  type="password" placeholder="ex. senha" />
          </p>

          <p>
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" />
            <label for="manterlogado">Manter-me logado</label>
          </p>

          <p>
            <input type="submit" value="Logar"name="logar" />
          </p>
          <?php
            login();
          ?>
          <p class="link">
            Ainda não tem conta?
            <a href="#paracadastro">Cadastre-se</a>
          </p>
       <input type="hidden" name="x" value="y">
        </form>

      </div>
     
    </div>
    

 </div>
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script>
$(function(){
  $(".alert").css({color:"red"}).css({
    backgroundColor:"rgba(251, 7, 31, 0.1)",
    textAlign:"center",
    marginBottom:"20px",
    padding:"10px"
  
  });

});




 </script>
</body>

