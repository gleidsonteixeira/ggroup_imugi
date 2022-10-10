
<?php $__env->startSection('titulo','Unit 1 | Atividades'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade1" data-etapa="atividades">
			<h3 class="barlow">UNIT 1</h3>
			<h5 class="barlow upper">Aula 1 – Atividades</h5>
                <form method="post" class="metade">
					<p>1 - Criar um projeto e orgazinar arquivos de clip de video na pasta de origem.
						<input type="text" class="full left-align" placeholder="Atividade Prática" disabled="true">
					</p>
                    <p>2 - Reorganizar trechos de um video na ti meline usando as tecnicas
							de pre-corte apresentadas em aula.
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila6/unidade1/atividades.blade.php ENDPATH**/ ?>