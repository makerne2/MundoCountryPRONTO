<html>
    <head>
        <title>template MVC</title>
        <meta charset= "utf-8"> 
    <a href="../controlador/clienteControlador.php"></a>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->

        <link rel="stylesheet" href="./publico/css/app.css">
        
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
 
    
    <body class="container">
        
        <div id="tudo">
      <div id="menu">
          
          
          

          <button type="button" class="btn btn-primary">
            <span class="badge badge-light"></span><a href="./cliente/listarClientes" id="link"><i class="home icon">  Cliente </a>
          </button>

          <button type="button" class="btn btn-primary">
           <span class="badge badge-light"></span>
			  <a href="./categoria/listarCategorias" id="link"><i class="home icon"> Categoria </a>
	  </button>
			  
          <button type="button" class="btn btn-primary">
                <span class="badge badge-light"></span> <a href="./formaPagamento/listarFormapagamento" id="link"> <i class="home icon"> Forma de Pagamento </a>
          </button>
          
          
          <button type="button" class="btn btn-primary">
                <span class="badge badge-light"></span> <a href="./produto/listarProdutos" id="link"> <i class="home icon"> Produtos </a>
          </button>

           <button id="carrinho" type="button" class="btn btn-primary">
                 <span class="badge badge-light"></span><a href="./cupom/listarCupons" id="link"> <i class="home icon"> Cupom</a>
           </button>
          
           <button type="button" class="btn btn-primary">
                 <span class="badge badge-light"></span><a href="./sacola/mostrar" id="link"> <i class="home icon"> Carrinho</a>
           </button>
          
            
        </div>
            

   
      <div class="row" id="Busca">
        <img src="./publico/imagens/logott.jpeg" id="logg">

 <body class="container">
       
<div id="barrapesquisa">	
<div class="ui category search">
<div class="ui icon input">
                    <form action="./busca/pesquisar" method="POST"> 
                    <label for="email"><b>Pesquisar</b></label>
                    <input type="text" placeholder="Pesquisar" name="pesquisar" required="">
                    </form>
</div>
<div class="results"></div>
</div>
</div>
       
        
      </div>
        
      
        <main class="container">
            <?php require $viewFilePath;
           ?>
            
        </main>
        </div>
 <div id="rodape">

      <div id="imgrodape" class="col-2">
        <img id="cielo" src="./publico/imagens/cielo.jpg">
        <img id="boleto" src="./publico/imagens/boleto.png">
        <img id="visa" src="./publico/imagens/visa.png">
      </div>  

      <div  id="imgrodape" class="col-2">
        <img id="instagram" src="./publico/imagens/instagram.jpg">
        <img id="facebook2" src="./publico/imagens/facebook2.png">
        <img id="gmail" src="./publico/imagens/gmail.png">
      </div>

      
    </div>
     
    </body>
</html>
