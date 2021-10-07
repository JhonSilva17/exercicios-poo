<?php require_once './../head.php' ?>
<?php require_once './classe.php'?>

<h2 class="border-bottom pb-2 w-25">Resolução</h2>

<?php 

    $jogador = new Jogador('Neymar', 'a', 1990, 'Brasil', 1.85, 89.7);

?>

<div class="mt-4 fs-5">
    <p>Nome do Jogador: <span class="fw-bold"><?= $jogador -> getNome() ?></span></p>
    <p>Idade do Jogador:<span class="fw-bold"> <?= $jogador -> idade() ?></span></p>
    <p>Posição atuante: <span class="fw-bold"><?= $jogador -> getPosicao() ?></span></p>
    <p>Nacionalidade: <span class="fw-bold"><?= $jogador -> getNacionalidade() ?></span></p>
    <p>Quantos anos faltar para ele se aposentar?<span class="fw-bold"> <?= $jogador -> quantoFalta() ?></span></p>
</div>

<a href="javascript:history.go(-1)" class="btn btn-primary fs-5 px-4 mt-5">Voltar</a>
