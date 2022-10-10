@extends('layouts.template')
@section('titulo','Unit 36 | Componentes')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade36" data-etapa="componentes">
			<h3 class="barlow">UNIT 36</h3>
			<h5 class="barlow upper">Componentes</h5>
            <p>Configurações de componentes comuns</p>
				<p style="margin-top:20px;">
                Vamos ver algumas configurações de componentes padrão, fundamentais no Unity.
                </p>
                <p>Selecionando um novo GameObject , vemos esta imagem no Inspector
mostrando o componente Transform:</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit36/imagem02.png') }}" alt="guia1" style="width:45%;">
</figure>
   <p style="margin-top:20px;">Cada GameObject no Unity tem um Componente de <strong> transformação/Transform </strong></p>
   <p>. Este componente define a posição/<strong> position </strong>, rotação/ <strong> rotation </strong> e escala/ <strong> scale </strong> do GameObject
no mundo do jogo e <strong> Scene view </strong>.</p>        
    <p>. Este componente não pode ser removido.</p>
    <p>O componente <strong>Transform</strong> também ativa o conceito de paternidade/<strong> parenting </strong>, o que permite
que você torne um GameObject filho/<strong>child</strong> de outro GameObject e controle sua posição por
meio do componente Transform do pai/parent. Esta é uma parte fundamental do trabalho
com GameObjects no Unity.</p>
<p>Por padrão, cada nova cena começa com um GameObject chamado <strong> Main Camera </strong>. Este GameObject
está configurado para atuar como a câmera principal em seu jogo. Ele contém o
componente Transform, Camera componente, e um Audio Listener para captar áudio em sua
aplicação.</p>
<h5 class="barlow upper">Adicionando Componentes</h5>   
<p>Você pode adicionar compone ntes ao GameObject selecionado por meio do menu Componentes.
Vamos tentar isso agora adicionando um Rigidbody para o GameObject vazio
que acabamos de criar. Selecione-o e escolha <strong> Component->Physics->Rigidbody </strong> rígido
no menu. Ao fazer isso, você verá as propriedades do Rigidbody aparecer no Inspetor.</p>
<p>Na aba Game , você vai clicar no botão Play enquanto o GameObject vazio ainda estiver
selecionado. Teste e observe como o Rigidbody adicionou funcionalidade ao GameObject
vazio. Você vai ver que a posição Y da transformação do GameObject começa a diminuir.
Isso ocorre porque o mecanismo de física no Unity está fazendo com que o GameObject
caia sob a gravidade.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit36/imagem03.png') }}" alt="guia1" style="width:45%;">
</figure>
<p style="margin-top:20px;">Outra opção é usar o <strong>Component Browser</strong> , que pode ser ativado com o botão
<strong> Add Component </strong> no Inspector do objeto.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit36/imagem04.png') }}" alt="guia1" style="width:35%;">
</figure>

<h5 class="barlow upper" style="margin-top:20px;">O navegador de componentes</h5>  
<p>O browser permite navegar pelos componentes por categoria, também possui uma caixa
de pesquisa que pode ser usada para localizar componentes por nome.</p>
<p>Você pode anexar qualquer número ou combinação de componentes a um único
GameObject. Alguns componentes funcionam melhor em combinação com outros. Por exemplo,
o Rigidbody funciona com qualquer Collider.</p>
<p>O Rigidbody controla a Transform através do NVIDIA PhysX motor de física, e o Colisor permite
que o corpo rígido colida e interaja com outros Colisores, em colisões entre personagem
e plataforma , por exemplo.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit36/imagem05.png') }}" alt="guia1" style="width:35%;">
</figure>
<p style="margin-top:20px;">Um dos grandes aspectos dos componentes é a <strong> flexibilidade </strong>. Quando você anexa um
Componente a um GameObject, existem diferentes valores ou Propriedades no Componente
que podem ser ajustados no editor durante a construção de um jogo, ou até mesmo
por scripts. Sempre fique atento as <strong> propriedades </strong> e funções de cada componente.</p>
<h5 class="barlow upper" style="margin-top:20px;">Comandos do menu de contexto do componente</h5>
<p>O menu de contexto de um componente possui vários comandos úteis.</p>  
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit36/imagem06.png') }}" alt="guia1" style="width:35%;">
</figure>
<p style="margin-top:20px;">Os mesmos comandos também estão disponíveis no ícone <strong>"engrenagem" </strong> no canto superior
direito do painel do componente no inspector.</p>
<p><strong> Reset</strong>: Este comando restaura os valores que as propriedades do componente tinham antes
da sessão de edição mais recente.</p>
<p><strong>Remove Component</strong>: Um comando Remover Componente está disponível para os casos em
que você não precisa mais do componente anexado ao GameObject. Observe que existem
algumas combinações de componentes que dependem uns dos outros. Você verá uma mensagem
de aviso se tentar remover componentes dos quais outros dependem.</p>
<p><strong> Move up /down</strong>: Use os comandos Mover para cima e Mover para baixo para reorganizar
a ordem dos componentes de um GameObject no Inspetor.</p>
<p><strong>Dica</strong>: como alternativa, clique e arraste o nome do componente para cima ou para baixo
na janela Inspetor e solte-o.</p>
<p><strong> Copy/Paste</strong>: O comando Copy/copiar componente armazena o tipo e as configurações de
propriedade atuais de um componente. Eles podem então ser colados em outro componente
do mesmo tipo com Paste/Colar valores do componente . Você também pode criar um novo
componente com os valores copiados em um objeto usando Paste Component as New.</p>

  </div>
</div>

</main>

<script>
	activeMenu();
</script>

@endsection
