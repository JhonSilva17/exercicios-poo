<?php require_once './../head.php' ?>
<?php require_once './classe.php'?>

<h2 class="border-bottom pb-2 w-25">Resolução</h2>

<?php 

    $hoje = new Data('31', '12', '2003');

?>

<div class="mt-4 fs-5">
   <p><?= $hoje -> date(); ?></p>
</div>

<a href="javascript:history.go(-1)" class="btn btn-primary fs-5 px-4 mt-5">Voltar</a>
