<?php

    include_once "helpers/url.php";
    include_once "header.php";

    $cliente = $_POST;

    // print_r($cliente);

    //ENVIO PARA O DB
    if($cliente) {
        $nome = $cliente["nome"];
        $dataNascimento = $cliente["data_nascimento"];
        $sexo = $cliente["sexo"];
        $estadoCivil = $cliente["estado_civil"];

        $ddd = $cliente["ddd"];
        $telefone = preg_replace("/[^0-9]/", "", $cliente["telefone"]);
        $celular = preg_replace("/[^0-9]/", "", $cliente["celular"]);
        $email = $cliente["email"];

        $cep = preg_replace("/[^0-9]/", "", $cliente["cep"]);
        $rua = $cliente["rua"];
        $numero = $cliente["numero"];
        $complemento = $cliente["complemento"];
        $bairro = $cliente["bairro"];
        $cidade = $cliente["cidade"];
        $estado = $cliente["estado"];


        //INSERIR NO BANCO
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "clientes";

        $conn = new mysqli($host, $user, $pass, $db);

        $table = "cliente";
       
        $query = "INSERT INTO $table (nome, data_nascimento, sexo, estado_civil,
        ddd, telefone, celular, email, cep, rua, numero, complemento, bairro,
        cidade, estado) VALUES ('$nome', '$dataNascimento', '$sexo', '$estadoCivil',
        '$ddd', '$telefone', '$celular', '$email', '$cep', '$rua', '$numero', 
        '$complemento', '$bairro', '$cidade', '$estado')";

        $conn->query($query);

        $conn->close();

    }

?>


    <main>
        <form action="cadastro.php" method="POST" id="form">
         
            <div>
                <label for="nome">Nome Completo:</label>
                <input type="text" name="nome" id="nome" maxlength="70" required>
            </div>

            <div>
                <label for="data_nascimento">Data de nascimento:</label>
                <input type="date" name="data_nascimento" id="idade" required>
            </div>

            <div class="sexo">
                <span>Sexo:</span>
                <div>
                    <input type="radio" name="sexo" value="masculino" id="masculino" required>
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" name="sexo" value="feminino" id="feminino" required>
                    <label for="feminino">Feminino</label>
                </div>
            </div>

            <div>
                <label for="cars">Estado civil: </label>
                <select name="estado_civil" required>
                    <option value=""></option>
                    <option value="solteiro">Solteiro</option>
                    <option value="casado">Casado</option>
                    <option value="separado judicialmente">Separado judicialmente</option>
                    <option value="divorciado">Divorciado</option>
                    <option value="viuvo">Viúvo</option>
                </select>
            </div>
  
            <div>
                <label for="ddd">DDD</label>
                <input type="text" name="ddd" id="ddd" placeholder="xx" maxlength="2" required>
            </div>

            <div>
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="telefone" placeholder="xxxx-xxxx" minlength="8" required>
            </div>

            <div>
                <label for="celular">Celular</label>
                <input type="text" name="celular" id="celular" placeholder="xxxxx-xxxx" minlength="8" required>
            </div>

            <div>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" required>
            </div>
    
            <div>
                <label for="cep">Cep:</label>
                <input type="text" name="cep" id="cep" required>
            </div>
            
            <div>
                <label for="rua">Rua:</label>
                <input type="text" name="rua" id="rua" required>
            </div>

            <div>
                <label for="numero">Número:</label>
                <input type="text" name="numero" id="numero" required>
            </div>

            <div>
                <label for="complemento">Complemento:</label>
                <input type="text" name="complemento" id="complemento">
            </div>

            <div>
                <label for="bairro">Bairro:</label>
                <input type="text" name="bairro" id="bairro" required>
            </div>

            <div>
                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" id="cidade" required>
            </div>

            <div>
                <label for="estado">Estado:</label>
                <input type="text" name="estado" id="estado" required>
            </div>

            <div>
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </main>

    <script src="<?=$BASE_URL;?>js/script.js"></script>
</body>
</html>