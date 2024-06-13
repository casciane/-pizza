<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria - CK</title>
</head>
<body>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pizzaria";
        
    
        $conn = new mysqli($servername, $username, $password, $dbname);

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $sabor = $_POST["sabor"];
            $adicionais = $_POST["adicionais"];
            $tamanho = $_POST["tamanho"];
            $bebida = $_POST["bebida"];

            $sql = "INSERT INTO ck (sabor, adicionais, tamanho, bebida) VALUES ('$sabor', '$adicionais', '$tamanho', '$bebida')";
            $registroCerto = "Pedido Concluído!";
           
            $registroErrado = "Erro";
        
            if ($conn->query($sql) === TRUE) {
                echo " $registroCerto";
            } else {
                echo "$registroErrado" . $sql . "<br>" . $conn->error;
            }
        }

        

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST["nome"];
            $telefone = $_POST["telefone"];
            $endereco = $_POST["endereco"];
            $email = $_POST["email"];

            $sql2 = "INSERT INTO romaa (nome, telefone, endereco, email) VALUES ('$nome', '$telefone', '$endereco', '$email')";
            $registroCerto = "Pedido Concluído!";
           
            $registroErrado = "Erro";
        
            if ($conn->query($sql2) === TRUE) {
                echo " $registroCerto";
            } else {
                echo "$registroErrado" . $sql2 . "<br>" . $conn->error;
            }
        }

        $conn->close();

    ?>

    <main>
        <h1>Pizzaria - CK</h1>
        <p>Venha provar a <span>melhor</span> Pizza da cidade!!!</p>

        <div class="sports">
            <img src="https://cdn.pixabay.com/photo/2019/06/29/21/58/pizza-4306977_1280.png" alt="">
            <img src="https://cdn.pixabay.com/photo/2023/11/29/19/11/pizza-8420204_1280.png" alt="">
            <img src="https://cdn.pixabay.com/photo/2021/02/07/13/07/pizza-5991177_960_720.png" alt="">
            <img src="https://cdn.pixabay.com/photo/2012/04/12/20/43/pizza-30579_1280.png" alt="">
            <img src="https://cdn.pixabay.com/photo/2017/02/17/11/51/icon-2073971_1280.png" alt="">
            <img src="https://cdn.pixabay.com/photo/2012/04/01/16/52/pizza-23481_1280.png" alt="">
        </div>
    </main>

    <div class="container">
        <h1>Pizzaria - CK</h1>

       

        <form action="" method="post">
    
            Sabor: <input type="text" name="sabor" id="" required autocomplete="off">
            <br>
            Adicionais: <input type="text" name="adicionais" id="" required autocomplete="off">
            <br>
            Tamanho: <input type="text" name="tamanho" id="" required autocomplete="off">
            <br>
            Bebida: <input type="text" name="bebida" id="" required autocomplete="off">
            <br>
            Nome: <input type="text" name="nome" id="" required autocomplete="off">
            <br>
            Telefone: <input type="number" name="telefone" id="" required autocomplete="off">
            <br>
            Endereço: <input type="text" name="endereco" id="" required autocomplete="off">
            <br>
            E-mail: <input type="text" name="email" id="" required autocomplete="off">
            <br>



            <input class="btn" type="submit" value="Confirmar">
        </form>
    </div>

    <footer>
        <h2>Criado por - Cassiane Pinheiro & Kerolin Fragoso</h2>
    </footer>
</body>
</html>