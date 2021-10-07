<?php require_once './../head.php' ?>
<?php require_once './classe.php'?>

<h2 class="border-bottom pb-2 w-25">Resolução</h2>

<?php 

    $contagem = new Contador(23);
    $contagem -> incrementar();

    //  $contagem -> zerar()
    //  $contagem -> incrementar()
    //  $contagem -> cont()

?>

<div class="mt-4 fs-5">
    <p>Valor da contagem: <?= $contagem -> cont() ?></p>
</div>

<a href="javascript:history.go(-1)" class="btn btn-primary fs-5 px-4 mt-5">Voltar</a>
