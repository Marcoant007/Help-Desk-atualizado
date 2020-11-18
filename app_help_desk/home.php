<? 
  require_once "validador_acesso.php";
  
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
    
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Footer-white.css">
    <style>
      
      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
     .abrir> a {
        text-decoration: none;
       font-size: 30px;
       padding: 10px;
       align-items: center;
       justify-content: center;
       text-align: center;
       font-family: 'Ubuntu', sans-serif;
        text-decoration: none;
        font-weight: 500;
        color: #30302e;
      }

      a:hover{
        color: #438fe6;
      }

      


    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="home.php">
        <img src="sup256.png" width="40" height="40" class="d-inline-block align-top" alt="">
         App Help Desk
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <a href="abrir_chamado.php">
                    <img src="technical-support.png" width="70" height="70">
                  </a>
                  <div class="abrir">
                  <a href="abrir_chamado.php">Abrir chamado</a>
                  </div>
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <a href="consultar_chamado.php">
                    <img src="seo.png" width="70" height="70">
                  </a>
                  <div class="abrir">
                  <a href="consultar_chamado.php">Consultar Chamado</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
    </div>
    <div style="text-align: center;" >
      <img style="  width: 80% ; text-align: center;"  src="conteudo.png" alt="">
    </div>
   
    </div>
    <footer id="myFooter">
        <div class="container">
          
            <p class="footer-copyright">© 2020 Copyright - MRX Desenvolvimento</p>
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