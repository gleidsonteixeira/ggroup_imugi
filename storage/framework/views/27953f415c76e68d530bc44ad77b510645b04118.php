<?php $__env->startSection('titulo','Corel Draw | Avaliação Prática'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade2" data-etapa="aula35">
			<h3 class="barlow">COREL DRAW</h3>
			 <div class="clear"></div>
            <h5 class="barlow">Avaliação Prática - Sugestões </h5>
            <p>Fazer uma identidade visual para uma Empresa, Startup, Loja ou Trabalho Autonomo.</p>
                <figure>
                    <img src="<?php echo e(asset('assets/img/photoshop/corel/aula18/imagem1.jpg')); ?>" alt="guia" style="width:25%!important;" >
                </figure>      
            <p>Montar um projeto de identidade visual temas sugerido pelo professor(a).</p>
                <figure>
                    <img src="<?php echo e(asset('assets/img/photoshop/corel/aula18/imagem2.jpg')); ?>" alt="guia" style="width:25%!important;" >
                </figure>      
                <p>Fazer as artes utilizando padrões de preenchimento e uma embalagem personalizada para um restaurante,
lanchonete ou Confeitaria.</p>
                <figure>
                    <img src="<?php echo e(asset('assets/img/photoshop/corel/aula18/imagem3.jpg')); ?>" alt="guia" style="width:25%!important;" >
                </figure> 
                <p>Montar templates e moldes para Gráficas e pequenas empresas temas sugerido pelo professor(a).
Avaliação Prática</p>
            </div>
        </div>
    </div>
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila4/corel-draw/aula35.blade.php ENDPATH**/ ?>