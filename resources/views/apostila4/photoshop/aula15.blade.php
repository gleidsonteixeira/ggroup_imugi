@extends('layouts.template')
@section('titulo','PHOTOSHOP | Aula 15 - Mockups')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade1" data-etapa="aula15">
			<h3 class="barlow">PHOTOSHOP</h3>
			<h5 class="barlow upper">Aula 15 – Mockups</h5>
			<div class="clear"></div>
			<h5 class="barlow">O que é MockUp?</h5>
			<p>
				Em manufatura e design, um mockup ou mock-up, é um modelo em escala ou de tamanho real de um projeto ou dispositivo, usado para ensino, demonstração, avaliação
				de design, promoção e outros propósitos. Um mockup é um protótipo se ele fornece
				pelo menos parte da funcionalidade de um sistema e permite o teste de um projeto.
				Mockups são usados por designers principalmente para adquirirem um feedback dos
				usuários. 
			</p>
			<p>Aplique a arte em camisas, bonés ou até em OutDoor</p>

			<p style="margin-top:32px"><b>Estilos de Camadas</b></p>
			<p><b>Sobre efeitos e estilos de camadas</b></p>
			<p>
				O Photoshop oferece vários efeitos (como sombras, brilhos e chanfros) que alteram a
				aparência do conteúdo de uma camada. Os efeitos de camada são vinculados ao conteúdo. Ao mover ou editar o conteúdo da camada, os mesmos efeitos são aplicados
				no conteúdo modificado. Por exemplo, se uma sombra projetada for aplicada a uma
				camada de texto e, em seguida, um novo texto for adicionado, a sombra será adicionada
				automaticamente ao novo texto.
			</p>
			<p>
				O estilo é um ou mais efeitos aplicado a uma camada ou grupo de camadas. Para aplicar
				um dos estilos predefinidos do Photoshop ou criar um estilo personalizado, devemos
				usar a caixa de diálogo Estilos de camada. O ícone dos efeitos de camada é exibido à
				direita do nome da camada no painel Camadas. É possível expandir o estilo no painel
				Camadas para visualizar ou editar os efeitos que compõem o estilo.
			</p>

			<p>Para aplicar um estilo de camada, podemos:</p>
			<p>1. No painel Layers, dar um clique duplo na área livre ao lado do nome da camada.</p>
			<div style=margin-top:16px>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit7/imagem11.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:16px">2. Ou selecioná-los através do menu Layer – Layer Style.</p>
			<div style=margin-top:16px>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit7/imagem12.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:16px">No painel Layer Style, podemos escolher qual estilo aplicar para a camada atual.</p>
			<div style=margin-top:16px>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit7/imagem13.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">Como aplicar estilos predefinidos</p>		
			<p>
				É possível aplicar estilos predefinidos do painel Estilo. Os estilos de camadas que
				acompanham o Photoshop são agrupados por função em bibliotecas. Por exemplo,
				uma biblioteca contém estilos para a criação de botões da Web e outra contém estilos para a adição de efeitos ao texto. Para acessar esses estilos, é preciso carregar
				a biblioteca adequada.
			</p>

			<p style="margin-top:32px"><b>Exibir o painel Estilos</b></p>
			<p>
				Localize-o no grupo de painéis no lado direito do workspace do adobe photoshop, ou
				clique em Window – Styles
			</p>
			<div style=margin-top:16px>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit7/imagem14.png') }}" alt="guia">
				</figure>
				<figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit7/imagem15.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px"><b>Aplicação de um estilo predefinido a uma camada</b></p>
			<p>
				Normalmente, a aplicação de um estilo predefinido faz substituir o estilo atual da camada. No entanto, 
				é possível adicionar os atributos de um segundo estilos aos do estilo
			</p>
			<p style="margin-top:32px"><b>Para aplicar um estilo pré-definido podemos:</b></p>
			<p>1. Clicar em um estilo no painel Styles para aplicá-lo a camadas selecionadas no momento.</p>
			<p>2. Arrastar um estilo do painel Styles até a camada no painel Layers.</p>
			<p>
				3. Arrastar um estilo do painel Styles para a janela do documento e soltar o
				botão do mouse quando o ponteiro estiver sobre o conteúdo da camada a qual o estilo deve ser aplicado.
			</p>
			<p>
				4. Escolher Layer – Layers Style – Blending Options e clicar na palavra Styles na
				caixa de diálogo Layer Styles (item superior da lista, na latéral esquerda da caixa de diálogo). Clicar no estilo a ser aplicado e clicar em OK.
			</p>
			<div style=margin-top:16px>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit7/imagem16.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>

			<p style="margin-top:32px"><b>Aplicar um estilo de outra camada</b></p>
			<p>1. No painel Layers podemos pressionar a tecla ALT e clicar no estilo para arrastá-lo de uma camada para outra.</p>
			<p>
				2. Ou clicar com o botão direito do mouse sob o ícone do estilo da camada e escolher a opção Copy Layer Style. Em seguida, clicar na camada que deseja aplicar o estilo,
				e clicando com o o botão direito do mouse, escolher a opção Paste Layer Style.
			</p>
			<div style=margin-top:16px>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit7/imagem17.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px"><b>Visão geral da caixa de diálogo Layer Style</b></p>
			<p>Para editar os estilos aplicados em uma camada ou criar novos estilos, usamos a caixa de diálogo Layer Style</p>
			<div style=margin-top:16px>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit7/imagem18.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div> 
			<p style="margin-top:32px">Podemos criar estilos personalizados usando um ou mais dos seguintes efeitos:</p>
			<p><b>Drop Shadow</b></p>
			<p>Adiciona uma sombra que se projeta por trás do conteúdo da camada.</p>
			<p><b>Inner Shadow</b></p>
			<p>
				Adiciona uma sombra que se projeta apenas no interior das arestas do conteúdo da
				camada, dando-lhe uma aparência de baixo-relevo.
			</p>
			<p><b>Outer Glow e Inner Glow</b></p>
			<p>Adiciona brilhos que provêm das arestas externas ou internas do conteúdo da camada.</p>
			<p><b>Bevel & Emboss</b></p>
			<p>Adiciona várias combinações de realces e sombras a uma camada.</p>
			<p><b>Satin</b></p>
			<p>Aplica um sombreamento interior que cria um acabamento acetinado...</p>
			<p><b>Color Overlay, Gradient Overlay e Pattern Overlay</b></p>
			<p>Preenche o conteúdo da camada com uma cor, um degradê ou um padrão.</p>
			<p><b>Stroke</b></p>
			<p>
				Contorna o objeto na camada atual, usando uma cor, um degradê ou um padrão. É útil
				principalmente em formas com arestas sólidas, como as de texto.
			</p>

			<h5 class="barlow upper center-align" style="margin-top:10%">A T I V I D A D E S</h5>
			<p style="margin-top:5%">
				1. Criar mockup para camisa, cartão de visitas, capa de livro e capa de revista usando
				smart objects e estilos de camadas.
			</p>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
