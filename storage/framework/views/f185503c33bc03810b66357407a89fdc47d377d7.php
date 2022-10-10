
<?php $__env->startSection('titulo','Unit 3 | Atividades'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade3" data-etapa="atividades">
			<h3 class="barlow">UNIT 3</h3>
			<h5 class="barlow upper">Aula 1 – Atividades</h5>
                <form method="post" class="metade">
					<p>1 - Crie e organize de forma separada e alinhada: um quadrado, cilindro, cone, esfera e um
						plano onde todos devem estar. 
						<input type="text" class="full left-align" placeholder="Atividade Prática" disabled="true">
					</p>
                    <p>2 - Delete o quadrado e posicione o cilindro em seu lugar.
						<input type="text" class="full left-align" placeholder="Atividade Prática" disabled="true"> 
					</p>
					<p>3 - Use as formas básicas para construir um objeto simples: caixa, mesa, geladeira, potes
						com tampas, baús e qualquer outra coisa que consiga construir.
						<input type="text" class="full left-align" placeholder="Atividade Prática" disabled="true">						
					</p>
					<p>4 - Deixe seus objetos com tamanhos diferentes e os organize do maior para o menor.
						Configure trinta graus a mais de rotação no eixo y do maior para o menor.
						<input type="text" class="full left-align" placeholder="Atividade Prática" disabled="true">
					</p>
                </form>
        </div>
    </div>    
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila5/unidade3/atividades.blade.php ENDPATH**/ ?>