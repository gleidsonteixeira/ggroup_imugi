
<?php $__env->startSection('titulo','Unit 6 | Modelagem Básica'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade6" data-etapa="modelagem_basica">
			<h3 class="barlow">UNIT 6</h3>
			<h5 class="barlow upper">Aula 1 – Modelagem Básica</h5>
			<div class="container">
				<p>
					Agora que já sabemos navegar, inserir objetos e transformar em editáveis, vamos começar
					nossa fase de modelagem. Isso define drásticamente a qualidade do seu trabalho, logo suas
					técnicas de modelagem devem ser ricas em detalhes com o mínimo de faces possíveis. Os
					objetos 3D são definidos por suas quantidades de faces, mas um bom modelador vai além das
					regras, os novos vídeo games são muito potentes, mas um bom uso de nossas ferramentas vai
					nos levar a um designer leve e inteligente.
				</p>	
				<p><b>Modelagem de estruturas básicas, formas sem curvas.</b></p>
				<p>Vamos começar com algumas estruturas básicas.</p>
				<p>
					Insira um cubo pois vamos modelar uma mesa, um objeto bem simples, 
					mas nosso objetivo são as técnicas envolvidas no processo, assim como uma casa o conhecimento precisa
					de alicerces firmes. 
				</p>
				<p>
					Torne o objeto editável clicando em <b>macke editable</b>, logo em seguida usando as ferramentas de seleção 
					direta <b>faces</b> achate um dos lados até que seu cubo fique com o aspecto
					de um tábua, precisaremos subdividir a estrutura.
				</p>
				<div>
					<figure>
						<img src="<?php echo e(asset('assets/img/games_and_animation/unit6/imagem_unit6_01.png')); ?>" alt="guia1">
					</figure>
				</div>
				<p>
					Vamos selecionar um dos lados de cima ou de baixo para fazer os pés da mesa, subdvida
					a superfície e altera o tamanho de suas subdvisões até que nos cantos se fomer pequenos
					<b>triângulos</b>.
				</p>
				<div>
					<figure>
						<img src="<?php echo e(asset('assets/img/games_and_animation/unit6/imagem_unit6_02.png')); ?>" alt="guia2">
					</figure>
				</div>
				<div>
					<figure>
						<img src="<?php echo e(asset('assets/img/games_and_animation/unit6/imagem_unit6_03.png')); ?>" alt="guia3">
					</figure>
				</div>
				<p>
					Feito isso, faremos a seleção com a ferramenta faces dos quatro triângulos que se formaram da última alteração. 
					Pressione o SHIFT e clique com o botão esquerdo do mouse sobre
					as 4 superfícies triangulares, corrija sua visão para ter uma visão lateral do objeto, com as
					superfícies selecionadas, clique no menu mesh e vá até o submenu creates tools, lá procure a
					opção extrude click e clique nela, mantenha pressionado sobre qualquer uma das superfícies
					selecionadas e realize um pequeno movimento com o mouse e sua superfície será extrudada.
				</p>
				<div>
					<figure>
						<img src="<?php echo e(asset('assets/img/games_and_animation/unit6/imagem_unit6_04.png')); ?>" alt="guia4">
					</figure>
				</div>
				<p>
					Você está criando novas partes de superfícies a partir desses comandos, também pode
					usar o atalho de taclado, basta pressionar o CTRL após ter selecionado as superfíceis que deseja projetar, 
					clique novamente sobre ela, mantenha a tecla CTRL pressionada e mova o mouse,
					se desejar uma projeção precisa pode fazer isso clicando sobre o eixo que deseja expandir sua
					forma.
				</p>
			</div>
        </div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila5/unidade6/modelagem_basica.blade.php ENDPATH**/ ?>