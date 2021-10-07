<?php require_once './../head.php' ?>

<h2>Exercício número 7</h2>
<p class="fs-5">Crie uma classe denominada Elevador para armazenar as informações de um elevador dentro de um prédio. A classe deve armazenar o andar atual (térreo = 0), total de andares no prédio (desconsiderando o térreo), capacidade do elevador e quantas pessoas estão presentes nele.</p>
<ul class="fs-5 text-secondary">
<li>Construtor: Deve receber como parâmetros a capacidade do elevador e o total de andares no prédio (os elevadores sempre começam no térreo e vazio);</li>
<li>Entra: para acrescentar uma pessoa no elevador (só deve acrescentar se ainda houver espaço);</li>
<li>
    Sai: para remover uma pessoa do elevador (só deve remover se houver alguém
    dentro dele);
</li>
<li>Sobe: para subir um andar (não deve subir se já estiver no último andar);</li>
<li>Desce : para descer um andar (não deve descer se já estiver no térreo);</li>
</ul>
<p class="fs-5">Encapsular todos os atributos da classe (criar os métodos set e get)</p>


<?php require_once './../footer.php' ?>