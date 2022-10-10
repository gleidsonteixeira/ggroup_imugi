@extends('layouts.template')
@section('titulo','Photoshop | Inntroduction')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila5" data-unidade="intro-unity" data-etapa="intro-unity">
				<div class="bem-vindo">
					<figure class="banner">
						<img src="{{ asset('assets/img/games_and_animation/intro/bg-intro.jpg') }}" alt="">
					</figure>
					<h3 class="barlow center-align">Seja Bem Vindo a Unity</h3>

					<div class="bem-vindo-conteudo">
						<p>Como artísta e animador 2D você tem a oportunidade de entrar no mundo do desenvolvimento
de jogos, inicialmente , como um game artíst ou um vendedor de artes para jogos. Sim,
todo desenvolvedor de jogos começa a criar jogos que possuem principalmente representações
abstratas de objetos, pois tentam aprender com as limitações de seus sistemas, mas também
porque não é necessário que um jogo tenha um elemento visual muito trabalhado para
ser jogado no início. Freqüentemente, os designers de jogos criam sua própria arte e, embora
alguns sejam multi talentosos, fica claro que são mais e designers do que programadores.
						</p>
						<p>Mesmo para jogos 2D, os gráficos dos videogames modernos parecem aspirar mais a alto
realismo ou design altamente estilizado, mas esses são esforços de equipe em que o desenvolvedor
do jogo pode se concentrar no código e no design enquanto outra pessoa trabalha
nos gráficos . Os desenvolvedores independentes geralmente compram ativos ou os criam
eles próprios.
						</p>
						<p>
						Os artístas também podem criar seus jogos, geralmente você verá esse tipo de jogo como um
que parece muito bom, mas tem um código relativamente simples ou jogabilidade simples em
comparação com alguém cujo foco é o design de jogos e programação avançada
						</p>
						<p>
						Durante o curso , você vai usar Mods para iniciar a criação de arte para jogos. Um mod (abreviação
de modificação) é uma modelo de jogo aberto, que te permite alterar aspectos existentes
ou adicionar novos aspectos ao jogo . Depois de modifi car um jogo, ele pode fi car um
pouco diferente ou parecer completamente novo - o que é determinado pelo que você deseja criar para o jogo.
						</p>
					<p>
					Mod significa essencialmente que a estrutura, código ou sintaxe do jogo foi editado ou criada
para ser alterado. Um grande exemplo de Mods são os do jogos The Sims, mas muitos jogos
diferentes podem ser modifi cados. Ao fazer modding (a alteração) também podemos aplicálas em várias em várias plataformas (por exemplo, consoles de jogos, etc.), embora seja mais
frequentemente feito no PC porque tem uma conexão melhor com a internet - onde a maioria
dos mods é encontrada.
					</p>
					<p>Usando os mods da própria unity, você pode observar quais assets funcionam bem e são
compativeis com eles, assim podendo usá-los em seus jogos ou para vender os assets desenvolvidos
por você na Asset Store da Unity. Afinal, se você realmente deseja criar algo, terá de
trabalhar tanto quanto for necessário, mesmo que não tiver experiência em todos os aspectos
da criação de jogos.</p>	
<h5 class="barlow">Conheça alguns Mods da Unity:</h5>
                <figure>
                    <img src="{{ asset('assets/img/games_and_animation/unity/intro/imagem1.png') }}" alt="guia" style="width:95%!important; margin: 0 auto;" >
                </figure>
				<figure>
                    <img src="{{ asset('assets/img/games_and_animation/unity/intro/imagem2.png') }}" alt="guia" style="width:95%!important; margin: 0 auto;" >
                </figure>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script>
        activeMenu();
    </script>
@endsection
