@extends('layouts.template')
@section('titulo','Corel Draw | Aula 12 – Efeitos Visuais')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade2" data-etapa="aula29">
			<h3 class="barlow">COREL DRAW</h3>
			 <div class="clear"></div>
            <h5 class="barlow">Aula 12 – Efeitos Visuais </h5>
                <div style="margin-top:16px">
            <div class="metade esquerda">
                <p><strong> Chanfradura: </strong> Permite adicionar profundidade 3D a um objeto gráfico ou de texto, fazendo
                  com que suas bordas pareçam inclinadas (corte em ângulo)</p>
                <p><strong> Mistura: </strong> Permite criar uma progressão na forma e no tamanho de um objeto para outro.
                    As misturas são usadas frequentemente para criar sombreamentos realísticos e
                    destaques em objetos.</p>
                <p><strong> Contorno: </strong> Permite criar efeitos 3D e contornos cortáveis para saída em dispositivos
                como plotadoras, máquinas de gravação e cortadores de vinil.</p>
                <p><strong> Envelope: </strong> Permite moldar objetos.</p>
                <p><strong> Extrusão: </strong> Permite fazer com que os objetos apareçam tridimensionais.</p>
                <p><strong> Lente: </strong> Permite alterar a aparência de uma área de objeto abaixo da lente, não as propriedades
                    e atributos reais dos objetos.</p>
                <p><strong> PhotoCocktail: </strong> Permite transformar suasfotos e arte vetorial em mosaicos compostos por imagens.</p>
            </div>
            <div class="metade direita">
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula12/imagem1.jpg') }}" alt="guia" style="width:50%!important;" >
                </figure>
            </div>
            <div class="clear"></div>
                <p style="margin-top:30px;"><strong> Pointillizer: </strong> Permite criar mosaicos vetoriais a parti r de objetos vetoriais ou de bitmap.</p>
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula12/imagem2.jpg') }}" alt="guia" style="width:65%!important; margin:0 auto;" >
                </figure>
                <p><strong> Obs: </strong> Algumas das opções de efeitos especiais podem ser encontradas na barra de ferramentas.</p>
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula12/imagem3.jpg') }}" alt="guia" style="width:25%!important; margin:0 auto;" >
                </figure>
                
            <div style="margin-top:16px">
                <h5 class="barlow">Atividade</h5>
               <p>Crie uma arte para uma camisa de evento utilizando efeitos especiais, temas sugerido pelo professor(a)</p>
               <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula12/imagem4.jpg') }}" alt="guia" style="width:25%!important; margin:0 auto;" >
                </figure>
                <p style="margin-top:30px;">Monte um painel de fotos utilizando o efeito PhotoCocktail</p>
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula12/imagem5.jpg') }}" alt="guia" style="width:25%!important; margin:0 auto;" >
                </figure>
                <p style="margin-top:30px;"> Modelo é uma coleção de estilos e configurações de layout de página que definem o layout e a aparência de
um desenho. Os modelos também são chamados de "gabaritos".</p>
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula12/imagem6.jpg') }}" alt="guia" style="width:55%!important; margin:0 auto;" >
                </figure>
                <p style="margin-top:30px;"> Você pode usar os modelos predefinidos fornecidos do CorelDRAW, e pode criar e usar modelos personalizados,
para facilitar a criação de trabalhos futuros usando gabaritos e alterando padrões de artes para clientes e empresas que solicitem seus trabalhos.</p>
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula12/imagem7.jpg') }}" alt="guia" style="width:65%!important; margin:0 auto;" >
                </figure>
            </div>
        </div>
    </div>
</main>

<script>
	activeMenu();
</script>

@endsection
