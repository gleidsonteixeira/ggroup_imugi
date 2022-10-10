@extends('layouts.template')
@section('titulo','Unit 44 | Formas dos Personagens e Poses')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade44" data-etapa="personagens_poses">
			<h3 class="barlow">UNIT 44</h3>
			<h5 class="barlow upper">Formas dos Personagens e Poses</h5>
            <p>Os gestos de uma pessoa - as posições que seu corpo assume quando ela  se senta, fica de
pé ou anda, são uma pista imensa para sua personalidade ou estado emocional atual. Vocês
podem testemunhar essas pistas pela maneira como as pessoas curvam os ombros e tensionam
seus músculos quando estressados versus o estado visivelmente lânguido de alguém
em relaxamento.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit44/imagem01.png') }}" alt="guia1" style="width:100%;">
</figure>
<p style="margin-top:20px;">Ou considere uma bailarina fazendo uma pose delicada no meio da apresentação ao lado de
um boxeador antes de uma luta. Embora existam personagens de jogo que tentam projetá-los
requer a mesma sensibilidade aos gestos como se eles fossem pessoas reais. Os personagens
da série Hollow Knight serão o nosso estudo de caso para o papel das formas primárias no
design de personagens porque elas são projetado com uma sensibilidade minimalista.</p>

<div class="metade esquerda">
<p>Como você descreveria a personalidade do Knight? Dinâmico, jovem e positivo vêm à mente - palavras que se alinham com os temas emocionais do
círculo. isto não é, portanto, nenhuma surpresa descobrir que tudo sobre o
design dele é baseado no conceito de forma de círculo. </p>
</div>
<div class="metade direita">
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit44/imagem02.png') }}" alt="guia1" style="width:60px;">
</figure>
</div>


<div class="clear"></div>
<div class="metade esquerda">
 <p>E sobre a Hornet? Em vez de projetá-la do zero, os artistas a ampliaram
verticalmente, dando uma forma geral decididamente
mais alta que reflete seu pilar, papel de apoio como ajudante .
Essas referências a um retângulo externaliza a personalidade da
Hornet através dos temas emocionais associados com o conceito
de formato quadrado.</p>
</div>
<div class="metade direita">
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit44/imagem03.png') }}" alt="guia1" style="width:100px;">
</figure>
</div>

<div class="clear"></div>
<div class="metade direita">
 <p>E na outra extremidade do espectro da forma, encontramos
o antagonista Hollow Knight, que está alinhado ao
conceito de forma de triângulo , agressivo. O design do
Knight foi novamente usado como modelo inicial para
este personagem. Ignorando a óbvio diferença na cabeça
e altura, os ar􀆟 stas fi zeram muito pouco mais do
que direcionar suas roupas e armas, para o triângulo ,
no espectro de formas em contraste visual com o motivo
circular do protagonista.</p>
</div>
<div class="metade esquerda">
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit44/imagem04.png') }}" alt="guia1" style="width:160px; float: right;">
</figure>
</div>
<div class="clear"></div>
<p style="margin-top:30px;">Um personagem bem desenhado pode ser distinguido apenas por sua silhueta, sem a necessidade
de detalhes de apoio. Como você pode ver no Final Fantasy XIV.O conceitos de forma
combinados com variações de tamanho, proporções, formas corporais e trajes comunicam
adequadamente a essência de cada personagem, variando de um conceito esférico lúdico a
uma potência em forma de pilar/retângulo e antagonista triangular.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit44/imagem05.png') }}" alt="guia1" style="width:70%;">
</figure>

</div>
</div>
</main>

<script>
	activeMenu();
</script>

@endsection
