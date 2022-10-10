
<?php $__env->startSection('titulo','Unit 31 | Player Modeling'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade31" data-etapa="player_modeling">
			<h3 class="barlow">UNIT 31</h3>
			<h5 class="barlow upper">Aula 31 – Player Modeling</h5>
				<div class="container">
							<p>	A começar pelo planejamento, escolha um estlo para ter uma orientação básica para
								modelar seu player ou o personagem atvo na cena. Crie imagens em papel usando lápis, faça
								no mínimo 5 folhas frente e verso, se você não tver um projeto ele nascerá nesse processo, não precisamos pensar nele com complexidade, pode ser um objeto simples desde que
								possamos aplicar movimentos, artculações e movimentos. Por fm, em uma folha separada
								desenhe seu personagem de frente, costas e topo fornecendo informações sufcientes para
								modelagem ser realizada, tudo bem se você não coseguir produzir um, faça uso de um modelo
								da internet como base.
							</p>
							<figure>
								<img src="<?php echo e(asset('assets/img/games_and_animation/unit31/imagem_unit31_1.png')); ?>" alt="guia1">
							</figure>
				</div>
				<div class="container">
					<h5>Estilos</h5>
					<p>A difusão das mídias digitais permitu uma permeabilidade enorme nos mundos e culturas
							distantes inﬂuenciando nossas formas de expressão.</p>
					<h5>HQ Clássico</h5>
					<p>
						O estlo americano usando muitos recursos desenvolvidos na europa pelos grandes estudiosos de anatomia humana.
					</p>
					<figure>
						<img src="<?php echo e(asset('assets/img/games_and_animation/unit31/imagem_unit31_2.png')); ?>" alt="guia2">
					</figure>
					<h5>SD (Super Deformed)</h5>
					<p>
						É um estlo que retrata a anatomia humana de maneira caricata, optando por dar ênfaze
						a partes do corpo como a cabeça ou traços específcos para seus persogens. Estlos como o
						mangá são um bom recurso, já que podemos alcançar bons moldes com menos faces, o cartoon também entra nessa classe.
					</p>
					<figure>
						<img src="<?php echo e(asset('assets/img/games_and_animation/unit31/imagem_unit31_3.png')); ?>" alt="guia3">
					</figure>
				</div>
				<div class="container">
					<h5>Steam punk</h5>
					<p>É muito mais um conceito do que um estlo de personagem, a forma humana sendo
								otmizada por máquinas baseadas em tecnologia vitoriana, amplamente usado no universo
								3D. Esse recurso permite dar destaque a utensílios e ferramentas, partes componentes do
								personagem.</p>
					<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit31/imagem_unit31_4.png')); ?>" alt="guia4">
					</figure>
				</div>
				<div class="container">
					<h5>Old scool e New School</h5>
					<p>São desenhos baseados nas tradições funerárias mexicanas, muito comuns em tatuagem,
								tem como característca principal traços defnidos e uso apenas de preto e branco, o new scool
								introduz cores vibrantes também muito usado em jogos.</p>
					<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit31/imagem_unit31_5.png')); ?>" alt="guia5">
					</figure>
				</div>
			</div>
    </div>
	</div>
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila5/unidade31/player_modeling.blade.php ENDPATH**/ ?>