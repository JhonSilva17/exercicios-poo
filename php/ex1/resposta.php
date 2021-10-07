<?php require_once './../head.php' ?>
<?php require_once './classe.php' ?>

<h2 class="border-bottom w-25 pb-2">Resolução</h2>
<?php 

    function formatNumber($num) {
        return number_format($num, 2, ',', '.');
    }

    $i = 0;

    $faturas = [];

    $fatura[$i] = new Invoice(
        45, 
        'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero ipsam quo ipsum dolor at! Assumenda facilis eos cupiditate distinctio, a quos aspernatur et veritatis, quo ipsum voluptas sed, maiores ad?',
        3,
        45.59
    );

?>

<div class="mt-4 fs-5">
    <p>ID do produto: <span class="fw-bold text-secondary"><?= $fatura[$i]->getNumItemFaturado(); ?></span></p>
    <p>Descrição: <span class="fw-bold text-secondary"><?= $fatura[$i]->getDescItem(); ?></span></p>
    <p>Quantidade de itens:<span class="fw-bold text-secondary"> <?= $fatura[$i]->getQuantItemComp(); ?></span></p>
    <p>Preço por produto pedido: <span class="fw-bold text-secondary">R$ <?= formatNumber($fatura[$i] -> getPrecoItem()) ?></span></p>
    <p>Valor total: <span class="fw-bold text-secondary">R$ <?= formatNumber($fatura[$i] -> invoiceAmount()) ?></span></p>
</div>

<a href="javascript: history.go(-1)" class="btn btn-primary fs-5 mt-4 px-4">Voltar</a>
