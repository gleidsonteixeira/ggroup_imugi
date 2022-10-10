@extends('layouts.template')
@section('titulo','Corel Draw | Aula 15 – Rastrear Bitmaps')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade2" data-etapa="aula32">
			<h3 class="barlow">COREL DRAW</h3>
			 <div class="clear"></div>
            <h5 class="barlow">Aula 15 – Rastrear Bitmaps </h5>
            <p>O CorelDRAW permite rastrear bitmaps para convertê-los em gráficos vetoriais totalmente editáveis e escaláveis.
É possível rastrear artefinal, fotos, esboços digitalizados ou logotipos e integrá-los facilmente aos seus trabalhos.</p>
            <p>Rastreie um bitmap em uma etapa utilizando o comando Rastreio rápido. Como alternativa, escolha um método
de rastreio adequado e um estilo predefinido e, então, use os controles do PowerTRACE® para visualizar e ajustar os resultados rastreados.</p>    
            
            <div style="margin-top:30px">
            <div class="metade esquerda">
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula15/imagem1.jpg') }}" alt="guia" style="width:55%!important;" >
                </figure>
            </div>
            <div class="metade direita">
                <p>O CorelDRAW oferece dois métodos para rastreio de bitmaps:</p>
                <p><strong> Rastreio por linha central</strong></p>
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula15/imagem2.jpg') }}" alt="guia">
                </figure>
                <p style="margin-top:10px"><strong> Rastreio por contorno</strong></p>
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula15/imagem3.jpg') }}" alt="guia">
                </figure>
                <p><strong> Rastreio por linha central</strong></p>
                <p><strong> Ilustração técnica: </strong> utlizada para rastrear ilustrações em preto e branco com linhas finas, claras.</p>
            </div>
            <div class="clear"></div>
            <div style="margin-top:16px">
            <p><strong> Desenho de linha: </strong> utilizada para rastrear esboços, rabiscos e ilustrações em preto e branco com linhas
grossas, evidentes.</p>
                <h5 class="barlow">Rastrear por contorno</h5>  
            </div>
            <div class="metade esquerda">
                <p><strong> Linha artística: </strong> utilizada para rastrear esboços e ilustrações em preto e branco.</p>
                <p><strong> Logotípo: </strong> utilizada para rastrear logotipos simples, com poucos detalhes e cores.</p>
                <p><strong> Logotipo detalhado: </strong> utilizada para rastrear logotipos que contêm detalhes sutis e muitas cores.</p>
                
            </div>
            <div class="metade direita">
            <p><strong> Clipart: </strong> utilizada para rastrear gráficos e simbolos prontos para uso, que podem variar de acordo com
                a quantidade de detalhes e número de cores.</p>
            <p><strong> Imagem de baixa qualidade: </strong> utilizada para rastrear fotos sem detalhes sutis ou 
            traçados leves sutis podem ser ignorados.</p>
            <p><strong> Imagem de alta qualidade: </strong> utilizada para rastrear fotos de alta qualidade, com alto nível de detalhamento
            e acabamento.</p>
            </div>
        </div>
    </div>
</main>

<script>
	activeMenu();
</script>

@endsection
