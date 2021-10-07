<?php require_once './../head.php' ?>

<h2>Exercício número 1</h2>
<p class="fs-5">Crie uma classe chamada <span class="fw-bold text-primary">Invoice</span> que possa ser utilizado por uma loja de suprimentos de informática para representar uma fatura de um item vendido na loja. Uma fatura deve incluir as seguintes informações como atributos</p>
<ul class="fs-5 text-secondary d-flex list-unstyled gap-2">
    <li>- número do item faturado</li>
    <li>- descrição do item</li>
    <li>- quantidade comprada do item</li>
    <li>- preço unitário do item</li>
</ul>
<p class="fs-5">Sua classe deve ter um construtor que inicialize os quatro atributos. Se a quantidade não for positiva, ela deve ser configurada como 0. Se o preço por item não for positivo ele deve ser configurado como 0.0. Forneça um método set e um método get para cada variável de instância. Além disso, forneça um método chamado <span class="fw-bold text-primary">getInvoiceAmount</span> que calcula o valor da fatura (isso é, multiplica a quantidade pelo preço por item) e depois retorna o valor.</p>

<?php require_once './../footer.php' ?>