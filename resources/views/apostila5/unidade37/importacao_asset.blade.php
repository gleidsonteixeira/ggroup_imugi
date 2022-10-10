@extends('layouts.template')
@section('titulo','Unit 37 | Componentes')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade37" data-etapa="importacao_asset">
			<h3 class="barlow">UNIT 37</h3>
			<h5 class="barlow upper">Importacao de Assets</h5>
            <p>Você pode trazer os as sets criados fora do Unity para o seu projeto importando o arquivo
diretamente para a pasta <strong> Assets </strong> ou copiando-o para essa pasta. Durante o desenvolvimento
de qualquer projeto no Unity, haverá a necessidade de importação de assets , sejam eles 3D
ou 2D. Os assets vêm em vários formatos de arquivo, como .fbx, .png e .tga. Esses são apenas
alguns, mas são comumente usados no desenvolvimento do Unity. Os assets podem ser arrastados
e soltos na janela Project da Interface do Unity ou podem ser importados usando o
comando Import New Asset. O Unity também detecta quando você salva novas alterações no
arquivo e atualiza os arquivos conforme necessário.</p>
<h5 class="barlow upper">Importando assets</h5>
<p>Ao criar um projeto do Unity, você es tá criando uma pasta (com o nome do seu projeto) que
contém as seguintes subpastas: A estrutura básica de arquivos de um Projeto Unity</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit37/imagem01.png') }}" alt="guia1" style="width:35%;">
</figure>
<p style="margin-top:20px;">Salve ou copie os arquivos que deseja usar em seu projeto para a pasta <strong> Assets </strong>. Você pode usar
a Janela de Project dentro do Unity para ver o conteúdo da sua pasta de Assets. Portanto, se
você salvar ou copiar um arquivo para a pasta Assets, o Unity o importa e mostra na janela
Project. O Unity detecta automaticamente os arquivos à medida que são adicionados à pasta
Assets ou se são modificados. Quando você coloca qualquer Assets na pasta , ele aparece na
Visualização do Projeto .</p>
<p>Se você arrastar um arquivo para a janela de projeto do Unity de seu computador (seja do
Finder no Mac ou do Explorer no Windows), o Unity o copia para a pasta Assets e ele aparece
na janela do projeto.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit37/imagem02.png') }}" alt="guia1" style="width:55%;">
</figure>

<p style="margin-top:20px;">Os itens que aparecem na janela Project representam (na maioria dos casos) arquivos reais
em seu computador e, se você excluí-los dentro do Unity, também os está excluindo de seu
computador, então tome cuidado na hora de deletar assets e pastas.</p>
<p><strong>Sprites</strong>: Sprites são defi nidos como objetos gráfi cos 2D, também podendo ser reconhecidos
como texturas para objetos 3D dentro da Unity</p>

<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit37/imagem03.png') }}" alt="guia1" style="width:45%;">
</figure>

<p style="margin-top:20px;">A importação mais segura é feita quando você clica com o botão direito em cima da pasta de
destino por exemplo na <strong> pasta Sprite </strong> e logo após clica na opção <strong> Import New Asset</strong>.</p>
<p>Selecione o Sprite na pasta do seu computador, e clique em <strong> Import </strong> para importar
para seu projeto.</p>

<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit37/imagem04.png') }}" alt="guia1" style="width:45%;">
</figure>

<p style="margin-top:20px;">No próximo passo você verá o arquivo importado dentro da pasta Sprites, pois era esta que
estava selecionada no momento da importação.</p>

<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit37/imagem05.png') }}" alt="guia1" style="width:45%;">
</figure>
<p style="margin-top:20px;"><strong>Obs.: Se você importar um arquivo no local errado , pode mover para a pasta correta arrastando-
o para a pasta de destino. </strong></p>
<p>No exemplo acima , importamos um asset do cenário para dentro da <strong> pasta Sprites</strong>.</p>

<h5 class="barlow upper">Package</h5>
<p>Também pode ser necessário importar assets de um <strong> projeto existente </strong> do Unity. Isso é útil
quando você precisa de ativos que já foram pré-configurados em um projeto diferente .
Para fazer isso, você precisará exportar os assets usando um package do Unity.</p>
<ul>
    <li>Para exportar um projeto inteiro do Unity existente, clique com o botão direito
na pasta Assets na janela Project e selecione <strong> Export Package</strong>.</li>
<li>Para exportar assets individuais, selecione os assets desejados, clique com o botão
direito na janela Project e selecione Export Package.</li>
<li>Dê um nome ao package/pacote e salve-o no local desejado.</li>
<li>Em outro projeto do Unity, clique com o botão direito na janela Project e selecione
<strong>Import Unity Package</strong>.</li>
<h5 class="barlow upper">Package</h5>
<li>Navegue até o local do arquivo do pacote Unity desejado, selecione-o
e clique em <strong>Importar</strong>.</li>
</ul>

<p>Agora que você sabe como criar Package Unity, pode usar qualquer um dos asset configurados
de seus projetos e reutizá-los em outro projeto para acelerar sua produção.</p>

<h5 class="barlow upper">Importando assets da Unity Asset Store</h5>
<p>Asset Store é um mer cado online criado pela Unity para que desenvolvedores de jogos independentes
compre e venda assets reutilizáveis para fazer seus próprios jogos, é usada para importação
de assets de jogos na versão 2019, conforme mostrado na seguinte captura de tela:</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit37/imagem06.png') }}" alt="guia1" style="width:65%;">
</figure>

<p style="margin-top:20px;">Todos os assets comprados ou baixados da Asset Store serão mostrados e podem ser acessados
do Navegador da janela Project.</p>
<p>Para baixar os assets do Asset Store, você precisa selecionar o tipo de assets que quer ver , o
valor que pode pagar pelo asset e ter feito log in na sua conta Unity.</p>
<p>Após achar o asset que quer importar, é só clicar no Botão de download do asset escolhido.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit37/imagem07.png') }}" alt="guia1" style="width:65%;">
</figure>
<p style="margin-top:20px;">Aguarde o Unity fazer o download dos seus assets.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit37/imagem08.png') }}" alt="guia1" style="width:65%;">
</figure>
<p style="margin-top:70px;">Após a conclusão do download, clique em <strong> import</strong>.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit37/imagem09.png') }}" alt="guia1" style="width:65%;">
</figure>
<p style="margin-top:20px;">O pop-up de importação de pacote vai aparecer e logo após que todo ele tiver sido carregado
para o seu projeto, a janela de escolha de assets aparecerá.</p>
 
<div class="metade esquerda">
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit37/imagem10.png') }}" alt="guia1" style="width:75%;">
</figure>
</div>
<div class="metade direita">
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit37/imagem11.png') }}" alt="guia1" style="width:65%;">
</figure>
</div>
<div class="clear"></div>
<p style="margin-top:20px;">Na janela de importação , você pode selecionar todos os assets que serão importados clicando
no botão <strong> All </strong>, ou em nenhuma clicando em None, assim retirando a seleção de todos,
você também podendo escolher cada arquivo que será importado selecionando manualmente
cada checkbox. Para cancelar a importação,clique em Cancel, e para aceitar a importação
clique em <strong>Import </strong> .</p>
<p>Dentro do seu projeto aparecerão pastas novas pastas que foram importados dentro da pasta
<strong> Assets </strong> e da pasta <strong> Packages </strong> (pacotes). Veja abaixo.</p>

<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit37/imagem12.png') }}" alt="guia1" style="width:45%;">
</figure>

  </div>
</div>

</main>

<script>
	activeMenu();
</script>

@endsection
