@extends('layouts.template')
@section('titulo','Unit 13 | After Effects CC - PARTÍCULAS')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade13" data-etapa="particulas">
			<h3 class="barlow">UNIT 13 - After Effects CC</h3>
			<h5 class="barlow upper">AULA 08, 09 E 10 - PARTÍCULAS</h5>

			<p>
				Particulas no after effects fazem parte de um grupo específico de efeitos do after que geram
				uma simulação de várias elementos que se movem de acordo com diversas configurações que
				cada tipo de partículas possui.
			</p>

			<h5>Particle Systems II e CC particle World</h5>

			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit13/imagem_1_unit13.png') }}" alt="guia1">
				</figure>
			</div>

			<p>
				• Birth Rate: significa a quantidade de partículas que são geradas por segundos.<br/>
				• Longevity: a duração de tempo que a particula surge e desaparece para cada partícula emitida pelo birth rate.<br/>
				• Producer: as configurações que permitem que você mova ou aumente a área de produção das partículas.<br/>
				• Physics: configurações que definem o comportamento das partículas. Desde como ela é emitida, 
					a velocidade que possui, o peso gerado pela gravidade ou resistência do ar e etc.<br/>
				• Particle: define formato, cores, mudança de formas e interações com vídeo.<br/>
				• Random Seed: modifica as configurações base da particula para que outras partículas
					com o valor de seed diferentes, criam reações diferentes.
			</p>
			
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit13/imagem_2_unit13.png') }}" alt="guia1">
				</figure>
			</div>
			
			<p>
				O CC Particle World possui, em grande parte de suas configurações, as mesmas propriedades
				do Particle System II, porém ele adiciona interações das partículas com superficies graças a
				propriedade do Grid & Guides, por isso você encontrará os mesmo atributos que o System II,
				mas teremos configurações de espaço 3d, interação de ângulo, chão e direção para a gravidade 
				entre outros parâmetros que permitem que essas partículas tenham uma melhor interação
				com o ambiente.
			</p>

			<h5>Efeito Particle Playground</h5>
			
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit13/imagem_3_unit13.png') }}" alt="guia1">
				</figure>
			</div>
			
			<p>
				O efeito Particle Playground permite que você anime um grande número de objetos semelhantes 
				de forma independente, como um enxame de abelhas ou uma tempestade de neve.
				Use o canhão para criar um fiuxo de partículas a partir de um ponto específico da layer ou use
				a grade para gerar um plano de partículas. O Layer Exploder e Particle Exploder podem criar
				novas partículas a partir de layers ou partículas existentes. É possível usar qualquer combinação 
				de geradores de partículas na mesma layer.
			</p>

			<p>
				Use o Cannon, Grid, Layer Exploder para controlar a forma de gerar partículas e o Layer Map
				para especificar uma layer no lugar de cada particula. Para infiuenciar o comportamento geral
				das partículas use Gravity, Repel e Wall. E o Mapper irá servir para infiuenciar as propriedades
				das partículas.
			</p>

			<h5>Trapcode Particular</h5>

			<p>
				Trapcode Particular é um emissor de partículas com movimentos orgânicos e otimizados com
				diversas customizações e parâmetros para que suas partículas atendam as necessidades da
				indústria de VFX e Motion Graphics. Trata-se do mais refinado pacote de efeitos para partículas 
				onde se pode explorar e refinar as possibilidades de se trabalhar com partículas dentro do
				after effects.
			</p>

			<h5 class="barlow center-align">A T I V I D A D E S</h5>
            <p style="margin-top: 16px"><b>Aula 8:</b> Compor um cenário com imagens e inserir efeitos de partículas.</p>
            <p style="margin-top: 16px"><b>Aula 9 e 10:</b> Criar animação com partículas de trapcode e inserir em uma
composição de imagens ou vídeo.</p>

		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
