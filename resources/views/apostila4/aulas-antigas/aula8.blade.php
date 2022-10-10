@extends('layouts.template')
@section('titulo','Unit 3 | Aula 08 – Retoque profissional')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila4" data-unidade="unidade3" data-etapa="aula8">
			<h3 class="barlow">UNIT 3</h3>
			<h5 class="barlow upper">Aula 08 – Retoque profissional</h5>
			<p>Nesta aula daremos continuidade as ferramentas de retoque e restauração, focando
			nas ferramentas de retoque profissional. O objetivo é criar um aspecto melhorado
			para simular uma maquiagem digital em imagens, e passar uma impressão de fotografia profissional.</p>
			<h5 class="barlaw">Dodge e Burn Tool</h5>
			<p>A ferramenta Dodge e a ferramenta Burn claream ou escurecem áreas da imagem. Essas
			ferramentas são baseadas em uma técnica de câmara escura tradicional para regular a
			exposição em áreas específicas de uma impressão. Fotógrafos retém a luz para iluminar
			uma área na cópia (esquivando) ou aumentar a exposição para escurecer áreas em uma 
			impressão (queima). Quanto mais você pinta sobre uma área com a ferramenta Dodge
			ou Burn, mais leve ou mais escura se torna.</p>
			<p>Para acessar as ferramentas Dodge e Burn podemos:</p>
			<p>I. Clicar no ícone da ferramenta padrão (Dodge Tool) e clicar seta do menu desdobrável.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit3/imagem21.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>II. Ou simplesmente teclar “O” para acionar a ferramenta e manter pressionada a
			tecla SHIFT para alternar entre elas.</p>
			<p>Vale lembrar que tanto o Dodge, quanto o Burn utilizam recursos de pincel para aplicar
			em áreas, portanto suas configurações de diâmetro da ponta do pincel e dureza são as
			mesmas da ferramenta Brush (pincel).</p>
			<h5 class="barlaw">Gaussian Blur (Desfoque Gaussiano)</h5>
			<p>O Gaussian Blur desfoca rapidamente uma seleção por uma quantidade ajustável. O termo gaussiano refere-se à curva em forma de sino que é gerada quando o Photoshop
			aplica uma média ponderada aos pixels. O filtro Gaussian Blur adiciona detalhes de baixa
			frequência e pode produzir um efeito nebuloso.</p>
			<p>Para utilizar o filtro Gaussian Blur devemos:</p>
			<p>I. Selecionar a camada ou área da camada que desejamos desfocar.</p>
			<p>II. Clicar no menu Filter – Blur – Gaussian Blur.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit3/imagem22.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>III. Clicar no controle deslizante Radius da janela Gaussian Blur, para aumentar o percentual de desfoque.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit3/imagem23.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>Observe o resultado:</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit3/imagem24.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlaw">Surface Blur (Desfoque de Superfície)</h5>
			<p>Borra uma imagem preservando bordas. Este filtro é útil para criar efeitos especiais e
			para remover o ruído ou a granulação. A opção Radius especifica o tamanho da área
			amostrada para o desfoque. A opção Thresold controla o quanto os valores tonais dos
			pixels vizinhos devem divergir do valor do pixel central antes de fazer parte do borrão.
			Pixels com diferenças de valor tonal inferiores ao valor Threshold são excluídos do Desfoque.</p>
			<p>Para utilizar o filtro Surface Blur devemos:</p>
			<p>I. Selecionar a camada ou área da camada que desejamos desfocar.</p>
			<p>II. Clicar no menu Filter – Blur – Surface Blur.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit3/imagem25.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>III. Clicar nos controles deslizantes Radius e Threshold da janela Surface Blur, para
			aumentar o percentual de borrão e o limiar do desfoque.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit3/imagem26.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlaw center align">A T I V I D A D E S</h5>
			<p><b>1.</b> Com o material fornecido pelo seu instrutor, realize a limpeza de pele e maquiagem digital de
			fotos.</p>
        </div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
