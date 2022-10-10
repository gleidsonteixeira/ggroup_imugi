@extends('layouts.template')
@section('titulo','Unit 4 | Censura de Vídeo')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade4" data-etapa="censura_de_video">
			<h3 class="barlow">UNIT 4</h3>
			<h5 class="barlow upper">Aula 12 – Censura de Vídeo</h5>

			<h5>Mascarando Clips</h5>
			<p>
				Você pode aproveitar os potentes fluxos de trabalho de mascaramento e rastreamento
				do After Effects diretamente no Premiere Pro. As máscaras permitem que você defina uma
				área específica em um clipe que deseja desfocar, cobrir, destacar, aplicar efeitos ou corrigir.
				Você pode criar e modificar diferentes máscaras moldadas, como uma elipse ou um retângulo.
				Ou, você pode desenhar formas de Bezier de forma livre usando a ferramenta Caneta.
			</p><br>

			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit4/imagem_unit4_8.png') }}" alt="Wave Form do áudio">
				</figure>
			</div><br>
			<p>
				Você pode aplicar efeitos dentro ou fora da área mascarada. Um dos usos comuns do mascaramento
				é desfocar o rosto de uma pessoa para proteger sua identidade. Por exemplo, você
				pode ocultar o rosto de uma pessoa, aplicando um efeito de borrão ou um efeito Mosaico.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit4/imagem_unit4_9.png') }}" alt="Wave Form do áudio">
				</figure>
			</div><br>

			<p>
				Você também pode usar o mascaramento de maneiras mais criativas, como aplicar
				uma máscara para corrigir uma cor específica. Você pode usar uma seleção de máscara
				inversa para excluir a área mascarada das correções de cores aplicadas ao resto do
				clipe. Além disso, você pode adicionar múltiplas máscaras de forma com diferentes
				efeitos em diferentes áreas de um clipe.
			</p><br>
			<h5>Difusão ou ajuste de expansão de uma máscara.</h5>
			<p>
				O Premiere Pro fornece controles que permitem que você ajuste a difusão da máscara e a expansão
				diretamente no Monitor de Programa. A alça de posição da máscara permite que você
				mova as alças de difusão e expansão ao longo do contorno da máscara. Usando o identificador
				de posição da máscara, você pode colocar os controles de difusão e expansão em uma posição
				conveniente na máscara.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit4/imagem_unit4_10.png') }}" alt="Wave Form do áudio">
				</figure>
			</div><br>
			<p>
				Estes ajustes também podem ser realizados através dos parâmetros individuais no painel
				Effects Control.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit4/imagem_unit4_11.png') }}" alt="Wave Form do áudio">
				</figure>
			</div><br>
			<h5>Trackeamento de Máscara no Premiere Pro</h5>
			<p>
				Quando você aplica uma máscara a um objeto, o Premiere Pro pode permitir que a máscara siga
				automaticamente o objeto à medida que ele se move de um quadro para outro. Por exemplo,
				depois de desfocar um rosto usando uma máscara de forma, o Premiere Pro pode rastrear automaticamente
				os movimentos do rosto em máscaras de quadro para quadro à medida que a pessoa
				se move.
			</p>
			<p>
				Quando uma máscara é selecionada, o painel Controles de Efeito exibe controles para rastrear a
				máscara para frente ou para trás. Você pode escolher acompanhar a máscara de uma moldura de
				cada vez ou até o final da seqüência.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit4/imagem_unit4_12.png') }}" alt="Wave Form do áudio">
				</figure>
			</div><br>


			<h5 class="barlow center-align">A T I V I D A D E S</h5>
			<p style="margin-top: 16px"><b>1.</b>Censurar videos mascarando o rosto do personagem e alterando a voz
				usando o pitch shifter.</p>



		</div>
	</div>

</main>

<script>
	activeMenu();
</script>

@endsection