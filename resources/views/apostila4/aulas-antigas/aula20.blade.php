@extends('layouts.template')
@section('titulo','Unit 9 | Aula 20 – Animação Quadro-a-Quadro')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila4" data-unidade="unidade9" data-etapa="aula20">
			<h3 class="barlow">UNIT 9</h3>
			<h5 class="barlow upper">Aula 20 – Animação Quadro-a-Quadro</h5>
			{{-- <span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila3/UNIT 7/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
            </audio> --}}
            <div class="clear"></div>
            <h5 class="barlow">Fluxo de trabalho de quadro de animação</h5>
            <p style="margin-top: 16px">
                Fluxo de trabalho de quadro de animação ou Linha do tempo para criar quadros de animação. 
                Cada quadro representa uma configuração de camadas.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem1.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <div class="clear"></div>
            <p style="margin-top:32px">Para criar animações com base em quadros no Photoshop, devemos usar o seguinte fluxo de trabalho geral:</p>
            <p>• Criar um novo documento</p>
            <p>Se ainda não estiverem visíveis, abra os painéis Animação. Ative-os através do menu Window – Timeline</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem2.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">Verifi que se o painel Timeline está no modo Frame Animation no seletor de modo de timeline</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem3.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">Clique no botão Frame animation.</p>
            <p>• Adicionar uma nova camada ou converter o background em camada</p>
            <p>Como não é possível animar uma camada de plano de fundo, adicione uma nova camada ou converta a camada de plano de fundo em uma camada normal.</p>
            <p>• Adicionar conteúdo para sua animação</p>
            <p>
                Se a animação incluir vários objetos que sejam animados independentemente, ou para
                alterar a cor de um objeto ou alterar completamente o conteúdo em um quadro, crie os
                objetos em camadas separadas.
            </p>
            <p>• Adicionar um frame ou duplicar o frame atual no painel Timeline</p>
            <p>Podemos duplicar o frame atual clicando no botão Duplicaté Selected Frame<i><img class="iconex" src="{{ asset('assets/img/photoshop/unit9/icone1.png') }}" alt="guia"></i></p>
            <p>Para criar um novo frame, podemos clicar no botão do menu do painel Timeline e escolher a opção New Frame</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem4.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <ul class="lista-vertical">
                <li><p>• Selecionar o frame</p></li>
                <li><p>• Editar a camada para o frame selecionado</p></li>
                <li><p>• Adicionar mais frames e editar camadas se necessário</p></li>
                <li><p>• Edite as camadas para o quadro selecionado. Siga um destes procedimentos:</p></li>
                <li><p>• Ative e desative a visibilidade para diferentes camadas.</p></li>
                <li><p>• Altere a posição de objetos ou camadas para mover o conteúdo da camada.</p></li>
                <li><p>• Altere a opacidade da camada para fazer o conteúdo aparecer ou desaparecer gradualmente.</p></li>
                <li><p>• Altere o modo de mesclagem das camadas.</p></li>
                <li><p>• Adicione um estilo às camadas.</p></li>
                <li><p>• Adicione mais quadros e edite as camadas conforme necessário. </p></li>
            </ul>

            <p>
                O número de quadros que podem ser criados é limitado apenas pela quantidade de
                memória disponível no sistema para o Photoshop.
            </p>
            <p>
                Usando o comando Tween, é possível gerar novos quadros com alterações intermediárias
                entre dois quadros existentes no painel. É uma maneira rápida de fazer um objeto se
                mover pela tela ou, gradualmente, aparecer ou desaparecer. Consulte Criação de quadros usando transições
            </p>
            <p>• Defina as opções de looping e o tempo de retardo dos quadros.</p>
            <p>Pode-se atribuir um tempo de retardo a cada quadro e especificar um looping que reproduza a animação uma vez, um número determinado de vezes ou continuamente.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem5.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">
                Consulte especificação de um tempo de retardo em quadros de animação e especificação 
                de looping em quadros de animação
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem6.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">• Visualize a animação</p>
            <p>
                Use os controles no painel Animação ou Linha do tempo para reproduzir a animação
                conforme você a cria. Depois, use o comando Export – Save for web (Legacy) e dispositivos a fim de visualizar a animação no navegador da Web. Consulte Visualização
                de imagens otimizadas no navegador da Web.
            </p>        
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem7.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">• Otimize a animação para obter um download mais eficaz.</p>
            <p>• Salve a animação.</p>

            <p><b>Como adicionar quadros a uma animação</b></p>
            <p>
                A inclusão de quadros é o primeiro passo na criação de uma animação. Se houver uma
                imagem aberta, a Linha do tempo exibirá a imagem como o primeiro quadro em uma
                nova animação. Cada quadro adicionado começa como uma duplicata do quadro anterior. Depois, use o painel Camadas para fazer alterações no quadro.
            </p>
            <p><b>Seleção de quadros de animação</b></p>
            <p>
                Antes de poder trabalhar com um quadro, é necessário selecioná-lo como o quadro atual. 
                O conteúdo do quadro atual aparece na janela de documentos.
            </p>
            <p>
                Na linha de tempo o quadro atual é indicado por uma borda mais estreita (dentro do realce de seleção sombreado) ao redor da miniatura de quadro. Os quadros selecionados
                são indicados por um realce sombreado ao redor de suas respectivas miniaturas.
            </p>
            <p><b>Seleção de um quadro de animação</b></p>
            <ul class="lista-vertical">
                <li><p>Proceda de uma das seguintes formas na Linha de tempo:</p></li>
                <li><p>• Clique em um quadro.</p></li>
                <li><p>• Clique no botão “go to next frame” para selecionar o quadro seguinte da série como o quadro atual</p></li>
                <li><p>• Clique no botão “go to previous frame” para selecionar o quadro anterior da série como o quadro atual.</p></li>
                <li><p>• Clique no botão “go to first frame” para selecionar o primeiro quadro da série como o quadro atual.</p></li>
                <li><p>Seleção de vários quadros de animação</p></li>
                <li><p>No painel Linha de tempo proceda de uma das seguintes formas:</p></li>
                <li><p>• Para selecionar vários quadros adjacentes, clique em um segundo quadro com a tecla Shift pressionada. Todos os quadros neste intervalo serão selecionados.</p></li>
                <li><p>• Para selecionar vários quadros não adjacentes, clique nos quadros adicionais com a tecla Ctrl pressionada para incluí-los na seleção.</p></li>
                <li><p>• Para selecionar todos os quadros, clique no menu select botão all layers.</p></li>
                <li><p>• Para desmarcar um quadro em uma seleção de vários quadros, clique nele com a tecla Ctrl pressionada.</p></li>
            </ul>

            <p><b>Edição de quadros de animação</b></p>
            <ul class="lista-vertical">
                <li><p>No painel Linha de tempo, selecione um ou mais quadros.</p></li>
                <li><p>• Para editar o conteúdo de objetos em quadros de animação, use o painel Camadas para modificar as camadas na imagem que afetem o quadro.</p></li>
                <li><p>• Para alterar a posição de um objeto em um quadro de animação, selecione a camada contendo o objeto no painel Camadas e arraste-o para a nova posição.</p></li>
                <li><p>• Para inverter a ordem dos quadros de animação, no menu do painel, escolha Reverse Frames.</p></li>
                <li>
                    <p>
                        Para excluir os quadros selecionados, no menu do painel Animação, escolha Excluir
                        quadro, ou clique no ícone Excluir e, em seguida, clique em Sim para confirmar a exclusão. Também é possível arrastar o quadro selecionado para o ícone Excluir.
                    </p>
                </li>
            </ul>
            <p><b>Criação de quadros usando transições</b></p>
            <p>
                Tweening (transição) é uma derivação de “in betweening”, que é um termo tradicional
                na área de animação usado para descrever o processo de transição de imagens. As transições (também chamadas de interpolação) reduzem significativamente o tempo exigido
                para criar efeitos de animação, como aparecimento e desaparecimento, ou mover um
                elemento sobre um quadro. Depois de criados, os quadros agrupados em transições
                podem ser editados individualmente.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem8.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">
                Use o comando Transição para adicionar ou modificar automaticamente uma série
                de quadros entre dois quadros existentes, variando as propriedades de camadas
                (parâmetros de posição, opacidade ou efeito) igualmente nos novos quadros para
                criar a ilusão de movimento. Por exemplo, para fazer com que uma camada desapareça gradualmente, defina sua opacidade no quadro inicial como 100% e, em
                seguida, defina a opacidade da mesma camada no quadro final como 0%. Quando a
                transição for feita entre os dois quadros, a opacidade da camada será reduzida uniformemente entre os novos quadros.
            </p>
            <p><b>Uso de transições para animar</b></p>
            <p>Para aplicar transições a uma camada específica, selecione-a no painel Camadas.</p>
            <p>Selecione um único quadro ou vários quadros adjacentes.</p>
            <ul class="lista-vertical">
                <li><p>• A seleção de um único quadro permite optar pela transição desse quadro com o anterior ou o seguinte.</p></li>
                <li><p>• A seleção de dois quadros adjacentes fará com que novos quadros sejam adicionados entre eles.</p></li>
                <li><p>• A seleção de mais de dois quadros fará com que os quadros existentes entre o primeiro e o último selecionado sejam alterados pela operação de transição.</p></li>
                <li>
                    <p>
                        • A seleção do primeiro e do último quadro de uma animação fará com que eles
                        sejam tratados como adjacentes, e os quadros de transição são adicionados depois do
                        último. (Esse método de transição é útil quando a animação está definida para executar
                        loop várias vezes.)
                    </p>
                </li>
            </ul>
            <p><b>Siga um destes procedimentos:</b></p>
            <p>1. Clique no botão Tween Animation Frames no painel Linha de Tempo.</p>
            <p>2. No menu do painel, selecione Tween. </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem9.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">Especifique uma ou mais camadas que serão modificadas nos quadros adicionados:</p>
            <p><b>All Layers:</b> Modifica todas as camadas em um ou mais quadros selecionados.</p>
            <p><b>Selected Layer:</b> Modifica apenas a camada atualmente selecionada em um ou mais quadros selecionados.</p>
            <p>Especifique as propriedades de camada a serem modificadas:</p>
            <p><b>Position:</b> Modifica uniformemente a posição do conteúdo da camada nos novos quadros, entre os quadros inicial e final.</p>
            <p><b>Opacity:</b> Modifica uniformemente a opacidade dos novos quadros, entre os quadros inicial e final.</p>
            <p><b>Effects:</b> Modifica igualmente as configurações de parâmetros de efeitos de camada entre o primeiro e o último quadro.</p>
            <p>Ao selecionar um único quadro na etapa 2, no menu Tween, escolha um local para adicionar os quadros:</p>
            <p>
                <b>Next Frame:</b> Adiciona quadros entre o quadro selecionado eo quadro a seguir. Esta
                opção não está disponível quando você seleciona o último quadro no painel Timeline.
            </p>
            <p>
                <b>First Frame:</b> Adiciona quadros entre o último quadro e o primeiro quadro. Esta opção
                está disponível somente se você selecionar o último quadro no painel Timeline.
            </p>
            <p>
                <b>Previous Frame:</b> Adiciona quadros entre o quadro selecionado e o quadro anterior. Essa
                opção não está disponível quando você seleciona o primeiro quadro no painel Timeline.
            </p>
            <p>
                <b>Last Frame:</b> Adiciona quadros entre o primeiro quadro eo último quadro. Esta opção
                está disponível somente se você selecionar o primeiro quadro no painel Linha de tempo.
            </p>
            <p>
                Na caixa quadros para adicionar, digite um valor ou use a seta para cima ou para baixo para escolher o número de quadros. 
                (Esta opção não está disponível se você selecionou mais de dois quadros.)
            </p>
            <p><b>Adicionar uma nova camada para cada novo quadro</b></p>
            <p> 
                O comando Criar nova camada para cada novo quadro adiciona automaticamente
                uma nova camada visível no novo quadro, mas oculta em outros quadros. Essa opção
                economiza tempo quando você está criando uma animação que exige que você adicione um novo elemento visual a cada quadro.
            </p>
            <p><b>Escolha Creaté New Layer For Each New Frame no menu do painel Timeline.</b></p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem10.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">Uma marca de seleção indica que a opção está ativada.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem11.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px"><b>Ocultar camadas em quadros de animação</b></p>
            <p>Quando você cria uma nova camada, ela é visível em todos os quadros de animação por padrão.</p>
            <p>Para exibir novas camadas somente em quadros ativos, desmarque New Layers Visible In All Frames no menu do painel Timeline.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem12.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">Para ocultar uma camada em um frame específico, selecione o frame e, em seguida, esconda a camada desejada no painel Layers.</p>
            <p>Especificar um Delay de atraso em animações de quadros:</p>
            <p>
                Podemos especificar um atraso no tempo em que um quadro quando este é exibido -
                para quadros individuais ou para vários quadros em uma animação. O tempo de atraso
                é exibido em segundos. As frações de um segundo são exibidas como valores decimais.
                Por exemplo, um quarto de segundo é especificado como 0,25. Se você definir um atraso
                no quadro atual, cada quadro que você criar depois disso lembrará e aplicará esse valor de atraso.
            </p>
            <p>Selecione um ou mais quadros no painel Linha de tempo.</p>
            <p>Clique no valor Delay abaixo da moldura selecionada para exibir o menu pop-up.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem13.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px"><b>Especifique o atraso:</b></p>
            <p>• Escolha um valor no menu pop-up. (O último valor usado aparece na parte inferior do menu.)</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem14.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>   
            <p style="margin-top:32px">
                • Escolha Outro, insira um valor na caixa de diálogo Definir atraso de quadros e
                clique em OK. Se você selecionou vários quadros, especificar um valor de atraso para um
                quadro aplica o valor a todos os quadros.
            </p>
            <p><b>Specify looping in frame animations</b></p>
            <p>Podemos selecionar uma opção de loop para especificar quantas vezes a sequência de animação se repete quando reproduzida.</p>
            <p>• Clique na caixa Seleção de opções de loop no canto inferior esquerdo do painel Linha de tempo.</p>
            <p>• Selecione uma opção de loop: uma vez, três vezes, para sempre ou outra.</p>
            <p>• Se você selecionou Outro, insira um valor na caixa de diálogo Definir contagem de loop e clique em OK.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem15.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px"><b>Salvar no formato GIF</b></p>
            <p>Podemos usar o comando Export – Save for web (Legacy) para salvar uma sequência de imagens no formato gif</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem16.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">No painel Save for Web, clique no menu drop-down Preset para escolher um formato de arquivo Gif</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem17.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">Os presets que apresentam valores 64 ou 128, representam o número de cores de cada formato</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem18.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">
                Podemos alterar a resolução do arquivo para que esse número reduzido de cores se
                adapte melhor a imagem e o tamanho do arquivo não prejudique seu carregamento na web.
            </p>    
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem19.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">
                O menu Looping Options apresenta duas escolhas para a repetição da animação. O valor
                Once, reproduz apenas uma vez, enquanto que o valor Forever, mantem a animação em looping contínuo.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem20.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px"><b>Layer Comps</b></p>
            <p>
                Os designers normalmente criam várias composições ou (comps) de um layout de página para mostrar aos clientes. Usando composições de camada, é possível criar, gerenciar
                e exibir várias versões de um layout em um só arquivo do Photoshop.
            </p>
            <p>
                Uma composição de camada é um instantâneo de um estado do painel Camadas. As
                composições registram três tipos de opções de camada:
            </p>
            <p>• Visibilidade da camada — se a camada está visível ou oculta.</p>
            <p>• Posição da camada no documento.</p>
            <p>• Aparência da camada — se o estilo da camada é aplicado a ela e a seu modo de mesclagem</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem21.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">Para ativar o painel Layer comps devemos clicar em Window – Layer Comps.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem22.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px"><b>Criar um layer comp</b></p>
            <p>
                1. Clique no botão Creaté New Layer Comp, na parte inferior do Layer Comps. A
                nova layer comp reflete o estado atual das camadas no painel Layers.
            </p>
            <p>
                2. Na caixa de diálogo New Layer Comp, atribua um nome à composição, inclua
                comentários descritivos e escolha as opções a serem aplicadas às camadas. Visibilidade, Posição e Aparência.
                <i><img class="iconex" src="{{ asset('assets/img/photoshop/unit9/icone2.png') }}" alt="guia"></i>
            </p>
            <p>3. Clique em OK. As opções escolhidas são armazenadas como padrões para sua próxima composição.</p>
            <p><b>Aplicar e exibir composições de camada</b></p>
            <p>No painel Composição de camada, siga um destes procedimentos:</p>
            <p>
                1. Para exibir uma composição de camada, aplique-a primeiro. Clique no ícone
                Updaté Layer Comp ao lado da composição selecionada.
                <i><img class="iconex" src="{{ asset('assets/img/photoshop/unit9/icone3.png') }}" alt="guia"></i>
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem23.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">
                2. Para alternar a visualização de todas as composições de camada, use os botões
                Anterior <i><img class="iconex" src="{{ asset('assets/img/photoshop/unit9/icone4.png') }}" alt="guia"></i> 
                e Próximo na parte inferior do painel. <i><img class="iconex" src="{{ asset('assets/img/photoshop/unit9/icone5.png') }}" alt="guia"></i>
                (Para alternar composições específicas, primeiro selecione-as).
            </p>
            <p>
                3. Para restaurar o documento ao estado em que estava antes da escolha de
                uma composição de camada, clique no ícone Updaté Layer Comp ao lado de Último
                estado do documento, na parte superior do painel.
            </p>
            <h5 class="barlow upper center-align" style="margin-top:10%">A T I V I D A D E S</h5>
            <p style="margin-top:5%">
                1. Criar uma animação usando sprites baseando-se no conceito de uma cena com um
                personagem em um cenário.
            </p>
        </div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
