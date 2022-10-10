@extends('layouts.template')
@section('titulo','Unit 3 | Navegação')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade3" data-etapa="navegacao">
			<h3 class="barlow">UNIT 3</h3>
			<h5 class="barlow upper">Aula 1 – Navegação</h5>
			<p>
				Usando o mesmo objeto, vamos navegar livremente em torno dele. O programa traz na
				própria janela Views, botões para navegação, mover no eixo plano da tela, zoon int, zoon out,
				rotacionar e visões localizados no canto direito superior da tela.
			</p>
			<div>
                <figure class="caixa2">
                    <img src="{{ asset('assets/img/games_and_animation/unit3/imagem_unit3_06.png') }}" alt="guia6">
                </figure>
			</div>
			<p>
				Os mesmos comandos podem ser executados através de atalhos. Caso realize as ações
				através de atalhos, saiba que sua referência de navegação será o cursor do mouse. Na área de
				trabalho 3D pressione <b>Alt+Clic botão esquerdo</b> mouse e mova o mouse, você vai rotacionar o
				objeto. Segure o <b>Alt+Clic Scroller</b> e mova o mouse, você vai deslizar a tela livremente no plano
				do monitor. Rolando o scrollamound para frente zoon in, para traz zoon out. Visualizações
				permite trocar os modos de visão da tela, são elas: <b>perspective, top, right e front</b>, essas são
				posições de câmera para facilitar a edição.
			</p>
			<h5>Barras, Menus e atalhos</h5>
			<p>
				Mesmo já possuindo áreas de trabalho predeterminadas podemos também, criar nossas
				próprias áreas através da interação entre menus. Há uma forte presença de abas, facilitando a
				navegação entre as funções do programa. Clicando no menu Windows podemos colocar novas
				opções de abas em nossas janelas e podemos mudar entre as áreas de trabalho predefinidas.
			</p>
        </div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

@endsection
