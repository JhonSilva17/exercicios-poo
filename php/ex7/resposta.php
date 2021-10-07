<?php require_once './../head.php' ?>
<?php require_once './classe.php'?>

<h2 class="border-bottom pb-2 w-25">Resolução</h2>

<?php 
    
    $elevador = new Elevador(8, 10);
 

?>

<div class="mt-4 fs-5">
    <p>Andar atual: <span class="fw-bold"><?= $elevador -> getAndarAtual() ?></span></p>
    <p>Total de andares: <span class="fw-bold"><?= $elevador -> getTotAndares() ?></span></p>
    <p>Quantidade de pessoas: <span class="fw-bold"><?= $elevador -> getQuantPessoas() ?></span></p>
    <p>Capacidade de pessoas: <span class="fw-bold"><?= $elevador -> getCapPessoas() ?></span></p>
</div>

<a href="javascript:history.go(-1)" class="btn btn-primary fs-5 px-4 mt-5">Voltar</a>
