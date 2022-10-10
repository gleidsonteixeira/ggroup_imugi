
<?php $__env->startSection('titulo','Unit 8 | After Effects CC - CONCEITOS DE ANIMAÇÃO 01'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade8" data-etapa="conceitos_animacao_01">
			<h3 class="barlow">UNIT 8 - After Effects CC</h3>
			<h5 class="barlow upper">AULA 03 - CONCEITOS DE ANIMAÇÃO 01</h5>

			<h5>Interpolação de keyframe espacial e temporal</h5>
			<p>A interpolação refere-se a um processo de preenchimento dos dados desconhecidos entre dois valores conhecidos. O usuário define keyframes para especificar valores de propriedades em determinados tempos e o after interpola os valores para a propriedade entre esses keyframes.</p>
			<p>Interpolação entre keyframes pode ser usada para animar movimento, efeitos, níveis de áudio, ajuste de imagem, transparência, mudança de cor e muito mais. Por gerar valores de propriedades entre keyframes a interpolação, às vezes, é chamada tweening. Vale lembrar que a interpolação temporal é a interpolação de valores no tempo e a interpolação espacial é a interpolação de valores no espaço.</p>
			
			<h5>Interpolação temporal e gráfico de valores</h5>
			<p>O gráfico de valores exibe valores x como vermelho, valores y como verdes e z (apenas 3D) como azul e fornece informações completas sobre o valor dos keyframes em qualquer ponto de uma composição, permitindo que você as controle. No painel informações é possível saber o método de interpolação temporal de um keyframe selecionado. Usando o gráfico de valores, no editor de gráficos, é possível fazer ajustes precisos nos keyframes da propriedade temporal.</p>

			<h5>Interpolação espacial e motion path</h5>
			<p>No painel informações é possível saber o método de interpolação espacial de um keyframe No painel informações é possível saber o método de interpolação espacial de um keyframe selecionado. Ao aplicar ou alterar a interpolação espacial para uma propriedade como, por exemplo, posição, é preciso ajustar o motion path no painel composição. Os diferentes keyframes no motion path fornecem informações sobre o tipo de interpolação em qualquer ponto no tempo.</p>
			<p>Quando o usuário cria mudanças espaciais em uma layer, o after usa o bézier automático como a interpolação especial padrão. Para alterar o padrão para interpolação linear: acesse editar > preferências > geral e selecione interpolação espacial padrão para linear.</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit8/imagem_unit8_1.png')); ?>" alt="guia1">
				</figure>
			</div>

			<h5>Interpolação de caminho de movimento</h5>
			<p>A. Linear B. Auto Bezier C. Continuous Bezier D. Bezier E. Hold</p>
			<p>É preciso ficar atento, pois, em alguns casos a interpolação espacial do auto bézier para keyframes de posição pode causar o efeito boomerang (ida e volta) entre dois keyframes com valores iguais. Nesse caso, é possível alterar o keyframe anterior para usar interpolação de retenção ou alterar ambos os keyframes para usar interpolação linear.</p>

			<h5>Mask</h5>
			<p>A mask é um path usado como um parâmetro para modificar atributos, efeitos e propriedades da layer. O uso mais comum de uma mask é a modificação de um canal alfa de uma layer, que determina a transparência.</p>
			<p>As mask path fechado podem criar áreas transparente para uma layer. Os motion path aberto não podem criar áreas transparentes para uma layer, mas são úteis como parâmetros para um efeito. Os efeitos que podem usar um mask path aberto ou fechado como entrada incluem: stroke, path text, audio waveform, audio spectrum e vegas. Os efeitos que podem usar mask fechadas como input incluem: fill, smear, reshape, particle playground, e inner/outer key.</p>
			<p>Vale lembrar que uma mask pertence a uma layer específica, mas cada layer pode conter múltiplas masks. É possível desenhar formas geométricas comuns como estrelas, polígonos e elipses, com as ferramentas de forma, ou formas livres com a ferramenta caneta.</p>
			<p>A edição e a interpolação de mask path possuem características extras. Assim, o usuário pode vincular um mask path a um caminho de forma usando expressões (isso permite trazer os benefícios das masks em layers de forma e vice-versa).</p>
			<p>O usuário pode modificar a posição da mask apenas arrastando-a para posições diferentes no grupo de propriedades mask no painel timeline. Lembrando que a posição de uma mask afeta como a mesma interage com outras masks.</p>
			<p>A área propriedade mask opacity determina a influência que uma mask fechada tem no canal alfa da layer dentro da área da mask. Um valor de opacidade de mask 100% corresponde a uma área interior opaca. A área fora da mask é sempre transparente. Para inverter o que é considerado dentro e o que é considerado externo para uma mask específica, selecione Inverter ao lado do nome da mask no painel timeline.</p>

			<h5>Path</h5>
			<p>Mask, formas, pinceladas e motion path, entre outros recursos no after, dependem do conceito de um path. Cada tipo de path tem suas próprias características únicas. No entanto, ferramentas e técnicas se sobrepõem para criar e editar paths.</p>
			<p>Um path consiste em segmentos e vértices. Sendo segmentos as linhas ou curvas que conectam vértices e os vértices o que definem onde cada segmento de um path começa e termina. É possível alterar a forma de um path, arrastando seus vértices. À medida que um caminho sai de um vértice, o ângulo e o comprimento da linha de direção de saída para esse vértice determinam o caminho. À medida que o caminho se aproxima do próximo vértice, o caminho é menos influenciado pela linha de direção de saída do vértice anterior e mais influenciado ela linha de direção de entrada do próximo vértice.</p>

			<h5 class="barlow center-align">A T I V I D A D E S</h5>
            <p style="margin-top: 16px"><b>1.</b> Criar animação de um foguete dando a volta em um planeta ao longo do path, aplicando variação de timing e aceleração e desaceleração.</p>			


		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila6/unidade8/conceitos_animacao_01.blade.php ENDPATH**/ ?>