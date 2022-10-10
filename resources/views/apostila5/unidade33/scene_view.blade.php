@extends('layouts.template')
@section('titulo','Unit 33 | Scene View')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade33" data-etapa="scene">
			<h3 class="barlow">UNIT 33</h3>
			<h5 class="barlow upper">Scene View</h5>
			<p>
			Scene View é a área onde interagimos com nossos GameObjects, como câmeras, backgrounds,
o jogador, inimigos e assim por diante. É dentro dessa janela que podemos posicionar e
transformar nossos GameObjects. A captura de tela a seguir exibe nossa Scene View:
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit33/imagem12.png') }}" alt="guia1" style="width:75%; margin: 0 auto;">
				</figure>
			</div>
			<h5 class="barlow" style="margin-top:20px;">Project Window</h5>
			<p>Assets são arquivos de imagem, arquivos de áudio, scripts de programação e assim por diante,
esses arquivos compõem as peças visuais reutilizáveis de nosso jogo. O Navegador de projeto
contém todos os assets; ele os lista em um projeto e nos permite visualizá-los e organizá-los
em pastas, conforme mostrado na seguinte captura de tela:</p>
                <figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit33/imagem13.png') }}" alt="guia1" style="width:75%;">
				</figure>
			<p style="margin-top:20px;">A janela Projeto exibe todos os arquivos relacionados ao seu projeto e é a principal maneira
de navegar e encontrar Assets e outros arquivos de projeto em seu Editor. Quando você inicia
um novo projeto ,por padrão, esta janela será aberta. No entanto, se ela estiver fechada ou se
você não encontrá-la, pode abri-la via <strong> Window> General> Project. </strong></p>
                <figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit33/imagem14.png') }}" alt="guia1" style="width:55%;">
				</figure>
			<p style="margin-top:20px;">A janela Project pode ser movida ao clicar e arrastar a parte superior da janela. Você pode
encaixá-lo no lugar no Editor ou arrastá-la para fora da janela do Editor para usá-lo como uma
janela flutuante. Você também pode alterar o layout da própria janela. Para fazer isso,Clique
no menu drop-down Layout e escolha um tipo de visualização para seus arquivos.</p>
<p>No mod de duas visualizações o painel esquerdo do navegador mostra a estrutura de pastas
do Projeto como uma lista hierárquica. Quando você seleciona uma pasta da lista, o Unity
mostra seu conteúdo no painel à direita. Você pode clicar no pequeno triângulo para expandir
ou recolher a pasta, exibindo todas as pastas aninhadas que ela contém. Para expandir ou recolher
quaisquer pastas aninhadas, mantenha a tecla Alt pressionada enquanto clica .</p>
<p>Aqui vemos que hoje assets individuais são mostrados no painel direito como ícones que indicam
seu tipo (por exemplo, script, material, subpasta).</p>
                <figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit33/imagem15.png') }}" alt="guia1" style="width:55%;">
				</figure>
				<p style="margin-top:20px;">Para redimensionar os ícones, use o controle deslizante na parte inferior do painel; eles serão
substituídos por uma exibição de lista hierárquica se o controle deslizante for movido para
a extrema esquerda. O espaço à esquerda do controle deslizante mostra o item atualmente
selecionado, incluindo um caminho completo para o item se uma pesquisa estiver sendo executada.</p>
<p>Barra de ferramentas da janela do projeto</p>
                <figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit33/imagem16.png') }}" alt="guia1" style="width:55%;">
				</figure>
				<p style="margin-top:20px;">Ao longo da borda superior da janela está o navegador da barra de ferramentas.</p>
				<p><strong> 1- Criar menu: </strong> Exibe uma lista de assets e outras subpastas que você pode adicionar à pasta
atualmente selecionada.</p>
<p><strong> 2- Barra de pesquisa: </strong> Use a barra de pesquisa para pesquisar um arquivo dentro do seu
projeto. Você pode escolher pesquisar em todo o Projeto ( Todos ), nas pastas de nível superior
do seu Projeto (listadas individualmente), na pasta que você selecionou atualmente
ou no Asset Store.</p>
<p><strong> 3- Pesquisa por tipo</strong>: Selecione esta propriedade para limitar sua pesquisa a um tipo específico, por exemplo Mesh, Prefab,Scene.</p>
<p><strong> 4- Pesquisa por etiqueta</strong>: Selecione esta propriedade para escolher uma tag a ser pesquisada.</p>
<p><strong> 5- Contagem de pacotes ocultos: </strong> Selecione esta propriedade para alternar a visibilidade dos
packages na janela Project.</p>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
