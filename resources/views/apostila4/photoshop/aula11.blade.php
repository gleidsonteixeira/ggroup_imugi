@extends('layouts.template')
@section('titulo','PHOTOSHOP | Aula 11 – Retoque e restauração de imagens')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade1" data-etapa="aula11">
			<h3 class="barlow">PHOTOSHOP</h3>
			<h5 class="barlow upper">Aula 11 – Retoque e restauração de imagens</h5>
			<p>Usando uma variedade de ferramentas de Photoshop, podemos facilmente retocar e
			corrigir defeitos ou imperfeições em imagens. Para isso, temos a nosso dispor uma série
			de ferramentas que facilitam esse trabalho, cada uma atuando de formas especificas
			com relação a área que estamos editando.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit3/imagem1.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlaw">Spot Healing Brush tool<img style="display: inline;" src="{{ asset('assets/img/photoshop/unit3/imagem2.PNG') }}" alt="guia"></h5>
			<p>A ferramenta Spot Healing Brush remove rapidamente defeitos e outras imperfeições em suas fotos. A Spot healing brush, pinta com uma nova amostra de
			pixels ou padrões de preenchimento que combinam com a textura, iluminação,
			transparência e sombreamento da amostra de pixels que esta restaurando.</p>
			<p>Para retocar com a ferramenta Spot Healing brush, basta clicar na área que deseja retocar, determinando previamente apenas o diâmetro da ponta do pincel e a dureza do
			mesmo.</p>
			<p>I. Para acessarmos essas predefinições basta clicar com o botão direito do mouse
			na tela da imagem com a ferramenta Spot Healing brush selecionada.</p>
			<p>II. Ou simplesmente usar as teclas de atalho [ (colchete abrindo) e ] (colchete
			fechando) para aumentar o diâmetro da ponta do pincel.</p>
			<p>Combinar as teclas SHIFT + [ (para reduzir a dureza do pincel) e SHIFT + ] (para aumentar
			a dureza do pincel).</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit3/imagem3.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlaw">Healing Brush tool<img style="display: inline;" src="{{ asset('assets/img/photoshop/unit3/imagem4.PNG') }}" alt="guia"></h5>
			<p>A ferramenta Spot Healing permite corrigir imperfeições, fazendo com que elas desapareçam na imagem em uma área circundante. Assim como as ferramentas de clonagem,
			você usa a ferramenta Healing brush para pintar com pixels amostrados de uma imagem ou padrão. No entanto, a ferramenta Healing brush também corresponde à textura,
			iluminação, transparência e sombreamento dos pixels amostrados para os pixels que
			estão sendo retocados. Como resultado, os pixels reparados se fundem perfeitamente no restante da imagem.</p>
			<p>Para retocar com a ferramenta Healing brush devemos:</p>
			<p>I. Com a ferramenta Healing brush selecionada, ajustar as predefinições do pincel
			da mesma forma que a ferramenta Spot Healing brush.</p>
			<p>II. Em seguida, pressionando a tecla ALT, devemos clicar na área que desejamos
			clonar e ao liberar a tecla ALT, clicar na área a ser retocada.</p>
			<h5 class="barlaw">Patch tool<img style="display: inline;" src="{{ asset('assets/img/photoshop/unit3/imagem5.PNG') }}" alt="guia"></h5>
			<p>A ferramenta Patch permite que você conserte uma área selecionada com pixels de
			outra área ou um padrão. Assim como a ferramenta Healing brush, a ferramenta
			Patch corresponde à textura, iluminação e sombreamento dos pixels mostrados para
			os pixels de origem. Podemos usar a ferramenta Patch para clonar áreas isoladas de
			uma imagem. A ferramenta Patch funciona com imagens de 8 ou 16 bits por canal.</p>
			<p>Para utilizar a ferramenta Patch devemos:</p>
			<p>I. Com a ferramenta Patch selecionada, desenhar uma seleção envolvendo a área
			que desejamos corrigir. </p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit3/imagem6.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>II. Em seguida, mover essa seleção para uma área que desejamos usar para clonar
			no lugar desta.</p>
			<h5 class="barlaw">Clone Stamp Tool<img style="display: inline;" src="{{ asset('assets/img/photoshop/unit3/imagem7.PNG') }}" alt="guia"></h5>
			<p>A ferramenta Clone Stamp pinta uma parte de uma imagem sobre outra parte da mesma
			imagem ou sobre outra parte de qualquer documento aberto que tenha o mesmo modo
			de cor. Você também pode pintar parte de uma camada sobre outra camada. A ferramenta Clone Stamp é útil para duplicar objetos ou remover um defeito em uma imagem.</p>
			<p>Para usar a ferramenta Clone Stamp, você define um ponto de amostragem na área que
			deseja copiar (clonar) os pixels e pintar sobre outra área. Para pintar com o ponto de
			amostragem mais atual sempre que você parar e retomar a pintura, selecione a opção</p>
			<p>Alinhado.<img style="display: inline;" src="{{ asset('assets/img/photoshop/unit3/imagem8.PNG') }}" alt="guia"></p>
			<p>Desmarque a opção Alinhado para pintar a partir do ponto de amostragem inicial, não importa
			quantas vezes você parar e retomar a pintura:</p>
			<p>I. Com a ferramenta Clone Stamp selecionada, ajustar as predefinições do pincel.</p>
			<p>II. Em seguida, pressionando a tecla ALT, devemos clicar na área que desejamos clonar e ao
			liberar a tecla ALT, clicar na área a ser retocada.</p>
			<h5 class="barlaw">Crop / Crop Tool</h5>
			<p>Muitas vezes, por razões artísticas, precisamos cortar uma área especifica da imagem, descartando o restante. Com a ferramenta Crop, podemos fazer isso facilmente e de modo prático.</p>
			<p>Para cortar uma área especifica da imagem usando a ferramenta Crop devemos:</p>
			<p>I. Acionar a ferramenta Crop na barra de ferramentas.<img style="display: inline;" src="{{ asset('assets/img/photoshop/unit3/imagem9.PNG') }}" alt="guia"></p>
			<p>II. Desenhar uma área usando as alças de dimensionamento para ajustar corretamente.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit3/imagem10.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>III. Clicar no botão Commit Current Crop Operation <img style="display: inline;" src="{{ asset('assets/img/photoshop/unit3/imagem11.PNG') }}" alt="guia">, na barra de propriedades
			da ferramenta ou simplesmente dar um clique duplo no centro da área.</p>
			<p>Podemos também usar a Crop Tool para estender a área da tela de pintura além da
			preenchida com a imagem, permitindo que possamos usar essa área para acrescentar
			demais elementos a uma composição.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit3/imagem12.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlaw">Content Aware Fill</h5>
			<p>O princípio básico do content aware é que ele em si não é uma ferramenta, mas sim uma função que pode
			ser utilizada em outras ferramentas. Tanto a opção “Fill” como a “Spot Healing Brush” são algumas que
			se aproveitam do Content ware. O Content Aware preenche a seleção com conteúdo proximo similar da
			imagem.</p>
			<p>Para preencher com o Content Aware Fill devemos:</p>
			<p>I. Selecionar uma área da imagem que desejamos preencher com o conteúdo ao
			próximo usando a ferramenta de seleção apropriada.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit3/imagem13.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>II. Clicar em Edit e escolher a opção Fill. Ou combinando as teclas SHIFT+F5.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit3/imagem14.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>III. Na janela Fill, escolher Content-Aware no menu drop-down Contents.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit3/imagem15.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>Observe o resultado:</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit3/imagem16.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlaw">Content-Aware Move Tool</h5>
			<p>Use a ferramenta Content-Aware Move para selecionar e mover uma parte de uma
			imagem. A imagem é recomposta, e o buraco deixado para trás é preenchido usando
			elementos correspondentes da imagem. Você não precisa realizar edições intensivas
			envolvendo camadas e seleções complexas.</p>
			<p>Para utilizar a ferramenta Content Aware Move devemos:</p>
			<p>I. Acionar a ferramenta Content Aware Move na barra de ferramentas.<img style="display: inline;" src="{{ asset('assets/img/photoshop/unit3/imagem17.PNG') }}" alt="guia"></p>
			<p>II. Desenhar uma seleção em volta da área que deseja mover para outra parte da
			imagem.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit3/imagem18.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>III. Ainda com a ferramenta ativa, mover o conteúdo para a área desejada.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit3/imagem19.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>IV. Redimensionar a área se necessário e em seguida clicar no botão de confirmação
			da barra de propriedades.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit3/imagem20.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>V. Remover a seleção combinando as teclas CTRL+D.</p>
			<h5 class="barlaw">A T I V I D A D E S</h5>
			<p><b>1.</b> Utilizando as ferramentas de retoque, restaure fotos antigas.</p>
        </div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
