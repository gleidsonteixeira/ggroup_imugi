@extends('layouts.template')
@section('titulo','PHOTOSHOP | Aula 06 –  Camadas de Ajuste e máscaras de camada')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade1" data-etapa="aula6">
			<h3 class="barlow">PHOTOSHOP</h3>
			<h5 class="barlow upper">Aula 06 –  Camadas de Ajuste e máscaras de camada</h5>
			<h5 class="barlow">Camadas de Ajuste</h5>
			<p>Usar ajustes de imagens no Photoshop nem sempre significa aplicar este ajuste de modo
			definitivo na camada ou na imagem inteira. Esse ajuste que se caracteriza como destrutivo, pode ser utilizado de uma forma mais inteligente permitindo que esse ajuste seja
			desativado ou re-editado a qualquer momento. Além disso, podemos aplicar esse ajuste
			em uma região especifica da camada sob forma de máscara onde apenas a área visível
			da máscara, será a que apresenta o ajuste.</p>
			<h5 class="barlaw">Criando Camadas de Ajuste</h5>
			<p>Podemos criar camadas de ajuste das seguintes formas:</p>
			<p>I. Através do menu principal Layer – New adjustment Layer</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem89.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>II. Através do botão Creaté New Fill or Adjustment Layer do painel Layers.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem90.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>III. Através do Painel Adjustments no lado direito da tela do programa.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem91.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlaw"> Editando Camadas de Ajuste</h5>
			<p>Ao criarmos uma camada de ajuste, teremos de imediato o ajuste com suas configurações padrão aplicadas e o respecti vo painel exibido para que possamos ajustar com
			novos valores.</p>
			<p>Vejamos o ajuste Photo Filter sendo aplicado a uma imagem através de uma camada de
			ajuste:</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem92.PNG') }}" alt="guia">
                </figure>
            </div>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem93.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>Além de uma camada nova acima da camada da imagem, teremos acoplada a ela um
			ícone de miniatura branca que é a representação de uma máscara de camada.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem94.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>Podemos então escolher a forma como aplicaremos o ajuste Photo Filter a essa imagem:</p>
			<p>I. Escolhendo um filtro na lista de predefinições do ajuste como Sephia, Deep
			blue, Underwatér, etc.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem95.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>II. Escolhendo a opção color e clicando no ícone da cor para selecionar uma
			especifica na janela Color Picker.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem96.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>O ajuste Photo Filter ainda apresenta um botão deslizante que ao arrastarmos para direita ou para esquerda, aumentamos ou reduzimos a intensidade do filtro aplicado.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem97.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>Marcando a opção Preserve Luminosity, a iluminação original da imagem prevalece mesmo com a intensidade do filtro.</p>
			<p>Para que o filtro possa ser aplicado de modo personalizado em apenas áreas específicas
			através da máscara de camada, devemos marcar o ícone dessa máscara clicando na miniatura branca da camada de ajuste.</p>
			<p>Podemos observar que, além do ícone da máscara ficar em destaque no painel, os ícones
			de cor primeiro e segundo plano do Photoshop se alteram para as cores Branca e Preta.
			Isso caracteriza que estamos em modo de máscara.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem98.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>Para alterar exibição ou ocultação do filtro na camada, podemos fazer uso da ferramenta
			Brush (Pincel) clicando no botão da barra de ferramentas, ou simplesmente teclando
			“B”.</p>
			<p>Portanto, para ocultar áreas da imagem onde não queremos o filtro aplicado, pintaremos
			com a cor Preta. Como por padrão a cor é branca, essa representa a exibição do filtro.</p>
			<p>Para trocar as cores de primeiro e segundo plano e realizarmos essa alteração, podemos:</p>
			<p>I. Clicar no botão Switch Foreground and Background Colors.</p>
			<p>II. Teclar “X” para alterar as cores.</p>
			<h5 class="barlaw"> Brush Size (Tamanho do Pincel)</h5>
			<p>Ao utilizar a ferramenta Brush, podemos alterar o diâmetro da ponta do pincel para
			pintar áreas menores ou abranger maiores áreas. Para alterar o diâmetro da ponta do
			brush podemos:</p>
			<p>I. Clicar com o botão direito do mouse sob a tela de pintura para exibir a caixa
			de diálogo Brush Presets Picker.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem99.PNG') }}" alt="guia">
                </figure>
            </div>
			<p>Mover o controle deslizante da opção Size.</p>
			<p>II. Teclar colchetes abrindo [ ou colchetes fechando ].</p>
			<h5 class="barlaw">Brush Harness(Dureza do Pincel)</h5>
			<p>Ao utilizar a ferramenta Brush, podemos alterar a suavidade do pincel tornando a pincelada mais concentrada ou espalhada, criando um efeito esfumaçado na área pintada.</p>
			<p>Podemos alterar a dureza do pincel:</p>
			<p>I. Ajustando o controle deslizante da opção Hardness na caixa de diálogo Brush
			preset picker.</p>
			<p>II. Ajustando o mesmo controle deslizante da opção Hardness na caixa de diálogo Brush preset picker acessando-a com um clique do botão direito do mouse sob a tela da imagem.</p>
			<p>III. Ou combinando as teclas SHIFT + [ , para reduzir a dureza do pincel, e SHIFT + ], para
			aumentar a dureza do pincel.</p>
			<h5 class="barlaw center-align">A T I V I D A D E S</h5>
			<p><b>1.</b> Utilize o ajuste Photo Filter ou outros na forma de Adjustment Layer para
			colorir imagens desaturadas, criando uma nova coloração para esta.</p>
			<p><b>2.</b> Crie uma composição simples utilizando um personagem e cenário, criando
			efeitos para essa composição usando Adjustment Layers.</p>            
        </div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
