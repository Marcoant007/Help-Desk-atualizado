<? require_once "validador_acesso.php" ?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <style>
      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }

      

      .hour{
        padding-top: 12px;
      }

      .btn-cadastrar {
        background: green;
        color: white;
      }
      .btn-cadastrar:hover {
        background: white;
        color: green;
        border: 2px solid green;
      }

      .btn-voltar {
        background: red;
        color: white;
      }
      .btn-voltar:hover {
        background: white;
        color: red;
        border: 2px solid red;
      }

      
      .btn-consultar {
        background: #4684e8;
        color: white;
      }
      .btn-consultar:hover {
        background: white;
        color: #4684e8;
        border: 2px solid #4684e8;
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

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Abertura de chamado
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="post" action="registra_chamado.php">
                    <div id="Empresa" class="form-group">
                      <label>Nome da Empresa</label>
                      <input name="titulo" type="text" class="form-control" placeholder="Nome da Empresa" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Categoria</label>
                      <select name="categoria" class="form-control" required>
                        <option>Criar Usuário de Email</option>
                        <option>Pendências Financeiras</option>
                        <option>NF-e</option>
                        <option>Suporte no Email</option>
                        <option>Infraestrutura</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Informe o Problema</label>
                      <textarea name="descricao" class="form-control" rows="3" required></textarea>
                    </div>

                    <div class="w3-section">
                   <label>Data</label>
                  <input class="form-control-sm" style="font-size: 15px;" value="<?php echo date('Y-m-d');?>" type="date"  name="data" required>
                 </div>

                 <div class="hour">
                   <label>Hora</label>
                  <input class="form-control-sm" style="font-size: 15px;" value="" type="time" name="hora">
                 </div>
           
                    <div class="row mt-5">
                      <div class="col-4">
                        <a class="btn btn-lg btn-voltar btn-block" href="home.php"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Voltar</a>
                      </div>

                      <div class="col-4">
                        <button  class="btn btn-lg btn-cadastrar btn-block" type="submit"><i class="fa fa-plus-square" aria-hidden="true"></i> Cadastrar </button>
                      </div>
                      <div class="col-4">
                        <a class="btn btn-lg btn-consultar btn-block" href="consultar_chamado.php"><i class="fa fa-search-plus" aria-hidden="true"></i> Consultar</a>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>