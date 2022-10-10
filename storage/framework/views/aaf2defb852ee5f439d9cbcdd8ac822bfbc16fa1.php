<?php $__env->startSection('titulo','Unit 5 |  Configurações de luz'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade11" data-etapa="configuracao_luz">
			<h3 class="barlow">UNIT 6</h3>
			<h5>Tipo de luz</h5>
			<ul class="unidade_6_5">
					<li>
						Paralelo: emite luz direcional e sem restrições de uma fonte infinitamente distante, aproximando a luz de uma fonte como o Sol.
					</li>
					<li>
						Spot: emite luz de uma fonte limitada por um cone, como uma lanterna ou um foco usado em produções de palco.
					</li>
					<li>
						O ponto: emite luz omnidirecional sem restrições, como os raios de uma lâmpada nua.
					</li>
					<li>O ambiente: cria luz que não tem fonte, mas sim contribui para o brilho geral de uma cena e não molda sombras.</li>
			</ul>
			<h5>Intesidade</h5>
			<p>
				O brilho da luz. Os valores negativos criam não-luz. O nonlight subtrai a cor de uma camada.
				Por exemplo, se uma camada já estiver acesa, criar uma luz direcional com valores negativos
				também apontando para aquela camada escurece uma área na camada.
			</p>
			<p>Cor - a cor da luz.</p>
			<h5>Ângulo do cone</h5>
			<p>
				O ângulo do cone que envolve a fonte de uma luz, que determina a largura do feixe a uma
				distância. Este controle está ativo somente se Spot for selecionado para light type. O ângulo
				do cone de uma luz Spot é indicado pela forma do ícone da luz no painel composição.
			</p>
			<p>
				Difusão do cone: a suavidade das bordas de um holofote. Este controle está ativo somente se Spot for selecionado para light type.
			</p>
			<p>
				Queda: o tipo de queda para uma luz paralela, ponto ou ponto. Falloff descreve como a intensidade de uma luz diminui ao longo da distância.
				Os tipos de Falloff incluem:
			</p>
				<ul class="unidade_6_5">
					<li>Nenhum: a iluminação não diminui à medida que a distância entre a camada e a luz aumenta.</li>
					<li>Suave: indica uma queda linear suave que começa no raio de Falloff e estende o comprimento especificado pela Distância Falloff .</li>
					<li>Inverse Square Clamped: indica uma falha fisicamente exata que começa no raio de Falloff Start e diminui proporcionalmente ao quadrado inverso da distância.</li>
					<li>Raio: especifica o raio da queda de uma luz. Dentro desta distância, a luz é uma luz constante. Fora dessa distância, a luz cai.</li>
					<li>Distância Falloff : especifica a distância que uma luz cai de uma luz.</li>
					<li>Projeta sombras: especifica se a fonte de luz faz com que uma layer lance uma sombra.
								A opção de material aceitar sombras deve ser ligada para que uma layer receba uma sombra. Esta configuração é o padrão. A opção de material Casts Shadows deve estar ligada
								para que uma layer lance sombras. Esta configuração não é o padrão.
					</li>
					<li>Shadow Darkness: define a escuridão da sombra. Este controle está ativo somente se Cast Shadows for selecionado.</li>
					<li>Shadow Diffusion: define a suavidade de uma sombra com base na sua aparente distância da layer sombreada. Valores maiores criam sombras mais suaves. Este controle está ativo somente se Casts Shadows for selecionado.</li>
				</ul>
				<h5>ATIVIDADES</h5>
				<ol class="unidade_6_5">
					<li>Desenvolver um Projeto animado com movimento de imagens e texto usando os recursos de movimento 3d.</li>
				</ol>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apostila-imugi\resources\views/apostila6/unidade11/configuracao_luz.blade.php ENDPATH**/ ?>