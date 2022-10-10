@extends('layouts.template')
@section('titulo','Unit 6 | Aula 13 – Composição Temática II')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila4" data-unidade="unidade6" data-etapa="aula13">
			<h3 class="barlow">UNIT 6</h3>
			<h5 class="barlaw">Aula 13 – Composição Temática II</h5>
			<h5 class="barlaw">Composição Steampunk</h5>
			<p>Steampunk também conhecido como Tecnavapor (diminutivo de ‘’Tecnologia a Vapor’’)
			é um subgênero da ficção científica, ou ficção especulativa, que ganhou fama no final
			dos anos 1980 e início dos anos 1990. Trata-se de obras ambientadas no passado, no
			qual os paradigmas tecnológicos modernos ocorreram mais cedo do que na História real
			(ou em um universo com características similares), mas foram obtidos por meio da ciência já disponível naquela época - como, por exemplo, computadores de madeira e aviões
			movidos a vapor. É um estilo normalmente associado ao futurista cyberpunk e, assim
			como este, tem uma base de fãs semelhante, mas distinta.</p>
			<p>O gênero steampunk pode ser explicado de maneira muito simples, comparando-o a
			literatura que lhe deu origem. Baseado num universo de ficção cientifica criado por 
			autores consagrados como Júlio Verne no fim do século XIX, ele mostra uma realidade
			espaço-temporal na qual a tecnologia mecânica a vapor teria evoluído até níveis impossíveis (ou pelo menos improváveis), com automóveis, aviões e até mesmo robôs movidos a vapor já naquela época.</p>
			<h5 class="barlaw">Origem</h5>
			<p>Apesar de várias obras agora consideradas como fundadoras do gênero terem sido
			publicadas nos anos 1960 e 1970, o termo “steampunk” se originou no final dos anos
			1980 como uma variante de “cyberpunk”. As histórias do “steampunk” prototípico
			eram essencialmente contos cyberpunk ambientados no passado, usando tecnologia da era do vapor em vez da ubíqua cibernética do cyberpunk, mas mantendo as
			atitudes “punkistas” dessas histórias em relação a figuras de autoridade e à natureza
			humana. Originalmente, como o cyberpunk, o steampunk foi tipicamente distópico,
			geralmente com temas de noir e ficção pulp, como uma variante do cyberpunk. À
			medida que o gênero se desenvolveu veio a adotar mais um apelo utópico das sensibilidades dos romances de ficção científica do século XIX.</p>
			<p>A ficção steampunk se foca mais sobre a tecnologia real, teórica ou cinemática da era
			vitoriana (1837-1901), inclusive motores a vapor, aparelhos mecânicos, e a Máquina
			diferencial. Apesar de muitas obras steampunk serem ambientadas em cenários vitorianos, o gênero tem se expandido até para cenários medievais e geralmente passeia pelos domínios do terror e da fantasia. Várias sociedades secretas e teorias conspiratórias são geralmente apresentadas, e alguns steampunks incluem elementos
			significativos de fantasia. Além disso, há frequentemente influências lovecraftianas,
			ocultistas e góticas. O romance The Difference Engine de William Gibson e Bruce
			Sterling é creditado frequentemente como o principal divulgador do steampunk.</p>	
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit6/imagem2.PNG') }}" alt="guia">
                </figure>
            </div>
			<p><b>Origem: Wikipédia, a enciclopédia livre.</b></p>
			<h5 class="barlaw center-align">A T I V I D A D E S</h5>
			<p><b>1.</b> Utilizando os recursos e ferramentas aprendidas até então no curso, realize com auxilio
			de seu professor, uma composição Moda e Cenário Steampunk.</p>
        </div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
