<!DOCTYPE >
<html>
	<head>
		<title>
			Cloud Dev
		</title>
		<meta charset='utf-8'>
		<link rel="stylesheet" type="text/css" media="all" href="static/css/bootstrap.css"/>
	</head>
	<body onload="start();" style="background: #87b4c6; background-image: -webkit-radial-gradient(top, #794aa2 0%, #a4cddd; background-repeat: no-repeat;
background-size: 100% 1000px;">
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="index.php"><img src="static/img/Logo.png" style="height:150px; margin-top:-65px;"></a>
	        </div>
	        <div class="navbar-collapse collapse">
	          <form class="navbar-form navbar-right" role="form">
	            <div class="form-group">
	              <input type="text" placeholder="Nome de Usuario: " class="form-control">
	            </div>
	            <div class="form-group">
	              <input type="password" placeholder="Senha: " class="form-control">
	            </div>
	            <button type="submit" class="btn btn-success">Entrar</button>
	          </form>
	        </div>
	      </div>
	    </div>
	    <div id="hero" class="container text-center" style=" background-color: #fff; margin-top:10%; width:60%; border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.580392) 0px 0px 15px;">
	      <div class="h2 featurette-heading text-muted">CADASTRO</div>
	      <form class="col-md-12" name="f1">
		    <div class="form-group" style="width:49%; float:left;">
		        <input type="text" class="form-control input-lg" placeholder="Nome:">
		    </div>
		    <div class="form-group" style="width:49%; margin-left:2%; float:left;">
		        <input type="text" class="form-control input-lg" placeholder="Sobrenome:">
		    </div>
		    <div class="form-group">
		        <input type="text" class="form-control input-lg" placeholder="Nome de Usuario:">
		    </div>
		    <div class="form-group" style="width:40%; float:left;">
		        <input type="password" name="senha1" class="form-control input-lg" placeholder="Senha:">
		    </div>
		     <div class="form-group" style="width:40%; margin-left:2%; float:left;">
		        <input type="password" name="senha2" class="form-control input-lg" style="float:left;"placeholder="Confirmar Senha:">
		    </div>
		    <div class="form-group" style="width:16%; margin-left:2%; float:left;">
		    	 <button  type="button" class="btn btn-info btn-lg btn-block" onClick="validarSenha()" onclick="document.getElementById('validartext').style.display='none'" style="float:left;"> <span class="glyphicon glyphicon-ok-sign" id="validar" style="display: none;"></span> Validar</button>
		    </div>	
		    <script>
				function validarSenha(){
					senha1 = document.f1.senha1.value;
					senha2 = document.f1.senha2.value;
					
				 	if (senha1 == "" || senha2=="")
						alert("Digite algo");
						
					else if (senha1 == senha2)
						document.getElementById('validar').style.display='';
					else
						alert("Senhas Diferentes");
				}
			</script>
		    <div class="form-group">
		        <input type="text" class="form-control input-lg" placeholder="E-mail:">
		    </div>
		    <div class="form-group" style="width:52%; float:left;">
		    	<h4 style="float:left;">
		    		Data de Nascimento
		    	</h4>
				<select class="selectpicker" name="dia" class="text2"  id="dia" style="height:30px; border-radius:5px; border-color: #ccccfc;border-width: 1px;border-style: solid;font-family: Verdana, Geneva, sans-serif;color: #333;background-color: #ffffff;">
					<?php 
						$dia=0;
						while ($dia<31)
						{
							$dia++;
					?>
					<option value="<?php echo $dia;?>" > <?php echo $dia;?> </option>
					<?php 
						}
					?>
				</select>
				<select name="mes" class="text2"  id="mes" style="height:30px; border-radius:5px; border-color: #ccccfc;border-width: 1px;border-style: solid;font-family: Verdana, Geneva, sans-serif;color: #333;background-color: #ffffff;">
					<?php 
						$nome_mes = array (1=>'janeiro',2=>'fevereiro',3=>'março',4=>'abril',5=>'maio',6=>'junho',7=>'julho',8=>'agosto',9=>'setembro',10=>'outubro',11=>'novembro',12=>'dezembro');
						$mes=0;
						while ($mes<12)
						{
							$mes++;
					?>
					<option value="<?php echo $mes;?>" > <?php echo $nome_mes[$mes];?> </option>
					<?php 
						}
					?>
				</select>
				<select name="ano" class="text2"  id="ano" style="height:30px; border-radius:5px;border-color: #ccccfc;border-width: 1px;border-style: solid;font-family: Verdana, Geneva, sans-serif;color: #333;background-color: #ffffff;">
					<?php 
						$ano=2013;
						while ($ano>1900)
						{
							$ano--;
					?>
					<option value="<?php echo $ano;?>" > <?php echo $ano;?> </option>
					<?php 
						}
					?>
				</select>
		    </div>
		    <div class="form-group">
		    	<input type="radio" name="sexo" value="masculino" checked="checked"><font class="lead" style="font-size: 18px;">Masculino</font>
				<input type="radio" name="sexo" value="feminino"><font class="lead" style="font-size: 18px;">Feminino</font>
				<input type="radio" name="sexo" value="indeciso"><font class="lead" style="font-size: 18px;">Indefinido</font>
		    </div>
		    <div class="form-group">
		        <button class="btn btn-success btn-lg btn-block"><span class="glyphicon glyphicon-ok-circle"></span> cadastrar-se</button>
		    </div>
		</form>
	</body>
</html>	