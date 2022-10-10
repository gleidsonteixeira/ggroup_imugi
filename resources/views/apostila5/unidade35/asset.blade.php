@extends('layouts.template')
@section('titulo','Unit 35 | Asset')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade35" data-etapa="asset">
			<h3 class="barlow">UNIT 35</h3>
			<h5 class="barlow upper">Asset</h5>
			<p>
			Um asset é uma represent ação de qual quer item que você pode usar em seu projeto. Um
alvo pode vir de um arquivo criado fora do Unity, como um modelo 3D, um arquivo de áudio
ou uma imagem. Você pode criar alguns tipos de assets no Unity, como um ProBuilderMalha,
a Animator Controller ou Render Texture.
			</p>
			<figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit35/imagem01.png') }}" alt="guia1" style="width:75%;">
				</figure>
            <h5 class="barlow upper" style="margin-top:20px;">Tipos comuns de assets</h5>
            <h5 class="barlow upper">Arquivos de imagem</h5>
            <p>O Unity oferece suporte aos tipos de arquivo de imagem mais comuns, como BMP, TIF, TGA,
JPG e PSD. Se você salvar seus arquivos em camadas do Photoshop (.psd) em sua pasta Assets
em Project, o Unity os importará como imagens.</p>
<h5 class="barlow upper">Arquivos de áudio</h5>
<p>Se você salvar arquivos de áudio não compactados em sua pasta <strong> Assets </strong>, o Unity os importa
de acordo com a compressão/configurações especificadas(original do arquivo).</p>
<h5 class="barlow upper">Outros tipos de assets</h5>
<p>Em todos os casos, o Unity nunca modifica seu arquivo de origem, embora você possa frequentemente
escolher entre várias maneiras de compactar, modificar ou de outra forma processar
o asset dentro do Unity. O processo de importação lê seu arquivo de origem e cria uma
representação pronta para jogo de seu ativo internamente, correspondendo às configurações
de importação escolhidas. Se você modificar as confi gurações de importação de um asset, ou
fizer uma mudança no arquivo de origem na pasta Assets, isso fará com que o Unity reimporte
o ativo novamente(atualize o arquivo modificado) para refletir suas alterações.</p>
<h5 class="barlow upper">Assets Padrão</h5>
<p>O Unity vem com vários assets padrão . Estas são coleções de assets que a maioria dos clientes
Unity usa. Esses incluem:</p>
<ul>
 <li>2D</li>
 <li>Camera</li>
 <li>Characters/Personagens</li>
 <li>CrossPlataformInput</li>
 <li>Effects/Efeitos</li>
 <li>Environment/Ambiente</li>
 <li>ParticleSystems/Particulas</li>
 <li>Prototyping/Prototipagem</li>
 <li>Utility/Utilitário</li>
 <li>Vehicles/Veículos</li>
</ul>
<p>Para transferir assets padrão dentro e fora dos projetos, a Unity usa <strong> Asset packages </strong> de assets,
disponível no Unity asset store. Os packages/pacotes de assets permitem que você compartilhe e reutilize projetos e coleções de assets do Unity.</p>
            <div class="metade esquerda ">
            <figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit35/imagem02.png') }}" alt="guia1" style="width:75%;">
				</figure>
            </div>
            <div class="metade direita">
            <h5 class="barlow upper" style="margin-top:20px;">Usando o Asset Store</h5>

            <p>A Unity Asset Store co ntém uma biblioteca de assets gratuitos
e comerciais que a Unity Technologies e também os
membros da comunidade criam. Uma grande variedade de
recursos está disponível, incluindo texturas, mods (modelos),
animações, exemplos de projetos inteiros, tutoriais e extensões
do Editor Unity. Você pode acessar assets comprados e
baixados de uma interface que é integrada ao Editor do Unity
em <strong> Window>Package Manager </strong>, que permite baixar e importar
assets diretamente para o seu projeto.</p>
            </div>
            <div class="clear"></div>
            <figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit35/imagem03.png') }}" alt="guia1" style="width:75%;">
			</figure>
            <h5 class="barlow upper" style="margin-top:20px;">Organizando seus Assets</h5>
			<p>Manter seus assets organizados durante a produção do seu jogo é essencial para que você não
se perca no projeto, para isso na janela Project vamos criar pastas para nossos assets.</p>
<p>Maneiras de Criar pastas:</p>
<ul>
<li>No menu <strong> Assets </strong>, clique em <strong>Create > Folder</strong></li>
</ul>
<figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit35/imagem04.png') }}" alt="guia1" style="width:75%;">
			</figure>
<ul>
<li>Na janela <strong> Project </strong>, selecione a pasta <strong>Assets</strong>, Clique com o botão direito do mouse e
selecione a opção <strong> Create > Folder </strong>.</li>
</ul>
<figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit35/imagem05.png') }}" alt="guia1" style="width:75%;">
			</figure>
<ul>
<li>No seu projeto , dentro da pasta Assets você vai criar as principais pastas para guardar
os assets que serão usados no seu jogo 2D(Animations , Fonts, Sprites, Sounds,
Scripts e Scenes).</li>
</ul>
<figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit35/imagem06.png') }}" alt="guia1" style="width:75%;">
			</figure>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
