@extends('layouts.template')
@section('titulo','Corel Draw | Aula 9 – Objetos e Símbolos')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade2" data-etapa="aula26">
			<h3 class="barlow">COREL DRAW</h3>
			 <div class="clear"></div>
            <h5 class="barlow">Aula 9 – Objetos e Símbolos </h5>
            <p>Você pode criar simbolos de maneira simples acessando o <strong> Menu > Objeto > Símbolo > Criar Novo símbolo </strong>,
o mesmo vale para o uso do botão direito com o objeto selecionado como na imagem a seguir.</p>
                <figure style="margin-bottom:40px;">
                    <img src="{{ asset('assets/img/photoshop/corel/aula09/imagem1.jpg') }}" alt="guia" style="width:75%!important;" >
                </figure>
                <p>Fazendo com que todos os itens possam ser editados em tempo real sem a necessidade de fazer um a um
ou ter que fazer e copiar e colar na posição do outro e ter um retrabalho muito desgastante dependendo do
projeto.</p>
            <div style="margin-top:16px">
                <h5 class="barlow">Atividade</h5>
               <p>Faça uma identidade visual simples para uma loja de roupas ou marca propria
temas disponibilizado pelo professor(a).</p>
               <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula09/imagem2.jpg') }}" alt="guia" style="width:65%!important; margin: 0 auto;" >
                </figure>
            </div>
            <div style="margin-top:16px">
               <p> <strong> Preenchimentos uniformes: </strong> Os preenchimentos uniformes são cores sólidas que podem ser escolhidas ou
criadas utilizando-se modelos e paletas de cores.</p>
              <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula09/imagem3.jpg') }}" alt="guia" style="width:45%!important; margin: 0 auto;" >
                </figure>
                <p style="margin-top:20px;"><strong> Preenchimentos de gradação: </strong> O preenchimento de gradação é uma progressão suave de duas ou mais cores
que adiciona profundidade a um objeto. Os preenchimentos de gradação também são conhecidos como preenchimentos
degradê. Há quatro ti pos de preenchimentos de gradação: linear, elíptico, cônico e retangular
veja abaixo os exemplos.</p>
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula09/imagem4.jpg') }}" alt="guia" style="width:45%!important; margin: 0 auto;" >
                </figure>
                <p style="margin-top:20px;"><strong>Preenchimentos de padrão vetorial e de bitmap: </strong> Um preenchimento de padrão de vetores é um gráfico vetorial
mais complexo que composto de linhas e preenchimentos, pode ter cor ou fundo transparente.
Um preenchimento de padrão de bitmap é uma imagem bitmap cuja complexidade é determinada pelo seu
tamanho, resolução e profundidade de bits.</p>
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula09/imagem5.jpg') }}" alt="guia" style="width:45%!important; margin: 0 auto;" >
                </figure>
                <p style="margin-top:20px;">
                <strong>Preenchimentos de padrão de duas cores:</strong> Um preenchimento de padrão de duas cores é formado apenas
pelas duas cores escolhidas. Além de especificar as cores, você também pode espelhar os ladrilhos de preenchimento
na vertical ou horizontal, e ainda pode definir o tamanho deles, inclinar e girar o preenchimento, e
ainda mover seu centro para criar efeitos mais dinamicos em seus projetos.
                </p>
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula09/imagem6.jpg') }}" alt="guia" style="width:45%!important; margin: 0 auto;" >
                </figure>
                <p style="margin-top:20px;">
                <strong>Preenchimentos de textura:</strong> Um preenchimento de textura é um preenchimento gerado aleatoriamente que
pode ser utilizado para conferir aos objetos uma aparência natural, pode usar preenchimentos de textura
existentes, como água, minerais e nuvens semelhantes aos preenchimentos de cad para desenho de plantas
baixas entre outros.
                </p>
            </div>
        </div>
    </div>
</main>

<script>
	activeMenu();
</script>

@endsection
