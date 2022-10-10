@extends('layouts.template')
@section('titulo','PHOTOSHOP | Aula 03 – Camadas e seleção com a caneta Layers Panel (Painel de camadas)')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade1" data-etapa="aula3">
			<h3 class="barlow">PHOTOSHOP</h3>
			<h5 class="barlow upper">Aula 03 – Camadas e seleção com a caneta Layers Panel (Painel de camadas)</h5>
			<h5 class="barlow">Camadas</h5>
            <p style="margin-top: 16px">As camadas do Photoshop são 
            como folhas transparentes empilhadas. Através das áreas
            transparentes de uma camada, podemos ver as camadas 
            de baixo.</p>
            <p style="margin-top: 16px">As camadas são usadas para 
            realizar tarefas como a composição de 
            várias imagens, adição de texto em uma imagem ou 
            adição de formas de vetores gráficos. 
            Você pode aplicar
            um estilo de camada para adicionar um 
            efeito especial como uma sombra projetada ou
            um brilho.</p>
            <p style="margin-top: 16px">O painel Layers permite que 
            possamos administrar todas as camadas de um trabalho e
            nos fornece recursos para adicionarmos ajustes, 
            efeitos e máscaras entre essas camadas, para que 
            o resultado de nossa composição seja a combinação 
            visual de todas essas
            camadas.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem50.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlow">Selecionando camadas</h5>
            <p style="margin-top: 16px">Para selecionar uma camada 
            precisamos simplesmente clicar na miniatura, no nome ou
            ao lado destes na faixa da camada dentro do painel. 
            Porém, podemos selecionar camadas na sequência ou de 
            modo alternado do painel.</p>
            <p style="margin-top: 16px">I. Para selecionar uma sequência 
            de camadas no painel devemos clicar na camada do início 
            da sequência e mantendo a tecla SHIFT pressionada, 
            clicarmos na
            camada do final da sequência. </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem51.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">II. Para selecionar camadas alternadas, devemos 
            manter a tecla CTRL pressionada
            enquanto clicamos nas camadas desejadas.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem52.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlow">Movendo camadas</h5>
            <p style="margin-top: 16px">Para mover uma camada 
            na ordem da lista de camadas do painel devemos 
            apenas manter o botão esquerdo do mouse pressionado 
            sobe o ícone da miniatura da camada e
            arrastar para a posição desejada.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem53.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">O cursor da mãozinha fechada 
            representa que a camada esta sendo movida. Porém uma
            linha escura entre as camadas representa a 
            posição em que a camada vai se encaixar</p>
			<h5 class="barlow">Renomeando camadas</h5>
            <p style="margin-top: 16px">Atribuir um nome a uma 
            camada é um cuidado que torna-se imprescindível 
            quando em
            uma composição complexa. Isto evitará 
            possíveis problemas com a localização destas ou
            possíveis acidentes em uma edição.</p>
            <p style="margin-top: 16px">Para renomear camadas podemos:</p>
            <p style="margin-top: 16px">I. Selecionar a camadas 
            desejada e no menu principal Layer, clicar em Rename
            Layer.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem54.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">II. Dar um clique duplo 
            no nome da camada no painel Layers.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem55.PNG') }}" alt="guia">
                </figure>
            </div>
			<h5 class="barlow">Movendo o conteúdo das camadas</h5>
            <p style="margin-top: 16px">Sempre que desejarmos mover 
            um conteúdo na tela, devemos lembrar que este se
            encontra inserido em uma camada, 
            onde muitas vezes essa camada talvez 
            tenha sido
            criada automaticamente por causa dele. 
            Portanto, cada conteúdo de uma camada, é
            pertencente a esta para ser selecionado 
            ou movido, devemos selecionar esta camada
            através do painel de camadas.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem56.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">Uma constatação que podemos 
            ter dessa regra se dá quando tentamos mover um 
            conteúdo de canto para outro da tela e 
            acabamos movendo outro conteúdo da composição,
            simplesmente por estarmos com a camada 
            errada selecionada.</p>
            <p style="margin-top: 16px">Observe a imagem 
            abaixo:</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem57.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">O cursor da ferramenta 
            Move encontra-se posicionado sob a imagem 
            do “cachorro”.
            Porém, a camada que temos selecionada 
            é a do “carro na estrada”.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem58.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">Quando arrastarmos a 
            imagem para outra posição, quem irá 
            acompanhar os movimentos do mouse 
            será a imagem do “carro na estrada” 
            e não a do “cachorro”, mesmo que
            estejamos apontando para ele.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem59.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">Isso se dá por estarmos com 
            a camada errada selecionada no painel de layers. 
            Para que
            possamos mover a imagem do “cachorro”, 
            devemos selecionar a camada desse conteúdo ,
            para isso:</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem60.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">Porém, em uma composição 
            complexa com uma grande quantidade de camadas e 
            ainda
            que algumas delas estejam nomeadas 
            corretamente, pode ficar trabalhoso 
            localizar qual
            camada corresponde ao conteúdo que 
            queremos marcar para editar.
            Uma solução viável para esse problema 
            seria a ativação do recurso Auto 
            Select da ferramenta Move.
            Para ativar o Auto select devemos 
            escolher a ferramenta Move na 
            barra de propriedades, e 
            quando a barra de propriedades 
            surgir, marque a caixa de 
            verificação da opção.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem61.PNG') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">A partir de agora, sempre 
            quem clicarmos em um conteúdo na composição, 
            o photoshop automaticamente irá selecionar 
            a camada em que este conteúdo se encontra.</p>
            <h5 class="barlaw">Criando camadas</h5>
            <p>Existem duas forma de termos uma nova camada em uma composição. Uma delas se dá
            de modo involuntário através da cópia de um conteúdo externo para o arquivo. A outra,
            se dá através da criação proposital de uma camada para que possamos preenchê-la com
            algum conteúdo.</p>
            <p>I. Quando em um navegador da web escolhemos copiar imagem usando o botão
            direito, este conteúdo de imagem é armazenado na área de transferência do
            sistema operacional.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem62.PNG') }}" alt="guia">
                </figure>
            </div>
            <p>Ao retornarmos ao Photoshop para colar este conteúdo, ele surgirá na forma de uma
            nova camada.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem63.PNG') }}" alt="guia">
                </figure>
            </div>
            <p>II. Para criar uma camada vazia no Adobe Photoshop podemos:</p>
            <p>a. Clicar na opção New Layer do menu do painel de camadas.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem64.PNG') }}" alt="guia">
                </figure>
            </div>
            <p>b. No menu principal Layer, escolher a opção New – Layer</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem65.PNG') }}" alt="guia">
                </figure>
            </div>
            <p>c. Clicando no botão Creaté New Layer do painel de camadas.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem66.PNG') }}" alt="guia">
                </figure>
            </div>
            <p>d. Ou simples mente combinando as teclas CTRL+SHIFT+N</p>
            <h5 class="barlow">Transformando camadas</h5>
            <p>Ao copiarmos um conteúdo para a composição, podemos precisar ajustar o tamanho
            deste para o dos conteúdos já existentes na composição. Isso por ele ser maior ou menor, ou até mesmo, precisarmos girar um pouco este conteúdo. Para isto, podemos
            transformar o conteúdo da camada para escaloná-lo ou girá-lo conforme desejemos.</p>
            <p>Para acessar os controles de transformação da camadas podemos:</p>
            <p>I. Selecionar a camada do conteúdo desejado, podemos ir ao menu Edit – Free Transform.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem67.PNG') }}" alt="guia">
                </figure>
            </div>
            <p>II. Move da barra de ferramentas e habilitando a opção Show Transform Controls.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem68.PNG') }}" alt="guia">
                </figure>
            </div>
            <p>III. Combinando as teclas CTRL+T.</p>
            <p>Posicionado o mouse sob os controles nas diagonais, podemos uti lizar o comando de
            escalonamento:</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem69.PNG') }}" alt="guia">
                </figure>
            </div>
            <p>Aproximando o mouse dos controles nas diagonais, podemos utilizar o comando
            de rotação:</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem70.PNG') }}" alt="guia">
                </figure>
            </div>
            <p>Para ambos os casos, podemos contar com o auxílio de teclas de controle para tornar a
            edição mais precisa:</p>
            <p>I. Ao escalonar um conteúdo, podemos manter a tecla SHIT pressionada para que este se escalone proporcionalmente.</p>
            <p>Pressionando ao mesmo tempo as teclas CTRL+SHIFT enquanto arrastamos
            o mouse, o conteúdo além de escalonar-se proporcionalmente, irá fazê-lo a
            partir do centro da seleção.</p>
            <p>II. Mantendo a tecla SHIFT pressionada enquanto giramos o conteúdo, poderemos encaixá-lo apenas em ângulos inteiros.</p>
            <h5 class="barlaw">Mesclando camadas</h5>
            <p>Duas ou mais camadas podem ser unificadas a fim de se tornarem apenas um conteúdo
            na composição. Este comando destrói a individualidade de cada camada, mantendo o
            nome da camada que estiver acima. Podemos chamar essa ação de Mesclar camadas.</p>
            <p>Para mesclar duas ou mais camadas podemos:</p>
            <p>I. Selecionar as camadas desejadas</p>
            <h5 class="barlaw">Bloqueando camadas</h5>
            <p>Em algumas ocasiões, precisamos manter o conteúdo de uma camada bloqueado para
            que este não interfira na edição do conteúdo de outra camada. Para bloquear uma camada podemos clicar no ícone do cadeado<img style="display: inline;" src="{{ asset('assets/img/photoshop/unit2/imagem71.PNG') }}" alt="guia"> localizado no painel de camadas.</p>
            <p>Assim, ao tentarmos arrastar o conteúdo de uma camada bloqueada, veremos a seguinte mensagem:</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem72.PNG') }}" alt="guia">
                </figure>
            </div>
            <p>Ela indica que o conteúdo da camada encontra-se bloqueado e por isso não pode ser
            movido.</p>
            <h5 class="barlaw">Desenhando Seleções com a ferramenta de Vetor</h5>
            <p>Quando precisarmos realizar uma seleção mais avançada para um conteúdo e as ferramentas de área, seleção rápida ou laço não resolvem, podemos utilizar uma seleção que
            nos permita desenhar um caminho no qual nós mesmos queremos incluir na seleção.</p>
            <p>E para criar esses caminhos, o photoshop dispõe de um grupo de formas básicas (shapes) que quando configurados para criar apenas caminhos, servirão como base para
            uma seleção. E entre todas as formas, a mais indicada para desenhar em áreas difíceis é
            a Pentool (caneta).<img style="display: inline;" src="{{ asset('assets/img/photoshop/unit2/imagem73.PNG') }}" alt="guia"></p>
            <p>Para iniciar uma seleção usando a Pentool, primeiramente devemos mudar o modo que
            a caneta irá trabalhar.</p>
            <p>I. Escolha a fermenta Pentool e na barra de propriedades, altere o Pentool Mode de Shape
            para Path</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem74.PNG') }}" alt="guia">
                </figure>
            </div>
            <p>Isso fará com que ao invés de desenharmos uma forma que assumirá uma nova camada, tenhamos apenas o caminho desse desenho demarcado na tela.</p>
            <p>Usar a Pentool é uma técnica bastante intuitiva, uma vez que ela trabalha ligando os pontos ou nós que
            cria cada vez que clicamos em uma área. Porém, algumas dicas são úteis para que possamos trabalhar
            com maior eficiência:</p>
            <p>I. Inicie clicando em uma área bem próxima a que deseja selecionar.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem75.PNG') }}" alt="guia">
                </figure>
            </div>
            <p>II. Para ligar dois nós basta clicar em outra área que um caminho em linha reta será criado.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem76.PNG') }}" alt="guia">
                </figure>
            </div>
            <p>III. Para desenhar uma curva, escolha uma área que abranja a curva que deseja recriar e ao
            clicar, arraste o mouse mantendo-o pressionado. Isso transformará o caminho em curva e o
            nó exibirá agora as alavancas de intensidade da curva conhecidas como Handles.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem77.PNG') }}" alt="guia">
                </figure>
            </div>
            <p>IV. Para fechar uma curva e iniciar um novo caminho em linha reta, clique no nó
            final desta curva mantendo a tecla ALT pressionada.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem78.PNG') }}" alt="guia">
                </figure>
            </div>
            <p>V. Mantendo a tecla de ESPAÇO e o botão do mouse pressionado, podemos
            redefinir a posição do próximo nó enquanto o criamos.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem79.PNG') }}" alt="guia">
                </figure>
            </div>
            <p>VI. Mas caso deseje redefinir algum nó já criado, selecione a ferramenta Direct
            Selection para fazer a alteração não apenas da posição, como da curva desse
            nó.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem80.PNG') }}" alt="guia">
                </figure>
            </div>
            <p>VII. Pode-se ainda adicionar novos nós, removê-los ou converter algum em curva
            caso tenhamos terminado de criar o caminho. Para isso, abra o menu desdobrável
            da Pentool para usar as outras opões.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem81.PNG') }}" alt="guia">
                </figure>
            </div>
            <p>Os nós devem ser criados segundo a área que desejamos selecionar até que encontremos o nó inicial do caminho. Quando apontarmos para ele, um pequeno círculo surgirá</p>
            <p>junto ao cursor da Pentool. Ele indica o fechamento do caminho. Após o fechamento do caminho, devemos transformá-lo em seleção. Para isso podemos:</p>
            <p>I. Ainda usando a Pentool, clicar com o botão direito do mouse sob o caminho
            e escolher a opção Make Selection.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem82.PNG') }}" alt="guia">
                </figure>
            </div>
            <p>II. Combinar as teclas CTRL+ENTER.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem83.PNG') }}" alt="guia">
                </figure>
            </div>
            <h5 class="barlaw">Refine Edge</h5>
            <p>Sempre que selecionamos um conteúdo de uma imagem e levamos ele para outro fundo
            em uma composição, este tende a trazer consigo alguns resquícios de partes do plano
            de fundo em que essa imagem se encontrava anteriormente. E mesmo que o conteúdo
            esteja sendo selecionado para uma alteração local, devemos tratar os limites dessa seleção para que ela esteja perfeita. A solução mais imediata a uma seleção avançada como
            é o caso da Pentool, é a Refine Edge.</p>
            <p>Com esse recurso nós podemos tratar finamente as arestas, suavidade, contraste, e
            limite da seleção.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem84.PNG') }}" alt="guia">
                </figure>
            </div>
            <p>Um bom modo de trabalhar com o Refine Edge é usando o background da imagem como
            Black configurando temporariamente através do Painel Mode.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem85.PNG') }}" alt="guia">
                </figure>
            </div>
            <p>O modo Black permite um favorável contraste entre a área selecionada e o fundo preto,
            fazendo com os controles exibam melhor o resultado de suas configurações.</p>
            <p>Para iniciarmos um tratamento da seleção usando o Refine Edge, o controle mais aconselhável será o SHIFT EDGE. Ele troca o conteúdo da seleção para dentro da área e já
            praticamente resolvendo a remoção das arestas.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem86.PNG') }}" alt="guia">
                </figure>
            </div>
            <p>Ainda podemos contar com o Smoot, o Faether e o Contrast que ajudam respectivamente no equilíbrio da suavidade, e cores das arestas.</p>
            <p>Quando o resultado desejado for alcançado através da pré-visualização da janela Refine
            Edge, podemos então escolher qual a forma de saída da seleção através da caixa de listagem Output to.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem87.PNG') }}" alt="guia">
                </figure>
            </div>
            <p>Das opões disponíveis temos:</p>
            <p>I. Selection – Adapta as alterações escolhidas no refine edge para a seleção</p>
            <p>atual, modificando-a.</p>
            <p>II. Layer Mask – Cria uma camada a partir da seleção com os refinamentos da</p>
            seleção. Onde a área selecionada será representada pela parte visível da camada, onde a parte deselecionada, representa as áreas ocultas da máscara.</p>
            <p>III. New Layer – Cria uma nova camada nova a partir da seleção.</p>
            <p>IV. New Layer with layer mask – Cria uma nova camada com máscara a partir da
            seleção.</p>
            <p>V. New docuement – Cria um novo documento a partir da seleção.</p>
            <p>VI. New documents with layer mask – Além de criar um novo documento para a
            seleção, cria uma máscara para ele.</p>
            <h5 class="brlaw">Match Color Adjustment</h5>
            <p>Um poderoso recurso para corresponder as cores, de uma camada para outra e inclusive
            entre imagens diferentes. Ele também permite ajustar as cores em uma imagem alterando a luminosidade e a faixa de cores, e neutralizando a projeção de cores. O comando
            Corresponder Cor funciona apenas no modo RGB.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit2/imagem88.PNG') }}" alt="guia">
                </figure>
            </div>
            <h5 class="brlaw center-align">A T I V I D A D E S</h5>
            <p><b>1.</b> Recortar um personagem de um wallpaper usando a pentool. Refinar arestas
            usando Refine Edge.</p>
            <p><b>2.</b> Inserir o personagem recortado em um outro background e mesclar o personagem com o cenário usando match color adjustment.</p>
        </div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
