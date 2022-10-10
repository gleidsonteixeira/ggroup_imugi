@extends('layouts.template')
@section('titulo','Unit 1 | Apresentação')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade1" data-etapa="apresentacao">
			<h3 class="barlow">UNIT 1</h3>
			<h5 class="barlow upper">Aula 1 – Apresentação IDE - Softwares e Hardwares</h5>
			
			<p>Pra conhecimento geral, vamos fazer um passeio pelas definições de softwares, a definição
				para todo e qualquer sistema de informação compilado por um processador. Porém, nos computadores
				e celures atuais essas tecnologias se distribuem em níveis, com prioridades diferentes.
				Precisamos entender esses componentes para nossa proposta de desenvolvimento, são eles:
			</p>
			<p>
				<b>S.O</b> (Sistema Operacional) do computador, ele opera os processos básicos e necessários
				para a instalação dos nossos sistemas de desenvolvimento;
				<b>ADI</b> (Ambiente de Desenvolvimento Integrado) ou <b>IDE (Integrated Development
				Environment).</b>
			</p>
			<p>
				Usaremos o sistema de aplicativos para desenvolvimento de objetos em ambiente 3D, o
				Cinema 4D. Logo, é bom saber que não irão encontrá-lo em qualquer computador. Para isso
				precisamos fazer algumas verificações, para saber se o seu computador é capaz de rodar o
				programa com segurança.
			</p>
			<p>
				<b>Verificando as configurações do computador</b>
			</p>
			<p>
				Clique sobre a pasta na sua barra de tarefas ou use o atalho “Window+E”;
			</p>
			<div>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/games_and_animation/unit1/imagem_unit1_01.png') }}" alt="guia1">
                </figure>
			</div>
			<p>
				Ao abrir a janela do explorer, clique em <b>“computador”</b> com o botão direito do mouse
				e escolha a opção <b>propriedades</b>. Serão mostradas várias informações disponíveis sobre
				o funcionamento da máquina como processadores, memória, placas de vídeo, sistemas
				operacionais, nota para o funcionamento do computador calculando isoladamente cada fator.
			</p>
			<div class="caixa2">
                <figure>
                    <img src="{{ asset('assets/img/games_and_animation/unit1/imagem_unit1_02.png') }}" alt="guia2">
                </figure>
			</div>
			<p>
				Agora clique em <b>“gerenciador de dispositivos”</b>, onde terá informações epecíficas sobre
				nosso computador, placas de vídeos, memória Ram, ativação e desativação de drivers.
			</p>
			<div class="caixa2">
                <figure>
                    <img  src="{{ asset('assets/img/games_and_animation/unit1/imagem_unit1_03.png') }}" alt="guia3">
                </figure>
			</div>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

@endsection
