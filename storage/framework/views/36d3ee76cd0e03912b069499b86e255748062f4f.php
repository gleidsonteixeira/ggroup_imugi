<?php $__env->startSection('titulo','Corel Draw | Aula 4 – Linhas'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade2" data-etapa="aula21">
			<h3 class="barlow">COREL DRAW</h3>
			 <div class="clear"></div>
            <h5 class="barlow">Aula 4 – Linhas</h5>
            
            <div class="metade esquerda">
                <figure>
                    <img src="<?php echo e(asset('assets/img/photoshop/corel/aula04/imagem1.png')); ?>" alt="guia" style="width:95%!important;" >
                </figure>
            </div>
            <div class="metade direita">
                <figure>
                    <img src="<?php echo e(asset('assets/img/photoshop/corel/aula04/imagem2.png')); ?>" alt="guia" style="width:95%!important;" >
                </figure>
            </div>
        </div>
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila4/corel-draw/aula21.blade.php ENDPATH**/ ?>