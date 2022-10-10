<?php $__env->startSection('titulo','Unit 34 | Hierarchy'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade34" data-etapa="hierarchy">
			<h3 class="barlow">UNIT 34</h3>
			<h5 class="barlow upper">Hierarchy</h5>
			<p>
			A janela Hierarchy lista todos os GameObjects na cena atual. As cenas são feitas de game
objects, e estes usam assets. Podemos acessar facilmente qualquer GameObject para uma
edição rápida a partir da janela hierarchy.
			</p>
			
            <div class="metade esquerda ">
            <figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unity/unit34/imagem1.png')); ?>" alt="guia1" style="width:75%;">
				</figure>
            </div>
            <div class="metade direita">
            <p>Embora a lista possa parecer
assustadora, não precisaremos
nos preocupar com muitos
desses GameObjects, pois
a maioria deles é usada
para jogos 3D.</p>
<p>Os únicos GameObjects
que usaremos são
Câmera, Texto GUI
e Sprites.</p>
            </div>
				
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila5/unidade34/hierarchy.blade.php ENDPATH**/ ?>