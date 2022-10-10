@extends('layouts.template')
@section('titulo','Corel Draw | Aula 10 – Preenchimentos e transparências')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade2" data-etapa="aula27">
			<h3 class="barlow">COREL DRAW</h3>
			 <div class="clear"></div>
            <h5 class="barlow">Aula 10 – Preenchimentos e transparências </h5>
                <figure style="margin-bottom:40px;">
                    <img src="{{ asset('assets/img/photoshop/corel/aula10/imagem1.jpg') }}" alt="guia" style="width:75%!important; margin: 0 auto;" >
                </figure>
                <p><strong>Preenchimentos PostScript: </strong> Um preenchimento de textura que é criado com a linguagem PostScript. Algumas
texturas são bastante complexas e imprimir objetos grandes que contenham preenchimentos de textura
PostScript ou para atualizá-los na tela pode levar algum tempo. Dependendo do modo de exibição em uso,
as letras "PS" podem aparecer em vez do preenchimento.</p>
<figure style="margin-bottom:40px;">
                    <img src="{{ asset('assets/img/photoshop/corel/aula10/imagem2.jpg') }}" alt="guia" style="width:75%!important; margin: 0 auto;" >
                </figure>
                <p style="margin-top:16px;">
                <strong> Preenchimentos de malha:</strong> Quando se preenche um objeto com um preenchimento de malha, é possível
criar efeitos exclusivos. Por exemplo, criam-se transições de cor suaves em qualquer direção sem precisar
criar misturas ou contornos. Quando você aplica um preenchimento de malha, pode especificar o número de
colunas e linhas da grade e também os pontos de interseção contidos na grade.
                </p>
                <figure style="margin-bottom:40px;">
                    <img src="{{ asset('assets/img/photoshop/corel/aula10/imagem3.jpg') }}" alt="guia" style="width:75%!important; margin: 0 auto;" >
                </figure>
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula10/imagem4.jpg') }}" alt="guia" style="width:95%!important; margin: 0 auto;" >
                </figure>
                <figure style="margin-top:20px;">
                    <img src="{{ asset('assets/img/photoshop/corel/aula10/imagem5.jpg') }}" alt="guia" style="width:95%!important; margin: 0 auto;" >
                </figure>
            <div style="margin-top:16px">
                <h5 class="barlow">Atividade</h5>
               <p>Crie e faça desenhos de roupas para moda ou desenhe uma planta baixa simples utilizando as formas básicas
e linhas. Utilizando os proenchimentos crie alguns modelos e adicione ao objeto criado no exercicio anterior.</p>
            </div>
            <div class="metade esquerda">
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula10/imagem6.jpg') }}" alt="guia" style="width:75%!important;" >
                </figure>
            </div>
            <div class="metade direita">
                <p>O modelo de cores CMYK, usado em impressão,
utiliza os componentes ciano (C), magenta (M), amarelo (Y) e preto (K) para definir as cores. Os valores desses componentes variam de 0 a 100 e representam percentuais.</p>
<p>O modelo de cores RGB usa os componentes
vermelho (R), verde (G) e azul (B) para
definir a quantidade de luz vermelha, verde
e azul em uma determinada cor.</p>
<p>Em uma imagem de 24 bits, cada componente
é expresso como um número de 0
a 255. Em uma imagem com uma taxa de
bits maior, como uma imagem de 48 bits, o
intervalo de valores é maior. A combinação
desses componentes define uma cor única.</p>
<p>O modelo de cores HSB usa matiz (H), saturação
(S) e brilho (B) como componentes
para definir as cores. HSB também é conhecido
como HSV (com os componentes
matiz, saturação e valor).</p>
            </div>
            <div class="clear"></div>
            <div style="margin-top:20px;">
            <p>Matiz descreve o pigmento de uma cor e é expresso em graus para representar a localização na roda de cores
padrão. Por exemplo, vermelho é 0 grau, amarelo é 60 graus, verde é 120 graus, ciano é 180 graus, azul é 240 graus e magenta é 300 graus.</p>
<p>O modelo de cores de tons de cinza define a cor usando apenas um componente, a iluminação, que é expresso
em valores que variam de 0 a 255. Cada cor dos tons de cinza tem valores iguais dos componentes
vermelho, verde e azul do modelo de cores RGB. Se você alterar uma foto em cores para tons de cinza, criará
uma foto em preto e branco.</p>
            </div>
            <div class="metade esquerda">
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula10/imagem7.jpg') }}" alt="guia" style="width:65%!important;" >
                </figure>
            </div>
            <div class="metade direita">
                <p>Ao manter o click esquerdo do mouse pressionado em um quadro de cor o
CorelDRAW exibe uma caixa com tonalidades e tipos de amostras correspondentes
a cor desejada, isso facilita o processo de mistura e ainda para
saber as intensidades de cores, dependendo do tipo de pintura ou projeto
feito.</p>
            </div>
        </div>
    </div>
</main>

<script>
	activeMenu();
</script>

@endsection
