@extends('layouts.template')
@section('titulo','Corel Draw | Aula 14 – Páginas e layout')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade2" data-etapa="aula31">
			<h3 class="barlow">COREL DRAW</h3>
			 <div class="clear"></div>
            <h5 class="barlow">Aula 14 – Páginas e layout </h5>
                <div style="margin-top:16px">
            <div class="metade esquerda">
                <p><strong> Pixels: </strong> permite a visualização do vetores atraves de pixels para se ter
uma idéia melhor quando o vetor for para web ou ser convertido em bitmap.</p>
<p><strong> Visualização de tela cheia: </strong> Utilizado para exibir as artes semelhante ao
processo de slides para apresentações e melhor resultado.</p>
<p>Ao usar a Exibição do classificador de páginas é possível gerenciar as
páginas durante a visualização do seu conteúdo.</p>
<p>A Exibição do classificador de páginas permite alterar a ordem das
páginas e também copiar, adicionar, renomear e excluir páginas.</p>
            </div>
            <div class="metade direita">
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula14/imagem1.jpg') }}" alt="guia" style="width:95%!important;" >
                </figure>
            </div>
            <div class="clear"></div>
            <div style="margin-top:16px">
            <p>Como podem notar nas imagens ao lado temos duas páginas em A4 para fazer o folder e caso seja necessário
você pode alterar todas as páginas simultaneamente ou somente a página desejada uti lizando os botões.</p>
<p><img src="{{ asset('assets/img/photoshop/corel/aula14/imagem2.jpg') }}" alt="" style="display:inline; width:40px;"> Todas as páginas ou
<img src="{{ asset('assets/img/photoshop/corel/aula14/imagem3.jpg') }}" alt="" style="display:inline; width:40px;">
Página atual.
</p>
                <h5 class="barlow">Atividades</h5>
               <p>Monte um documento separando todos os seus trabalhos feitos em páginas, númere e organize e salve como um arquivo .cdr</p>
               <p>Exporte o arquivo .cdr para PDFs para criar um portfolio.</p>
              
            </div>
        </div>
    </div>
</main>

<script>
	activeMenu();
</script>

@endsection
