@extends('layouts.template')
@section('titulo','Unit 21 | Camera passiva')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade21" data-etapa="camera_passiva">
			<h3 class="barlow">UNIT 21</h3>
			<h5 class="barlow upper">Aula 1 – Camera passiva - Camera e seus instrumentos</h5>
			<p>
				Existe um problema quando tentamos adicionar objetos 3D a um vídeo capturado por
				alguém, muitos movimentos pequenos e com diversas articulações do corpo são realizados,
				incluindo os movimentos mais suaves como a respiração, mudam o tempo todo os planos de
				fuga do seu vídeo. Programas como o cinema 4D possuem recursos como motion track permitindo 
				que o programa execute um reconhecimento a partir dos movimentos de cores, essas
				distorções são calculadas e atribuídas aos objetos modelados envolvidos na animação, 
				para essa ação navamente precisamos desmontar um vídeo em suas fotos básicas. 
			</p>
			<p><b>Tipos de câmera</b></p>
			<p>
				Click no menu <b>motion track</b> e em seguida na opção <b>full solver</b>, depois click no lugar em
				que você salvou a sequência de fotos extraída do vídeo. Selecione apenas a primeira foto e
				confirme, feito isso ele reconhecerá a sequência e a organizará criando uma pré leitura, mas
				vamos precisar melhorar esse recurso, criar automaticamente uma série de leituras na barra
				<b>object properties</b>.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit21/imagem_unit21_1.png') }}" alt="guia1">
				</figure>
			</div>
			<p>
				Click sobre o <b>motion track</b>, isso fará o painel de propriedades exibir as configurações do
				mesmo, para melhorar vá até a aba <b>reconstruction</b> e click em <b>run 3D solver</b>, o processo pode
				demorar um pouco, é recomendado não usar a máquina para evitar gargalos de processos.
				Feito isso podemos observar dezenas de pontos inseridos na tela, eles são usados para 
				fornecer ao software as variações de movimento, mas nosso plano não foi inserido ao ambiente
				do filme. Novamente no menu <b>motion track</b> click na opção <b>constraints</b> e selecione a opção
				<b>creat position constraints</b>, role a timeline e marque o ponto que você considera mais próximo
				de seguir o movimento do chão entre os pontos marcados na tela, feito isso o plano será inserido, mas estará fora de perpectiva.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit21/imagem_unit21_2.png') }}" alt="guia2">
				</figure>
			</div>
			<p>
				Para dar essa leitura ao computador, mais uma vez em <b>motion track</b>, 
				em <b>constraints</b> dessa vez click em <b>create planar constraint</b>, click em 3 pontos entre os indicados na tela que se
				aproximem do movimento de qualquer superfície plana, na grande maioria das vezes o chão
				é usado como referência, isso vai fornecer ao software informações sobre como a camera se
				movimenta, podendo realizar alterações na camera para compensar a alteração dos ângulos
				de filmagem. Feito isso, a inserção de objetos 3D é feita de maneira a respeitar os pontos de
				fuga e âgulos do vídeo.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit21/imagem_unit21_3.png') }}" alt="guia3">
				</figure>
			</div>
			<p><b>Lentes</b></p>
			<p>
				Com sua camera selecionada no painel objetos podemos configurar nossas propriedades
				de lentes, temos a disposição modelos presentes em telefones celulares até formatos de captura para reprodução em cinema. 
				Na opção <b>focus lentes</b> podemos dizer sobre qual objeto
				queremos que a camera realize o seu foco, usando a timeline podemos navegar com o foco
				pelos elementos do cenário e em <b>white balance</b> temos a opção para harmonizar a iluminação
				do vídeo: luz do dia, daylight para ambientes bem iluminados, flash, tungstenio, fluorencents
				entre outros, aumentando a fidelidade da renderização presente no ambiente simulando diversos tipos de exposição. 
				Porém, essas configurações são de lentes, logo são ligadas a captura, quanto mais próximo da iluminação do ambiente real, 
				melhor ficará o resultado final.
				Observe se está gravando a luz do sol ou sobre a luz fria de lâmpadas fluorescentes, isso vai
				ser extremante importante para <b>motion track</b> desempenhar seu papel com precisão.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit21/imagem_unit21_4.png') }}" alt="guia4">
				</figure>
			</div>
			<p><b>Zoom e foco</b></p>
			<p>
				Dois movimentos de camera que quando combinados podem dar resultados incríveis,
				um recurso largamente usado é aproximar fisicamente a camera em movimento e fazer um
				zoon digital em movimento contrário abrindo a imagem, isso provoca uma sensação aguda de
				vertigem. O mesmo também funciona de forma invertida, afaste a camera e feche de maneira
				digital o zoon, provocando a mesma reação com movimentos inversos, o ato de mover a camera
				para traz e para frente pode fazer ela realizar foco automático. Em outras estruturas faça ela
				aproximar e afastar do objeto, mas para isso descreva sempre o ponto de foco no painel propriedades, 
				essas opções estão disponíveis quando se usam as configurações automáticas de
				<b>motin track full</b> solver e também quando inserimos a camera como um objeto, é importante
				saber que para realizar movimentos de camera digital não podemos usar imagens ou vídeos como plano de fundo, 
				já que a camera precisará navegar no espaço disponível somente em um projeção 3D.
			</p>
			<p><b>Camadas e composição</b></p>
			<p>
				Crie materiais com texturas, aplique em planos e posicione dentro da camera cobrindo
				toda a imagem. Clicando sobre elas no painel objetos com o botão direito e aplique um <b>modificador cinema 4d display</b>, 
				no painel <b>object properties</b> habilite a opção <b>visibility</b> e reduza o
				número para menos de 20%, seu material será exibido entre o vídeo e camera, porém com
				visibilidade menor, sua textura funcionará como um filtro que pode ser usado em produtos
				como fotos ou vídeos.
			</p>
			<p><b>Camera fixa</b></p>
			<p>
				Quando aplicamos <b>full solver</b> nossa camera fica bloqueada para movimentos e todos passam a 
				ser realizados em relação aos objetos por meio de um <b>Maping</b>, reconhecendo as cores e
				seus movimentos o programa consegue calcular os movimentos realizados pela camera e aplica 
				esses movimentos a camera presente criada por ele. Logo, nosso movimento não envolve
				animações de camera, ela será tratada como um corpo estático e terá apenas a visualização do
				vídeo contido em <b>motion track</b>, só estará visível a visão de dentro da camera.
			</p>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

@endsection
