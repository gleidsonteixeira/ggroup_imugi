@extends('layouts.template')
@section('titulo','Corel Draw | Aula 13 – Estilos e conjuntos de estilos')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade2" data-etapa="aula30">
			<h3 class="barlow">COREL DRAW</h3>
			 <div class="clear"></div>
            <h5 class="barlow">Aula 13 – Estilos e conjuntos de estilos </h5>
            <p>Os estilos e conjuntos de estilos são grupos de atributos que determinam a aparência dos objetos e são utilizados para facilitar o processo de criação e formatação de objetos e 
            textos de suas artes gráficas facilitando a organização do trabalho e agilizando a produção do mesmo.</p>
                <div style="margin-top:16px">
            <div class="metade esquerda">
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula13/imagem1.jpg') }}" alt="guia" style="width:95%!important;" >
                </figure>
            </div>
            <div class="metade direita">
                <p>Para criar um estilo ou conjunto de estilos basta seguir o caminho da imagem
                    ao lado utilizando a barra de menus e irá surgir um painel para melhores
                    ajustes e configurações.</p>
                <p>Você também pode exportar estilos e conjuntos de estilos, como folhas de
                    estilos, para usar em outros documentos ou importá-los de folhas de estilo
                    salvas anteriormente.</p>
            </div>
            <div class="clear"></div>
                <p style="margin-top:30px;">
                Outro modo de criar esti los é uti lizando o botão direito do mouse com objeto selecionado e ir na opção estilos de objeto. exemplo imagem abaixo
                </p>
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula13/imagem2.jpg') }}" alt="guia" style="width:75%!important; margin:0 auto;" >
                </figure> 
            <div style="margin-top:16px">
                <h5 class="barlow">Atividades</h5>
               <p>Faça um folder para uma empresa ou divulgação de evento, tema definido pelo professor(a). Salve o folder como modelo.</p>
               <p>Ao trabalhar com páginas e layout você pode definir medidas do documento ou seja o tamanho da folha
ou arquivo que será impresso até personalizar a exibição organizando as páginas, mudar as cores e até criar
modelos para futuros projetos gráficos.</p>
<p>Abaixo temos o painel de propriedades e configurações de página e layout</p>
               <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula13/imagem3.jpg') }}" alt="guia" style="width:75%!important; margin:0 auto;" >
                </figure>
            </div>
            <div style="margin-top:16px">
            <div class="metade esquerda">
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula13/imagem4.jpg') }}" alt="guia" style="width:65%!important;" >
                </figure>
            </div>
            <div class="metade direita">
                <p><strong> Menu Layout: </strong> utilizado para personalizar e ajustar detalhes do documento
                    ou projeto criado. Inserir, duplicar, renomear e excluir página</p>
                <p><strong> Inserir página: </strong> permite adicionar páginas a um desenho.</p>
                <p><strong> Duplicar página: </strong> É possível mover objetos de uma página para outra.
                Ao duplicar uma página, e também optar por copiar somente a estrutura de camadas da página 
                ou as camadas e todos os objetos existentes na mesma. É também possível renomear páginas e excluir
                uma única página ou todo um intervalo de páginas.</p>
                <p><strong> Inserindo e configurando número de página: </strong> Você pode inserir números
                    de páginas na página atual, em todas as páginas, em todas
                    as páginas ímpares ou em todas as páginas pares. Os números de
                    páginas são automaticamente atualizados quando você adiciona ou
                    exclui as páginas em seu documento.</p>
                <p><strong> Fundo da página: </strong> É possível escolher a cor e o tipo de fundo de um
desenho. Por exemplo, você pode usar uma cor sólida para obter um
fundo uniforme. ou, se desejar um fundo mais elaborado ou dinâmico, usar um bitmap.</p>
              <p><strong> Aramado: </strong> Exibe somente o modo de linhas vetoriais do projeto ou
documento.</p>
             <p><strong> Aperfeiçoado: </strong> Exibe os objetos e itens no CorelDRAW como vetores
                e um tipo de tela mais proximo ao que pode ser impresso.</p>
            </div>
        </div>
    </div>
</main>

<script>
	activeMenu();
</script>

@endsection
