<?php require_once './../head.php' ?>
<?php require_once './classe.php'?>

<h2 class="border-bottom pb-2 w-25">Resolução</h2>

<?php 

    function formatNumber($num) {
        return number_format($num, 2, ',', '.');
    }

    $i = 0;
    $empregados = [];
    $empregado[0] = new Empregado("Jhonata", "André", 1200);


?>

<div class="mt-4 fs-5">
    <p>Nome: <span class="fw-bold text-secondary"><?= $empregado[$i]->getNome(); ?></span></p>
    <p>Sobrenome: <span class="fw-bold text-secondary"><?= $empregado[$i]->getSobrenome(); ?></span></p>
    <p>Salário anual:<span class="fw-bold text-secondary"> R$ <?= formatNumber($empregado[$i]->salarioAnual()); ?></span></p>
    <p>Salário anual com 10% de aumento: <span class="fw-bold text-secondary">R$ <?= formatNumber($empregado[$i] -> aumento()) ?></span></p>
</div>

<a href="javascript:history.go(-1)" class="btn btn-primary fs-5 px-4 mt-5">Voltar</a>
