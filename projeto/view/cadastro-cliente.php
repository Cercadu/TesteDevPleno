<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/fav.svg"> 
    <title>Cadastro de Cliente - Teste Dev </title>
</head>
<body>
    <img src="img/logo.svg" alt="Unimed - Uberlândia"  height="150px" whidth = '150px' class="rounded mx-auto d-block">
    <div class="container">
        <div class="card">
            <div class="card-header bg-success text-white">    
                <h1><center>Cadastro de Cliente</center></h1>
            </div> 
            <div class="card-body">   
                <form method="POST" action="">
                    <div class="form-group">
                        <label>Nome:</label>
                        <input type="text" name="nome" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>CPF:</label>
                        <input type="text" name="cpf" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Telefone:</label>
                        <input type="text" name="telefone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>E-mail:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
					<div class="form-group">
						<label>Sexo:</label><br>
						<label class="radio-inline">
							<input type="radio" name="sexo" value="M" required> Masculino
						</label>
						<label class="radio-inline">
							<input type="radio" name="sexo" value="F" required> Feminino
						</label>
					</div>
                    <div class="form-group">
                        <label>Data de Nascimento:</label>
                        <input type="date" name="data_nascimento" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Ocupação:</label>
                        <input type="text" name="ocupacao" class="form-control" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>    
        </div>
    </div>
</body>
</html>
