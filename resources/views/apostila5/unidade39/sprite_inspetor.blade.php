@extends('layouts.template')
@section('titulo','Unit 39 | Sprite Inspetor')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade39" data-etapa="sprite_inspetor">
			<h3 class="barlow">UNIT 39</h3>
			<h5 class="barlow upper">Configurações de Sprite no Inspetor</h5>
            <p>Quando selecionamos um asset importado dent ro do Navegador do painel project, o Inspetor
será atualizado para exibir as configurações do sprite.</p>
<p><strong>As seguintes configurações serão exibidas:</strong></p>
<h5 class="barlow upper">Texture Type</h5>
<p>Quando clicamos na caixa suspensa ao lado de Tipo de textura, somo s apresentados aos tipos
de texturas que o Unity usa, conforme mostrado na imagem a seguir:</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit39/imagem06.png') }}" alt="guia1" style="width:35%;">
</figure>

<p style="margin-top:20px;">Como estamos trabalhando em 2D, gostaríamos de usar uma imagem, e portanto um sprite,
para seleção. Portanto,esse Sprite pode ser usado como textura também. É importante selecionar
o tipo correto, pois cada tipo será atualizado e exibirá configurações exclusivas no
Inspetor que dependem do tipo que você escolher no menu.</p>
<h5 class="barlow upper">Sprite Mode</h5>
<p>Para o Sprite mode, temos duas opções: Única e Múltipla, conforme mo strado
na imagem a seguir:</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit39/imagem07.png') }}" alt="guia1" style="width:35%;">
</figure>
<p style="margin-top:20px;">Vamos escolher Single quando queremos criar apenas um sprite que use a imagem inteira, por
exemplo , plano de fundo de uma cena. Escolhemos Multiple quando precisamos de várias
parte, em um personagem poderíamos usar esta opção.</p>
<h5 class="barlow upper">Packing Tag</h5>
<p>É um recurso avançado somente profi ssional usado para packing/empacot amento automático de sprites, também conhecido como texture atlasing/atlas de textura.</p>
<p>O texture atlasing é usado quando sprites / texturas separados são agrupados para formar um
sprite / textura para melhorar a taxa de quadros (desempenho) ao desenhar muitos sprites
por quadro.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit39/imagem08.png') }}" alt="guia1" style="width:35%;">
</figure>
<h5 class="barlow upper" style="margin-top:20px;">Pixels Per Units</h5>
<p>A propriedade Pixels to Units é usada quando importamos uma ima ge m e ela parece muito
menor ou muito maior do que o pretendido. Se a imagem parecer muito maior, definimos
esse valor mais baixo; caso contrário, definimos este valor mais alto. Por padrão, o valor é
definido como 100, conforme mostrado na seguinte captura de tela:</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit39/imagem09.png') }}" alt="guia1" style="width:35%;">
</figure>
<h5 class="barlow upper" style="margin-top:20px;">Pivot</h5>
<p>A propriedade Pivot define o ponto na imagem de onde você deseja movê-la. Todos os valores
são locais predefinidos com exceção de Custom, que nos permite escolher qualquer ponto na
imagem arrastando o ponto âncora para o nosso local desejado na Scene View. Podemos selecionar o que preferimos; no entanto, para poder centralizar a imagem de forma fácil e rápida,
podemos definir a propriedade Pivot como Center, conforme mostrado na seguinte captura :</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit39/imagem10.png') }}" alt="guia1" style="width:35%;">
</figure>
<h5 class="barlow upper" style="margin-top:20px;">Filter Mode</h5>
<p>A configuração do Modo de filtro determina como a textura usada para o s prite é filtrada.
Dê uma olhada na seguinte lista de configurações:</p>
<p><strong>Point</strong>: Este é o mais barato (em relação ao custo no desempenho do computador) e o melhor
para o desempenho, mas é usado para imagens menores que estão mais distantes, pois a
imagem ficará bloqueada se você visualizá-la de perto.</p>
<p><strong>Bilinear</strong>: É mais caro do que Point; no entanto, ele suaviza a imagem para que não fique bloqueada de perto.</p>
<p><strong> Trilinear</strong>: é semelhante ao Bilinear porque a imagem não é mais bloqueada de perto, no entanto, é o mais caro em desempenho, pois também faz a transição de mipmaps sem problemas.Quando uma textura está longe do primeiro plano (plano de fundo ), ela usará uma
resolução baixa e mudará para texturas de resolução mais alta quanto mais perto ela chegar à
vista(personagem). Bilinear é selecionado por padrão, pois nem sempre alteramos mipmaps</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit39/imagem11.png') }}" alt="guia1" style="width:35%;">
</figure>
<p style="margin-top:20px;"><strong> Obs.: </strong> Mipmaps são usados para melhorar o desempenho quando muitas texturas são usadas</p>
<h5 class="barlow upper">Plataform Settings</h5>
<p>Existe a opção de definir configurações específicas para cada plataforma (Web, celular e PC)
que gostaríamos de direcionar para o nosso jogo, selecionando o ícone relevante, bem como
marcando a opção Override/Substituir. Essas configurações substituirão as configurações padrão, que são as configurações de Tamanho máximo e Formato, que agora iremos definir na
guia Default, conforme mostrado na seguinte captura de tela:</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit39/imagem12.png') }}" alt="guia1" style="width:35%;">
</figure>

<p style="margin-top:20px;">
Você pode deixá-lo como Default para que ele aplique as mesmas configurações para todas
as plataformas.</p>
<h5 class="barlow upper">Max Size</h5>
<p>A configuração Max Size define o tamanho máximo ao importar a textura para no sso sprite.
Plataformas diferentes exigirão resoluções diferentes</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit39/imagem13.png') }}" alt="guia1" style="width:25%;">
</figure>
<h5 class="barlow upper" style="margin-top:20px;">Format</h5>
<p>Existem várias opções disponíveis que irão representar a imagem internamente:</p>
<p><strong>Compressed</strong>: este é o padrão e é a opção mais comumente usada, sendo o menor
em tamanho.</p>
<p><strong>16 bits</strong>: esta opção é para imagens maiores em tamanho e qualidade superior Compressed,
mas com qualidade inferior quando comparado ao Truecolor.</p>
<p><strong>Truecolor</strong>: esta é a opção de qualidade mais alta, mas a maior em tamanho.</p>
<p>Como queremos que nosso jogo rode em todas as plataformas,podemos selecionar o formato
<strong>Compressed </strong> conforme mostrado na imagem a seguir:</p>
<p>Se você estiver almejando apenas plataformas de alto desempenho, pode estar selecionando
os formatos de qualidade mais alta.</p>
<h5 class="barlow upper">Applying our settings</h5>
<p>Quando terminarmos e estivermos satisfeitos com nossas configurações, precisamos nos cer-
tificar de clicar em <strong>Apply</strong> para que nossas configurações sejam salvas e tenham efeito. Isso
conclui o processo de importação e agora estamos prontos para usar o sprite em nossa cena.
Se quisermos voltar às configurações padrão, podemos clicar em <strong>Revert</strong>. Ambos os botões
são exibidos:</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit39/imagem14.png') }}" alt="guia1" style="width:25%;">
</figure>


</div>
</div>
</main>

<script>
	activeMenu();
</script>

@endsection
