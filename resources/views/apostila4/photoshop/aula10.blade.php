@extends('layouts.template')
@section('titulo','PHOTOSHOP | Aula 10 – Distorções e Perspectivas II')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade1" data-etapa="aula10">
			<h3 class="barlow">PHOTOSHOP</h3>
			<h5 class="barlow upper">Aula 10 – Distorções e Perspectivas II</h5>
			<h5 class="barlaw">Transform Warp <img style="display: inline;" src="{{ asset('assets/img/photoshop/unit5/imagem37.PNG') }}" alt="guia"></h5>
			<p>O comando Warp permite arrastar pontos de controle para manipular a forma de imagens, formas ou caminhos, e assim por diante. Podemos deformar usando uma forma no
			menu pop-up na barra de opções. As formas no menu pop-up deformação também são
			maleáveis; Arraste seus pontos de controle.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit5/imagem38.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>I. Selecione a camada que você deseja entortar com o warp.
			<p>II. Clique em Edit – Transform – Warp ou combine as teclas CTRL + T e clicando com
			o botão direito do mouse, escolha Warp no menu.
			<h5 class="barlaw">Transform Perspective</h5>
			<p>Aplicar a perspectiva cria a aparência de objetos existentes em três dimensões.</p>
			<p>I. Selecione a camada que deseja transformar.</p>
			<p>II. Clique em Edit – Transform – Perspective.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit5/imagem39.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>III. Ou combine as teclas CTRL + T e clicando com o botão direito do mouse sob a
			seleção, escolha a opção Perspective.</p>
			<h5 class="barlaw">Transform Skew</h5>
			<p>Inclinação aplica uma inclinação vertical ou horizontal para um item. Distorcer estende
			ou esmaga um item.</p>
			<p>I. Selecione a camada que deseja transformar.</p>
			<p>II. Clique em Edit – Transform – Skew.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit5/imagem40.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>III. Ou combine as teclas CTRL + T e clicando com o botão direito do mouse sob a
			seleção, escolha a opção Skew.</p>
			<h5 class="barlaw">Puppet Warp</h5>
			<p>Puppet Warp fornece uma malha visual que permite que possamos distorcer drasticamente áreas de imagem específicas, deixando outras áreas intactas. As aplicações vão
			desde o retoque sutil de imagens (como modelar cabelos) até transformações totais
			(como reposicionar braços ou pernas).</p>
			<p>Além das camadas de imagem, podemos aplicar Marionetes de Marionetas a camadas
			e máscaras de vetores. Para distorcer as imagens de forma não destrutiva, use Objetos
			Inteligentes.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit5/imagem41.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>Para utilizarmos o Puppet Warp devemos:</p>
			<p>• No painel Camadas, selecione a camada ou máscara que desejamos transformar.</p>
			<p>• Escolher Edit - Puppet Warp.</p>
			<p>• Na barra de opções, ajustar as seguintes configurações de malha:</p>
			<p>• Mode: Determina a elasticidade geral da malha.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit5/imagem42.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>Escolha Distort para uma malha altamente elástica, boa para deformar imagens de
			grande angular ou mapas de textura.</p>
			<p>• Density: Determina o espaçamento dos pontos de malha. Mais pontos aumenta a precisão, mas exige mais tempo de processamento; Menos pontos faz o oposto.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit5/imagem43.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>• Expansion: Expande ou contrai a borda externa da malha.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit5/imagem44.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>• Show Mesh: Desmarque para mostrar somente os pinos de ajuste, proporcionando uma visualização mais clara de suas transformações.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit5/imagem45.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>• Na janela de imagem, clique para adicionar pinos às áreas que deseja transformar e às áreas que deseja ancorar no local.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit5/imagem46.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>Para reposicionar ou remover pinos, faça conforme abaixo:</p>
			<p>• Arraste pinos para entortar a malha.</p>
			<p>• Para revelar uma área de malha que você tenha sobreposto com outra, clique
			nos botões de profundidade de pinagem na barra de opções.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit5/imagem47.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>• Para remover os pinos selecionados, pressione DELETE. Para remover outros
			pinos individuais, coloque o cursor diretamente sobre eles e pressione (Alt). Quando o
			ícone de tesoura aparecer, clique.</p>
			<h5 class="barlaw center-align">A T I V I D A D E S</h5>
			<p><b>1.</b> Utilizando as ferramentas de seleçaõ adequadas, selecione um personagem de
			uma composição e isole-o em uma camada para aplicar o comando Puppet Warp e trabalhar nele uma nova posição.</p>
			<p><b>2.</b> Reconstrua parte do background da imagem usando ferramentas de retoque
			como o Clone Stamp Tool.</p>			
        </div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
