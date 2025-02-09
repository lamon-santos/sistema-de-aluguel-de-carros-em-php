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
            <h2>Formulário Para Aluguel</h2>
        </section>
        <br>
        <section>
        <section>
            <fieldset>
                <br>
                    <legend>
                        <h2>Faça Seu Aluguel de Carros Agora!</h2>
                    </legend>
                    <h2>
                        Tabela com os valores de alugamento:
                    </h2>
                    <h4>
                        (ESSES VALORES SÃO PARA CADA HORA DE USO)
                    </h4>
                    <table>
                        <tr>
                            <td>Hatch</td>
                            <td>R$ 100,00</td>
                        </tr>
                        <tr>
                            <td>Sedan</td>
                            <td>R$ 150,00</td>
                        </tr>
                        <tr>
                            <td>SUV</td>
                            <td>R$ 200,00</td>
                        </tr>
                    </table>
                <br>
                    <p>Alugue um carro agora mesmo! Preencha o formulário abaixo:</p>
                <br>
                <form action="aluguel.php" method="get" target="">
                    <label for="nome">Nome:</label>&nbsp;
                    <input type="text" name="nome" id="nome" placeholder="Digite Seu Nome"><br><br>
                    <label for="data">Data:</label>&nbsp;
                    <input type="date" name="data" id="data"><br><br>
                    <label for="email">E-mail:</label>&nbsp;
                    <input type="email" name="email" id="email" placeholder="Digite Seu E-mail"><br><br>
                    <label for="telefone">Telefone:</label>&nbsp;
                    <input type="tel" name="telefone" id="telefone" placeholder="Digite Seu Telefone"><br><br>
                    <label for="tempo">Tempo de Aluguel:</label>&nbsp;
                    <input type="text" name="tempo" id="tempo" placeholder="Digite o tempo de aluguel"><br><br>
                    <label for="carro">Carro:</label>&nbsp;
                    <select name="carro" id="carro">
                        <option value="hatch">Hatch</option>
                        <option value="sedan">Sedan</option>
                        <option value="suv">SUV</option>
                    </select><br><br>
                    <input type="submit" name="enviar" value="Alugar">
                </form>
            </fieldset>
        </section>
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
