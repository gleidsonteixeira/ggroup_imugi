@extends('layouts.template')
@section('titulo','Unit 8 | After Effects CC - CONCEITOS DE ANIMAÇÃO 02')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade8" data-etapa="conceitos_animacao_02">
			<h3 class="barlow">UNIT 8 - After Effects CC</h3>
			<h5 class="barlow upper">AULA 04 - CONCEITOS DE ANIMAÇÃO 02</h5>

			<h5>Layer</h5>
			<p>Muitas das características de uma layer são determinadas pelos seus switches de layer (ficam dispostos no painel timeline, em colunas). Por padrão, a coluna A/V features aparece à esquerda do nome da layer e as colunas switches and modes (transfer controls) aparecem à direita, mas é possível organizar as colunas em uma ordem diferente.</p>
			<p>Se desejar mostrar ou ocultar colunas no painel timeline, clique no botão alternar layers > controles de transferências ou in/out/duration/stretch no canto inferior esquerdo do painel timeline. Pressione Shift +F4 para mostrar ou ocultar a coluna parent. Pressione F4 para alternar as colunas switches e modes. Os resultados de algumas configurações de alternância de layer dependem das configurações dos parâmetros de composição, que estão no canto superior direito do contorno da layer no painel Timeline.</p>
			<p>
					• Vídeo: liga ou desliga as imagens da layer<br/>
					• Áudio: alterna os sons da layer para ligar ou desligar<br/>
					• Solo: inclui a layer atual em visualizações e renderização, ignorando
						layers sem este conjunto de opções<br/>
					• Bloqueio: bloqueia o conteúdo da layer, evitando todas as alterações
						(alterna na coluna switches)<br/>
					• Shy: esconde a layer atual quando a opção de composição
						hide shy ayers é selecionada
			</p>	

			<h5>Collapse transformations / Continuamente Rasterize</h5>

			<p>
				Colapsa as transformações se a layer for uma precompose e rasteriza continuamente se for uma layer de forma, 
				layer de texto ou uma layer com um arquivo de vetores como a metragem de origem. Selecionar esta opção para 
				uma layer vetorial faz com que o after indique a camada para cada frame, o que melhora a qualidade da imagem, 
				mas também aumenta o tempo necessário para visualização e renderização.
			</p>
			<p>
			
				• Qualidade: alterna entre as opções: best e draft (para qualidade de layer para
					renderização, incluindo na tela para visualização)<br/>
				• Efeito: renderiza a camada com efeitos (o interruptor não afeta
					a configuração para efeitos individuais na layer)<br/>
				• Frame Blend: define a combinação de moldura em um dos três estados: frame mix, pixel
					motion ou desligado (se o parâmetro ativar combinação de composição de moldura não
					for selecionado, a configuração de combinação de quadros da layer é irrelevante<br/>
				• Motion Blur: alterna o borrão de movimento para ligar ou desligar para a layer
					(se o parâmetro enable motion blur composition não estiver selecionado, a configuração
					de desfocagem de movimento da layer é irrelevante)<br/>
				• Adjustment Layer: identifica a layer como uma layer de ajuste<br/>
				• 3D layer: identifica a layer como uma layer 3D (se a layer for uma layer 3D com
				subcamadas 3D, como é o caso de uma layer de texto com propriedades
							
			</p>

			<h5>Blend modes</h5>
			<p>O modo como as layers se misturam ou interagem com layers abaixo das mesmas é controlado pelo blend modes. Observe que cada layer possui um blend modes, mesmo que este seja o lend modes normal padrão. A maioria dos blend modes modifica apenas os valores de cor da layer de origem, e não o canal alfa. O modo alpha add blending afeta o canal alfa da layer de origem, e os blend modes de silhueta e estêncil afetam os canais alfa das layers abaixo deles. Vale lembrar que não é possível animar diretamente os blend modes usando keyframes. Para alterar um blend modes em um momento específico: divida a layer nesse momento e aplique o novo blend modes para a parte da layer que continua. O usuário também pode usar o efeito aritmético composto, cujos resultados são semelhantes aos resultados dos blend modes, mas podem mudar ao longo do tempo.</p>

			<h5>Parent e Child Layers</h5>
			<p>É possível sincronizar as mudanças nas layers ao atribuir as transformações de uma layer a outra layer, usando parent e child layers. Após uma layer ser transformada em parent para outra layer, a outra layer é denominada de secundária. Assim, quando o usuário atribui um parent, as propriedades de transformação da layer child se tornam relativas à layer parent em vez da composição. Por exemplo, se uma camada parent move 3 pixels à direita da sua posição inicial, a camada seguirá o parent e moverá 3 pixels à direita de sua posição. Basta pensar no agrupamento, assim como neste, no parenting as transformações feitas no grupo são relativas ao ponto âncora do parent.</p>

			<h5 class="barlow center-align">A T I V I D A D E S</h5>
            <p style="margin-top: 16px"><b>1.</b> Criem um “Bouncing Ball” (Bolinha Quicando) e crie diferentes animações com objetos repetindo ou seguindo os mesmos movimentos da bolinha, sempre respeitando os conceitos de “Comprimir e esticar” e o Timing da animação.</p>			


		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
