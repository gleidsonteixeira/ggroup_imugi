@extends('layouts.template')
@section('titulo','Unit 19 | Renderização - Propriedades')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade19" data-etapa="renderizacao_propriedades">
			<h3 class="barlow">UNIT 19</h3>
			<h5 class="barlow upper">Aula 1 – Renderização - Propriedades</h5>
			<p>
				Para nosso exercício, com ajuda do professor, exporte um vídeo para o photoshop e 
				depois exporte esse vídeo para uma pasta usando a opção de salvar cada frame como uma
				imagem separada, precisaremos dessa sequência para usar a animação como motion track,
				ela servirá de base para nosso trabalho. Caso não tenha um vídeo, use um vídeo do youtube,
				peça ajuda do professor para realizar o processo.
			</p>
			<p>
				Agora que conhecemos os formatos e sabemos porque eles devem ser respeitados, 
				vamos criar a projeção de um vídeo sobre a superfície de um objeto. Para esse processo 
				teremos que criar alguns objetos comuns, já que esse recurso é uma propriedade dos materiais
				e texturas, mas vamos explorar o uso de algumas ferramentas complexas para criação de
				objeto. Clicando no botão <b>floor</b> temos acesso a formas complexas, em novo escolha a opção
				<b>back bround</b>, feito isso crie um novo material e em suas configurações click na seta ao lado
				de texture e em seguida click em <b>load image</b>, usaremos uma sequência de imagens que pode
				ser extraída de um vídeo com o uso do photoshop. Selecione a primeira imagem, click sobre o
				caminho mostrado acima, isso lhe mostrará as configuração que vão permitir transformar sua
				imagem em uma animação. 
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit19/imagem_unit19_1.png') }}" alt="guia1">
				</figure>
			</div>
			<p>
				Click em <b>animation</b> e escolha a última opção, ele vai reconhecer as outras imagens mostrando
				a quantidade de imagens em números de frames.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit19/imagem_unit19_2.png') }}" alt="guia2">
				</figure>
			</div>
			<p>
				<b>Movie Frame Rate</b> permite calcular a taxa de formação de quadros, quantas imagens
				serão exibidas por segundo, para serem animadas click na aba <b>editor</b> e marque a opção <b>Animate
				Preview</b> e feche a caixa de diálogo. Em <b>material editor</b> arraste o material criado até o nome
				<b>background</b> no painel <b>object</b>, a partir daí o vídeo será exibido em sequência como plano de
				fundo. Quando mover seu marcador pela timeline será exibido o quadro respectivo ao quadro
				selecionado, isso vai permitir que você crie objetos e posteriormente os insira realizando animações sobre um vídeo, 
				como nesse caso o nosso produto será uma animação em motion
				track, precisamos configurar as saídas de vídeo para alterar o formato do arquivo para <b>AVImove</b>,
				esse é um dos recursos usados para implementar <b>3D</b> em um vídeo cinegrafado, permitindo a
				interação entre atores e objetos 3D que antes eram impossíveis.
			</p>
			<p><b>Definições de camera</b></p>
			<p>
				Podemos melhorar nossa projeção usando uma camera, pode ser inserida pela barra de
				atalhos, ela será inserida na posição atual do HUD, para ver a camera de fora click em <b>cameras</b>
				na janela <b>View</b>, em use <b>camera</b> click em <b>default</b>, isso permitirá a visão de sua camera como
				um objeto na área de edição 3D. Novamente em camera click em <b>use cameras</b> e selecione a
				camera disponível, passamos automaticamente para a visão da camera, clicando sobre ela no
				painel objetos as propriedades serão exibidas. 
			</p>
			<p>
				<b>Projection</b> permite controlar o ângulo de visão, se sua ideia envolve objetos 3D devemos
				usar <b>perspective</b>, que garante profundidade aos seus objetos.
			</p>
			<p>
				<b>Focal length</b> camufla o tipo de lente que está sendo usada pelo obturador, 
				note que novamente estamos lidando com as mesmas configurações que definirão o arquivo final, 
				mas dessa vez inserimos uma camera, isso faz com que o programa simule a captura da imagem como
				a feita no mundo real com o uso da ferramenta. Deixe essas configurações iguais nas suas
				configurações de render, nesse formato nossa camera é considerada <b>passiva</b>, ela só observa
				a ação do ponto de vista de uma terceira pessoa, quando a camera se comporta de maneira
				fixa no ambiente sem movimentações. Porém, nós podemos animar a camera, escolhendo
				ângulos diferentes e movimento impossíveis de se realizar por uma pessoa, esses movimento
				chamamos de <b>camera ativa</b>.
			</p>
			<p>
				Então para esse tipo de experimento devemos usar uma imagem capturada de maneira
				estática, sem movimentos de camera, usando a camera de maneira passiva.
			</p>
			<p><b>Camera ativa e passiva</b></p>
			<p>
				Camera e movimento se tornaram possíveis graças a miniaturização, que permitiu uma
				empunhadura mais prática da camera inserindo no cinema algumas regras.
				Quando a camera parece deslizar de um ponto a outro mostrando apenas uma área da imagem
				geral se chama <b>Traveling em close</b> com camera ativa, já que a mesma realiza um movimento.
				Quando a imagem é mostrada de forma crescente mostrando todo ambiente a seu redor, é
				um movimento de <b>Grua em panoramica</b>, quando a camera simula os movimentos do ponto
				de vista humano chamamos de <b>stetcan em primeira pessoa.</b> 
			</p>
			<p>
				Todos esses movimentos são realizados no mundo real com uso de equipamentos, 
				para reproduzí-los no mundo real procure por vídeos e imagens desses equipamentos que mostrem
				seu desempenho, mas lembre-se a única coisa que queremos é reproduzir movimentos de
				maneira orgânica no mundo virtual. 
			</p>
			<p><b>Quadro, panorâmica, plano aberto e close</b></p>
			<p>
				<b>Quadro</b> é cada registro da composição da imagem, seus planos, iluminações e sombras
				que a compõem. <b>Panorâmica</b> é um ângulo de camera que não faz foco em nenhum lugar da
				imagem mostrando seu plano geral e dando noções espaciais bem claras, usado para mostrar
				ambientes de maneira dinâmica, close e foco em um detalhe específico que deseja mostrar
				com uma maior riqueza de detalhes. Para criar uma boa cena devemos fazer uma composição
				que mostre aquilo que precisamos e usar todas não significa que seu trabalho ficará bom, 
				um filme grande e feito de pequenos cortes feitos no momento certo que garantem fluidez aos
				movimentos de camera. Os diretores fazem isso, em um vídeo decidem que camera deve ser
				usada, você também pode inserir várias cameras e usar sua timeline para criar uma interação
				entre elas. 
			</p>
			<p>
				Planejamento e execução bem combinados com modelagens e texturização detalhadas
				criam cenários e cenas impossíveis. 
			</p>
			<p><b>Taxa de formação de quadros, cinema, tv e animações</b></p>
			<p>
				Já vimos muito sobre taxa de formação de quadros ou FPS, mas precisamos dar algumas
				explicações complementares.
			</p>
			<p>Essa taxa muda de acordo com o meio onde seu vídeo vai ser exibido.</p>
			<ul>
				<li><p><b>Tv</b> - trabalha com uma taxa de formação de quadros de 24 a 29,9 FPS;</p></li>
				<li><p><b>Cinema</b> - as cameras usam 33 FPS;</p></li>
				<li><p><b>Smart tvs e smartphones </b>– suas telas usam uma taxa de formação de quadros que pode
					variar de 24 a 60 FPS já que nesses meios são reproduzidos diversos tipos de filmes, desde
					capturas de telefones celulares e smart canais como Youtube e Netflix, isso faz com que os
					dispositivos portáteis sejam bem mais versáteis em suportar formatos diferentes de tela.</p></li>
			</ul>
			<p>
				Caso tenha a pretensão de realizar uma animação quadro a quadro, saiba que deve usar uma
				sequência de 30 FPS, esse é o padrão <b>Disney</b> e também foi usado em <b>CupHead</b>, da uma maior
				fluidez na execução.
			</p>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

@endsection
