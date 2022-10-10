@extends('layouts.template')
@section('titulo','Unit 4 | Aula 09 – Seleção canais e Seleção máscara rápida')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila4" data-unidade="unidade4" data-etapa="aula9">
			<h3 class="barlow">UNIT 4</h3>
			<h5 class="barlow upper">Aula 09 – Seleção canais e Seleção máscara rápida</h5>
			<h5 class="barlaw">Criando Seleções a partir de canais</h5>
			<p>Quando selecionamos parte de uma imagem, a área que não está selecionada está máscarada ou protegida da edição. Assim, ao criarmos uma máscara, isolamos e protegemos
			áreas de uma imagem à medida que aplicamos alterações de cor, filtros ou outros efeitos
			ao resto da imagem. Podemos também usar máscaras para edição de imagens complexas, como aplicar gradualmente cor ou efeitos de filtro a uma imagem.</p>
			<p>As máscaras são armazenadas em canais alfa. Máscaras e canais são imagens em tons de
			cinza, para que possamos editá-las como qualquer outra imagem com ferramentas de
			pintura, ferramentas de edição e filtros. Áreas pintadas de preto em uma máscara são
			protegidas, e áreas pintadas de branco são editáveis.</p>
			<h5 class="barlaw">Quick Mask (Máscara Rápida)</h5>
			<p>Podemos usar o modo Máscara Rápida para converter uma seleção em uma máscara
			temporária para facilitar a edição. A máscara rápida aparece como uma sobreposição
			colorida com opacidade ajustável. Podemos editar a Máscara Rápida usando qualquer
			ferramenta de pintura ou modifi cá-la com um filtro. Depois de sair do modo Quick Mask,
			a máscara é convertida de volta para uma seleção na imagem.
			<p>Para acessar o modo máscara rápida podemos:</p>
			<p>I. Clicar no botão Edit in Quick Mask Mode<img style="display: inline;" src="{{ asset('assets/img/photoshop/unit4/imagem1.PNG') }}" alt="guia">.</p>
			<p>II. Ou simplesmente, teclar a “Q”.</p>
			<p>Vale lembrar que quando na máscara rápida, as áreas na cor vermelha representam
			áreas não selecionadas, e transparentes, áreas selecionadas. Portanto, caso iniciemos
			uma seleção em uma área, ao alterarmos para a edição no modo Quick Mask, veremos
			a área selecionada transparente e o restante, em um filtro na cor vermelha.</p>
			<p>Para adicionarmos seleção a uma área previamente selecionada podemos usar ferramentas de preenchimento ou pinceis usando as cores preta ou branca, onde Preto (subtraida seleção) e Branco (adiciona a seleção).</p>
			<h5 class="barlaw">Criar e editar máscaras de canal alfa (Alpha channel mask)</h5>
			<p>Podemos criar um novo canal alfa e usar ferramentas de pintura, ferramentas de edição
			e filtros para criar uma máscara a partir do canal alfa. Podemos também salvar uma
			seleção existente em uma imagem do Photoshop como um canal alfa que aparece no
			painel Canais.</p>
			<p>Para salvar uma seleção mais permanentemente, podemos armazená-la como um canal
			alfa. O canal alfa armazena a seleção como uma máscara de escala de cinza editável no
			painel Canais. Uma vez que armazenamos a seleção como um canal alfa, podemos recarregá-lo a qualquer momento ou até mesmo carregá-lo em outra imagem.Para criar uma
			edição no canal alpha de uma imagem devemos:</p>
			<p>I. Acessar o painel channels do Adobe Photoshop.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit4/imagem2.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>II. Selecionar o canal Blue, para isolá-lo.</p>
			<p>O canal blue apresenta-se como o mais escuro entre os demais, o que facilitará a edição
			de contraste entre as cores preto e branco para criar a máscara.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit4/imagem3.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>III. Em seguida, devemos criar uma cópia desse canal, calculando o diferencial entre
			áreas mais claras e escuras para que ele possa receber ajustes. Para isso, acesse o recurso Calculations do menu Image.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit4/imagem4.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>IV. Quando a janela Calculations surgir, mantenha a opção result como New Chanel
			para que este crie uma cópia do canal atual, mantendo-o intacto no resultado final.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit4/imagem5.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>V. A partir de então, o canal Alpha1 surgirá no painel Channels, disponível para
			edição da máscara.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit4/imagem6.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>VI. Para obtermos a silhueta preta e branca da imagem (que facilitará o isolamento
			da área não selecionada da selecionada na máscara), devemos utilizar ajustes de brilho e
			contraste ou níveis para obtermos tons mais claros ou mais escuros. Podemos também,
			inverter as cores da imagem (CTRL+.I) para diferenciar ainda mais os tons escuros dos
			claros.</p>
			<p>VII. Esse procedimento de ajuste pode ser repetido até que a imagem exiba a silhueta da imagem. A partir daí, podemos retornar ao canal RGB para visualizarmos a imagem
			no modo normal de cores. </p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit4/imagem7.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>O próximo passo é carregar a seleção do canal Alpha1 no modo RGB da imagem para
			que este exiba uma seleção criada a partir da máscara do canal. Para isso devemos:</p>
			<p>I. De volta ao modo RGB clicar no menu Select – Load Selection.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit4/imagem8.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>II. Na janela que surgir, selecione Alpha1 na opção Channel.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit4/imagem9.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlaw center-align">A T I V I D A D E S</h5>
			<p><b>1.</b> Com base no abordado sobre máscaras de seleção e máscaras de canais, selecione os cabelos de uma modelo em uma imagem fornecida pelo seu instrutor e realize
			alterações.</p>
			<p><b>2.</b> Aplicando máscaras e ajustes, crie um efeito Double Expossure entre duas
			imagens.</p>
        </div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
