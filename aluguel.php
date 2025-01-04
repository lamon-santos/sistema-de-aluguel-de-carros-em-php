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

        #grid-container{
            background-color:rgb(136, 196, 255);
        }

        .grid{
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-gap: 5px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .grid div{
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-size: 1.9rem;
            padding-bottom: 25px;
        }

        img{
            width: 95%;
            height: 80%;
        }

        a{
            color: red;
            padding: 10px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 1.9rem;
            transition: background-color 0.3s ease;
            font: bold;
        }

        fieldset{
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
        <section>
            <h1>Aluguel de Carros - Curso de PHP</h1><br>
           <div class="formulario">
                <form action="analise.php" method="get">
                
                <label for="pesquisa">Pesquisar:</label>&nbsp;
                <input type="text" name="pesquisa" id="pesquisa" placeholder="Digite Aqui Sua Pesquisa"> <!-- input é o campo de entrada de dados, type é o tipo de dado que será inserido, name é o nome do campo, id é o identificador do campo, placeholder é o texto que aparece no campo-->

                <input type="submit" name="enviar" value="Pesquisar"> <!-- input é o campo de entrada de dados, type é o tipo de dado que será inserido, value é o texto que aparece no botão-->
                </form>
           </div>
        </section>

        <br>

        <section class="container" id="grid-container">
           <div class="grid">
                <div>
                    <h2>Hatch</h2>
                    <img src="img/hatch.png" alt="Foto de um carro Hatch">
                    <a href="hatch.html">CLIQUE AQUI PARA ALUGAR</a>
                </div>
                <div>
                    <h2>Sedan</h2>
                    <img src="img/sedan.png" alt="Foto de um carro Sedan">
                    <a href="sedan.html">CLIQUE AQUI PARA ALUGAR</a>
                </div>
                <div>
                    <h2>SUV</h2>
                    <img src="img/suv.png" alt="Foto de um carro SUV">
                    <a href="suv.html">CLIQUE AQUI PARA ALUGAR</a>
                </div>
           </div> 
        </section>
            <section>

                <?php
                    $nome = $_GET["nome"];
                    $data = $_GET["data"];
                    $email = $_GET["email"];
                    $telefone = $_GET["telefone"];
                    $carro = $_GET["carro"];
                    $tempo = $_GET["tempo"];

                    echo "<fieldset>
                            <legend>
                                <h2>Aluguel de Carros</h2>
                            </legend>
                            <h2>Dados do Alugamento:</h2>
                            <p>Nome: $nome</p>
                            <p>Data: $data</p>
                            <p>E-mail: $email</p>
                            <p>Telefone: $telefone</p>
                            <p>Carro: $carro</p>
                        </fieldset>";

                ?>
                <br>
                <a href="index.php"> <<< VOLTAR A PÁGINA ANTERIOR</a>
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
