@extends('layouts.template')
@section('titulo','PHOTOSHOP | Aula 2 – Ferramentas de Seleção e Recorte')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade1" data-etapa="aula2">
			<h3 class="barlow">PHOTOSHOP</h3>
			<h5 class="barlow upper">Aula 2 – Ferramentas de Seleção e Recorte</h5>
			<p style="margin-top: 16px">Aprender a selecionar áreas de uma imagem é extremamente importante. Primeiramente deve-se selecionar qual área você deseje para que ela possa ser editada.</p>
            <p style="margin-top: 16px">Fazer alterações em uma área dentro de uma imagem no Photoshop é um processo de
            duas etapas:</p>
            <p style="margin-top: 16px">- Primeiro você usa uma ferramenta de seleção para marcar a área da imagem que deseja alterar.Use uma outra ferramenta, fi ltro ou outro recurso para fazer alterações ou
            mover para outro local. Podemos fazer seleções baseadas em tamanho, formas ou cores. Quando uma seleção esti ver ati va, as mudanças que você realiza aplicarão apenas
            na área selecionada, as demais permanecerão inalteráveis.</p>
            <p style="margin-top: 16px">As melhores ferramentas de seleção para uma área especifi ca muitas vezes depende
            das característi cas dessa área, tais como cor ou forma. Existem quatro tipos principais
            de seleção:</p>
			<h5 class="barlow">Seleções Geométricas</h5>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem1.png') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">I. Retangular Marquee Tool – Seleciona uma área retangular em uma imagem.</p>
            <p style="margin-top: 16px">II. Elipti cal Marquee Tool – Seleciona uma área elípti ca em uma imagem.</p>
            <p style="margin-top: 16px">III. Single row marquee tool e Single columm marquee tool – selecionam um pixel
            da largura e altura da imagem respecti vamente.</p>
			<h5 class="barlow">Seleções de Mão Livre</h5>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem2.png') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">I. Lasso tool – Traça uma seleção de mão livre na área.</p>
            <p style="margin-top: 16px">II. Poligonal Lasso tool – Marca pontos de ancoras em segmentos de linha reta na área.</p>
            <p style="margin-top: 16px">III. Magnetic Lasso tool – Trabalha como uma combinação da Poligonal Lasso
            Tool e a Lasso tool, e nos dá o melhor resultado de seleção quando há um bom contraste existente entre a área a ser selecionada e a área restante.</p>
			<h5 class="barlow">Seleções baseadas em limites</h5>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem3.png') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">I. Quick Selection – Se utilizado procedimento de “pintura” da área selecionada, 
            encontrando automaticamente os limites desta área baseando-se no
            contraste dela com as demais áreas.</p>
			<h5 class="barlow">Seleções baseadas em cor</h5>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem4.png') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">II. Magic Wand tool – Seleciona áreas baseada na similaridade da cor do pixel.
            É útil para selecionar áreas em forma ímpar que compartilham gama de
            cores. </p>
			<h5 class="barlow">Adicionando Seleção</h5>
            <p style="margin-top: 16px">Durante um processo de seleção, podemos necessitar adicionar uma área que fi cou de
            fora, sem que ao selecionar novamente, percamos a área já selecionada. Para evitar
            essa perda e que possamos acrescentar mais seleção podemos:</p>
            <p style="margin-top: 16px">I. Com uma ferramenta de seleção ativa, localizar o grupo de botões do modo
            de seleção no canto superior esquerdo da janela do programa, mais especificamente junto a barra de 
            propriedades da ferramenta. Lá, clicar no botão Add to Selection.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem5.png') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">II.	Durante a seleçao e com uma ferramenta de seleção ativa, 
            simplesmente manter pressionada a tecla SHIFT enquanto realiza a seleção da nova área.</p>
			<h5 class="barlow">Subtraindo Seleção</h5>
            <p style="margin-top: 16px">Durante um processo de seleção, podemos necessitar subtrair 
            uma área que fora selecionada indevidamente, sem que ao selecionar novamente, percamos a 
            área já selecionada. Para evitar essa perda e que possamos subtrair áreas selecionadas podemos:</p>
            <p style="margin-top: 16px">I. Com uma ferramenta de seleção ativa, localizar o grupo de botões do modo
            de seleção no canto superior esquerdo da janela do programa, mais especificamente junto a barra de propriedades 
            da ferramenta. Lá, clicar no botão Subtract from Selection.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem6.png') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">II. Durante a seleção e com uma ferramenta de seleção ativa, 
            simplesmente manter pressionada a tecla ALT enquanto remove a seleção.</p>
			<h5 class="barlow">Outros modos de Seleção</h5>
            <p style="margin-top: 16px">Embora sejam necessários em casos mais específicos, 
            podemos contar com outros modos de seleção para combinarmos com os principais.</p>
            <p style="margin-top: 16px">I. New Selection – Esse é o modo básico que já vem ativo 
            por padrão nas ferramentas onde ao clicar em uma área não selecionada, ele cria uma 
            nova seleção, cancelando a anterior.
            </p>

            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem7.png') }}" alt="guia">
                </figure>
            </div>
            
            <p style="margin-top: 16px">II. Intersect with Selection – Esse modo cria uma intersecção em uma ou mais
            áreas já selecionada, cancelando a seleção nas áreas fora dessa intersecção.</p>
			<h5 class="barlow">Invertendo Seleção</h5>
            <p style="margin-top: 16px">Algumas seleções são realizadas não com o intuito de deletar uma área especifica da
            imagem. Porém, em alguns casos, torna-se mais fácil selecionar uma área externa à
            seleção por conta da facilidade encontrada com seleções baseadas em limites ou em
            cor. Nestes casos, optamos por inverter a seleção para que possamos obter o oposto da
            área selecionada, onde o Photoshop muda o alvo da seleção obtida para o restante da
            imagem antes não selecionada.</p>
			<h5 class="barlow">Selecionando tudo</h5>
            <p style="margin-top: 16px">Selecionar toda a tela do arquivo pode ser necessário em ocasiões em que desejamos
            realizar uma edição de um todo por conta de filtros ou edição nos limites da tela da
            imagem. </p>
            <p style="margin-top: 16px">Para selecionar toda a tela da imagem temos duas formas:</p>
            <p style="margin-top: 16px">I. Através do menu Select – All</p>
            <p style="margin-top: 16px">II. Através da combinação de teclas Ctrl + A.</p>
			<h5 class="barlow">Modificando Seleção</h5>
            <p style="margin-top: 16px">Uma seleção previamente aplicada não precisa necessariamente ser a definitiva. 
            Existem situações em que desejamos alterar a seleção para uma maior abrangência ou
            menor, e até mesmo casos em que precisamos suavizar a seleção para causar um efeito
            esfumaçado na área editada.</p>
            <p style="margin-top: 16px">Para realizarmos modificações na seleção temos as seguintes opções no menu
            Select - Modify:</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem8.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px"><b>I. </b>Border – Desenha uma borda a parti r do limite da seleção para fora.</p>
            <p style="margin-top: 16px"><b>II.</b> Smooth – Suaviza os cantos da seleção arredondando-os.</p>
            <p style="margin-top: 16px"><b>III. </b>Expand – Expande o limite da seleção para fora.</p>
            <p style="margin-top: 16px"><b>IV.</b> Contract – Contrai o limite da seleção para dentro.</p>
            <p style="margin-top: 16px"><b>V. </b>Feather – Suaviza a seleção criando um aspecto esfumaçado a partir do raio.</p>
			<h5 class="barlow">Movendo seleção</h5>
            <p style="margin-top: 16px">Uma vez selecionada a área, podemos mover seu conteúdo tanto para qualquer parte
            da tela da imagem, quanto para a tela de outro arquivo. Para isto, usamos a ferramenta
            Move (V), que se encontra na barra de ferramentas do programa. </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem9.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">É importante observar que ao apontarmos o mouse com a ferramenta Move selecionada,
            veremos o cursor em forma de tesoura indicando que aquela área será recortada ou no
            caso, movida para outro local.</p>
			<h5 class="barlow">Cancelando Seleção</h5>
            <p style="margin-top: 16px">Apesar de ser uma ação simples, cancelar a seleção deve ser 
            habitual sempre que selecionamos uma área. Isso serve para evitar que ela se mantenha. 
            não podemos editar as
            demais áreas da imagem que não estavam selecionadas.</p>
            <p style="margin-top: 16px">Podemos cancelar uma seleção das seguintes formas:</p>
            <p style="margin-top: 16px"><b>I. </b>Com uma ferramenta de seleção ativa, podemos clicar com o botão esquerdo
            do mouse fora da área selecionada.</p>
            <p style="margin-top: 16px"><b>II.</b> Através do menu Select – Deselect.</p>
            <p style="margin-top: 16px"><b>III. </b>Combinando as teclas CTRL + D.</p>
			<h5 class="barlow">Transformando Seleção</h5>
            <p style="margin-top: 16px">Após definida a área da seleção, podemos ainda 
            alterar o tamanho, posição e até mesmo rotação da
            seleção.</p>
            <p style="margin-top: 16px">Alterar a seleção implica em somente modificá-la 
            sem alterar o conteúdo selecionado. Podemos transformar a seleção das seguntes formas:</p>
            <p style="margin-top: 16px"><b>I. </b>Clicando fora da área selecionada usando uma 
            ferramenta de seleção ativa e escolher Transform – Selection.</p>
            <p style="margin-top: 16px"><b>II.</b> Atraves do menu Select – Transform Selection.</p>
			<h5 class="barlow">Fill</h5>
            <p style="margin-top: 16px">Um importante recurso de edição quando se trabalha com cores 
            e preenchimento no Adobe Photoshop,
            é a janela Fill. Com ela podemos preencher uma área selecionada ou simplesmente a tela inteira com uma
            cor, padrão de preenchimento entre outras. Para acessar a janela Fill podemos:</p>
            <p style="margin-top: 16px"><b>I.</b> Clicar no menu Edit – Fill.</p>
            <p style="margin-top: 16px"><b>II.</b> Clicar com o botão direito sobre a tela ou quando em uma área selecionada, 
            clicar dentro
            desta e escolher Fill.</p>
            <p style="margin-top: 16px"><b>III.</b> Através da combinação das teclas SHIFT + F5.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem10.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">Entre as opções da janela Fill temos:</p>
            <p style="margin-top: 16px">I. Background color – Preenche o documento inteiro ou área selecionada com a
            cor que se encontra configurada na botão de cor de primeiro plano.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem11.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">II. Foreground color - Preenche o documento inteiro ou área selecionada com a
            cor que se encontra configurada na botão de cor de segundo plano.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem12.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">III. Color – Abre a janela Color Picker (Fill color), 
            que nos permite escolher uma
            cor personalizada na malha de cores que é exibida.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem13.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">IV. Content Aware – Esta opção será melhor abordada em 
            capítulos posteriores,
            mas trata-se de utilizar o conteúdo ao redor da seleção para preencher á área
            selecionada.</p>
            <p style="margin-top: 16px">V. Pattern – Preenche o documento inteiro ou área 
            selecionada com um padrão
            de preenchimento que pode ser escolhido entre as bibliotecas de padrões do
            Photoshop.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem14.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">VI. Black - Preenche o documento inteiro ou área selecionada com a cor preta.</p>
            <p style="margin-top: 16px">VII. 50% Gray - Preenche o documento inteiro ou área selecionada com um padrão de cor cinza com 50% de saturação.</p>
            <p style="margin-top: 16px">VIII. White - Preenche o documento inteiro ou área selecionada com a branca.</p>
			<h5 class="barlow center-align">A T I V I D A D E S</h5>
            <p style="margin-top: 16px"><b>1.</b> Criar uma imagem de recortes usando as seleções.</p>
            <p style="margin-top: 16px"><b>2.</b> Criar um Flat landscape usando ferramentas de seleção e Fill.</p>            
            <div class="clear"></div>            
        </div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
