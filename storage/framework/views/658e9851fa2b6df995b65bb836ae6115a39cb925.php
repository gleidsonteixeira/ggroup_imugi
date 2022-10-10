
<?php $__env->startSection('titulo','Unit 18 | Animação e render - Renderização'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade18" data-etapa="renderizacao">
			<h3 class="barlow">UNIT 18</h3>
			<h5 class="barlow upper">Aula 1 – Animação e render - Renderização</h5>
			<p>
				O processo de renderização vai transformar todas as interações configuradas, propriedades, materiais, físicas e texturas.
				Para transformar tudo em um formato que pode configurar
				para saída, dependendo de como isso for criado seu material pode ser usado para determinada função. 
				Podemos usar formas simples, produzindo imagens ricas em detalhes e com fidelidade limitada apenas pela 
				quantidade de memória de processamento e o desempenho do seu
				computador, para isso podemos usar qualquer animação criada anteriormente.
			</p>
			<p>
				Para bons resultados é imprescindível que sejam atribuídos materiais como textura em
				seus objetos, realize e crie as animações necessárias e descreva o tempo de ação na sua timeline, vamos ao render.
			</p>
			<p><b>Projeção de sombras</b></p>
			<p>
				A sombra é um comportamento de reação a luz. Por padrão, o render não vem com essas
				opções configurada, ele faz apenas uma pré rasterização que não calcula erradicação da luz
				sobre o objeto, reduzindo os detalhes e a beleza do seu produto final.
			</p>
			<p>
				Clicando sobre as configurações de render abrirá uma pequena janela chamada caixa de
				diálogo, onde podemos configurar as funções fundamentais para elevar o grau de detalhes.
				Nossa primeira opção é <b>output</b>, onde podemos controlar o tamanho da imagem configurando
				<b>width e height</b> (largura e altura), mais detalhes nos próximos tópicos. Sobre os formatos que
				podemos configurar nesses valores e o porque, a resolução em <b>rosolution</b> que por padrão
				vem <b>72 DPI</b>, em <b>filme aspecte</b> podemos customizar o aspecto do modo de captura da imagem:
				cinema, telas de ultra definição e smarth mobile. Em <b>pixel aspect</b> o formato do pixel também
				pode interferir na reprodução final do produto e frame rate, ou a taxa de formação de quadros
				por segundo, então precisamos entender algumas coisas para conseguir configurar bem esses
				detalhes, vamos falar deles separadamente.
			</p>
			<p>
				Fotos em boa resolução usam uma densidade de pixel de 150 DPIsk, já para um vídeo
				como produto final a taxa de frames também é importante, no entanto o local da reprodução
				também é muito importante.
			</p>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit18/imagem_unit18_1.png')); ?>" alt="guia1">
				</figure>
			</div>
			<p><b>DPI telas e formatos</b></p>
			<p>
				Em <b>filme aspect</b> configuramos as funções específicas para comportamento de reprodução
				da sua imagem em vídeo, então quando mudamos o número que usamos para definir altura
				e largura do vídeo combinados a resolução geram o DPI, uma unidade usada para medir a
				densidade de pixels que compõe uma imagem, quanto maior a imagem mais pixels são usados
				para compôr. 
			</p>
			<p>
				Os tubos de raios catódicos antigos como tubos de TV, geravam imagens analógicas <b>NTSC</b>
				com até 720x480, os primeiros televisores de plasma subiram esse números para formatos
				compostos por 1080x720 HDTV - 720 DPI ou o HD. Os primeiros televisores Led subiram esse
				número para 1920x1080 HTDTV - 1080 DPI, os primeiros led’s orgânicos ou oled’s novamente
				subiram esse número para valores maiores que 4093x2160 4K.
			</p>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit18/imagem_unit18_2.png')); ?>" alt="guia2">
				</figure>
			</div>
			<p>
				Para os <b>Smarth Mobile</b> também foram desenvolvidas tecnologias específicas como vidros
				flexíveis como <b>gorilla glass</b> e até inquebráveis como o <b>saphira</b>, que se mostrou inviável para
				tecnologia atual, ou supostamente as telas que exibem pixels tão pequenos que não podem
				ser vistos individualmente a olho nú, tecnologia de retina aplicada pela Sony e seu PSP, por
				isso é importante saber em que tipo de mídia seu vídeo será reproduzido, cada um possui suas
				especificações. Se o seu material vai ser postado no Youtube, deve usar um formato que não
				deixe faixas pretas na tela, ou em uma tv já que hoje existem pelo menos 4 formatos diferentes
				de tela e cada um usa uma medida específica. Pequisa e teste são procedimentos que evitam
				complicações posteriores.
			</p>
			<p><b>Pré-renderização</b></p>
			<p>
				Durante seu processo de edição o computador exibe uma rasterização dos objetos formas
				e texturas afim de facilitar a edição e garantir o conforto para ao editor. No entanto, apenas
				inserir uma luz não vai fazer sua renderização exibir as propridades específicas de algo. Para
				isso, no painel de configurações de render, adicione <b>global light</b> e <b>ambiente</b> occlusion para
				que as sombras de seus objetos sejam projetadas no cenário e terá responsividade a luz. A
				opção <b>global light</b> é o efeito usado para que seja necessário inserir luz no objeto, faça pelo
				painel de acesso rápido e use as ferramenta de seleção para posicioná-la de forma a valorizar
				o seu desenvolvimento. Na caixa de diálogo desmarque tudo e marque a opção luminance
				mude e mude valor <b>brightness</b> para um valor maior que 100%, pode ser 200% ou 300%, feito
				isso atribua esse valor a um objeto, ele será agora um emissor de luz e também pode ser usado para iluminar sua composição, 
				use todas as ferramentas e esteja sempre procurando por
				mais.
			</p>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit18/imagem_unit18_3.png')); ?>" alt="guia3">
				</figure>
			</div>
			<p>
				A alteração de qualquer um desses valores para mais, pode elevar em muito o tempo necessário
				para realizar o processo de renderização, principlamente se você escolher como formato de
				saída um vídeo. Se optar por gerar um vídeo em alta resolução com muitos objetos, materiais e texturas, 
				é recomendado que o computador esteja única e inteiramente dedicado a
				isso, caso opte por utilizar o computador em outros processos enquanto o mesmo realizar
				as funções de renderizar, pode comprometer a qualidade do produto final. Tenha paciência e
				respeite as necessidades do seu computador, esse é um dos motivos pelo qual computadores
				devem funcionar em ambientes de temperatura controlada. Fique atendo também a temperatura
				do seu micro, picos de temperatura podem ser um mal sinal, garanta sempre um bom fluxo
				de ar para seu computador e evite usá-lo sobre almofadas e camas, isso pode inclusive reduzir
				sua vida útil. 
			</p>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila5/unidade18/renderizacao.blade.php ENDPATH**/ ?>