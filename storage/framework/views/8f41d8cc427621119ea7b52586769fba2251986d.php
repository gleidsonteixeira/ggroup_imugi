
<?php $__env->startSection('titulo','Unit 2 | Ferramentas de Edição'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade2" data-etapa="ferramentas_de_edicao">
			<h3 class="barlow">UNIT 2</h3>
			<h5 class="barlow upper">Aula 05 - Ferramentas de Edição</h5>

			<p>
				Cada ícone neste painel representa uma ferramenta que executa um Função, normalmente
				um tipo de edição em uma seqüência.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_17.png')); ?>" alt="guia1">
				</figure>
			</div>

			<h5>Selection Tool</h5>

			<p>
				A maneira mais simples de selecionar um clip em uma seqüência é clicar nele. Tenha cuidado
				para não clicar duas vezes pois isso abrirá o clip no Source Monitor, pronto para o ajuste das
				marcações In ou Out. Porém, caso isso seja feito, as alterações sejam feitas no painel Source,
				elas automaticamente serão atualizadas na timline. Para acioná-la podemos clicar no botão
				<img style="display: inline-block;" src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_18.png')); ?>" alt="guia"> 
				ou através da tecla de atalho “V”. Se você pressionar a tecla Shift enquanto clica com a
				Selection Tool, você pode selecionar ou deselecionar clips adicionais. Você pode também criar
				seleções de clips criando caixas de seleção ao arrastar eo mouse na timeline.
			</p>

			<h5>Track Select Forward Tool</h5>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_19.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Usando a Track Select Forward, cada clipe, em cada faixa, apartir da faixa que você seleciona
				até o final da seqüência é selecionado.<br/>
				Isso pode ser útil se você quiser adicionar uma lacuna à sua seqüência para criar espaço para
				mais clips. Você pode arrastar todos os clipes selecionados para a direita para introduzir uma
				lacuna.
			</p>

			<h5>Track Select Backward Tool</h5>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_20.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Usando a Track Select Backward, cada clipe até aquele que você clicou é selecionado.
			</p>

			<h5>Selecionando apenas áudio ou vídeo</h5>

			<p>
				É comum adicionar um clipe a uma seqüência e depois perceber que não precisa do áudio ou
				do vídeo ou parte deles. Você pode querer remover um ou outro para manter sua Timeline
				arrumada, e há uma maneira fácil de fazer a seleção correta: se a seleção vinculada estiver
				ativada, você pode temporariamente substituí-lo.
			</p>

			<p>
				Clique na Selection Tool e tente clicar em alguns segmentos de sua Timeline mantendo a tecla
				Alt pressionada. Premiere Pro ignora o link entre partes de vídeo e áudio de seus clips.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_21.png')); ?>" alt="guia1">
				</figure>
			</div>

			<h5>Dividindo Clips</h5>

			<p>
				Também é comum adicionar um clipe a uma seqüência e então perceber que você precisa divide-lo 
				em duas partes. Talvez você queira pegar apenas uma seção de um clipe e usá-lo como
				um corte, ou talvez você queira separar o início e o fim para criar espaço para novos clips.
			</p>

			<p>
				Razor Tool
				<img style="display: inline-block;" src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_22.png')); ?>" alt="guia"> 
				– Use a Razor Tool apenas clicando nas trilhas desejadas. Essa técnica não
				exige que a Timeline esteja selecionada, basta apontar na parte da trilha que deseja, e se
				orientar pela linha que marca o corte.
			</p>

			<h5>Dividir usando o Telcado</h5>

			<p>
				Pressione CTRL+K para realizer um corte apartir do posicionamento definido pelo marcador de tempo na trilha desejada.
			</p>

			<p>
				Os clipes que eram originalmente contí nuos continuarão a ser reproduzidos continuarão a
				ser reproduzidos da mesma forma, a menos que você os mova uu faça ajustes separados em
				diferentes partes.
			</p>

			<h5>Juntando Edições</h5>

			<p>
				Você pode juntar os clips divididos, caso eles ainda estejam na mesma ordem. Para isso, clique
				Timeline Display Settings e selecionar a opção Show Through Edits para exibir um no botão
				<img style="display: inline-block;" src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_23.png')); ?>" alt="guia"> 
				ícone especial entre as edições.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_24.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Você pode juntar clips que possuem o ícone Through Edits, clique com o botão direito do mouse 
				e escolha a opção Join Through Edits.<br/>
				Também é possível juntar os clips deletando o ícone Through Edits.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_25.png')); ?>" alt="guia1">
				</figure>
			</div>
		
			<h5>Vinculando e desvinculando clipes</h5>
		
			<p>
				Você pode desligar e ligar o link entre um vídeo conectado e um segmento de áudio facilmente. 
				Basta selecionar o clip ou os clips que deseja alterar, clique com o botão direito do mouse
				em cada um deles e escolha Unlink. Você irá perceber o desvinculo através do sumiço de uma
				letra “V” que encontrava-se na trilha, representando este vínculo. 
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_26.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Você pode vincular um clipe com seu áudio novamente selecionando os dois segmentos do
				clips, clicando com o botão direito do mouse em umdeles, e escolhendo Link. A letra “V” representando 
				o vínculo, retornará. Não há nenhum dano em vincular ou desvincular clips, isso
				não mudará a forma com que o Premiere Pro reproduz sua sequência. Isso apenas lhe dá a
				fl exibilidade para trabalhar com clipes da maneira que você deseja.
			</p>

			<h5>Arrastando Clips</h5>

			<p>
				No topo da Timeline, você verá o Snap Butt on
				<img style="display: inline-block;" src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_27.png')); ?>" alt="guia"> 
				clips irão se encaixar automaticamente entre suas margens quando arrastados. Esse recurso
				será útil para evitar que clips sejam sobescrevidos.
			</p>

			<h5>Aparar na Timeline</h5>

			<p>
			Ao clicar no ponto de edição com a Selection Tool, a ferramenta apresenta as escolhas Trim in
			<img style="display: inline-block;" src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_28.png')); ?>" alt="guia"> 
			ou Trim out 
			<img style="display: inline-block;" src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_29.png')); ?>" alt="guia"> 
			, dependendo de que lado do ponto de edição você clica.
			</p>

			<p>
				Você pode alterar o ponto In ou Out do clip, arrastando seu ponto de edição com a ferramenta
				de seleção no painel Timeline. À medida que você arrasta, o ponto In ou Out atual aparece
				no Monitor de Programa.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_30.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Uma dica de ferramenta exibe o número de quadros que você está cortando: um valor negativo 
				se você estiver arrastando a borda em direção ao início da seqüência e um número positivo
				se você estiver arrastando para o final da seqüência.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_31.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Você não pode cortar os pontos de entrada e saída originais da fonte.
			</p>

			<h5>Rippe Edit e Rollig Edit</h5>

			<p>
				Quando você deseja ajustar o corte, ou o ponto de edição, entre dois clipes, use variações de
				corte simples, conhecidas como ripple edits e rolling edits.<br/>
				Usar ferramentas especializadas, faz ajustes em uma única ação que de outra forma exigiria
				várias etapas para realizar.
			</p>

			<p>
				Quando você usa Ripple Edit e Rolling Edit com ferramentas de corte, os quadros afetados
				aparecem no Programa Monitor lado a lado.
			</p>

			<h5>
				Rollig Edit
				<img style="display: inline-block;" src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_32.png')); ?>" alt="guia"> 
			
			</h5>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_33.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Uma edição rolling move de modo eficiente o ponto de edição entre clips, preservando a posição 
				de outros clips no tempo e mantendo a duração total da sequência. Pressionando a Tecla
				Alt ao arrastar o ponto de edição, permite alterar a posição do ponto, ignorando a ligação
				entre o video e o áudio. Com essa ação, podemos criar um corte do tipo J-Cut ou L-Cut.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_34.png')); ?>" alt="guia1">
				</figure>
			</div>

			<h5>
				Ripple Edit
				<img style="display: inline-block;" src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_35.png')); ?>" alt="guia"> 
			</h5>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_36.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Uma edição de ripple apara um clipe e altera os clipes subseqüentes na faixa pela quantidade
				que você cortar. Cortar um clipe pela edição de ripple muda todos os clipes após o corte no
				tempo; por outro lado, estender um clipe desloca os clipes que seguem o corte em frente no
				tempo. Quando você está fazendo uma edição de ripple, o espaço vazio de um lado do corte
				é tratado como um clipe e as mudanças no tempo, assim como um clipe seria. Pressionando a
				Tecla Alt, quando você começa a executar uma edição ripple ignora o link entre vídeo e áudio.
			</p>


			<h5>Slip Edit e Slide Edit</h5>

			<p>
				Assim como as edições ripple e rolling elas permitem que você ajuste um corte entre
				dois clipes, as edições slip e slide são úteis quando você deseja ajustar dois cortes em
				uma seqüência de três clipes. Quando você usas ferramentas slip ou slide, o Program
				Monitor exibe os quatro quadros envolvidos na edição lado a lado, exceto quando se
				edita apenas áudio.
			</p>

			<h5>
				Slip Edit
				<img style="display: inline-block;" src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_37.png')); ?>" alt="guia"> 
			</h5>

			<div class="container">
				<figure>
				<img src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_38.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Uma edição slip muda os pontos de entrada e saída de um clip para frente ou para trás pelo
				mesmo número de quadros em uma única ação. Ao arrastar com a ferramenta Slip, você pode
				alterar os quadros iniciais e finais de um clip sem alterar a duração ou afetar clips adjacentes.
			</p>

			<div class="container">
				<figure>
				<img src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_39.png')); ?>" alt="guia1">
				</figure>
			</div>

			<h5>
				Slide Edit
				<img style="display: inline-block;" src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_40.png')); ?>" alt="guia"> 
			</h5>

			<div class="container">
				<figure>
				<img src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_41.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Uma edição de slide muda um clipe no tempo ao cortar clips adjacentes para compensar
				o movimento. À medida que você arrastou um clip para a esquerda ou para a direita com
				a ferramenta Slide, o ponto de saída do clip anterior e o ponto In do seguinte clip são cortados 
				pelo número de quadros que você move o clip. Os pontos de entrada e saída do clip
				(e, portanto, a duração) permanecem inalterados.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_42.png')); ?>" alt="guia1">
				</figure>
			</div>

			<h5>Adobe Media Encoder</h5>

			<p>
				Premiere Pro e outras aplicações empregam o Adobe Media Encoder; um aplicativo de codificação 
				autônomo. Quando você especifica configurações de exportação na caixa de diálogo
				Export Settings e clica em Queue, o Premiere Pro envia a solicitação de exportação para o
				Adobe Media Encoder.
			</p>


			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_43.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Quando o Adobe Media Encoder está sendo processado e exportado em segundo plano, você
				pode continuar a trabalhar no Premiere Pro. Adobe Media Encoder codifica a versão mais recente 
				de cada sequência na fila.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit2/imagem_unit2_44.png')); ?>" alt="guia1">
				</figure>
			</div>

			<h5 class="barlow center-align">A T I V I D A D E S</h5>
            <p style="margin-top: 16px"><b>1.</b> Escolher um video e realizar cortes, escolhendo 5 ou 10 cenas, usando as ferramentas
				de edição.</p>
			<p style="margin-top: 16px"><b>2.</b> Crar um projeto TOP 10 ou TOP 5 com as melhores cenas do video.</p>

		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila6/unidade2/ferramentas_de_edicao.blade.php ENDPATH**/ ?>