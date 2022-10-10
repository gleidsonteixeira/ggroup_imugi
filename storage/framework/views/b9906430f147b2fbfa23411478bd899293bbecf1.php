
<?php $__env->startSection('titulo','Unit 12 |  Cinema 4D Lite'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade12" data-etapa="cinema_4d">
			<h3 class="barlow">UNIT 12</h3>
			<h5 class="barlow upper">Aula 07 – Cinema 4D Lite</h5>
			<h5>Cinema 4D</h5>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit12/imagem_unit12_1.png')); ?>" alt="guia1">
				</figure>
			</div>
			<p>
					Cinema 4D é uma popular ferramenta de modelagem e animação 3D da Maxon. Uma integração mais próxima com o Cinema 4D permite que você use o Adobe After Effects e Maxon Cinema 4D juntos. É possível criar um arquivo Cinema 4D (.c4d) dentro do After Effects e trabalhar
					com elementos 3D complexos, cenas e animações.
			</p>
			<p>
				Para habilitar a interoperabilidade, o CineRender, o mecanismo de renderização Maxon Cinema 4D, está integrado com o Adobe After Effects. O After Effects pode renderizar arquivos Cinema 4D e você pode controlar alguns aspectos da renderização, câmera e conteúdo de cena
				por layer. Este fluxo de trabalho simplificado não exige a criação de arquivos de sequência de	imagem ou de passagem intermediária.
			</p>
			<p>
				O aplicativo Maxon Cinema 4D Lite é instalado junto com o After Effects. Você pode criar,
				importar e editar arquivos Cinema 4D. No entanto, se você tiver outra edição do Cinema 4D,
				como o Cinema 4D Prime, você pode usá-lo em vez disso. O aplicativo Cine 4D Lite oferece a
				capacidade de editar, criar e trabalhar com arquivos Cinema 4D nativos. Os recursos da versão
				Lite são semelhantes ao Cinema 4D Prime.
			</p>
			<p>Para exportar um vídeo no Adobe Media Encoder clique em File – Export – Media.</p>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit12/imagem_unit12_2.png')); ?>" alt="guia1">
				</figure>
			</div>
			<h5>Configurações do projeto</h5>
			<p>As seguintes configurações do projeto estão disponíveis no efeito Cineware:</p>
			<ul class="unidade_6_5">
				<li>Câmera</li>
				<li>Cinema 4D Layers</li>
				<li>Multipass (fluxo de trabalho linear)</li>
				<li>Comandos</li>
				<li>Câmera: escolha a câmera para usar para renderização.</li>
			</ul>
			<p>
				Câmera Cinema 4D: usa a câmera que é definida como a câmera de exibição de renderização no Cinema 4D ou a câmera padrão se nenhuma for definida.
			</p>
			<p>Layers do Cinema 4D: Ative e selecione as layers do Cinema 4D para renderizar.</p>
			<ul  class="unidade_6_5">
				<li>
					Definir layers: clique para escolher layers. Clique no botão definir layers para escolher
					uma ou mais layers. No Cinema 4D, as layers permitem organizar vários elementos.
					É possível usar layers no Cinema 4D para compor entre elementos	na composição do After Effects.
				</li>
				<li>
					 Multipass (fluxo de trabalho linear): use a opção Cinema 4D MultiPass para especificar qual passagem para renderizar. Os recursos de passagem múltipla só estão disponíveis
					ao usar o renderizador padrão. As passagens múlt plas dão a capacidade de fazer ajustes finos em uma cena C4D, compondo diferentes tipos de passagens no after, como ajustar
					apenas as sombras ou reflexões na cena. Para que os resultados correspondam à configuração do projeto de fluxo de trabalho linear padrão do cinema 4D, deve-se trabalhar em
					um projeto no qual as cores são combinadas em luz linear (em um espaço de trabalho linear gerenciado por cores ou com Blend Colors Using 1.0 Gamma set na caixa de diálogo confi gurações do projeto caixa).
				</li>
				<li>
					Set Multi-Pass: clique para selecionar o que passar para renderizar nesta layer. Esta opção só está disponível se a opção Multi-Pass Cinema 4D estiver habilitada.
				</li>
				<li>
					Multi-Passes Definidos: quando ativado, adiciona as passagens explicitamente adicionadas no arquivo .c4d. Isso pode incluir passagens diferentes das layers de imagem.
				</li>
				<li>
					 Adicionar layers de imagem: use esta opção para criar layers de passagem múltipla com modos de mistura adequados, dependendo da configuração de multipasses definidos.
					Quando a opção multipasses definida está habilitada, adicionar layers de imagem restringe a apenas adicionar os passes definidos nas configurações de renderização do cinema
					4D ao invés de adicionar todos os tipos suportados.
				</li>
			</ul>
			<h5>ATIVIDADES</h5>
			<ol  class="unidade_6_5">
				<li>Crie uma animação com um objeto simples 3d para criar uma vinheta</li>
			</ol>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila6/unidade12/cinema_4d.blade.php ENDPATH**/ ?>