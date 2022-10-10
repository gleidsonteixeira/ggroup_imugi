@extends('layouts.template')
@section('titulo','Unit 8 | Aula 22 – Edição de vídeos II')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila4" data-unidade="unidade9" data-etapa="aula22">
			<h3 class="barlow">UNIT 9</h3>
			<h5 class="barlow upper">Aula 22 – Edição de vídeos II</h5>
			{{-- <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/UNIT 7/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio> --}}
			<div class="clear"></div>
			<h5 class="barlow">Vídeo Timeline</h5>
			<p>
				Para animar o conteúdo da camada no modo vídeo timeline, devemos definir o
				quadros-chave (keyframe) no painel Timeline, à medida que movemos o indicador
				de tempo atual para um tempo / quadro diferente e, em seguida, modificamos a
				posição, a opacidade ou o estilo do conteúdo da camada. O Photoshop adiciona ou
				modifica automaticamente uma série de quadros entre dois quadros existentes -
				variando as propriedades da camada (posição, opacidade e estilos) uniformemente
				entre os quadros novos para criar a aparência de movimento ou transformação.
			</p>
			<p>
				Por exemplo, se quisermos criar um efeito de fade out em uma camada, devemos definir
				a opacidade da camada no quadro inicial para 100% e clicar no cronômetro Opacity para
				a camada. Em seguida, mover o indicador de tempo atual para o tempo / quadro para o
				quadro final e definir a opacidade para a mesma camada como 0%. O Photoshop interpola
				automaticamente os quadros entre os quadros de início e de fim e a opacidade da camada é
				reduzida uniformemente nos novos quadros.
			</p>
			<p>
				Além de deixar o Photoshop interpolar quadros em uma animação, também podemos criar
				uma animação quadro a quadro desenhada à mão, pintando em uma camada de vídeo em
				branco.
			</p>
			<p>Para criar uma animação baseada na vídeo timeline, faça o seguinte:</p>
			<p>1. Crie um novo documento.</p>
			<p>
				Especifique o tamanho e o conteúdo do plano de fundo. Certifique-se de que a
				relação de aspecto de pixel e as dimensões são apropriadas para a saída da sua
				animação. O modo de cor deve ser RGB. A menos que você tenha motivos especiais
				para fazer alterações, deixe a resolução em 72 pixels / polegada, a profundidade de
				bits em 8 bpc e a proporção de pixel no quadrado.
			</p>
			<p>
				Certifique-se de que o painel Timeline esteja aberto. Se necessário, clique na seta de
				downpointing no meio do painel, escolha Criar cronograma de vídeo no menu e, em
				seguida, clique no botão à esquerda da seta. Se o painel Timeline estiver no modo de
				Frame animation, clique no ícone Convert To Vídeo Timeline no canto inferior esquerdo
				do painel.
			</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem35.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">2. Defina a taxa de quadros da linha de tempo no menu do painel.</p>
			<p>
				Quando estivermos trabalhando no modo timeline, podemos especificar a duração e a
				taxa de quadros de um documento contendo vídeo ou animação. Duração é o tempo total do clipe de vídeo, a partir do primeiro quadro que especificamos para o último. Taxa
				de quadros ou quadros por segundo (fps), geralmente é determinada pelo tipo de saída
				que produzimos: vídeo NTSC tem uma taxa de quadros de 29,97 fps; Vídeo PAL tem uma
				taxa de quadros de 25 fps; e cinema tem uma taxa de quadros de 24 fps. Dependendo do
				sistema de transmissão, o vídeo DVD pode ter a mesma taxa de quadros do vídeo NTSC
				ou PAL, ou uma taxa de quadros de 23.976.
			</p>
			<p>
				Quando criamos um novo documento, a duração da linha de tempo padrão é 10
				segundos. A taxa de quadros depende da predefinição do documento escolhido.
				Para pré-ajustes não-vídeo (como International Paper), a taxa padrão é 30 fps. Para
				pré-ajustes de vídeo, a taxa é 25 fps para PAL e 29,97 para NTSC.
			</p>
			<p>Podemos definir a taxa de quadros (frame raté) no modo vídeo timeline da seguinte forma:</p>
			<p>• Clicando no menu do painel timeline e escolhendo a opção Set Timeline Frame Raté</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem36.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">• Na janela Timeline Frame Raté, definir a taxa clicando no menu drop-down Frame Raté.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem37.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">
				Podemos definir a duração do vídeo no modo timeline de vídeo da seguinte forma:
			</p>
			<p>• Clicando o botão direito do mouse sobe a faixa de vídeo na propria timeline</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem38.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">
				• Na janela que surgir, certifique-se que o ícone do simbolo de vídeo <i><img class="iconex" src="{{ asset('assets/img/photoshop/unit9/icone6.png') }}" alt="guia"></i> econtra-se marcado. Isto lhe dará acesso aos controles deslizantes Duration e Speed. Arraste
				o controle deslizante Duration para definir a duração do vídeo
			</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem39.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">3. Crie uma camada.</p>
			<p>
				As camadas de plano de fundo não podem ser animadas. Se quisermos animar o conteúdo, converta a camada de plano de fundo em uma camada normal ou adicione uma
				das seguintes opções:
			</p>
			<p>• Uma nova camada para adicionar conteúdo.</p>
			<p>• Uma nova camada de vídeo para adicionar conteúdo de vídeo.</p>
			<p>• Uma nova camada de vídeo em branco para clonagem de conteúdo ou criação de animações desenhadas à mão.</p>
			<p>4. Adicione conteúdo à camada.</p>
			<p>5. Mova o indicador de marcador de tempo para o tempo ou quadro onde você deseja definir o primeiro quadro-chave.</p>
			<p>
				Podemos animar propriedades de camadas diferentes, como Posição, Opacidade e
				Estilo. Cada mudança pode ocorrer independentemente de, ou simultaneamente
				com outras mudanças. Também podemos animar diferentes objetos livrese, para
				isso é melhor criá-los em camadas separadas.
			</p>
			<p>Veja na próxima página algumas formas de animar propriedades de camadas:</p>	
			<p>
				• Podemos animar a posição adicionando um quadro-chave à propriedade Position,
				movendo o indicador de tempo atual e arrastando a camada na janela do documento
			</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem40.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">
				• Podemos animar a opacidade de uma camada adicionando um quadro-chave
				à propriedade Opacity, movendo o indicador de tempo atual e alterando a opacidade da camada no painel Camadas.
			</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem41.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">
				Para animar uma propriedade usando quadros-chave, devemos definir pelo menos dois
				quadros-chave para essa propriedade. Caso contrário, as alterações feitas na propriedade de camada permanecerão em vigor durante a duração da camada
			</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem42.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">
				Cada propriedade de camada tem um ícone de cronômetro Enable Keyframe Animation <i><img class="iconex" src="{{ asset('assets/img/photoshop/unit9/icone7.png') }}" alt="guia"></i>
				que	clicamos para começar a animar. Quando o cronômetro está ativo para uma propriedade específica, 
				o Photoshop define automaticamente novos
				quadros-chave sempre que alterarmos a posisão do marcador de tempo e o valor da
				propriedade. Quando o cronômetro está inativo para uma propriedade, ela não possui quadros-chave. 
				Digitarmos um valor para uma propriedade de camada enquanto o cronômetro esti ver inativo, o valor 
				permanecerá em vigor durante a duração
				da camada. Desmarcarmos o cronômetro, apagaremos permanentemente todos os
				quadros-chave dessa propriedade.
			</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem43.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">
				6. Mova o indicador marcador de tempo para tempo ou quadro onde você
				deseja definir o primeiro quadro-chave
			</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem44.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">7. Ative o keyframing para uma propriedade de camada</p>
			<p>
				Clique no triângulo ao lado do nome da camada. Um triângulo de apontar para baixo
				exibe as propriedades da camada. Em seguida, clique no cronômetro para definir o
				primeiro quadro-chave para a propriedade de camada que deseja animar. Você pode
				definir quadros-chave para mais de uma propriedade de camada de cada vez
			</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem45.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">8. Mova o indicador de marcador de tempo e altere uma propriedade de camada.</p>
			<p>
				Mova o indicador de marcador de tempo para a tempo ou quadro em que a propriedade
				da camada será alterada. Podemos fazer um ou mais dos seguintes:
			</p>
			<p>• Alterar a posição da camada para mover o conteúdo da camada.</p>
			<p>• Alterar a opacidade da camada para tornar o conteúdo menos opaco ou mais opaco.</p>
			<p>• Alterar a posição de uma máscara de camada para revelar diferentes partes	da camada.</p>
			<p>• Ativar ou desativar uma máscara de camada.</p>
			<p>Para alguns tipos de animação, como alterar a cor de um objeto ou alterar completamente o conteúdo de um quadro, precisamos de camadas adicionais com o novo conteúdo.</p>
			<p>9. Adicione camadas adicionais com conteúdo e edite as propriedades da camada conforme necessário.</p>
			<p>10. Mover ou aparar a barra de duração da camada para especificar quando uma camada aparece em uma animação.</p>
			<p>
				Para definir a duração da linha de tempo que você deseja exportar ou visualizar, execute
				um dos procedimentos a seguir no painel Timeline:
			</p>
			<p>• Arraste uma das extremidades da barra da área de trabalho.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem46.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">• Arraste a barra de área de trabalho sobre a seção que você deseja visualizar.</p>
			<p>• Mova o indicador de tempo atual para a hora ou quadro desejado. No menu do painel, escolha Work area – Set start at a playhead.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem47.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">• Em seguida, arraste o marcador de tempo para o fim da área e escolha Work area – Set end at a playhead.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem48.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">
				• Para remover as partes da linha do tempo que não estão na área de trabalho,
				posicione o marcador de tempo no início da marcação da work area e escolha Move and
				Trim – Trim start at playhead.
			</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem49.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">• Em seguida, realize o mesmo para o fim da work area escolhendo Move and Trim – Trim end at playhead.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem50.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">11. Visualizar a animação.</p>
			<p>Use os controles no painel Timeline para reproduzir a animação à medida que a cria.</p>
			<p>Em seguida, visualize a animação no seu navegador. Você também pode visualizar a animação na caixa de diálogo Save for web.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem51.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">
				Seu vídeo ou animação pode ser visualizado na janela do documento. O Photoshop usa a
				memória RAM para visualizar o vídeo ou a animação durante a sessão de edição. Quando você 
				toca ou arrasta o marcador de tempo para pré-visualizar quadros, eles são automaticamente armazenados 
				em cache para reprodução mais rápida na próxima vez que
				forem reproduzidos. Os quadros em cache são indicados pela barra verde na área de
				trabalho do painel Timeline. O número de quadros armazenados em cache depende da
				quantidade de RAM disponível para o Photoshop.
			</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem52.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">12. Salvar a animação.</p>
			<p>
				Podemos salvar a animação como um GIF animado usando o comando Salvar na Web ou
				como uma sequência de imagens ou vídeo usando o comando Render Vídeo. Podemos
				também salvá-lo no formato PSD, que pode ser importado para o Adobe After Effects.
			</p>
			<p>Exportar arquivos de vídeo ou sequências de imagens</p>
			<p>• Escolha File – Export - Render vídeo.</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem53.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">• Na caixa de diálogo Render Vídeo, digite um nome para a sequência de vídeo ou imagem.</p>
			<p>• Clique no botão Selecionar pasta e navegue até o local dos arquivos exportados.</p>
			<p>• Para criar uma pasta para conter o arquivo exportado, selecione a opção Criar	Nova Subpasta e insira um nome para a subpasta.</p>
			<p>
				• Escolha o Adobe Media Encoder ou o Photoshop Image Sequence no menu abaixo da seção Location 
				da caixa de diálogo Render Vídeo. Em seguida, escolha um formato de arquivo no menu pop-up. 
				Se você escolheu o Adobe Media Encoder, você pode escolher entre os formatos CPS, H.264 e QuickTime.
			</p>
			<p>• Em Range, selecione uma das seguintes opções:</p>
			<p>• All Frames (para exportar todos os quadros).</p>
			<p>• Start Frame / End Frame (para especificar um intervalo entre o frame inicial e final que desejamos que sejam exportados).</p>
			<p>• Work area (para exportar uma Work area previamente definida)</p>
			<p>• Clique em Render</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem54.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px"><b>Motion Presets</b></p>
			<p>
				Podemos inserir efeitos de movimentação na camada a ser animada de modo automatico 
				através de predefinições e usar os keyframes da timeline para editar este efeito apos sua aplicação.
			</p>
			<p>
				Para acessar as opções de Motion presets, basta clicar com o botão direito do mouse sob
				a faixa de linha de tempo da camada.
			</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem55.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px">• Escolha um dos presets:</p>
			<p>• Pan and Zoom</p>
			<p>• Pan</p>
			<p>• Zoom</p>
			<p>• Rotaté</p>
			<p>• Rotaté and Zoom</p>
			<p>• Em seguida, clique na camada dentro da linha de tempo para aplicar a animação</p>
			<p>
				• Caso deseje editar a animação, o photoshop da acesso aos keyframes que marcam a propriedades. 
				Para isso, basta expandir as propriedades de camada clicando na seta ao lado do nome.
			</p>
			<div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit9/imagem56.png') }}" alt="guia">
                </figure>
            </div>
			<div class="clear"></div>
			<p style="margin-top:32px"><b>Transition Presets</b></p>
			<p>
				Podemos inserir efeitos de movimentação na camada a ser animada de modo automático através de 
				predefinições e usar os keyframes da timeline para editar este efeito apos sua aplicação.
			</p>
			<p>
				Para acessar as opções de Motion presets, basta clicar com o botão direito do mouse sob
				a faixa de linha de tempo da camada.
			</p>
			<h5 class="barlow upper center-align" style="margin-top:10%">A T I V I D A D E S</h5>
            <p style="margin-top:5%">
                1. Criar uma animação a partir de uma composição de camadas utilizando os recursos de
				edição de vídeo aprendidos nessa aula
            </p>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
