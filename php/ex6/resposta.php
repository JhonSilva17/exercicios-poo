<?php require_once './../head.php' ?>
<?php require_once './classe.php'?>

<h2 class="border-bottom pb-2 w-25">Resolução</h2>

<?php 

    $aluno = new Aluno('3 ano', ['Matemática', 'Química', 'Biologia', 'Informática', 'Português']);
    $aluno -> setNome("João");

    $professor = new Professor(['Português', 'Matemática']);
    $professor -> setNome("Carlos");
?>

<div class="mt-4 fs-5">
    <p>O aluno <?= $aluno -> getNome()?> que curso o <?= $aluno -> getAnoEscolarAtual() ?>, estuda as matérias: 
        <ul>
            <?php  
                for ($i = 0; $i < count($aluno -> getQualCurso()); $i++) {
                    echo "<li> " . $aluno -> getQualCurso()[$i] . " </li>";
                }
            
            ?> 
        </ul>
    </p>

    <p>O professor <?= $professor -> getNome() ?>, leciona a(s) matéria(s): 
        <ul>
            <?php 
                for ($i = 0; $i < count($professor -> getMateriaEnsina()); $i++) {
                    echo "<li> " . $professor -> getMateriaEnsina()[$i] . " </li>";
                }
            
            ?>
        </ul>
    </p>
</div>

<a href="javascript:history.go(-1)" class="btn btn-primary fs-5 px-4 mt-5">Voltar</a>
