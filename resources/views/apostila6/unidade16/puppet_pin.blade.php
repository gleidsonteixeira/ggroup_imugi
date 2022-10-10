@extends('layouts.template')
@section('titulo','Unit 16 | PUPPET PIN')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade16" data-etapa="puppet_pin">
			<h3 class="barlow">UNIT 16</h3>
			<h5 class="barlow upper">AULA 16 - PUPPET PIN</h5>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit16/imagem_unit16_1.png') }}" alt="guia1">
				</figure>
			</div><br>
			<p>
				Use a ferramenta Puppet Pin para adicionar rapidamente movimentos naturais a imagens rasterizadas
				e gráficos vetoriais, incluindo imagens estáticas, formas e caracteres de texto.
			</p>
			<p>
				O efeito Puppet funciona deformando parte de uma imagem de acordo com as posições
				dos pinos inseridos e movidos. Os pinos definem quais partes da imagem devem mover,
				que partes devem permanecer rígidas e que partes devem estar na frente quando as partes
				são sobrepostas.
			</p>



			<p><b style="color: #7dc242;">Puppet Pin tool</b>: use essa ferramenta para inserir e mover os pinos (Deform Pins).</p>




			<p><b style="color: #7dc242;">Puppet Overlap tool</b>: use essa ferramenta para inserir pinos de sobreposição, indicando que
				partes de uma imagem devem aparecer na frente de outras quando a distorção faz com que as
				partes da imagem fiquem sobrepostas.
			</p>
			<p><b style="color: #7dc242;">Puppet Starch tool</b>
				: use essa ferramenta para inserir pinos de rigidez, que endurecem partes
				da imagem para que fiquem menos distorcidas.
			</p>
			<p>
				Ao inserir o primeiro pino, a área dentro de um contorno é dividida automaticamente em uma
				malha de triângulos. Um contorno é visível somente quando o efeito marionete foi aplicado e
				o ponteiro da Puppet Pin Tool estiver sobre a área que o contorno define. Cada parte da malha
				é também associada aos pixels da imagem, por isso os pixels movem-se com a malha. Ao mover
				um ou mais pinos de deformação, a malha muda a forma para acomodar esse movimento,
				mantendo a malha total o mais rígida possível. O resultado é que um movimento em uma
				parte da imagem causa movimento natural, tipo vida em outras partes da imagem.
			</p>
			<p>
				Por exemplo, se você inserir pinos de deformação nos pés e mãos de uma pessoa e, então,
				mover uma das mãos para fazê-la acenar, esse movimento no braço anexado é grande, mas o
				movimento na cintura é pequeno, exatamente como no mundo real.
			</p>
			<p>
				Se um único pino de deformação animado for selecionado, seus quadros-chave Posição são
				visíveis no painel composição e no painel layer como um motion path. Você pode trabalhar
				com esses motions path como trabalha com outros caminhos de movimento, incluindo confi -
				gurar keyframe para deslocar no tempo. É possível ter várias malhas em uma layer. Ter várias
				malhas em uma layer é útil para deformar várias partes de uma imagem individualmente –
				como caracteres de texto – bem como para deformar várias instâncias da mesma parte de
				uma imagem, cada uma com deformação diferentes.
			</p>
			<p>
				A malha original, sem distorção é calculada no quadro atual no tempo em que você aplica o
				efeito. A malha não muda para acomodar o movimento em uma camada com base em gravação
				de movimento, nem a malha é atualizada se você substituir um item de gravação de
				origem da layer.
			</p>

			<h5 class="barlow center-align">A T I V I D A D E S</h5>
			<p style="margin-top: 16px"><b>01 - </b>Preparar personagem de pintura digital no photoshop, subdividir em camadas e reconstruir
				cenário para importar e iniciar o rigging com o Puppet Pin, dando foco em movimento
				de objetos, cabelos e olhos do personagem.</p>


		</div>
	</div>

</main>

<script>
	activeMenu();
</script>

@endsection