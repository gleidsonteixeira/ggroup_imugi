@extends('layouts.template')
@section('titulo','Unit 1 | Atividades')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade1" data-etapa="atividades">
			<h3 class="barlow">UNIT 1</h3>
			<h5 class="barlow upper">Aula 1 – Atividades</h5>
                <form method="post" class="metade">
					<p>1 - Criar um projeto e orgazinar arquivos de clip de video na pasta de origem.
						<input type="text" class="full left-align" placeholder="Atividade Prática" disabled="true">
					</p>
                    <p>2 - Reorganizar trechos de um video na ti meline usando as tecnicas
							de pre-corte apresentadas em aula.
						<input type="text" class="full left-align" placeholder="Atividade Prática" disabled="true"> 
					</p>
                </form>
        </div>
    </div>    
</main>

<script>
	activeMenu();
</script>

@endsection
