@extends('layouts.template')
@section('titulo','Corel Draw | Aula 5 – Simetria')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade2" data-etapa="aula22">
			<h3 class="barlow">COREL DRAW</h3>
			 <div class="clear"></div>
            <h5 class="barlow">Aula 5 – Simetria</h5>
        <div class="clear"></div> 
        <div style="margin-top:16px">
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula04/imagem3.png') }}" alt="guia" style="width:50%!important;" >
                </figure>
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula04/imagem4.png') }}" alt="guia" style="width:50%!important;" >
                </figure>
        </div>
        
            <div style="margin-top:16px">
                <h5 class="barlow">Atividades</h5>
               <p>Cria uma estrutura simples utilizando as ferramentas de linha do interior de uma casa ou espaço desejado.
como na imagem abaixo.</p>
<p>Monte uma arte ou uma mandala utilizando os controles de simetria. </p>
<img src="{{ asset('assets/img/photoshop/corel/aula04/imagem5.png') }}" alt=""  style="width:60%;">
            </div>
            <div style="margin-top:26px;">
            
            <div class="metade esquerda">
                <p>Para iniciar antes de falar sobre texto.</p>
                <p>É importante falar que qualquer arte sem aplicação
de texto seja em impressos, web entre outros.</p>
<p>Diferenças entre o texto estatico e texto dinamico.</p>
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula05/imagem2.jpg') }}" alt="guia" style="width:95%!important;" >
                </figure>
                <p>O texto dinamico é o mais prati co para criar logoti -
pos e artes para cartazes e entre outros tipos</p>
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula05/imagem3.jpg') }}" alt="guia" style="width:95%!important;" >
                </figure>
                <p>Já o texto estati co conhecido com texto paragrafo
também é muito utilizado em diagramação de prdutos,
por ser mais pratico e permitir usa alinhamentos.
Segue alguns exemplos abaixo.</p>
               <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula05/imagem4.jpg') }}" alt="guia" style="width:95%!important;" >
                </figure>
            </div>
            <div class="metade direita">
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula05/imagem1.jpg') }}" alt="guia" style="width:95%!important;" >
                </figure>
                <p style="margin-top:16px;">Tipos de alinhamento utilizado com a caixa de texto estatico.</p>
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula05/imagem5.jpg') }}" alt="guia" style="width:95%!important;" >
                </figure>
            </div>
        </div>
    </div>
</main>

<script>
	activeMenu();
</script>

@endsection
