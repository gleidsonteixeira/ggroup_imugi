@extends('layouts.template')
@section('titulo','Unit 7 | After Effects CC - ANIMAÇÃO BÁSICA')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade7" data-etapa="animacao_basica">
			<h3 class="barlow">UNIT 7 - After Effects CC</h3>
			<h5 class="barlow upper">AULA 02 - ANIMAÇÃO BÁSICA</h5>

			<h5>Importando arquivos</h5>
			<p>
				Com o after effects é possível importar arquivos de origem para um projeto como base de itens
				de gravação e usá-los como origens de camada. Assim, o mesmo arquivo pode ser a origem
				para vários itens de gravação (cada um com suas próprias configurações de interpretação).
				O usuário pode importar vários tipos diferentes de arquivos, coleções de arquivos ou componentes 
				de arquivos como origens para artigos individuais de gravação, incluindo arquivos de
				imagem de movimento, arquivos de imagens estáticas, sequências de imagem estática e arquivos 
				de áudio. É possível também criar itens de gravação, como sólidos e pré-composições.
			</p>

			<p>
				É viável importar arquivos de mídia para o projeto usando a caixa de diálogo importar
				ou arrastando. Os itens importados aparecem no painel projeto.<br/>
				Para importar itens de gravação usando a caixa de diálogo importar: acesse arquivo > importar
				> selecione o arquivo que deseja importar e clique em ok.<br/>
				Para importar vários arquivos: acesse arquivo > importar > selecione os arquivos
				e clique em ok.
			</p>

			<p>
				Também é possível clicar duas vezes em uma área vazia do painel projeto, a caixa de diálogo
				importar irá abrir em seguida.
			</p>

			<h5>Propriedades das Layers</h5>

			<p>
				Cada layer possui propriedades que podem ser modificadas e animadas. O grupo básico de
				propriedades editáveis chama-se transform (que incluipropriedades como posição e opacidade).
			</p>

			<p>
				A layer ganha propriedades adicionais, se o usuário adicionar determinados recursos, por
				exemplo, adição de máscaras ou efeitos, ou conversão da camada em uma camada 3D.
			</p>

			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit7/imagem_unit7_5.png') }}" alt="guia1">
				</figure>
			</div>

			<p>
				Todas as propriedades da layer são temporais (podem mudar a layer ao longo do tempo), no
				entanto, algumas layers como opacidade também são espaciais (podem mover a layer ou os
				pixels na área de composição).
			</p>

			<p>
				É possível expandir o contorno da layer para exibir as propriedades da layer e alterar os valores
				das propriedades. Note que a maioria das propriedades possui um cronômetro. Qualquer pro-
				priedade que tenha um símbolo cronômetro pode ser animada. Vale lembrar que, se várias
				layers estiverem selecionadas e você alterar uma propriedade para uma layer, a propriedade
				será alterada para todas as layers selecionadas.
			</p>

			<h5>Animation, keyframes e expressions</h5>

			<p>
				Se pensarmos em animação, percebemos que basicamente animar é mudança e essa mudança 
				ocorre com o passar do tempo. Assim, o usuário anima uma layer ou um efeito em uma
				layer fazendo com que uma ou mais de suas propriedades mude com o tempo.
			</p>

			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit7/imagem_unit7_6.png') }}" alt="guia1">
				</figure>
			</div>

			<p>
				A. Cronômetro ativo B. Cronômetro inativo
			</p>

			<p>
				É possível animar as propriedades da layer usando keyframe, expressions ou ambos. Muitas
				predefinições de animação incluem keyframes e expressions para que o usuário possa simplesmente 
				aplicar a animação predefinida para a layer para alcançar um resultado animado
				complexo. O after effects trabalha com keyframes e expressions em dois modos básicos: modo
				barra de layer (modo padrão, que mostra as layers como barras de duração, com keyframes e
				expressions alinhadas verticalmente com suas propriedades na timeline) ou modo editor de
				gráfico (mostra keyframes e resultados de expressions em gráficos de velocidade).
			</p>

			<h5>Keyframe</h5>

			<p>
				Os keyframes são usados para definir parâmetros para movimento, efeitos, áudio e muitas outras 
				propriedades, alterando-os ao longo do tempo. Um keyframe marca um ponto no tempo
				onde o usuário especifica um valor para uma ou mais propriedades da layer. Geralmente, ao 
				usar keyframes para criar uma alteração ao longo do tempo, usa-se pelo menos dois keyframes 
				(um para o estado do início da alteração e um para o novo estado no final da alteração).
				Os valores entre os keyframes são interpolados.
			</p>

			<p>
				Vale lembrar que quando o símbolo do cronômetro está inativo para uma propriedade, a
				propriedade não possui keyframes. Ao alterar o valor de propriedade da layer enquanto o cronômetro 
				estiver inativo, esse valor permanece o mesmo durante a duração da layer. Quando
				o cronômetro está ativo para uma propriedade específica, o after irá definir automaticamente
				ou alterar um keyframe para a propriedade no momento atual sempre que o usuário altera o
				valor da propriedade.
			</p>

			<p>
				Ao desativar o cronômetro , todos os keyframes para essa propriedade da layer são excluídos
				e o valor constante para essa propriedade se torna o valor no momento atual.
			</p>

			<h5>Precompose</h5>

			<p>
				Para agrupar layers que já estão em uma composição é preciso pré-compor essas layers. O
				precompose coloca essas layers em uma nova composição, que substituias layers na composição 
				original. A nova composição pré-composta torna-se a fonte de uma única layer na
				composição original e aparece no painel projeto, ficando disponível para renderização ou uso
				em qualquer outra composição. É possível pré-compor composições adicionando uma composição 
				existente a outra. Pré-compor uma única layer é útil para adicionar propriedades de
				transformação a uma layer e influenciar a ordem em que os elementos de uma composição
				são renderizados.
			
			</p>

			<h5 class="barlow center-align">A T I V I D A D E S</h5>
            <p style="margin-top: 16px"><b>1.</b> Crie um efeito de chuva que reaja na cena, fazendo com que a mesma ao cair no chão
			produza respingos e quando colidir com objetos da cena possa criar sub partículas.</p>

		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
