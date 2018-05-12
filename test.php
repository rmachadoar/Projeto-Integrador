<?php 
	session_start();
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilo.css" />
	<script></script>
	<title>Página Inicial</title>
</head>

<body>


	<div class="container-fluid">
		
			<nav class="navbar navbar-expand-lg navbar-light row" style="background-color: #048;">
			  <a class="navbar-brand offset-md-1 col-md-1" href="inde.php"><img src="imagem/logo.png" width="100%"></a>
			    <form class="form-inline col-md-8" method="POST" action="busca.php">
			      <input class="form-control col-md-10 mr-sm-2" type="text" id="busca" name="busca" placeholder="Procurar" aria-label="Search">
			      
			    </form>
			    <a href="" <i class="fas fa-shopping-cart" style="font-size: 150%; padding: 0px 25px; color: white;"></i></a>
			    <?php if (isset($_SESSION['nome'])){
			    	echo "<span style='color: #fff; padding: 0px 5px;'> Olá, ". $_SESSION["nome"] .'</span>  <a style="color: #fff;" href="logout.php"></br> Logout</a>';

			    }else{
			    	echo'
				   <div class="col-md-1" ><a style="color: #fff;" href="" data-toggle="modal" data-target="#exampleModal">Login</a>
			   		<span style="color: white;"> ou </span>
			   						<a style="color: #fff;" href="cadastro.php" >Cadastre-se</a>
			  	 </div>';
			}

			?>

			         <!-- Modal -->
				      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				        <div class="modal-dialog" role="document">
				          <div class="modal-content">
				            <div class="modal-header">
				              <h5 class="modal-title" id="exampleModalLabel">Faça seu Login</h5>
				              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                <span aria-hidden="true">&times;</span>
				              </button>
				            </div>
				            <div class="modal-body">
				              <form  action="login.php" method="post">
				                <div class="form-group">
				                  <label for="login">Login </label>
				                  <input type="text" class="form-control" id="login" name="login" aria-describedby="emailHelp" placeholder="Insira seu login">
				                  <small id="login" name="login" class="form-text text-muted">Nunca iremos compartilhar seus dados.</small>
				                </div>
				                <div class="form-group">
				                  <label for="senha">Senha</label>
				                  <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
				                </div>
				             
				                <button type="submit" class="btn btn-primary">Confirmar</button>
				              </form>
				            </div>
				            
				          </div>
				        </div>
				      </div>
			</nav>

			<nav class="navbar navbar-expand-lg navbar-dark bg-dark row">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="col-md-2"></div>
			  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			    <div class="navbar-nav col-md-8 text-center">
			      <a class="nav-item nav-link exp-link" href="#">Telefonia</a>
			      <a class="nav-item nav-link exp-link" href="#">Informática</a>
			      <a class="nav-item nav-link exp-link" href="#">Eletrônicos</a>
			      <a class="nav-item nav-link exp-link" href="#">Eletrodomésticos</a>
			      <a class="nav-item nav-link exp-link" href="#">Eletroportáteis</a>
			      <a class="nav-item nav-link exp-link" href="#">Decoração</a>
			      <a class="nav-item nav-link exp-link" href="#">Entretenimento</a>
			    </div>
			  </div>
			</nav>
			


			<
			<table class="table table-shopping">
                        <thead>
                            <tr>
                                <th class="text-center"></th>
                                <th >Produto</th>
                                <th class="th-deion">Descricao</th>
                                <th class="text-right">Preco</th>
                                <th class="text-right">Quantidade</th>
                                <th class="text-right">Valor</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="img-container">
                                        <img src="assets/img/shopping.jpg" alt="...">
                                    </div>
                                </td>
                                <td class="td-name">
                                    'Moleskine Agenda'
                                </td>
                                <td>
                                    <b>Meeting Notes</b>
                                    <p>
                                    Most beautiful agenda for the office, really nice paper and black cover. Most beautiful agenda for the office.</p>
                                </td>

                                <td class="td-number">
                                    <small>R$</small>49
                                </td>
                                <td class="td-number">
                                    <small>x</small>25
                                </td>
                                <td class="td-number">
                                    <small>R$</small>1,225
                                </td>
                                <td class="td-actions">
                                           <button type="button" rel="tooltip" data-placement="left" title="Remover item" class="btn btn-danger btn-simple btn-icon ">
                                        <i class="fa fa-times"></i>
                                    </button>                                    
                                </td>
                            </tr>

                                <tr>
                                     <td class="td-actions">
                                         <div class="info info-horizontal">
                                                <div class="icon icon-blue icon-sm">
                                                    <i class="fa fa-shopping-cart"></i>

                                                </div>
                                        </div>
                                    </td>

                         <td>


                            <div class="deion">

                                <h4> Digite seu CEP: </h4>                                   

                                            <a href="">Buscar Cep</a>

                            </div>
                        </td>

                        <td>
                        <div class="form-group has-success">
        <input type="text" value="" class="form-control" placeholder="00000-000"/>

    </div>
    </td>

    <td class="td-number">
                                  <button class="btn btn-primary btn-fill">Consultar</button>
                                </td>
                                <td class="td-number">
                                    <p>Valor do Envio Sedex</p>
                                </td>

                            <td class="td-number">
                                    <small>R$</small>5,99
                                </td>    
       </div>

     </div>
            </td>
            </tr>

                            <tr>
                                <td colspan="2"></td>
                                <td></td>
                                <td class="td-total">
                                   Total
                                </td>
                                <td class="td-price">
                                    <small>R$</small>12,999
                                </td>
                                <td> <button type="submit" class="btn btn-info btn-fill btn-l" ahref="login.php">Finalize seu Pedido <i class="fa fa-chevron-right"></i>
                             </button></td>

                                <td></td>
                            </tr>



                        </tbody>
                    </table>




			
		
			<footer class="border text-left row" style="background-color: #048;" >
				<div class="col-md-2"></div>
				<div class="list-group list-group-flush col-md-2 py-3 " style="background-color: #048; color: #fff;">

				  <p>Nome: Loja ABC</p>
				  <p>Endereço: Avenida das Américas,3000 - Barra da Tijuca - RJ</p>
				  <p>Telefone: 0000-0000</p>
				  <p>Email: LojaABC@xyz.com</p>
				  
				</div>
			</footer>
			
			
	</div>	
	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>