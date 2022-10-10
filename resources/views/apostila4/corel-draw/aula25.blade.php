@extends('layouts.template')
@section('titulo','Corel Draw | Aula 8 – Modelar Objetos')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade2" data-etapa="aula25">
			<h3 class="barlow">COREL DRAW</h3>
			 <div class="clear"></div>
            <h5 class="barlow">Aula 8 – Modelar Objetos </h5>
            <p>Ao utilizar a ferramenta de forma, você tem diversos modos de editar as linhas dos objetos desde as formas
básicas até as criadas com as ferraemntas de linha, tornando simples o processo de edição e personalização de suas artes ou trabalhos gráficos.</p>
            <p>Abaixo segue o painel detalhado com o nome do itens para editar suas artes.</p>
                <figure style="margin-bottom:40px;">
                    <img src="{{ asset('assets/img/photoshop/corel/aula08/imagem01.jpg') }}" alt="guia" style="width:95%!important;" >
                </figure>
                <figure style="margin-bottom:40px;">
                    <img src="{{ asset('assets/img/photoshop/corel/aula08/imagem02.jpg') }}" alt="guia" style="width:85%!important;" >
                </figure>
            <div style="margin-top:16px">
                <h5 class="barlow">Atividade</h5>
               <p>Monte uma arte utilizando os deformadores, para uma loja de esportes, floricultura ou tema disponibilizado
pelo professor(a).</p>
               <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula08/imagem03.jpg') }}" alt="guia" style="width:65%!important; margin: 0 auto;" >
                </figure>
            </div>
            <div style="margin-top:16px">
               <p>Os simbolos são utilizados constantemente em projetos de planta baixa, design de interiores até mesmo
mapas entre outros.</p>
<p>Ao utilizar fazer um desenho ou caso esteja montando um projeto de identidade visual para uma empresa
você pode acabar mudando de idéia durante a criação ou pior o projeto não foi aprovado e terá que refazer
tudo novamente, ao utilizar os simbolos você otimiza e pode editar todos os objetos do projeto simultaneamente.</p>
<p>Veja a seguir na imagem abaixo alguns exemplos e aplicações de simbolos.</p>
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula08/imagem04.jpg') }}" alt="guia" style="width:45%!important; margin: 0 auto;" >
                </figure>
            </div>
            <div class="clear"></div>
            <div style="margin-top:26px;">
            <div class="metade esquerda">
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula08/imagem05.jpg') }}" alt="guia" style="width:95%!important;" >
                </figure>
            </div>
            <div class="metade direita">
              <p>Painel de simbolos para melhor visualização,
aplicação e edição.</p>
<p>No painel ao lado temos a logo SurFlow
dentro do painel de simbolos o que facilita
tanto a exportação quanto a aplicação do
item nas artes gráfi cas ou itens para aplicação
de mídia.</p>
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula08/imagem06.jpg') }}" alt="guia" style="width:70%!important;" >
                </figure>
            </div>
            </div>
        </div>
    </div>
</main>

<script>
	activeMenu();
</script>

@endsection
