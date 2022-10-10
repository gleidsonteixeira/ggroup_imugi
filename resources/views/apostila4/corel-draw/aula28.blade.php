@extends('layouts.template')
@section('titulo','Corel Draw | Aula 11 – Cores')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade2" data-etapa="aula28">
			<h3 class="barlow">COREL DRAW</h3>
			 <div class="clear"></div>
            <h5 class="barlow">Aula 11 – Cores </h5>
            <p><strong> Conta Gotas </strong></p>
                <figure style="margin-bottom:40px;">
                    <img src="{{ asset('assets/img/photoshop/corel/aula11/imagem1.jpg') }}" alt="guia" style="width:15%!important;" >
                </figure>
                <div style="margin-top:16px">
            <div class="metade esquerda">
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula11/imagem2.jpg') }}" alt="guia" style="width:95%!important;" >
                </figure>
            </div>
            <div class="metade direita">
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula11/imagem3.jpg') }}" alt="guia" style="width:55%!important;" >
                </figure>
            </div>
            <div class="clear"></div>
                <p style="margin-top:20px;">Para obter uma amostra de uma cor fora da janela de desenho, clique em Selecionar cor na área de trabalho
da barra de propriedades e clique em uma cor na área de trabalho.</p>
                <h5 class="barlow">Localizando e substituindo cores</h5>
                <p style="margin-top:16px;">
                É possível localizar uma cor em um desenho e substituí-la por outra cor. A substituição de cores pode ser aplicada
a qualquer contorno, preenchimentos uniformes, preenchimentos de fonte, preenchimentos de duas
cores, preenchimentos de malha e bitmaps monocromáticos no documento ativo. Por outro lado, você pode
substituir a cor apenas em contornos ou em um tipo específico de preenchimento.
                </p>
                <p>Para substituir as cores dos objetos ou artes feitas com vetores, basta ir no menu <strong> Editar > Localizar e substituir </strong>, na janela que irá surgir escolha <strong> substituir objetos </strong> > após ative a opção cor no menu, escolha a cor que
vai ser  <strong> localizada e a substuida > finalizando com os botões de substituir </strong>. Você também pode localizar e
substituir o modelo ou paleta de cores de preenchimentos e contornos.</p>
            <div style="margin-top:16px">
                <h5 class="barlow">Atividade</h5>
               <p>Faça uma arte simples utilizando textos e formas, tema orientando pelo professor(a) e finalize adicionando
preenchimentos. Utilizando um arquivo já feito faça a substituição de cores do mesmo para dar uma redesign ao mesmo.</p>
            <p style="margin-bottom:40px;">Nesta aula você pode literalmente abrir seus olhos para computação gráfica, de uma forma irreversivel, ao
trabalhar com efeitos especiais ou propriamente os efeitos do CorelDRAW, pode se criar desde pixel arts até
trabalhos mais elaborados que se levariam horas e em alguns minutos ou segundos pode ter um resultado
incrivel.</p>
            </div>
            <div class="metade esquerda">
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula11/imagem5.jpg') }}" alt="guia" style="width:50%!important;" >
                </figure>
            </div>
            <div class="metade direita">
                <p>Como podem notar ao lado temos o menu de efeitos disponivel onde ele é divido em 3 grupos.</p>
                <p><strong> Efeitos 3D: </strong> Você aplica efeitos especiais tridimensionais a uma imagem para criar a ilusão de profundidade</p>
                <p><strong> Ajustar: </strong> Permite ajustar a cor e o tom dos bitmaps.</p>
                <p><strong> Pinceladas artísticas: </strong> Permite aplicar técnicas de pintura à mão.</p>
                <p><strong> Desfocar: </strong> Permite desfocar uma imagem para simular movimento, pontilhado ou alterações graduais.</p>
                <p><strong> Câmera: </strong> Permite simular efeitos produzidos por várias lentes de câmera.</p>
                <p><strong> Transformação de cor: </strong> Permite criar ilusões fotográficas com redução e substituições de cor.</p>
                <p><strong> Contorno: </strong> Permite destacar e acentuar as bordas de uma imagem.</p>
                <p><strong> Correção: </strong> Permite aplicar diversas texturas e formas a uma imagem</p>
                <p><strong> Personalizar: </strong> Permite aplicar uma ampla variedade de efeitos à sua imagem. Por exemplo, é possível adicionar textura e padrões a uma imagem
                (Efeito mapa de relevo).</p>
                <p><strong> Distorcer: </strong> Permite distorcer super􀄰 cies da imagem.</p>
                <p><strong> Ruído: </strong> Permite modificar a granulosidade de uma imagem.</p>
                <p><strong> Aguçar: </strong> Permite adicionar um efeito de nitidez para focar e aprimorar as bordas.</p>
            </div>
            <div class="clear"></div>
            <div style="margin-top:20px;">
            <p><strong> Textura: </strong> Permite adicionar textura a uma imagem simulando uma variedade de superfícies, como paralelepípedo,
pele de elefante, plástico e escultura em relevo.</p>
            <p><strong> Transformar: </strong> Permite transformar a cor e o tom de uma imagem. Os efeitos incluem Desentrelaçar, Inverter cores e Posterizar.</p>
            <p><strong> Mídia artística: </strong> Permite aplicar técnicas de pintura à mão</p>
              <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula11/imagem6.jpg') }}" alt="guia" style="width:55%!important;" >
                </figure>
            </div>
        </div>
    </div>
</main>

<script>
	activeMenu();
</script>

@endsection
