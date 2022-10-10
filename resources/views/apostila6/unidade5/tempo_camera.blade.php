@extends('layouts.template')
@section('titulo','Unit 5 |  Alteração do tempo e Camera Lenta')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade5" data-etapa="tempo_camera">
			<h3 class="barlow">UNIT 5</h3>
			<h5 class="barlow upper">Aula 17 – Alteração do tempo e Camera Lenta</h5>
			<h5>Speed Durat on</h5>
			<p>
				Alterar a velocidade e a duração de um ou mais clipes <br>
				Você pode alterar a velocidade e a duração de um ou mais clipes por vez. O Premiere Pro
				oferece várias maneiras de modificar a velocidade e a duração dos clipes. Você pode usar o
				comando Speed / Durat on, A ferramenta Rate Stretch ou o recurso Time Remapping.
			</p>
			<ol class="unidade_6_5">
					<li>No painel Timeline ou painel Project, selecione um ou mais clipes. Clique com Ctrl e clique para selecionar um grupo de clipes não contiguos no painel do Projeto.</li>
					<li>Clique com o botão direito do mouse sobre o clip na timeline e escolha Speed Durat on.</li>
			</ol>
			<div class="container">
					<figure>
							<img src="{{ asset('assets/img/video_edition/unit5/imagem_unit5_15.png') }}" alt="guia1">
					</figure>
			</div>
			<ul class="unidade_6_5">
				<li>Para alterar a duração sem alterar a velocidade dos clipes selecionados, clique no botão do grupo para que ele mostre um link quebrado.</li>
				<li> Para reproduzir vídeos em modo reverso, clique em Reverse Speed.</li>
				<li>Para manter o áudio em seu tom atual enquanto a velocidade ou a duração muda, clique em Maintain Audio Pitch.</li>
				<li>Para manter os clipes seguindo os clipes em mudança adjacentes a eles, clique em Ripple Edit, Shif ing Trailing Clips.</li>
				<li>Selecione a opção Time Interpolat on para mudanças de velocidade: Frame Sampling, Frame Blending ou Opt cal Flow.</li>
			</ul>
			<h5>Ferramenta Rate Stretch</h5>
			<p>
				A ferramenta Rate Stretch fornece um método rápido para alterar a duração de um clipe na Linha de tempo enquanto simultaneamente altera a velocidade do clipe para ajustar a duração.
			</p>
			<div class="container">
					<figure>
							<img src="{{ asset('assets/img/video_edition/unit5/imagem_unit5_16.png') }}" alt="guia1">
					</figure>
			</div>
			<p>
				Por exemplo, você pode ter uma lacuna em sua sequência de um comprimento específico e você deseja preencher essa lacuna com algumas mídias com alterações de velocidade. Talvez
				você não se preocupe tanto com a velocidade do vídeo, você só precisa se certificar de que preenche essa lacuna a qualquer velocidade que precisa ser. O Rate Stretch calcula o suficiente, permitindo que você est que ou comprima a velocidade para o percentual necessário.
			</p>
			<p>
				Você pode alterar a velocidade de um clipe para se ajustar a uma duração usando a ferramenta Rate Stretch
				<img style="display: inline-block;" src="{{ asset('assets/img/video_edition/unit5/imagem_unit5_17.png') }}" alt="guia">
				no Premiere Pro. Selecione a ferramenta Rate Stretch e arraste a borda de um clipe no painel Timeline.
			</p>
			<h5>Time Remapping</h5>
			<p>
					O Time Remapping permite que você altere a velocidade de um clipe usando quadros-chave.
					Isso significa uma parte de um clipe pode tocar em câmera lenta, enquanto outra parte do mesmo clipe é reproduzida rapidamente.
			</p>
			<p>
				Além de oferecer flexibilidade, o remapeamento de tempo de velocidade variável permite que você transite suavemente de uma velocidade para outra, seja de rápido para lento ou
				executando para frente ou de modo reverso.
			</p>
			<p>
				Na faixa do clip na timeline, expanda a trilha clicando no menu Timeline Display Settings
				<img style="display: inline-block;" src="{{ asset('assets/img/video_edition/unit5/imagem_unit5_18.png') }}" alt="">
				e escolha Expand All Tracks. (Certifique-se que a opção Show Video Keyframes, encontra-se marcada.
			</p>
				<p>
					Clique com o botão direito no rotulo Fx da faixa de clip e escolha a opção Time Rmapping > Speed.
				</p>
					<div class="container">
					<figure>
							<img src="{{ asset('assets/img/video_edition/unit5/imagem_unit5_19.png') }}" alt="guia1">
					</figure>
			</div>
			<p>
				Com esta opção selecionada, a linha branca através do clipe representa a velocidade de reprodução. Quanto mais alta estiver a linha, mais rápido o clipe será reproduzido.
			</p>
				<div class="container">
					<figure>
							<img src="{{ asset('assets/img/video_edition/unit5/imagem_unit5_20.png') }}" alt="guia1">
					</figure>
			</div>
			<h5>Twixtor</h5>
				<p>
					Embora apresente formas de reduzir a velocidade de clips criando efeitos de câmera lenta, o Adobe Premiere pode contar com a adição de um plugin que facilita a criação do efeito de Supercamera lenta.
					O Twixtor permite que você prolongue a duração de suas sequencias com resultados visualmente impressionantes. Para alcançar a sua qualidade de imagem inigualável, o Twixtor sintetiza novos quadros exclusivos por deformação e interpolação de quadros da sequência original empregando RE:Vision, a tecnologia de rastreamento patenteada da Vision
					que calcula o movimento para cada pixel individual.
				</p>
				<h5>ATIVIDADES</h5>
				<ol class="unidade_6_5">
						<li>Escolher trechos de um video e criar efeitos de câmera lenta para dar ênfase a cena.</li>
						<li>Criar efeito de camera fast forward para desenvolver aceleração para outro quadro da cena.</li>
				</ol>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
