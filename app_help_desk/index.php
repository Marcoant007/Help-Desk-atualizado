<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

  
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Footer-white.css">
    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
        </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>

                <? if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>

                  <div class="text-danger">
                    Usuário ou senha inválido(s)
                  </div>

                <? } ?>

                <? if(isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>

                  <div class="text-danger">
                    Faça login antes de acessar as páginas protegidas
                  </div>
                  
                <? } ?>

                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
        
    </div>
  
    </div>
    <footer id="myFooter">
        <div class="container">
           
            <p class="footer-copyright">© 2019 Copyright - MRX Desenvolvimento</p>
        </div>
        <div class="footer-social">
            <a href="https://www.facebook.com/mrxinformatica" class="social-icons"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/mrcx07/" class="social-icons"><i class="fa fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCNlylkFs63xDuBCb9cEF2-A" class="social-icons"><i class="fa fa-youtube"></i></a>
            <a href="" class="social-icons"><i class="fa fa-twitter"></i></a>
        </div>
    </footer>
  </body>
</html>