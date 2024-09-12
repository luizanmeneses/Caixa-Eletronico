<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13 - Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $valor = $_GET['valor'] ?? 0;
    ?>
    <main>
        <h2>Caixa Eletrônico</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="valor" step="5" value="<?=$valor?>"><!--o step é para que só aceite múltiplos de 5, por conta das notas disponíveis-->
            <p>*Notas disponíveis: R$100, R$50, R$10, R$5</p>
            <button type="submit">Sacar</button>
        </form>
    </main>
    <section>
        <?php 
            $sobra = $valor;
            $nota100 = intdiv($valor, 100);
            $sobra = $valor % 100;
            $nota50 = intdiv($sobra,50);
            $sobra = $sobra % 50;
            $nota10 = intdiv($sobra,10);
            $sobra = $sobra % 10;
            $nota5 = intdiv($sobra, 5);
        ?>
        <h2>Saque de R$<?=$valor?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imgs/100-reais.jpg" alt="nota100" class="nota"> x <?=$nota100?></li>
            <li><img src="imgs/50-reais.jpg" alt="nota50" class="nota"> x <?=$nota50?></li>
            <li><img src="imgs/10-reais.jpg" alt="nota10" class="nota"> x <?=$nota10?></li>
            <li><img src="imgs/5-reais.jpg" alt="nota5" class="nota"> x <?=$nota5?></li>
        </ul>

    </section>
</body>
</html>