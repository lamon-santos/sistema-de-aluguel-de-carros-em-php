<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programação em PHP</title>
    <link rel="stylesheet" href="css/estilo.css">
    <style type="text/css">
        .formulario {
            background-color: transparent;
            color: black;
            text-shadow: 1px 1px rgba(0, 0, 0, 0.1);
            padding: 20px;
            font-size: 1.9rem;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            text-align: right;
        }

        input {
            font-size: 1.7rem;
            padding: 8px;
            border-radius: 10px;
            border: 1px solid #ccc;
            font-weight: bold;
            transition: border-color 0.3s ease;
        }

        input:focus {
            border-color: #1E90FF;
            outline: none;
        }

        #grid-container {
            background-color: rgb(136, 196, 255);
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-gap: 5px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .grid div {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-size: 1.9rem;
            padding-bottom: 25px;
        }

        img {
            width: 95%;
            height: 80%;
        }

        a {
            color: red;
            padding: 10px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 1.9rem;
            transition: background-color 0.3s ease;
            font: bold;
        }

        fieldset {
            border: solid;
            padding: 5%;
            border-radius: 15px;
        }
    </style>
</head>

<body>
    <header>
        <h3>Programação em PHP</h3>
        <h4>Aluguel de Carros</h4>
    </header>
    <br>
    <br>
    <section>
        <?php
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : '';
        $data = isset($_GET["data"]) ? $_GET["data"] : '';
        $email = isset($_GET["email"]) ? $_GET["email"] : '';
        $telefone = isset($_GET["telefone"]) ? $_GET["telefone"] : '';
        $carro = isset($_GET["carro"]) ? $_GET["carro"] : '';
        $tempo = isset($_GET["tempo"]) ? $_GET["tempo"] : '';
        $modelocarro;
        $valordoaluguel;

        switch ($carro) {
            case "hatch":
                $modelocarro = "Hatch";
                $valordoaluguel = $tempo * 100;
                break;
            case "sedan":
                $modelocarro = "Sedan";
                $tempo * 150;
                $valordoaluguel = $tempo * 150;
                break;
            case "suv":
                $modelocarro = "SUV";
                $tempo * 200;
                $valordoaluguel = $tempo * 200;
                break;
            default:
                $modelocarro = "Não encontrado";
                $valordoaluguel = 0;
                break;
        }

        echo "<fieldset>
                                <legend>
                                    <h2>Aluguel de Carros</h2>
                                </legend>
                                <h2>Dados do Alugamento:</h2>
                                <p><strong>Nome:</strong> $nome</p>
                                <p><strong>Data:</strong> $data</p>
                                <p><strong>E-mail:</strong> $email</p>
                                <p><strong>Telefone:</strong> $telefone</p>
                                <p style='color: green';><strong>Carro:</strong><p><img src='img/$carro.png' alt='Foto de um carro $modelocarro' style='width: 90px; border: solid 2px green; border-radius: 3px; height: 60px;'></p>
                                <p><strong>Tempo:</strong> $tempo horas</p>
                                <p><strong>Valor do Aluguel:</strong> R$ $valordoaluguel</p>
                            </fieldset>";
        ?>
        <br>
        <a href="index.php">
            <<< VOLTAR A PÁGINA ANTERIOR</a>
    </section>
    <footer> <!-- serve para colocar o rodapé do site-->
        <h3>ALUGUEL DE CARROS</h3>
        <h4>FAÇA SEU ORÇAMENTO JÁ</h4>
        <br>
        <p class="texto-rodape">Contatos</p>
        <p class="texto-rodape">E-mail: contato@exemplo.com</p>
        <p class="texto-rodape">Telefone: (11) 9 8888-8888</p>
        <br>
        <p class="texto-rodape">Desenvolvido por: <a href="https://www.linkedin.com/in/exemplo/">Nome do Desenvolvedor</a></p>
        <p class="texto-rodape">CNPJ: 00.000.000/0000-00</p>
    </footer>
</body>

</html>