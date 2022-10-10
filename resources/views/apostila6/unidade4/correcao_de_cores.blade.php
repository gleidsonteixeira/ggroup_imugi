@extends('layouts.template')
@section('titulo','Unit 4 | Correção de Cores')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade4" data-etapa="correcao_de_cores">
			<h3 class="barlow">UNIT 4</h3>
			<h5 class="barlow upper">Aula 13 – Correção de Cores</h5>

			<h5>Brightness & Contrast effect</h5>
			<p>
				O efeito Brightness & Contrast ajusta o brilho eo contraste de uma camada inteira (não canais
				individuais). O valor padrão de 0.0 indica que nenhuma alteração é feita. Usar o efeito Brilho e
				Contraste é a maneira mais fácil de fazer ajustes simples na faixa tonal da imagem. Ele ajusta todos
				os valores de pixel na imagem de uma só vez - destaques, sombras e tons médios.
			</p><br>

			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit4/imagem_unit4_13.png') }}" alt="Wave Form do áudio">
				</figure>
			</div><br>
			<h5>Efeitos de correção de cores</h5>
			<p>
				Você pode aproveitar os potentes fluxos de trabalho de mascaramento e rastreamento você
				pode encontrar os efeitos de ajuste de cor e luminância no gurpo de efeitos Color Correction
				dentro do grupo principal Video Effects no painel Effects. Embora outros efeitos também ajustem
				a cor e a luminância, os efeitos da Cor Correção são projetados para fazer correções de
				cor e luminância finas.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit4/imagem_unit4_14.png') }}" alt="Wave Form do áudio">
				</figure>
			</div><br>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit4/imagem_unit4_15.png') }}" alt="Wave Form do áudio">
				</figure>
			</div><br>

			<p>
				Você aplica os efeitos de correção de cor a um clipe da mesma forma que você aplica todos os
				efeitos padrão. As propriedades do efeito são ajustadas no painel Effects Control.
			</p><br>
			<h5>Fast Color Corrector e Three-Way Color Corrector</h5>
			<p>
				O Faz Color Corrector e o Three-Way Color Corrector têm controles para equilibrar as cores de
				forma que o branco, o cinza eo preto sejam neutros. O ajuste que neutraliza a cor moldada em
				uma área amostrada é aplicado a toda a imagem. Isso pode remover o elenco de cores em todas
				as cores. Por exemplo, se uma imagem tiver um elenco azulado indesejável, quando você
				provoca uma área que deve ser branca, o controle do Equilíbrio de Branco adiciona amarelo
				para neutralizar o elenco azulado. Este ajuste amarelo é adicionado a todas as cores na cena,
				o que deve remover o elenco de cores em toda a cena.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit4/imagem_unit4_16.png') }}" alt="Wave Form do áudio">
				</figure>
			</div><br>
			<h5>Color Balance (HLS)</h5>
			<p>
				O Color Balance (HLS) altera a tonalidade, leveza e saturação de uma imagem.
			</p>
			<p>
				• Hue: Especifi ca o esquema de cores da imagem. <br>
				• Lightness: Especifi ca o brilho da imagem. <br>
				• Saturation: Ajusta a saturação de cor da imagem. O valor padrão é 0 que não afeta as
				cores. Os valores negativos diminuem a saturação, com-100 convertendo o clipe em
				grayscale. Valores superiores a 0 produzem cores mais saturadas
			</p>
			<h5>Lumetri looks</h5>
			<p>
				O painel Lumetri Color inclui uma lista de looks internos que você experimentou anteriormente.
				Existem também uma série de Lumetri disponível como predefinições no painel de Efeitos.
				O efeito Lumetri permite que você navegue para um arquivo .look ou .lut existente para se
				aplicar matizado, ajustes sutis de cores em suas filmagens. Se você está apenas começando
				com ajustes de cores, você pode querer uma solução mais rápida.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit4/imagem_unit4_17.png') }}" alt="painel Lumetri Color">
				</figure>
			</div><br>
			<h5>Blending Modes</h5>
			<p>
				Você pode selecionar a maneira como o Premiere Pro combina, ou sobrepõe, um clipe em
				uma faixa em uma Linha do tempo com o clipe ou clipes nas faixas mais baixas.
				O menu Blend Mode é subdividido em seis categorias com base em semelhanças entre os
				resultados dos modos de mistura. Os nomes das categorias não aparecem na interface; As
				categorias são simplesmente separadas pela divisão de linhas no menu.
			</p>

			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit4/imagem_unit4_18.png') }}" alt="menu Blend Mode">
				</figure>
			</div><br>
			<p>
				• <b style="color: #7dc242;">Normal category</b>: Normal, Dissolve. A cor do resultado de um pixel não é afetada pela cor
				do pixel subjacente, a menos que Opacity seja inferior a 100% para a camada de origem.
				Os modos Dissolver blend tornam transparentes alguns dos pixels da camada de origem.
			</p>
			<p>
				• <b style="color: #7dc242;"> Subtractive category</b>: Darken, Multiply, Color Burn, Linear Burn, Darker Color. Esses modos
				de mistura tendem a escurecer as cores, algumas misturando cores da mesma
				maneira que a mistura de pigmentos coloridos em tinta.
			</p>
			<p>
				• <b style="color: #7dc242;"> Additive category</b>: Lighten, Screen, Color Dodge, Linear Dodge (Add), Lighter Color. Esses
				modos de mistura tendem a iluminar as cores, algumas misturando cores do mesmo modo
				que misturando a luz projetada.
			</p>
			<p>
				• <b style="color: #7dc242;"> Complex category</b>: Overlay, Soft Light, Hard Light, Vivid Light, Linear Light, Pin Light, Hard
				Mix. Esses modos de mistura executam diferentes operações na fonte e nas cores
				subjacentes, dependendo se uma das cores é mais leve do que 50% cinza.
			</p>
			<p>
				• <b style="color: #7dc242;"> Difference category</b>: Difference, Exclusion, Subtract, Divide. Esses modos de mistura
				criam cores com base nas diferenças entre os valores da cor da fonte e a cor subjacente.
			</p>
			<p>
				• <b style="color: #7dc242;">HSL category</b>: Hue, Saturation, Color, Luminosity. Esses modos de mistura transferem um
				ou mais dos componentes da representação HSL de cor (tonalidade, saturação e luminosidade) da cor subjacente para a cor do resultado.
			</p>
			<h5>Usando adjustment layers</h5>
			<p>
				Às vezes você quer aplicar um efeito a vários clipes. Uma maneira fácil de fazer isso é usar uma
				camada de ajuste. O conceito é simples: criar um clipe de camada de ajuste que possa armazenar
				os efeitos e posicionar esse clipa acima de outros na Timeline. Tudo abaixo do o clipe de
				camada de ajuste é visualizado através dele, recebendo os efeitos que ele possui.
			</p>
			<p>
				Você pode ajustar facilmente a duração e a opacidade de um clipe de camada de ajuste, como
				você faria ajuste a qualquer clip gráfico, facilitando o controle de quais outros clipes são vistos
				através dele. As camadas de ajuste tornam o trabalho com efeitos mais rápido, porque você
				pode alterar as configurações (em um único item) para influenciar a aparência de vários outros
				clipes.
			</p>
			<p>
				Para criar uma camada de ajuste clique no menu File – New – Adjustment Layer.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit4/imagem_unit4_19.png') }}" alt="Adjustment Layer">
				</figure>
			</div><br>


			<h5 class="barlow center-align">A T I V I D A D E S</h5>
			<p style="margin-top: 16px"><b>1.</b>Alterar a correção de cores de um vídeo.</p>
			<p style="margin-top: 16px"><b>1.</b>Usando videos modelo contendo distorçoes de tela, ruido, sujeira ou outros, aplicar
				modo de mesclagem com o video da sequencia atual.</p>



		</div>
	</div>

</main>

<script>
	activeMenu();
</script>

@endsection