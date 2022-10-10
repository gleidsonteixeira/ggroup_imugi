@extends('layouts.template')
@section('titulo','Corel Draw | Aula 2 – Recursos básicos do Corel Draw')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade2" data-etapa="aula19">
			<h3 class="barlow">COREL DRAW</h3>
			 <div class="clear"></div>
            <h5 class="barlow">Aula 2 – Recursos básicos do Corel Draw</h5>
            
            <div class="umquarto">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/corel/aula02/imagem1.png') }}" alt="guia" style="width:25%!important;" >
                </figure>
            </div>
            <div class="metade esquerda">
                <div style="margin-top:16px">
                <h5 class="barlow">Caixa de ferramentas: <span class="dark-font"> utilizada para criar artes, desenhos e detalhes de vetores. </span></h5>
                <h5 class="barlow"> <span class="dark-font"> Diferença entre </span> Bitmap <span class="dark-font"> e </span> Vetor </span></h5>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/corel/aula02/imagem2.png') }}" alt="guia" >
                </figure>
                <p>Quando se trabalhar com programas vetoriais como CorelDRAW, Adobe Illustrator, InkScape entre
outros eles trabalham com vetores e são uti lizados para fazer logos a identi dade visual de artes de
uma loja ou empresa por não perder a qualidade.</p>
                <p>Na imagem acima vocês podem notar que ao trabalhar com bitmap ele perde a qualidade como na
foto de cima.</p>
<p>Os vetores não perdem proporção ou modifica sua forma pois são feitos por medidas matemáticas e
seus detalhes podem tanto reduzir quanto aumentar sem perda de qualidade nos seus trabalhos e
serviços gráficos.</p>
               
            </div>
        </div>
        
        <div class="clear"></div> 
        <p style="margin-top:16px;">Controles básicos ao utilizar a ferramenta seleção</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/corel/aula02/imagem3.png') }}" alt="guia">
                </figure>
                <h5 class="barlow">Modos de edição dos objetos, transformação e rotação.</h5>
                <p>A direita seleção com transformação ao dar um click no objeto com a ferramenta mover.</p>
                <p>A esquerda após estar com o objetos selecionado ao clicar novamente no mesmo muda
para os controles de rotação.</p>
<h5 class="barlow">Nota: <span class="dark-font"> você também pode editar os objetos pelo painel de propriedades quando o mesmo
esti ver selecionado. </span> </h5>
<h5 class="barlow">Paleta de Cores</h5>
<figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/corel/aula02/imagem4.png') }}" alt="guia">
                </figure>
            </div>
            <div style="margin-top:16px;">
            <h5 class="barlow">Selecionando objetos</h5>
            <p>Para selecionar um objeto, clique nele. Mantenha pressionada a tecla Alt para selecionar um objeto posicionado
atrás de outro ou mantenha pressionada a tecla Ctrl para selecionar um objeto de um grupo.</p>
<figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/corel/aula02/imagem5.png') }}" alt="guia">
                </figure>
                <p>Observe que a engrenagem a esquerda não está selecionada e ao lado temos 8 quadrados indicando que
o objeto que nesse caso é a esfera está selecionada.</p>
<p>Para selecionar vários objetos, mantenha pressionada a tecla Shift e clique em cada objeto, ou arraste para
formar uma marca de seleção em torno dos objetos.</p>
<figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/corel/aula02/imagem6.png') }}" alt="guia">
                </figure>
            </div>
            <div style="margin-top:15px;">
            <h5 class="barlow">Transformar objetos</h5>
            <div class="umquarto">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/corel/aula02/imagem7.png') }}" alt="guia">
                </figure>
            </div>
            <div class="metade esquerda">
                <div style="margin-top:16px">
                   <p>Para mover um objeto, arraste-o. Para restringir o movimento ao eixo
horizontal ou vertical, mantenha pressionada a tecla Ctrl enquanto
arrasta o mouse.</p>
<p>Para deslocar o objeto, pressione as teclas de seta com
o mesmo selecionado.</p>
<p>Para escalar o objeto, arraste uma das alças de dimensionamento
de canto. Para escalá-lo a parti r do centro, mantenha pressionada
a tecla Shift .</p>
                </div>
            </div>  
            <div class="clear"></div>      
            <div style="margin-top:15px;">
            <p>Para esticar o objeto, arraste uma das alças de esticamento. Para esticá-lo a partir do centro, mantenha
pressionada a tecla Shift .</p>
            <div class="umquarto">
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula02/imagem8.png') }}" alt="guia" style="width:90%;">
                </figure>
            </div>
            <div class="metade esquerda">
                <div style="margin-top:16px">
                   <p>As alças de esticamento superior e inferior esticam o objeto verticalmente.</p>
                   <p>As alças de esticamento direita e esquerda esticam a seleção horizontalmente.</p>
                </div>
                <p>Para ativar as alças de rotação e inclinação de um objeto, clique na sua alça central.</p>
            </div>           
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
