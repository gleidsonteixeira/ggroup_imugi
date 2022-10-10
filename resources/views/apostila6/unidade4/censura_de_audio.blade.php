@extends('layouts.template')
@section('titulo','Unit 4 | Censura de Áudio')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade4" data-etapa="censura_de_audio">
			<h3 class="barlow">UNIT 4</h3>
			<h5 class="barlow upper">Aula 11 – Censura de Áudio</h5>

			<h5>Exibindo Audio Wave Form</h5>
			<p>
				Quando você abre um clipe no Source Monitor que possui apenas áudio (sem vídeo), Premiere
				Pro alterna automati camente a exibição para mostrar o Wave Form do áudio.
			</p><br>

			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit4/imagem_unit4_1.png') }}" alt="Wave Form do áudio">
				</figure>
			</div><br>
			<p>
				Quando você usa a opção de exibição Wave Form no Source Monitor ou no Program Monitor,
				você verá um controle de zoom extra do navegador para cada canal. Esses controles funcionam
				de forma semelhante ao controle de zoom do navegador na parte inferior do painel.
				Você pode redimensionar o Navegador vertical para ver as Wave Forms mais largas ou mais
				estreitas, o que pode vir a ser útil na hora da edição.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit4/imagem_unit4_2.png') }}" alt="Wave Form do áudio">
				</figure>
			</div><br>

			<p>
				Você pode optar por exibir as Audio Wave Forms para qualquer clipe que tenha áudio usando
				o clicando com o botão direito na tela do Source Monitor ou Program Monitor e escolhendo
				Display Mode – Audio Wave Form.
				Universal Counting Leader, Bars and Tone e Black Video
			</p><br>
			<h5>Criando Counting Leader</h5>
			<p>
				Se você planeja criar uma saída de filme de uma seqüência, você pode querer adicionar um
				Universal Counting Leader. Um Universal Counting Leader ajuda um projetista a verificar se o
				áudio e o vídeo estão funcionando corretamente e estão sincronizados.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit4/imagem_unit4_3.png') }}" alt="Wave Form do áudio">
				</figure>
			</div><br>
			<p>
				Você pode criar e personalizar um Universal Counting Leader para adicionar ao início de um
				projeto. O leader tem 11 segundos de duração.
			</p>
			<p>
				• Para inserir um Universal Counting Leader clique em File – New – Universal Counting
				Leader.
			</p>
			<p>
				• Na caixa de diálogo Configuração do Universal Counting Leader especifique as seguintes
				opções conforme necessário:
			</p>
			<p>
				− Wipe Color: Especifica uma cor para a área de limpeza circular de um segundo. <br>
				− Background Color: Especifica uma cor para a área atrás da cor da limpeza. <br>
				− Line Color: Especifica uma cor para as linhas horizontal e vertical. <br>
				− Target Color: Especifica uma cor para os círculos duplos em torno do numeral. <br>
				− Numeral Color: Especifica uma cor para os círculos duplos em torno do numeral. <br>
				− Clue Bip On Out: Especifica uma cor para o número da contagem regressiva. <br>
				− Clue Bip On 2: Reproduz um sinal sonoro na marca de dois segundos. <br>
				− Clue Bip At All Second Starts: Reproduz um sinal sonoro no início de cada segundo
				durante o líder.
			</p>
			<h5>Criando color Bars and Tone</h5>
			<p>
				Você pode criar um clipe de um segundo contendo barras de cores e um tom de 1 kHz, como
				referência para a calibração de equipamentos de áudio e vídeo.
				Clique em File – New – Bars and Tone.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit4/imagem_unit4_4.png') }}" alt="Wave Form do áudio">
				</figure>
			</div><br>
			<h5>Criando Black video</h5>
			<p>
				As áreas vazias de uma track aparecem em preto se nenhuma outra área de clipe visível esti -
				ver presente nas faixas de vídeo subjacentes.
				Se necessário, você também pode criar Black Videos para uso em qualquer lugar em uma seqüência.
				Clique em File – New – Black Video.
			</p>

			<h5>Menu Marker</h5>
			<p>
				Você pode facilmente adicionar marcadores de menu aos seus vídeos. Você pode adicionar
				marcadores de cena automaticamente ou manualmente. Premiere Elements cria um
				menu com base nos marcadores. O tipo de marcadores de menu que você adiciona à linha
				de tempo de exibição de especialistas depende de como você deseja que seus
				espectadores acessem o vídeo.
			</p>
			<h5>Mark Selection e Overwrite</h5>
			<p>
				Uma vez que você deseje marcar e selecionar um espaço vazio na sequencia após a exclusão
				de um trecho desta você pode selecionar este trecho para permitir uma inserção sobescrita
				do novo trecho.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit4/imagem_unit4_5.png') }}" alt="Wave Form do áudio">
				</figure>
			</div><br>
			<p>
				Para marcar um espaço em áreas vazias clique na área para selecionar o espaço e em seguida
				vá ao menu Markers – Mark Selection.
			</p>

			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit4/imagem_unit4_6.png') }}" alt="Wave Form do áudio">
				</figure>
			</div><br>
			<p>
				Uma vez selecionada a área que deseja inserir um clip, o melhor comando é o Overwrite que
				permite ajustar esse clip no trecho isoladamente sem que ele sobescreva as trilhas restantes.
				Para sobescrever uma área isolada com o comando mark selection usando um vídeo ou elemento
				armazenado no painel Project é necessário:
			</p>
			<p>
				1.Clicar com o botão direito do mouse sob o ícone do vídeo ou elemento
				no painel timeline.
			</p>
			<p>
				2.Escolher a opção Overwrite caso o trecho tenha sido previemente marcado.
				Ajustando Pitch de Áudio.
			</p>

			<p>
				O ajuste de Pitch é uma maneira útil de mudar o tom geral de um som. Ao alterar o tom, você
				pode alterar o nível de energia, idade aparente o mesmo gênero de um falante.
			</p>
			<p>
				1.No painel effects pesquise pelo efeito Pitch Shifter. <br>
				2.Arraste o efeito a trilha de áudio desejada. <br>
				3.No painel Effects Control, clique no botão Edit para escolher presets de ajustes
				ou realiza-los através dos controles Semi-tones e Cents.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit4/imagem_unit4_7.png') }}" alt="Wave Form do áudio">
				</figure>
			</div><br>

			<h5 class="barlow center-align">A T I V I D A D E S</h5>
			<p style="margin-top: 16px"><b>1.</b>Censurar videos alterando o trecho escolhido por um sinal de bip ou outro som.</p>
			


		</div>
	</div>

</main>

<script>
	activeMenu();
</script>

@endsection