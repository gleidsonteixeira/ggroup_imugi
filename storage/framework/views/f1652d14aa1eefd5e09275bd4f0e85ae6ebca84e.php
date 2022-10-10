<?php $__env->startSection('titulo','Unit 18 |  COLORIZAÇÃO'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade18" data-etapa="colorizacao">
			<h3 class="barlow">UNIT 18</h3>
			<h5 class="barlow upper">AULA 19 - AJUSTE DE CORES EM VÍDEO</h5>
			<h5>Efeito de cor Lumetri</h5>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit18/imagem_unit18_1.png')); ?>" alt="guia1">
				</figure>
			</div>
			<p>
					O After Effects oferece ferramentas de calibração e cor da marca Lumetri Color de qualidade profissional que permitem classificar sua filmagem diretamente em sua timeline.
					É possível acessar o efeito Lumetri Color da categoria correção de cor do menu efeitos e do painel efeitos e predefinições.
			</p>
			<p>
				Lumetri Color é acelerado por GPU para um desempenho mais rápido. Usando essas ferramentas, você pode ajustar a cor, o contraste e a luz em suas sequências de maneiras novas e inovadoras.
				Com a edição e a classificação de cores trabalhando lado a lado, você pode se mover livremente entre tarefas de edição e classificação sem a necessidade de exportar ou iniciar uma aplicação de classificação separada.
			</p>
			<p>
				O espaço de trabalho Color foi projetado não apenas para coloristas experientes, mas também para editores que são novos para classificar a cor.
				É possível aplicar correções de cores simples ou Lumetri Looks complexos usando controles deslizantes e controles intuit vos ou ainda ajustar facilmente cortes ou finalizar notas usando ferramentas avançadas de correção de cores, como curvas e rodas de cores.
			</p>
			<h5>Auto Color e Auto Contraste efeitos</h5>
			<p>
				O efeito Auto Color ajusta o contraste e a cor de uma imagem depois de analisar as sombras, os tons médios e os destaques da imagem.
				O efeito Auto Contraste ajusta o contraste total e a mistura de cores. Cada efeito mapeia os pixels mais claros e mais escuros da imagem para branco e preto e, em seguida, redistribui os pixels intermediários.
				O resultado é que os destaques aparecem mais claros e as sombras aparecem mais escuras.
			</p>
			<h5>Efeito de níveis automáticos</h5>
			<p>
				O efeito Auto Levels mapeia os valores mais claros e mais escuros em cada canal de cores na imagem para branco e preto e, em seguida, redistribui os valores intermediários. Como resultado, os destaques aparecem mais claros e as sombras aparecem mais escuras.
				Como os níveis automáticos ajustam cada canal de cores individualmente, ele pode remover ou introduzir moldagens de cores.
			</p>
			<h5>Efeito preto e branco</h5>
			<p>
				O efeito Black & White converte uma imagem colorida em escala de cinza, fornecendo controle sobre como as cores individuais são convertidas.
				Para converter esse canal de cor em um tom mais escuro ou mais claro de cinza diminua ou aumente o valor da propriedade para cada componente de cor.
				Para matizar a imagem com uma cor, selecione Tinta e clique na amostra de cores ou conta-gotas para especificar uma cor.
				O efeito Black & White é baseado no tipo de camada de ajuste Black & White no Photoshop.
			</p>
			<h5>Efeito de brilho e contraste</h5>
			<p>
				O efeito Brilho e Contraste ajusta o brilho e o contraste de uma layer inteira (não canais individuais).
				O valor padrão de 0.0 indica que nenhuma alteração é feita. Usar o efeito de brilho e contraste é a maneira mais fácil de fazer ajustes simples na faixa tonal da imagem.
				Ele ajusta todos os valores de pixel na imagem ao mesmo tempo (destaques, sombras e tons médios).
			</p>
			<h5>Efeito de equilíbrio de cor (HLS)</h5>
			<p>
				O efeito Color Balance (HLS) altera a tonalidade, leveza e saturação de uma imagem.
				Este efeito destina-se apenas a fornecer compatibilidade com projetos criados em versões anteriores do After Effects que usam o efeito de equilíbrio de cores (HLS).
				Para novos projetos, use o efeito Matiz / Saturação, que opera o mesmo que o comando Hue / Saturat on no Adobe Photoshop. Você pode converter um filme em escala de cinza configurando a saturação para -100.
			</p>
			<h5>Efeito Colorama</h5>
			<p>
				O efeito colorama é um efeito versátil e poderoso para converter e animar cores em uma imagem.
				Usando o efeito colorama, você pode sutilmente matizar uma imagem ou alterar radicalmente sua paleta de cores.
			</p>
			<p>
				O colorama funciona convertendo primeiro um atributo de cor especificado em escala de cinza e, em seguida, remapeando os valores de escala de cinza para um ou mais ciclos da paleta de cores de saída especificada.
				Um ciclo da paleta de cores de saída aparece na roda do ciclo de saída. Os pixels pretos são mapeados para a cor na parte superior da roda; Grays cada vez mais leves são mapeados para cores sucessivas indo no sentido horário ao redor da roda.
				Por exemplo, com a paleta de ciclo de matiz padrão, os pixels correspondentes a preto tornam-se vermelhos, enquanto os pixels correspondentes a 50% de cinza tornam-se cianos.
			</p>
			<h5>Efeito Curves</h5>
			<p>
				O efeito curves ajusta a curva de resposta tonal e de resposta de tom de uma imagem.
				O efeito levels também ajusta a resposta de tom, mas o efeito curves dá mais controle.
				Com o efeito levels você faz os ajustes usando apenas três controles (destaques, sombras e tons médios).
				Com o efeito curves, você pode arbitrariamente classificar valores de entrada para valores de saída usando uma curva definida por 256 pontos.
			</p>
			<h5>Hue / Saturation</h5>
			<p>
				O efeito Hue / Saturation ajusta a tonalidade, saturação e leveza de componentes de cores individuais em uma imagem. Este efeito é baseado na roda de cores.
				Ajustar a tonalidade, ou a cor, representa um movimento em torno da roda de cores. Ajustar a saturação, ou a pureza da cor, representa um movimento em seu raio.
				Use o controle colorir para adicionar cor a uma imagem em escala de cinza convertida em RGB ou para adicionar cor a uma imagem RGB.
			</p>
			<h5>Efeito de matiz</h5>
			<p>
				O efeito tint matiza uma camada substituindo os valores de cor de cada pixel por um valor entre as cores especificadas pelo mapa preto e o mapa branco.
				Pixels com valores de luminância entre preto e branco são atribuídos valores intermediários.
				A quantidade de matiz especifica a intensidade do efeito. Este efeito é acelerado por GPU para renderização mais rápida.
				Clique no botão Swap Colors para trocar os valores de cor dos parâmetros Map Black To e Map White To.
			</p>
			<h5>Magic Bullet Looks</h5>
			<p>
				É um Plugin da Red Giant para se editar e modificar a iluminação e cores de vídeos.
				Possibilitando que as cores sejam adaptadas de forma fácil e eficaz para adaptar seu filme aos tons de iluminação e cores necessária para climatizar seus filmes, vídeos e etc.
			</p>
			<h5>ATIVIDADES</h5>
			<ol  class="unidade_6_5">
				<li>Mostrar testes de cor com vídeos da internet e vídeos gravados em sala de aula</li>
			</ol>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apostila-imugi\resources\views/apostila6/unidade18/colorizacao.blade.php ENDPATH**/ ?>