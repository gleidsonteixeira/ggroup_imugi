@extends('layouts.template')
@section('titulo','PHOTOSHOP | Aula 13 – Edição de vídeos')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade1" data-etapa="aula13">
			<h3 class="barlow">PHOTOSHOP</h3>
			<h5 class="barlow upper">Aula 13 – Edição de vídeos </h5>
			
			<div class="clear"></div>
			<h5 class="barlow">Abrir ou importar um arquivo de vídeo</h5>
			<p>
				No Photoshop, você pode abrir um arquivo de vídeo diretamente ou adicionar vídeo a
				um documento aberto. Quando você importa vídeo, os quadros de imagem são referenciados em uma camada de vídeo.
			</p>
			<ul class="lista-vertical">
			<li><p>• Para abrir um arquivo de vídeo diretamente, escolha File - Open.</p></li>
			<li><p>• Para importar vídeo para um documento aberto, escolha Layer - Vídeo Layers - New Vídeo Layer From File.</p></li>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem24.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px"><b>Importar sequências de imagens</b></p>
			<p>
				No Photoshop, quando você importa uma pasta de arquivos de imagem sequenciados,
				cada imagem se torna um quadro em uma camada de vídeo.
			</p>
			<p>Certifique-se de que os arquivos de imagem estão numa pasta e são nomeados sequêncialmente.</p>
			<p>
				A pasta deve conter apenas as imagens que você deseja usar como quadros. A animação
				resultante será mais bem sucedida se todos os arquivos tiverem as mesmas dimensões
				de pixel. Para ordenar frames corretamente para a animação, nomeie os arquivos em
				ordem alfabética ou numérica. Por exemplo, filename001, filename002, filename003 e
				assim por diante.
			</p>

			<p>• Para abrir uma sequência de imagens diretamente, escolha File - Open. Marque a opção Image Sequence.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem25.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">• Para importar vídeo para um documento aberto, escolha Layer - Vídeo Layers -	New Vídeo Layer From File.</p>
			<p>• Na caixa de diálogo Abrir, navegue até a pasta com arquivos de sequência de imagens.</p>
			<p>• Selecione um arquivo e caso a caixa Image sequence esteja marcada, clique em Open.</p>
			<p>• Especifique a quantidade de frames por segundo (framer) até na caixa de diálogo e clique em OK.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem26.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px"><b>Importar vídeo, ou sequência de imagens</b></p>
			<p>
				No Photoshop, podemos usar o comando Place se quisermos transformar uma sequência de vídeo ou de imagem para importar para um documento. Uma vez colocados, os
				quadros de vídeo estão contidos dentro de um Smart object. Quando o vídeo é armazenado por um Smart Object, podemos navegar por quadros usando o painel de animação e também podemos aplicar Smart Filters.
			</p>
			<p>Com um documento aberto escolha File – Place.</p>
			<p>Selecione o vídeo e clique em Place Linked ou Place Embedded.</p>
			<p>Ou selecione uma sequência de arquivos de imagens e marcando a opção Image Sequence, clique em Place.</p>
			<p>
				Um smart object surgirá na tela e podemos acessar os quadros da animaçãao, clicando
				duas vezes no ícone dele no painel Layers
			</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem27.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px"><b>Vídeo frames to Layers</b></p>
			<p>Podemos criar uma sequência de quadros a partir de um vídeo importado para o photoshop. Para isso devemos:</p>
			<p>• Clicar em File – import – Vídeo frames to Layers.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem28.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">• A caixa de diálogo Import vídeo to Layers surgirá.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem29.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">Onde devemos escolher no painel Range to Import, se queremos importar o vídeo inteiro ou um intervalo:</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem30.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">• From begining to end: Insere o vídeo inteiro na timeline</p>
			<p>
				• Selected range only: Insere um intervalo específico delimitado pelos marcadores
				de início de intervalo e final de intervalo
			</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem31.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">Marcador de Início</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem32.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">Marcador de fim.</p>
			<p>Devemos nos certificar que a caixa Make frame animation está marcada para que a sequência de imagens seja criada ao pressionar o botão OK</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem33.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">Em seguida, a sequência total de quadros será exibida na timeline.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem34.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<h5 class="barlow upper center-align" style="margin-top:10%">A T I V I D A D E S</h5>
            <p style="margin-top:5%">
                1. Criar um gif animado ou vídeo baseado em um trecho de um vídeo, aplicando novos
				elementos inseridos com camadas, camadas de ajuste e fi ltros.
            </p>
		</div>
	</div>
</main>
<script>	
	activeMenu();
</script>

@endsection
