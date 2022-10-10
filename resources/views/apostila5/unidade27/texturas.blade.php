@extends('layouts.template')
@section('titulo','Unit 27 | Texturas')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade27" data-etapa="texturas">
			<h3 class="barlow">UNIT 27</h3>
			<h5 class="barlow upper">Texturas - Colorização, texturização e maping de material</h5>
			<p>
				Para aplicar e editar texturas é necessário realizar todo o mapeamento descrito na aula
				anterior, continuaremos no <b>layout BP – UV editor</b>, vamos aprender a navegar na nossa textura
				para otimizar os compontentes integrados, nessa fase é importante que já sejamos capazes de
				entender que existem objetos compostos por várias formas e são esses detalhes que devemos
				deixar mais fáceis de manusear e texturizar no objeto. Procure no google uma imagem UV grid
				e faça o donwload, usaremos essa textura para mapear melhor nossas áreas e vamos entender um 
				pouco melhor esse processo, para isso modele um martelo composto por cabo e cabeça,
				cada parte deve ser feita sepadamente para que possamos ter um maior grau de detalhismo
				no trabalho;
			</p>
			<p>
				Ao converter seu objeto para modo editável, ele cria uma malha usável, mas iremos edi-
				tar essa malha. Com seu martelo modelado e pronto, click em <b>layout</b> e vamos para o <b>BP –Uv
				editor</b>, no painel <b>texture</b> click no menu <b>UV mesh</b>, isso mostrará todas as subdivisões usadas
				no processo de modelagem de maneira desorganizada.
			</p>

			<h5>Projeção</h5>

			<p>
				Para melhorar nossa projeção vamos realizar seleções de maneira a separar em partes as
				texturas, na barra de atalhos click no modo de edição linhas, você pode usar as ferramentas de
				seleção de <b>select geometric</b>, uma sugestão é a ferramenta <b>selecte loop</b> que faz seleções em
				seções inteiras permitindo selecionar linhas que dão a volta no objeto. Agora você vai produzir
				linhas de seleção desnecessárias, então vá a ferramenta <b>Live selection</b> na barra de atalhos, e
				para deselecionar uma linha click sobre ela com o botão <b>“CTRL”</b> pressionado quando achar
				que todas as suas superfícies foram separadas.
			</p>

			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit27/imagem_unit27_1.png') }}" alt="guia1">
				</figure>
			</div>

			<p>
				Com as linhas selecionadas em nosso objeto vamos posicioná-lo, para usar esse recurso
				de maneira mais precisa, use uma camera em posição frontal e vá até <b>UV maping</b>, em <b>projection</b> 
				click em frontal, depois vá até o parâmetro <b>relax UV</b> e nele use um dos dois sistemas
				disponíveis, <b>LSCM</b> ou <b>HBS</b>. Faça testes com os dois até conseguir uma boa projeção da sua
				malha sobre a <b>textura</b> que você criou, até agora não temos uma imagem, no painel texture,
				click em <b>save texture</b>, salve sua textura na pasta e depois disso click novamente no menu file,
				dessa vez click em <b>marge file</b> para trazermos a <b>UV grid</b> que baixamos anterirormente para ser
				nossa textura de teste, salve mais uma vez esse passo é muito importante.
			</p>

			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit27/imagem_unit27_2.png') }}" alt="guia1">
				</figure>
			</div>
			
			<h5>Tipos de projeção</h5>

			<p>
				No painel <b>projections</b> temos diversos tipos de simulações de projeção ou sugestões de envelopamento,
				 mostrando como a textura vai ser distribuída na superfície do objeto. Podemos
				editar para otimizar o espaço e falicitar a edição posterior desse arquivo, observe que na barra
				de atalhos temos novos modos ligados inteiramente a textura.
			</p>

			<p>
				Click sobre o botão <b>Uv polygons</b>, isso fará sua malha editável no painel de texturas, com
				a ferramenta <b>live selections</b> click sobre uma das faces da malha projetada na janela texture
				criando uma seleção, mas para selecionar todas as faces conectadas click em <b>select geometry</b>,
				em seguida click em <b>select connected</b>, isso fará todas as faces conectadas a sua primeira
				seleção serem incluídas, permitindo assim que você reposicione sua projeção sobre a textura.
				Todas as ferramentas de interação são funcionais, podemos mover, rodar e redimensionar
				respeitando os limites de dimensões da textura.
			</p>

			<h5>Materiais</h5>

			<p>
				Ainda não vimos nossa textura aplicada ao objeto, estávamos preparando ela e assim
				como todas as outras texturas, para fazer parte de um objeto a textura precisa de um 
				material, no layout <b>BP-Uv editor</b>, esse painel fica embaixo, ao lado de <b>objetcs</b> click em <b>material</b>,
				em seguida crie um novo material na aba <b>color</b> que vai ser exibido em <b>attributes</b>. Click sobre a
				opção texture e insira a textura que você salvou.
			</p>

			<p>
				Isso ainda não fará sua textura aparecer, vá para o parâmetro <b>assign</b> e para a textura ser
				aplicada retorne ao painel <b>objetos</b> e arraste para dentro da opção <b>assigment</b> os objetos onde
				deseja essa textura aplicada, novamente no painel <b>objects</b> click sobre a tag do <b>material</b> 
				atribuído ao seu martelo, em <b>attributs</b>, vá para o parâmetro <b>projetcion</b> e click em <b>UVW Mapping</b>, isso
				fará com que a distribuição de sua textura respeite os mapeamentos realizados nos passos
				anteriores, tornando a edição da textura finalmente visível no material.
			</p>

			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit27/imagem_unit27_3.png') }}" alt="guia1">
				</figure>
			</div>

			<p>
				Faça alterações na sua malha disposta sobre a textura com o intuito de melhorar sua
				distribuição, o <b>UV grid</b> vai te dar boas referências sobre quanta distorção a imagem que você
				usar como textura vai sofrer, altere tamanhos e reposicione de maneira que todas as malha da
				projeção fiquem posicionadas sobre sua textura, faça uma textura para cada parte separada.
			</p>

			<p>
				No painel de texturas no menu <b>textura</b>, click e selecione as texturas que deseja aplicar
				para cada parte do seu objeto, em cada parte específica faça uma textura de madeira para o
				cabo e uma de ferro para parte da cabeça do martelo.
			</p>

			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit27/imagem_unit27_4.png') }}" alt="guia1">
				</figure>
			</div>
			
			<h5>Atribuições</h5>

			<p>
				Agora com os objetos mapeados e texturas prontas, vamos baixar os nossas texturas que
				servirão de base para pintura, procure por metal galvanizado para parte da cabeça e madeira
				para o cabo. Mudaremos nosso layout para <b>BP – 3D paint</b>, e vamos as configurações.
			</p>

			<p>
				Click no painel de acesso rápido sobre o botão <b>paint setup wizard</b>, na primera caixa de
				diálogo ele pergunta quais objetos deve mapear o corpo, click em <b>next</b> no próximo painel e
				desmarque a opção para recalcular o <b>Uv maping</b>, já fizemos isso manualmente novamente
				click em <b>next</b> e em <b>close</b>, depois seguida click sobre o botão da barra de atalho <b>3D mode paint</b>
				no painel <b>object settings</b>, click em mode e escolha a opção <b>tool</b> para poder ter acesso as configurações 
				do pincel como tamanho e outros. A baixo desse painel click na opção color, nela
				vá até o parâmetro <b>wallppaper</b> da seta <b>dropdown</b>, click sobre <b>load from disck</b> e vá até onde
				salvou suas texturas para pintura. Selecione a cabeça do martelo, mude a <b>blending</b> que está
				em <b>multi play</b> para <b>normal</b> e a partir de agora já pode pintar sobre o objeto usando a textura,
				você pode criar camadas e usar imagens diferentes configuradas no seu pincel, esse processo
				vai permitir adicionar cores e materias diferentes ao mesmo processo, dominando isso somos
				capazes de desenvolver trabalhos mais artísticos e orgânicos, já que o uso do pincel retira toda
				artificialidade dos modos de projeção. Pode parecer confuso a princípio, mas os resultados
				serão fantásticos.
			</p>

		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

@endsection
