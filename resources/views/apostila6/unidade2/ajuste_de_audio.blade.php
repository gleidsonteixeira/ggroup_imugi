@extends('layouts.template')
@section('titulo','Unit 2 | Ajuste de audio')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade2" data-etapa="ajuste_de_audio">
			<h3 class="barlow">UNIT 2</h3>
			<h5 class="barlow upper">Aula 06 - Ajuste de audio</h5>

			<h5>Monitorar o nível de volume da Timeline, ou Program Monitor</h5>

			<p>
				Você pode monitorar níveis de áudio para clipes no painel Timeline. Caso o painel Audio Master 
				Meters não esteja aberto, vá em Window – Audio Meters. Clicando no Program Monitor ou
				na Timeline, pressione a tecla de Espaço ou clique no botão Play do Program Monitor.
			</p>

			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit2/imagem_unit2_45.png') }}" alt="guia1">
				</figure>
			</div>

			<h5>Ajuste de Gain e Volume</h5>

			<p>
				Gain Geralmente se refere ao nível ou volume de entrada em clipes. Volume Geralmente refere-se 
				ao nível de saída ou ao volume em sequencia de clipes ou faixas. Você pode definir
				níveis de ganho ou volume para tornar os níveis mais consistentes entre faixas ou clipes ou
				para alterar o volume de uma faixa ou clipe. Tenha em mente, no entanto, que se o nível de um
				clipe de áudio estiver muito baixo quando digitalizado, aumentar o ganho ou o volume pode
				simplesmente amplificar o ruído. Para obter melhores resultados, siga a prática padrão de gravação 
				ou digitalização de áudio de origem no melhor nível; esta prática permite concentrar-se
				no ajuste de níveis de trilha. Use o commando Audio Gain para ajustar o nível de ganho para
				um ou mais clipes selecionados. O comando Audio Gain é independente das configurações
				de nível de saída nos painéis Audio Track Mixer e Timeline, mas seu valor é combinado com o
				nível da faixa para a mixagem final.
			</p>

			<p>
				Você pode ajustar o volume de um clip de uma sequencia nos painéis Effects Controls ou
				painéis de Timeline. No painel Effects Controls, você usa os mesmos métodos para ajustar o
				volume que você usa para definir outras opções de efeito. Muitas vezes, é mais simples ajustar
				o efeito Volume no painel Timeline.
			</p>

			<p>
				Você controla os níveis de saída da trilha no Mixer de faixas de áudio ou no painel Timeline.
				Embora você controle níveis de faixa principalmente através do Mixer de faixas de áudio, você
				também pode fazer isso usando quadros-chave de trilha de áudio no painel Timeline. Como os
				quadros-chave de trilha representam as configurações de automação do mixer, eles afetam a
				saída apenas se a automação estiver definida como Read, Touch, ou Latch.
			</p>

			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit2/imagem_unit2_46.png') }}" alt="guia1">
				</figure>
			</div>

			<h5>Normalizar um ou mais clipes</h5>

			<p>
				Você pode ajustar o ganho de um clipe para que todas as instancias desse clip adicionadas 
				ao painel timeline tenham o mesmo nível de ganho. Para isso selecione o clip principal
				no painel Project.
			</p>

			<p>
				Para ajustar o ganho de uma instancia do clip já na sequencia, selcione o clip no painel timeline.
			</p>

			<p>
				Para selecionar mais que um clip no painel Project ou na timeline, use a tecla shift para
				permitir a seleção agrupada.
			</p>

			<p>
				Após selecionado(s) o(s) clip(s), vá em Clip – Audio Options – Audio Gain. A caixa de diálogo 
				se abre e o Premiere Pro calcula automaticamente o pico de amplitude dos clips
				selecionados, relatando o valor calculado no campo Amplitude field, Uma vez calculado,
				este valor é armazenado para a seleção. Você pode usar esse valor como um guia para o
				valor para ajustar o ganho.
			</p>

			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit2/imagem_unit2_47.png') }}" alt="guia1">
				</figure>
			</div>

			<p>
				<b>Set Gain To</b> - O valor padrão é 0,0 dB. Esta opção permite que o usuário defina o ganho para
				um valor específico. Este valor é sempre atualizado para o ganho atual, mesmo quando a opção 
				não está selecionada e o valor aparece esvaziado. Por exemplo, quando a segunda opção,
				Adjust Gain By, é usada para ajustar o ganho em -1 dB, o valor Set Gain To também atualizará
				para mostrar o nível de ganho resultante. Quando a caixa de diálogo Audio Gain. é aberta para
				clipes selecionados que já tiveram seu ganho ajustado, o valor de ganho atual é exibido neste
				campo.
			</p>

			<p>
				<b>Adjust Gain By</b> - O valor padrão é 0,0 dB. Esta opção permite ao usuário ajustar o ganho em
				+ ou - dB. A inserção de um valor diferente de zero neste campo atualiza automaticamente o
				valor Definir ganhos para dB para refl etir o valor de ganho real aplicado ao clipe.
			</p>

			<p>
				<b>Normalize All Peaks To</b> - O valor padrão é 0,0 dB. Os usuários podem definir isso em qualquer
				valor abaixo de 0,0 dB. Por exemplo, um usuário pode querer permitir espaço livre e configurar
				isso para -3 dB. Esta opção de normalização ajusta a amplitude de pico máxima nos clipes selecionados 
				para o valor especificado pelo usuário. Por exemplo, um clipe com uma amplitude
				de pico de -6 dB terá seu ganho ajustado em +6 dB se Normalize Max Peak To for ajustado para
				0,0 dB. Para uma seleção de múltiplos clipes, o clipe com o pico máximo será ajustado ao valor
				especificado pelo usuário, enquanto os outros clipes serão ajustados pela mesma quantidade,
				preservando suas diferenças de ganho relativo. Por exemplo, suponha que o grampo tenha
				um pico de -6 dB, e o grampo dois tenha um pico de -3 dB. Uma vez que o grampo dois tem
				o maior valor de pico, ele será ajustado em +3 dB para aumentá-lo para o ganho especificado
				pelo usuário de 0,0 dB, enquanto o grampo também será ajustado em +3 dB, aumentando-o
				para -3 dB e Preservando o desvio de ganhos entre os dois clipes na seleção.
			</p>

			<p>
				<b>Normalize All Peaks To</b> - O valor padrão é 0,0 dB. Esta opção permite ao usuário ajustar o
				ganho em + ou - dB. A inserção de um valor diferente de zero neste campo atualiza automaticamente 
				o valor Definir ganhos para dB
			</p>

			<h5>Reproduzir ou não o áudio ao arrastar</h5>

			<p>
				Por padrão o Premiere Pro reproduz o áudio ao arrastarmos o playhead pela timeline de uma
				sequence que contém áudio. Você poderá alterar essa opção para um modo silencioso.
				Para isso devemos:
			</p>

			<p>
				1.Clicar em Edit – Preferences – Audio.<br/>
				2.Marcar ou desmarcar a opção Play Audio While Scrubbing, dependendo do desejado.<br/>
				3.Clicar em OK
			</p>

			<p>
				Ou podemos ativar ou desativar essa opção combinando as teclas SHIFT+S.<br/>
				Ajustar o volume da trilha usando keyframes
			</p>

			<h5>Rubber Band</h5>

			<p>
				Você pode ajustar o nível de volume de um clipe ou uma faixa completa ou ter a mudança de
				volume ao longo do tempo usando o Rubber Band de uma faixa de áudio do painel Timeline.
				Porém, para visualizar e editar a Rubber Band, devemos primeiramente expandir as trilhas da
				sequence e exibir os componentes necessários para essa edição.
				Para isso devemos:
			</p>

			<p>
				1. Clicar no ícone 
				<img style="display: inline-block;" src="{{ asset('assets/img/video_edition/unit2/imagem_unit2_49.png') }}" alt="guia"> 
				Timeline Display Settings. Escolher a opção Expand All Tracks.
			</p>

			<p>
				2. Novamente, clicando no botão Timeline Display Settings, marcar as opções abaixo:<br/>

				<b>A</b>.Show Clip Keyframes - Permite animar efeitos de áudio para um clipe, incluindo Volume Level.<br/>
				<b>B</b>.Show Clip Volume - Permite alterar apenas o nível de volume de um clipe.<br/>
				<b>C</b>.Show Track Keyframes - Permite animar muitos efeitos de trilha de áudio, incluindo Volume, Mute e Balance.<br/>
				<b>D</b>.Show Track Volume - Permite animar efeitos de áudio para um clipe, incluindo Volume Level.
			</p>

			<p>
				3. Se uma das configurações de Keyframes for selecionada, siga um destes procedimentos:<br/>

				<b>A</b>.Se as opções Show Clip Keyframes e Show Track Keyframes estiverem selecionadas,
				escolha Volume – Level através do menu que surge ao clicar com o botão direito no
				cabeçalho da trilha de áudio do clip (O ajuste de volume do áudio vem habilitada por
				padrão).<br/>

				<div class="container">
					<figure>
						<img src="{{ asset('assets/img/video_edition/unit2/imagem_unit2_52.png') }}" alt="guia1">
					</figure>
				</div>

			</p>

			<p>
				<b>B</b>.Use tanto a Selection Tool, quanto a Pen Tool para mover o nível de volume da rubber
				band para cima (Aumentar volume) ou para baixo (Diminuir volume).
			</p>


			<h5>Ajustar volume no painel Effect Controls</h5>
		
			<p>
				1.Selecione a trilha de áudio na sequência.<br/>
				2.Clique no triangulo próximo ao grupo de Volume para expandir o efeito.<br/>

				<div class="container">
					<figure>
						<img src="{{ asset('assets/img/video_edition/unit2/imagem_unit2_53.png') }}" alt="guia1">
					</figure>
				</div>

			</p>
			<p>
				3.Faça o seguinte:<br/>

				<b>A</b>.Entre com valores negativos para reduzir o volume e positivos para aumentar o volume. 
					O valor 0.0 representa o volume original do vídeo sem ajuste.<br/>

				<b>B</b>.Ou clique no triangulo próximo ao controle Level para expandir o efeito. Use o contro-
					le deslizante para ajustar o volume. Um keyframe é automaticamente criado no inicio da
					timeline da trilha no painel Effect controls.<br/>

				<div class="container">
					<figure>
						<img src="{{ asset('assets/img/video_edition/unit2/imagem_unit2_54.png') }}" alt="guia1">
					</figure>
				</div>

				<div class="container">
					<figure>
						<img src="{{ asset('assets/img/video_edition/unit2/imagem_unit2_55.png') }}" alt="guia1">
					</figure>
				</div>
			</p>

			<p>
				4.Para modificar constantemente o volume ao longo do tempo, mova o indicador de tempo 
				e ajuste o volume através do gráfico de nível no painel Effect Controls.
				<div class="container">
					<figure>
						<img src="{{ asset('assets/img/video_edition/unit2/imagem_unit2_56.png') }}" alt="guia1">
					</figure>
				</div>
			</p>

			<p>
				5.Cada vez que você move o indicador de tempo e realiza um ajuste, um novo keyframe
				é criado. Você também pode ajustar a interpolação entre os keyframes, editando-os no
				gráficos de keyframe.
			</p>

			<h5>Áudio Transitions</h5>

			<p>
				Você pode aplicar efeitos Crossfades para transições de áudio entre clips. Um fade da áudio
				é semelhante à transição de vídeo. Para um efeito crossfade, você adiciona uma transição de
				áudio entre dois clipes de áudio adjacentes na mesma faixa. Para fazer um Fade In ou Fade out
				você adiciona uma transição de crossfade para qualquer extremidade de um único clipe. Premiere 
				Pro inclui três tipos de crossfade: Constant Gain, Constant Power e Exponecncial Fade.
			</p>

			<h5>Transição de áudio padrão</h5>

			<p>
				Você pode aplicar efeitos Crossfades para transições de áudio entre clips. Um fade da áudio
				é semelhante à transição de vídeo. Para um efeito crossfade, você adiciona uma transição de
				áudio entre dois clipes de áudio adjacentes na mesma faixa. Para fazer um Fade In ou Fade out
				você adiciona uma transição de crossfade para qualquer extremidade de um único clipe. Pre-
				miere Pro inclui três tipos de crossfade: Constant Gain, Constant Power e Exponecncial Fade.
			</p>

			<h5>Crossfade entre clips de áudio</h5>

			<p>
				Para adicionar um Crossfade entre os clips de áudio, primeiramente certifique-se de que os
				dois clipes de áudio estejam adjacentes e que ambos os clipes sejam aparados.
			</p>

			<p>
				Então faça o seguinte:
			</p>

			<p>
				Para adicionar a transição de áudio padrão, mova o indicador de tempo atual para o
				ponto de edição entre os clipes e escolha Sequence - Apply Audio Transition.
				Fade in ou fade out
			</p>

			<p>
				Primeiramente, certifique-se que os tracks de áudio estejam expandidos no painel Timeline. 
				Se necessário, clique no botão Expand All Tracks.<br/>
				Então faça o seguinte:
			</p>

			<p>
				Para aplicar um efeito de fade in no clip de áudio, arraste uma transição de áudio do
				painel Effects para a Timeline de modo que encaixe no ponto In do clip de áudio.
			</p>

			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit2/imagem_unit2_57.png') }}" alt="guia1">
				</figure>
			</div>

			<p>
				Você também pode selecionar a transição aplicada no painel Timeline. Então, no painel
				Effect Controls escolha em Alignment, a opção Start at Cut.
			</p>

			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit2/imagem_unit2_58.png') }}" alt="guia1">
				</figure>
			</div>

			<p>
				Para aplicar um efeito de fade out no clip de áudio, arraste uma transição de áudio do
				painel Effects para a Timeline de modo que encaixe no ponto Out do clip de áudio.
				Você também pode selecionar a transição aplicada no painel Timeline. Então, no painel
				Effect Controls escolha em Alignment, a opção End at Cut.
			</p>

			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit2/imagem_unit2_59.png') }}" alt="guia1">
				</figure>
			</div>



			<h5 class="barlow center-align">A T I V I D A D E S</h5>
            <p style="margin-top: 16px"><b>1.</b> Editar o audio original de um vídeo alterando a trilha musical em trechos específicos..</p>

		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
