@extends('layouts.template')
@section('titulo','Unit 11 |  Layer 3D, Luz e Câmera')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade11" data-etapa="layer_luz_camera">
			<h3 class="barlow">UNIT 11</h3>
			<h5 class="barlow upper">Aula 06 – Layer 3D, Luz e Câmera</h5>
			<h5>Configurações do renderizador 3D</h5>
			<p>
				É possível usar as opções na guia do renderizador 3D para escolher o renderizador 3D correto para sua composição.
				Você pode escolher entre os seguintes renderizadores no menu Renderer:
			</p>
			<ul class="unidade_6_5">
					<li>3D Clássico</li>
					<li>Cinema 4D</li>
					<li> Ray-traced 3D</li>
			</ul>
			<p>
				A funcionalidade 3D do CINEMA 4D Composition Renderer e o renderizador 3D traçado por Ray é quase idêntico à extrusão de texto em 3D e formas de layers e dobras de outras layers
				3D (sólidos, metragem e assim por diante) em planos curvos. No entanto, os resultados renderizados podem ser diferentes porque geram resultados usando renderizadores diferentes
				e suportam diferentes conjuntos de recursos. Por exemplo, existem diferenças nas opções de
				materiais da layers 3D e outros comportamentos de layer.
			</p>
			<p>
				O Cinema 4D composition renderer torna as layers 3D, incluindo texto extrudido e formas e planos 2D curvos, para facilitar o processo de animação de texto 3D e logotipos a partir do
				zero. O desempenho do processador Cinema 4D é muito mais rápido do que o desempenho exclusivo da CPU do renderizador 3D rastreado por Ray.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit11/imagem_unit11_1.png') }}" alt="guia1">
				</figure>
			</div>
			<h5>Processador 3D clássico</h5>
			<p>
				O renderizador padrão tradicional do after é o Classic 3D. No Classic 3D as layers são posicionadas como planos no espaço 3D.
			</p>
			<h5>Cinema 4D Composition Renderer Options</h5>
			<p>
				O nível de qualidade definido no controle deslizante afeta os parâmetros que determinam	como o cinema 4D composition renderer desenha as layers 3D.
				É possível ver os parâmetros de renderização resultantes nas caixas: opções, anti-aliasing e reflectance.
				A configuração de qualidade única torna mais fácil escolher uma combinação equilibrada de velocidade de renderização e qualidade de renderização 3D aceitável sem entender e modificar os vários
				parâmetros de qualidade de renderização.
			</p>
			<p>
				Os seguintes parâmetros são modificados quando ao ajustar o controle deslizante Qualidade:
			</p>
			<ul class="unidade_6_5">
					<li>Ray Threshold: Este valor ajuda a otimizar o tempo de renderização.</li>
					<li>
						Ray Depth: The Ray Depth determina quantos objetos transparentes (ou áreas invisíveis usando o canal alfa) podem ser penetrados pelo renderizador.
					</li>
					<li>
						Profundidade de reflexão: quando um raio é enviado para a cena, ele pode ser refletido por superficies reflexivas (quanto maior a profundidade de reflexão, os raios adicionais
						são seguidos na cena e os resultados renderizados).
					</li>
					<li>
						Profundidade da sombra: a profundidade da sombra se comporta de forma análoga à profundidade de reflexão.
						A configuração da Profundidade da sombra define a profundidade da sombra com a qual os raios de sombra visíveis são calculados.
					</li>
					<li>
							Ant-Aliasing: Geometry é a configuração anti-aliasing padrão que suaviza todas as bordas do objeto (automaticamente com 16x16 sub-pixels).
					</li>
					<li>
						Reflectância: a amostragem de layer é a configuração padrão de reflectância que define a qualidade das reflexões mate.
					</li>
			</ul>
			<p>
				Ao selecionar o cinema 4D na caixa suspensa Renderista, a coluna ativado exibe as opções 3D habilitadas e a coluna desativado exibe as opções 3D que não estão disponíveis.
			</p>
			<h5>Opções de renderização em 3D traçadas por raio</h5>
			<p>
				Clique no botão opções para iniciar a caixa de diálogo opções do renderista 3D com Ray-traced. Também é possível clicar com o Ctrl pressionado no botão do indicador de renderização
				atual no canto superior direito do painel de composição para iniciar a caixa de diálogo.
			</p>
			<h5>Opções de renderização</h5>
			<p>
				Qualidade de rastreamento de raios: clique na configuração de qualidade de rastreio de raios para alterá-lo de acordo com seu fluxo de trabalho.
			</p>
			<dl class="unidade_6_5">
					<dd>
						- Valores mais altos para a qualidade do rastreamento de raios diminuem o ruído, mas aumentam consideravelmente o tempo de renderização.
					</dd>
					<dd>
					- A qualidade do rastreio de raios controla o número de raios disparados por pixel (por exemplo, um valor de 4 raios 16 ou 4x4 e 8 incêndios 64 raios).
				</dd>
				<dd>- Um número maior produz um pixel mais preciso à custa do tempo de computação.</dd>
				<dd>
					- Um valor de 1 proporciona melhor desempenho, mas não haverá qualquer borrão dereflexão (por exemplo, é sempre nít do), sombra suave, profundidade de campo ou desfocagem de movimento.
				</dd>
				<dd>
					- Aumentar o valor da qualidade do rastreio de raios não aumenta a nitidez. Em vez disso, diminui o ruído inerente à amostragem pontual.
					Use o valor mais baixo que produz uma	quantidade aceitável de ruído ou nenhum ruído.
				</dd>
				</dl>
				<p>
					Filtro anti-aliasing: controla o método de média dos raios disparados para um pixel.
					Nenhum dispara todos os raios dentro dos limites de um pixel, enquanto os outros espalham a grade
					de raios disparados parcialmente em pixels adjacentes para produzir uma média melhor.
					Box, Tent e Cubic (que não é bicúbico) estão listados na ordem de melhor qualidade.
				</p>
				<dl class="unidade_6_5">
						<dd>- Nenhum</dd>
						<dd>- Caixa</dd>
						<dd>- Barraca</dd>
						<dd>- Cúbico</dd>
				</dl>
				<p>
					O filtro anti-aliasing controla a quantidade de blurriness. Nenhum dá o resultado mais acentuado, mas as bordas do coletor de projeção podem parecer com borda, com resultados de
					borrão de caixa, triângulo e cúbico que dão resultados mais desfocados.
				</p>
				<h5>Layer 3d</h5>
				<p>
					Ao fazer uma layer 3D, essa layer em si permanece plana, mas ganha propriedades adicionais: posição (z), ponto de ancoragem (z), escala (Z), orientação, rotação X, rotação Y, rotação Z
					e material propriedades das opções. As propriedades das opções de materiais especificam como a layer interage com luz e sombras. Vale ressaltar que somente layers 3D interagem com
					sombras, luzes e câmeras.
				</p>
				<p>
					Os caracteres individuais dentro das layers de texto podem opcionalmente ser subcamadas em 3D, cada uma com suas próprias propriedades 3D. Uma layer de texto com ativar pre-character 3D seleciona o comportamento como uma pré-composição que consiste em uma layer
					3D para cada personagem. Todas as layers de câmera e luz possuem propriedades em 3D.
				</p>
				<p>
					Por padrão, as layers estão em uma profundidade (posição do eixo z) de 0. No after effects, a origem do sistema de coordenadas está no canto superior esquerdo; X (largura) aumenta da
					esquerda para a direita, y (altura) aumenta de cima para baixo e z (profundidade) aumenta	de perto para longe. Alguns aplicativos de vídeo e 3D usam um sistema de coordenadas que
					é girado 180 graus em torno do eixo x. Nestes sistemas, y aumenta de baixo para cima e z aumenta de longe para perto.
				</p>
				<p>
					É possível transformar uma layer 3D relativa ao espaço de coordenadas da composição, o espaço de coordenadas da layer ou um espaço personalizado selecionando um modo de eixo.
					O usuário pode adicionar efeitos e máscaras a layers 3D, layers 3D compostas com layers 2D e criar e animar layers de câmera e luz para visualizar ou iluminar layers 3D de qualquer ângulo.
					Ao renderizar para a saída final, as layers 3D são renderizadas a partir da perspectiva da câmera ativa. Como com todas as máscaras, as coordenadas de máscara em uma camada 3D estão no espaço de coordenadas 2D da camada.
				</p>
				<p>
					É possível visualizar as layers 3D de qualquer ângulo e distância usando as layers da câmera.
					Assim como é mais fácil no mundo real mover câmeras através e ao redor de uma cena do que	mover e girar a cena em si, muitas vezes é mais fácil obter visões diferentes de uma composição configurando uma camada de câmera e movendo-a em uma composição.
				</p>
				<p>
					Para configurar a câmera para coincidir com a câmera real e configurações que foram usadas para gravar imagens com as quais você está compondo, você pode modificar e animar as
					configurações da câmera. Também é possível usar as configurações da câmera para adicionar comportamentos parecidos com a câmera, desde o borrão de profundidade de campo até as
					panelas e tiros de papelão, para efeitos sintáticos e animações.
				</p>
				<p>
					As câmeras afetam apenas layers 3D e layers 2D com efeito com um atributo Comp Camera.
					Com efeitos que possuem um atributo Comp Camera, você pode usar a câmera de composição ativa ou luzes para ver ou acender um efeito de vários ângulos para simular efeitos 3D
					mais sofisticados.
				</p>
				<p>
					É possível escolher visualizar uma composição através da câmera ativa ou através de uma câmera personalizada. A câmera ativa é a câmera mais alta no painel da timeline na hora atual
					para a qual o interruptor de vídeo está selecionado. A visão da câmera at va é o ponto de vista usado para criar o resultado final e as composições de nidificação. Se você não criou uma câ-
					mera personalizada, a câmera ativa é a mesma que a visualização de composição padrão. Todas as câmeras estão listadas no menu visualização 3D na parte inferior do painel composição.
					Vale lembrar que muitas vezes, é mais fácil ajustar uma câmera ao usar uma das visualizações
					3D personalizadas. No entanto, não é possível ver a câmera para manipulá-la quando estiver olhando pela própria câmera.
				</p>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
