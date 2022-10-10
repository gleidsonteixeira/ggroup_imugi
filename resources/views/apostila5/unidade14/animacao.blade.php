@extends('layouts.template')
@section('titulo','Unit 14 | Animação')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade14" data-etapa="animacao">
			<h3 class="barlow">UNIT 14</h3>
			<h5 class="barlow upper">Aula 1 – Animação</h5>
			<div class="container">
				<p>
					Até agora não aplicamos cores nem texturas aos nossos projetos, então temos material
					suficiente para praticar, se necessário crie novos modelos.
				</p>
				<p>
					Vamos criar um pequeno texto, pode ser seu nome. No menu principal, selecione o menu
					<b>mograph</b>, nele poderemos criar objetos de maneira mais prática, no submenu que surge cique
					sobre a opção <b>Motext</b>, feito isso será inserido um texto na sua área 3D, para editá-lo clique
					sobre o painel de propriedades que será exibido quando você clicar sobre o texto.
				</p>
				<div>
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit14/imagem_unit14_1.png') }}" alt="guia1">
					</figure>
				</div>
				<p>
					Na opção <b>object</b>, susbtitua o texto presente pelo texto que você pretende editar. A baixo
					fica a opção <b>fonts</b>, escolha um nova fonte a seu gosto, em seguida clique na opção <b>caps</b>, dentro desta aba teremos opções para 
					configurar nosso corpo de texto, a primeira opção é <b>teps start</b> e se 
					refere a parte frontal do objeto no campo reservado a definição de faces.
				</p>
				<div>
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit14/imagem_unit14_2.png') }}" alt="guia2">
					</figure>
				</div>
				<p>
					Na opção start clique na dropdonw e marque a opção fillet cap, isso vai suavizar suas bordas. 
					Em steps digite 5 e serão realizados pequenos cortes laterais no objeto, podemos alterar
					esse número conforme nossa necessidade, para mais ou para menos, realize alterações na sua
					composição.
				</p>
				<div>
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit14/imagem_unit14_3.png') }}" alt="guia3">
					</figure>
				</div>
				<p><b>Texturas e materiais</b></p>
				<p>
					Com seu texto pronto, clique duas vezes sobre o painel abaixo da sua timeline criando um
					novo material, dê um clique duplo sobre o ícone que vai surgir após a primeira ação. Entrando,
					no painel de materiais surgirá uma nova janela que vai permitir desde colorir até aplicar uma
					textura ou imagem como base para isso.
				</p>
				<div>
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit14/imagem_unit14_4.png') }}" alt="guia4">
					</figure>
				</div>
				<p>
					Na opção <b>color</b> clique sobre a caixa com 3 pontos na opção texturas, isso vai permitir que
					você escolha de seu banco de imagens uma textura para ser aplicada ao objeto, feito isso vai
					surgir uma pequena seta na opção <b>textura</b>, clique sobre ela e escolha a opção <b>copy shades</b>,
					copiando as configurações de textura.
				</p>
				<div>
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit14/imagem_unit14_5.png') }}" alt="guia5">
					</figure>
				</div>
				<p>
					Logo em seguida clique sobre a opção bump e marque o pequeno quadrado ao lado dessa
					opção, se não habilitar esse recurso as alterações feitas nessa aba não serão aplicadas.
				</p>
				<div>
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit14/imagem_unit14_6.png') }}" alt="guia6">
					</figure>
				</div>
				<p>
					Clique na seta logo após a opção textura, dessa vez clique e <b>past shader</b>, isso vai colar as
					propriedades da sua textura para esse painel, feito isso as opções inativas do painel irão se
					ativar em <b>strengh</b>. Podemos controlar a deformação do objeto em relação a textura, permitindo 
					que o objeto para o qual atribuir essa textura será deformado conforme as necessidades
					da textura para aumentar o realismo. Por exemplo, em uma superfície enferrujada não são só
					as cores que mundam, a superfície onde essa textura for aplicada também sofrerá alterações
					relativas a composição da textura configuradas aqui, para melhor exposição da textura e 
					interação com o mesh deixe seu <b>strengh</b> em 200%, terminadas as configurações pode fechar a
					janela de suas texturas.
				</p>
				<div>
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit14/imagem_unit14_7.png') }}" alt="guia7">
					</figure>
				</div>
				<p><b>Aplicação de texturas</b></p>
				<p>
					Quando criamos o material podemos configurar detalhadamente como será a exposição
					do mesmo, agora vamos mostrar em quais objetos queremos essa textura aplicada. Podemos
					realizar o processo de 2 formas, clicando sobre o material na aba materials e arrastando sobre
					o objeto que desejamos aplicar a textura. Podemos também levar o material até o painel objetos 
					soltando sobre a referência relativa ao nosso mesh no painel, falicitando assim a edição
					das texturas em ambientes com muitos materiais, assim todas as configurações feitas em materials 
					serão aplicadas a forma como textura.
				</p>
				<div>
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit14/imagem_unit14_8.png') }}" alt="guia8">
					</figure>
				</div>
				<p><b>Rasterização</b></p>
				<p>
					Na visualização, durante a edição o computador realiza um processo onde ele só vai
					mostrar algumas das configurações aplicadas ao objeto, para ver todos os detalhes precisamos
					renderizar, e para isso configuramos nosso painel de render. Clique sobre a opção de configurações 
					de render na barra de acesso rápido, na janela que se abre vamos habilitar algumas
					funcões ainda não exploradas. Clique na opção <b>anti-alising</b> e nas opções da aba clique na caixa
					<b>dropdonw</b> e escolha a opção <b>best</b>.
				</p>
				<p>
					Agora em efeitos vamos habilitar <b>ambiente occlusion</b> novamente, na opção efeitos habilite a opção <b>global Illumination</b>, 
					fazendo isso podemos clicar no render e observar que agora
					o processo é realizado com uma riqueza muito maior de detalhes aplicando todas as configurações do material, isso é a 
					texturização do objeto.
				</p>
				<p><b>Uv Maping</b></p>
				<p>
					Permite que você configure a disposição da imagem sobre o objeto 3D, esse recurso permite eliminar 
					as linhas de encontro entre o começo e o final da textura, problema muito comum em situações onde 
					usamos imagens pequenas, por isso devemos estar atentos ao tamanho das imagens que usamos como texturas. 
					Isso também pode ser necessário com texturas
					grandes, para isso clique sobre a descrição do material no seu painel de objetos, as opções
					mostradas permitem a reconfiguração da distribuição do seu material sobre o objeto na opção
					<b>tag</b>, nesse painel clique sobre a opção <b>projection</b> e escolha a opção cubo, ela vai destribuir
					melhor nossa textura sobre a superfície. Na opção <b>offset</b> movemos a textura na horizontal,
					acrescentando ou diminuido os valores dispostos na forma de potencial ou mantendo o click
					pressionado e movendo para cima ou para baixo o cursor do mouse. Em <b>offset</b> movemos a
					textura lateralmente em length, mexemos no tamanho geral da imagem teclando U para horizontal e 
					V para vertical, aplique texturas aos objetos modelados em nossas aulas anteriores.
				</p>
				<p><b>Criação de materiais</b></p>
				<p>
					O primeiro passo que realizamos foi a criação do material, isso garante ao computador
					recursos para melhorar a qualidade do render, explore imagens de diversas origens como texturas e observe 
					como esses materias alteram o formato dos seus objetos proporcionando um
					maior grau de realismo. 
				</p>
				<p>
					Procure por texturas que explorem esses recursos como ferrugem, casca de árvore, rochas,
					grãos e tecidos. Crie vários tipos de materiais e monte uma palheta deixando a sua disposição
					uma gama de materiais pré estabelecidos, salve um arquivo só com materiais para que você
					possa usar esse arquivo para texturizar vários objetos. Para fazer isso basta clicar sobre o
					menu <b>file</b> com arquivos que você criou com todos os seus materiais aberto e clique em <b>merge</b>,
					isso vai permitir que você traga para esse arquivo objetos de outros aquivos simplesmente
					localizando eles em seu computador, clicando sobre ele e em seguida na opção <b>abrir</b>, seu objeto 
					será importado para o arquivo atual e poderá usar de todas os materiais que criou para
					texturizar suas formas.
				</p>
			</div>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

@endsection
