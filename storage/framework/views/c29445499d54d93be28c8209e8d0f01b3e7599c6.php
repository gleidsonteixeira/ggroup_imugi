<?php $__env->startSection('titulo','Corel Draw | Aula 6 – Texto'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade2" data-etapa="aula23">
			<h3 class="barlow">COREL DRAW</h3>
			 <div class="clear"></div>
            <h5 class="barlow">Aula 6 – Texto</h5>
                <figure style="margin-bottom:40px;">
                    <img src="<?php echo e(asset('assets/img/photoshop/corel/aula06/imagem1.jpg')); ?>" alt="guia" style="width:95%!important;" >
                </figure>
            
            <div class="metade esquerda">
                <figure>
                    <img src="<?php echo e(asset('assets/img/photoshop/corel/aula06/imagem2.jpg')); ?>" alt="guia" style="width:50%!important;" >
                </figure>
            </div>
            <div class="metade direita">
                <figure>
                    <img src="<?php echo e(asset('assets/img/photoshop/corel/aula06/imagem3.jpg')); ?>" alt="guia" style="width:50%!important;" >
                </figure>
            </div>
            <div style="margin-top:16px">
                <h5 class="barlow">Atividade</h5>
               <p>Montar uma cardápio para um restaurante ou pizzaria.</p>
               <figure>
                    <img src="<?php echo e(asset('assets/img/photoshop/corel/aula06/imagem4.jpg')); ?>" alt="guia" style="width:95%!important;" >
                </figure>
                <p style="margin-top:16px">Fazer uma arte de divulgação com preços para os clientes da lanchonete ou pizzaria.</p>
            </div>
        </div>
    </div>
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila4/corel-draw/aula23.blade.php ENDPATH**/ ?>