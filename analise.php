<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise de Crédito</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h3>Programação em PHP</h3>
        <h4>@lamoncomputingg</h4>
    </header>
    <br>

        <section>
            <h1>Buscas com Switch Case</h1><br>

            <?php
              
                $pesquisa = $_GET["pesquisa"];
                
                switch($pesquisa) {
                    case "hatch":
                        echo "<h2>O que é tipo de veículo hatch?</h2>
                                <p>Carros do tipo hatch​ são divididos em dois volumes principais: a caixa do motor e o bloco dos passageiros, que fica junto com o porta-malas.</p>
                                <p>Na prática, isso significa apenas que o automóvel é mais compacto.</p>
                                <p>Uma das primeiras vantagens do hatch é o seu tamanho compacto, que pode facilitar muito na hora de conseguir uma vaga. Além disso, o carro hatch oferece melhor percepção das dimensões do próprio veículo.</p>";
                        break;
                    case "sedan":
                        echo "<h2>Carro para toda família</h2>
                                <p>Com seu espaço interno e um generoso porta-malas, sedans são a opção ideal para famílias que usam o carro para suas tarefas diárias ou para viagens de longa duração. Um sedan comporta confortavelmente as crianças e até mesmo animais de estimação, se necessário.</p>
                                <p>As principal vantagem em adquirir um carro sedan é o conforto, oferecido por um espaço interno maior, e a capacidade do porta-malas — ideal para quem possui filhos e precisa de mais espaço para as bagagens.</p>";
                        break;
                    case "suv":
                        echo "<h2>SUV</h2>
                                <p>Em sua definição básica, SUV é a sigla para 'Sport Utility Vehicle', ou 'Veículo Utilitário Esportivo', ou seja, um carro destinado a carga/trabalho, como as picapes, mas com uma tocada mais esportiva. Normalmente é equipado com tração nas quatro rodas e caracteristicamente de porte avantajado.</p>
                                <p>Qual a diferença de um carro SUV?</p>
                                <p>Os SUVs são veículos que têm mais adaptabilidade a diferentes terrenos, são mais altos e robustos e, também, confortáveis e arrojados. <p>O motor, no geral, é mais potente e alguns modelos têm, ainda, a opção de tração 4×4.</p>";
                        break;
                    default:
                        echo "Carro não encontrado!";
                        break;
                }

            ?>



            <br>
            <a href="index.php"> VOLTAR A PAGINA ANTERIOR  </a>
        </section>

        <br>
        
        <footer> <!-- serve para colocar o rodapé do site-->
            <h3>ESPECIALIZADO EM TREINAMENTOS WEB</h3>
            <h4>DESENVOLVIMENTO WEB</h4>
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
