@extends('layouts.template')
@section('titulo','Unit 45 | Linhas de Movimento')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade45" data-etapa="linhas_movimento">
			<h3 class="barlow">UNIT 45</h3>
			<h5 class="barlow upper">Linhas de Movimento</h5>
            <p>As linhas de movimento de um personagem de videogame é o principal meio de o jogador
expressão porque eles determi nam o modo de movimento dentro do jogo . Para o propósito
de contar histórias em jogos, estamos menos preocupados com movimentos da mão de um
personagem ou expressões faciais, por exemplo, porque as animações costumam ser sutis
demais para serem notadas no meio da ação, em um personagem que ocupa uma pequena
porcentagem do espaço total da tela. Nossa principal preocupação é com animações mais
amplas que permaneçam legíveis em todas as resoluções, o que inclui personagens que pule
arcos e linhas de movimento. Antes de explorarmos os efeitos estéticos de movimento, devemos
fazer uma distinção importante entre os dois princípios de interação do personagem:
personagens guiados e personagens sincronizados.</p>
<p>Os controles de personagens para jogos como Monument Valley caem na categoria de <strong> personagens
guiados</strong>. O que isso significa é que as ações dos jogadores não são sincronizadas com
o personagem. Em vez disso, o jogador deve primeiro tocar na tela para especificar um destino para o qual o personagem jogável caminha automaticamente ao longo de um caminho
predefinido.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit45/imagem01.png') }}" alt="guia1" style="width:100%;">
</figure>
<p style="margin-top:20px;">
O jogador deve esperar passivamente até o personagem chegar ao seu destino, o que lhe
dá tempo para contemplar soluções para os quebra-cabeças de ambiente lindamente
concebidos.</p>
<p>Personagens sincronizados são controlados fazendo com que os jogadores usem gestos que
imitam os movimentos do personagem, como em Ori and the Blind Forest. O design do jogo é
mais orientado para a ação do que de Monument Valley. Como resultado, os jogadores devem
deslizar para a esquerda para que o personagem mova para a esquerda e deslize para a direita
se desejar que ele mova para a direita. Dos dois tipos de interação - guiada e sincronizada -
sincronizada têm maior tendência para gerar empata jogador-personagem porque eles permitem
que os jogadores incorporem fisicamente os movimentos do personagem, mesmo que
a ação seja abstraído para deslizar o dedo em um smartphone ou controlador.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit45/imagem02.png') }}" alt="guia1" style="width:100%;">
</figure>
<p style="margin-top:20px;">Esta habilidade para jogadores imita fisicamente as ações apresentadas na obra de arte, é o
que torna o jogo um meio de narrativa emocionante.</p>
<p>Portanto, vamos nos concentrar em examinar personagens sincronizados e como nosso espectro
de formas de emoções pode ser aplicado às suas animações para alterar a experiência
estética da interação.</p>
<p>Quando um jogador pressiona o botão de pular nos níveis de abertura e fechamento de Child
of Light, a personagem jogável salta graciosamente pela tela.</p>
<p>A implícita linha que este arco de salto cria - enfatizado pelo cabelo da personagem - é alinhado
esteticamente a uma onda senoidal e ao conceito de forma circular, o mesmo efeito
acompanha a personagem em todas as movimentações.</p>
<p>A equipe de desenvolvimento se inspirou nos movimentos das criaturas marinhas para imbuir
o personagem com uma graça igualmente delicada.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit45/imagem03.png') }}" alt="guia1" style="width:100%;">
</figure>


</div>
</div>
</main>

<script>
	activeMenu();
</script>

@endsection
