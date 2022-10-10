<?php $__env->startSection('titulo','Unit 33 | Game View'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade33" data-etapa="game_view">
			<h3 class="barlow">UNIT 33</h3>
			<h5 class="barlow upper">Game View</h5>
			<p>
			Game View exibe o jogo final publicado, renderizado a partir da visualização da câmera. É
aqui que testamos nosso jogo.
			</p>
			<p>Para conseguir isso, basta pressionar o  botão <img src="<?php echo e(asset('assets/img/games_and_animation/unity/unit33/imagem18.png')); ?>" alt="guia1" style="width:40px; display:inline;"> play e ver nosso jogo como na imagem a
seguir, onde um exemplo de jogo foi carregado:</p>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unity/unit33/imagem17.png')); ?>" alt="guia1" style="width:75%; margin: 0 auto;">
				</figure>
			</div>
			<h5 class="barlow" style="margin-top:20px;">Criação de assets</h5>
			<p>Quando fazemos um jogo, alguns assets serão criados fora do Unity (Photoshop, Illustrator
,Audacity, Audition). Esses assets serão importados para o Unity para serem usados, enquanto
outros assets podem ser criados dentro do Unity, como câmeras, objetos de jogo, scripts e
animações.</p>
<p> Quando clicamos no botão <img src="<?php echo e(asset('assets/img/games_and_animation/unity/unit33/imagem19.png')); ?>" alt="guia1" style="width:40px; display:inline;"> Create, no topo do painel Project , temos uma lista de assets
que podemos criar, conforme mostrado na seguinte imagem: </p>
<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unity/unit33/imagem20.png')); ?>" alt="guia1" style="width:75%; margin: 0 auto;">
				</figure>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila5/unidade33/game_view.blade.php ENDPATH**/ ?>