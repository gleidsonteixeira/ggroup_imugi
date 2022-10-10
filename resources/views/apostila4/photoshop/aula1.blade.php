@extends('layouts.template')
@section('titulo','Photoshop | Aula 01 – Conhecendo o Adobe Photoshop')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade1" data-etapa="aula1">
			<h3 class="barlow">PHOTOSHOP</h3>
			<h5 class="barlow upper">Aula 1 – Conhecendo o Adobe Photoshop</h5>
            <div class="clear"></div>
            <h5 class="barlow">Sobre o Adobe Photoshop CC 2015</h5>
            <p style="margin-top: 16px">
                O Photoshop é um programa referencia para imagens digitais que conta com um vasto
                e poderoso arsenal de ferramentas e recursos para edição, tratamento, composição,
                pintura digital, automação e produção de vídeo.
            </p>
            <p style="margin-top: 16px">
                Por ser o melhor programa de edição de imagens e design do mundo, ele está sempre
                presente em projetos criativos, artísticos e profissionais. E nesta versão podemos trabalhar no desktop e em dispositivos móveis para criar e aprimorar designs com uma maior
                produtividade e acessibilidade.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit1/imagem1.png') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">
                Workspace (Espaço de trabalho)
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit1/imagem2.png') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">
            A área de trabalho do Adobe Photoshop inclui menus, barras de ferramentas e painéis
            que nos permitem um rápido acesso a uma variedade de opções para edição e adição
            de elementos para sua imagem. Podemos adicionar comandos, filtros e plugins a fim de
            agilizar e facilitar nosso trabalho.
            </p>
            <p style="margin-top: 16px">
            Ainda podemos alterar a forma com que trabalhamos com os painéis e ferramentas para
            que tenhamos uma maior facilidade de acesso a estas sem que precisemos recorrer aos
            menus para isso.
            </p>
            <p style="margin-top: 16px">
            Assim, os workspaces podem ser alterados por pré-definição de acordo com a atividade
            que pretendemos realizar. Podemos acessar as predefinições de workspaces através do
            menu Window – Workspace.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit1/imagem3.png') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">
            Porém, uma caixa de listagem de rápido acesso também é mostrada no canto superior
            direito da tela.
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit1/imagem4.png') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top: 16px">
            Embora os workspaces pré-definidos possam apresentar uma solução imediata para o
            usuário, as possibilidades de personalizar e salvar seu próprio workspace são oferecidas
            pelo Adobe Photoshop.Para isso, acesse o menu de workspaces após ter posicionado a
            seu modo as ferramentas e painéis que deseja personalizar. Em seguida, clique em New
            Workspace .
            </p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit1/imagem5.png') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top:16px;">Digite o nome de sua preferência para o novo workspace e clique em Save. A partir de
            agora, seu workspace estará disponível na lista do programa.</p>
            <h5 class="barlow">Tipos de Arquivo</h5>
            <p style="margin-top:16px;">Os formatos de arquivos gráficos diferem na maneira como representam os dados da
            imagem (em pixels ou vetores) e oferecem suporte a diferentes técnicas de compactação e recursos do Photoshop.</p>
            <p style="margin-top:16px;"><b>PSD</b> – Esse é o formato de imagem nati vo do Adobe Photoshop. Ele permite preservar
            as camadas, máscaras, canais e efeitos. Ele funciona como a matriz de um trabalho
            que podemos dar conti nuidade a qualquer momento ao abrí-lo para edição.</p>
            <p style="margin-top:16px;"><b>PSB</b> – Esse formato também apresenta as mesmas característi cas do formato nati vo,
            porém ele traz a solução para arquivos de tamanho acima de 2gb que é o limite para
            o formato PSD.</p>
            <p style="margin-top:16px;"><b>BMP</b> - É o formato de imagens padrão do Windows em computadores compatí veis com
            Windows. que oferece suporte para os modos de cores Bitmap, Tons de Cinza, Cores
            Indexadas e RGB.</p>
            <p style="margin-top:16px;"><b>JPEG</b> – O formato básico e mais popular da web que é o resultado compilado da exportação de um formato nati vo ou bruto. Ele apresenta-se achatado (não preserva camadas ou ajustes) e apesar da boa qualidade gráfi ca, é leve e ideal para carregamento em
            websites.</p>
            <p style="margin-top:16px;"><b>RAW</b> – O formato raw trata-se de um arquivo no formato bruto que não passa pelo processamento interno da câmera e possui um grande número de informações tanto nas
            altas, como nas baixas luzes. Ele precisa ser revelado para se tornar uma foto e para isso
            podemos usar o Adobe Photoshop ou o Adobe Lightroom.</p>
            <p style="margin-top:16px;"><b>DNG</b> - É o formato negati vo digital (Digital Negati ve) que armazena informações do
            arquivo RAW e seus metadados.</p>
            <p style="margin-top:16px;"><b>GIF</b> – É um formato de baixa resolução que uti liza apenas 8 bits dispondo apenas de
            256 cores. Por ser um formato anti go, ele perdeu cada vez mais espaço entre os demais
            formatos para web, mantendo-se apenas como uma boa opção para criar imagens animadas.</p>
            <p style="margin-top:16px;"><b>PNG</b> – O png (Portable Network Graphics) é um formato digital que surgiu em 1996
            para ser substi tuto do formato GIF. Seu grande diferencial é o suporte ao canal alpha
            que permite manter áreas transparentes da imagem e a grande profundidade de cores,
            além da alta compressão semelhante ao formato JPEG.</p>
            <p style="margin-top:16px;"><b>SVG</b> - é um formato de arquivo baseado em texto e descreve as imagens com formatos
            vetoriais. Eles são capazes de comprimir ainda mais os arquivos, sem perda nenhuma
            de qualidade (mesmo ao redimensionar as imagens).</p>
            <p style="margin-top:16px;"><b>DICOM</b> - O formato DICOM (Digital Imaging and Communicati ons in Medicine) 
            é normalmente usado para a transferência e armazenagem de imagens médicas, como ultrassons e digitalizações.</p>
            <p style="margin-top:16px;"><b>PIXAR</b> - O formato Pixar foi desenvolvido especifi camente para aplicati vos gráfi cos de
            alta capacidade, como os usados para a renderização de imagens e animações tridimensionais. Esse formato oferece suporte para imagens RGB e em tons de cinza com
            apenas um canal alfa.
            <p style="margin-top:16px;"><b>Scitex CT</b> - O formato Scitex CT (Conti nuous Tone) é usado para o processamento avançado de imagens em computadores Scitex. Entre em contato com a Creo para obter
            uti litários da transferência de arquivos salvos no formato Scitex CT para um sistema
            Scitex. O formato Scitex CT oferece suporte para imagens CMYK, RGB e em tons de cinza
            (mas não para canais alfa).
            <p style="margin-top:16px;"><b>TIFF</b> - O formato TIFF ou TIF (Tagged-Image File Format) é usado para o intercâmbio de
            arquivos entre aplicati vos e plataformas de computador. O TIFF é um formato fl exível
            de imagem bitmap suportado prati camente por todos os aplicati vos de pintura, edição
            de imagens e layout de página. Além disso, prati camente todos os scanners de mesa
            podem gerar imagens TIFF. O tamanho máximo de documentos TIFF é 4 GB.
            <p style="margin-top:16px;"><b>TGA</b> - É um formato de arquivo gráfico de varredura projetada por Truevision. Ele
            suporta 8, 16, 24 ou 32 bits por pixel em um máximo de 24 bits para as cores RGB e
            canal alfa de 8 bits, e é usado para armazenar arquivos de textura referenciados por
            jogos de vídeo 3D.
            <h5 class="barlow">Resolução de Imagens</h5>
            <p style="margin-top:16px;">O primeiro passo para trabalhar com imagens no Adobe Photoshop 
            é se certificar queela possui a resolução apropriada. O termo resolução se refere a pequenos quadrados
            , conhecidos como pixels que determinam a imagem e estabelecem sua resolução. A
            resolução é determinada pelo número de pixels pela dimensão ao longo de sua largura
            ou altura.</p>
            <p style="margin-top:16px;">Na computação gráfi ca temos três diferentes ti pos de resolução. O número de pixels por
            unidade de comprimento em uma imagem é chamada de resolução da imagem que é
            comumente medida em pixels por poledagas ou ppi (pixels per inch).</p>
            <p style="margin-top:16px;">Imagens com maiores resoluções possuem uma maior quanti dade de pixels e portanto,
            um maior tamanho que uma imagem com a mesma resolução.</p>
            <p style="margin-top:16px;">Imagens no photoshop podem variar com a alta resolução como 300ppi ou superior, e
            72 ou 96 ppi pra inferior.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit1/imagem6.png') }}" alt="guia">
                </figure>
            </div>
            <h5 class="barlaw">Redimensionando Imagens</h5>
            <p style="margin-top:16px;">Uma das primeiras ações em trabalho no Adobe Photoshop pode ser o redimensionamento de uma imagem. Essa ação pode se dar devido a necessidade de ajustar o
            tamanho de uma imagem para compor com outra ou até mesmo para o resultado fi nal.
            Existem diferenças entre estes dois: DPI se refere a documentos impressos e quanti a e
            espaçamento entre pontos cianos, magentas, amarelos e pretos, enquanto PPI se refere
            a pixels na tela.</p>
            <p style="margin-top:16px;">Se criarmos um documento de 10 por 10 polegadas com resolução de 72 PPI e outro documento com o mesmo tamanho mas com 300 PPI no Photoshop, podemos notar que
            eles possuem tamanhos diferentes na tela. Isto acontece devido ao número diferente
            de pixels usados em cada polegada. No arquivo de 72 PPI, só conseguimos colocar 720
            pixels de um lado ao outro do documento. Já no de 300 PPI, cabem 3000 pixels.</p>
            <p style="margin-top:16px;">Ao decidir alterar o tamanho de uma imagem no Adobe Photoshop, pode-se fazê-lo de
            duas maneiras disti ntas, redimensionando ou resampling.</p>
            <p style="margin-top:16px;">No caso do resampling você estará alterando o tamanho dos pixels do documento, já no
            redimensionamento, ao desmarcar a caixa resample, você estará alterando o tamanho
            impresso do documento.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit1/imagem7.png') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top:16px;">É importante observar o ícone de uma corrente no canto esquerdo da caixa de diálogo.
            O Constrain aspect rati o permite manter as proporções das caixas de largura (width) e
            altura (height), mantendo o aspecto da resolução da imagem o valor de uma das caixas.
            Ao desmarcá-lo, essas proporções serão desconsideradas e valores aleatórios poderão
            ser inseridos.</p>
            <h5 class="barlaw">Banco de Imagens e formas de adquirir imagens</h5>
            <p style="margin-top:16px;">Durante o percurso em sua carreira profi ssional, o designer tende a acumular além de
            experiência e conhecimento, uma vasta coleção de material para desenvolver projetos
            que irão servir como modelo para seu portf ólio ou trabalhos para clientes. Portanto, ter
            uma coleção de imagens arquivadas em disco ou nuvem para diversos fins, vem a ser
            uma boa opção para agilizar a busca em casos mais urgentes. E ter uma conta em um
            banco de imagens na web ou adquirir imagens por meio de busca, podem ser o diferencial nessas horas.</p>
            <p style="margin-top:16px;">Algumas imagens podem se encontradas em buscas no Google Images. 
            Esta forma representa uma das mais comuns entre os usuários do mundo inteiro.</p>                        
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit1/imagem8.png') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top:16px;">No Google dispomos de uma série de fi ltros para especifi car como desejamos 
            ter esses resultados. Entre eles, os mais importantes como tamanho e direitos de uso podem direcionar 
            para o resultado ideal.</p>                        
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit1/imagem9.png') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top:16px;">Como nem todas as imagens encontradas na busca do Google são gratuitas, e algumas
            delas possuem um autor, que detém os direitos autorais da obra, para poder copiar e
            reproduzir uma imagem destas, deve-se obter autorização do autor da obra, nesse caso
            o fotografo.</p>
            <p style="margin-top:16px;">O licenciamento Royalty-Free permite que o comprador uti lize as imagens quantas vezes
            quiser, ilimitadamente.</p>
            <p style="margin-top:16px;">Ainda temos as imagens de forma Direito Controlado, as quais possuem regras estabelecidas de uso das imagens, como ti pos de mídia a serem apresentadas, país em que serão
            usadas e ti ragem em caso de publicação impressa e tempo de circulação.</p>
            <p style="margin-top:16px;">Normalmente opta-se por uti lizar fotos gráti s quando a exclusividade das imagens não
            se faz necessária, pois essas são baixadas milhares de vezes, e, em muitas ocasiões, não
            são disponibilizadas em alta resolução.</p>
            <p style="margin-top:16px;">Boa parte dos bancos de imagens pagos ou não possuem em sua base uma grande quanti dade de imagens de direitos livres. E nesses casos podemos obtê-las em maior e melhor qualidade.</p>
            <h5 class="barlaw">Abrindo arquivos de imagens</h5>
            <p style="margin-top:16px;">Existem diferentes formas de abrir uma imagem no Adobe Photoshop. Algumas mais
            apropriadas para a ocasião e outras mais prati cas que nos fazem ganhar tempo. Porém,
            o domínio de todas as técnicas pode ser essencial em momentos e situações específi cas.
            </p>
            <p style="margin-top:16px;">Menu File – Escolhendo a opção Open do menu File teremos acesso a janela
            Abirde para navegar até o locado do arquivo desejado.</p>                        
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit1/imagem10.png') }}" alt="guia">
                </figure>
            </div>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit1/imagem11.png') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top:16px;">Botao Open da Start screen – As versões mais atuais do soft wares da Adobe
            incluem uma tela inicial que apresenta atalhos para os arquivos recentemente editados e os botões New e Open. No caso para ter acesso a janela Abrir,
            esse botão torna-se uma altenati va mais viável que o menu pois necessitamos apenas de um clique para isto.</p>                        
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit1/imagem12.png') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top:16px;">Arquivos Recentes – Essa lista pode ser exibida em dois locais disti ntos e apresenta uma agilidade ao abrir um arquivo, pois não necessitaremos navegar até o
            local onde ele encontra-se armazenado.</p>                        
            <p style="margin-top:16px;">A forma mais rápida de acesso a lista de arquivos recentes encontra-se
            na própria janela Start Screen, onde uma vez que começamos a abrir,
            editar ou salvar arquivos, ela registra ele na lista Recent Files.</p>                        
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit1/imagem13.png') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top:16px;">Outra forma será através da opção Recent Files do menu arquivo.</p>                        
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit1/imagem14.png') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top:16px;">Adobe Bridge – O Adobe Bridge é um excelente soft ware de gerenciamento de conteúdos que fornece as mesmas possibilidades de navegação entre
            pastas do computador local ou dispositi vos de gravação e até rede, que o
            browser de arquivos do seu sistema operacional oferece, mas com informações detalhadas sobre os arquivos e operações em lote e uma série de outras
            vantagens entre os arquivos da suíte Adobe. Ele recebe esse nome por fazer
            uma ponte entre ele e todos os programas da suíte e manter a compati bilidade com os ti pos de arquivos nati vos desses soft wares. Podemos acessá-lo
            através do menu fi le ou simplesmente carregando-o nas lista de programas
            do sistema operacional.</p>                        
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit1/imagem15.png') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top:16px;">Níveis de zoom e Modos de tela</p>
            <p style="margin-top:16px;">Ao trabalhar com edição de imagens pode ser de grande uti lidade o domínio das técnicas de zoom do Photoshop. Ampliar ou reduzir a área do foco de trabalho pode nos
            fazer enxergar a divisão entre os pixels ou visualizar o projeto com um enquadramento
            de tela geral.</p>
            <p style="margin-top:16px;">O trabalho com os níveis de zoom pode ser aplicado de várias formas:</p>
            <p style="margin-top:16px;">Painel Navigator – Este painel deve ser acionado através do menu Window –
            Navigator. Ele possui ferramentas de controle deslizante para a ampliação ou
            redução da tela de pintura e o retângulo vermelo no centro da tela, altera o
            posicionamento do zoom na tela.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit1/imagem16.png') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top:16px;">Ferramenta Zoom e suas propriedades – A ferramenta Zoom</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit1/imagem17.png') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top:16px;">encontra-se disposta entre as ferramentas padrão do Adobe Photoshop. 
            Ao acionarmos o zoom, podemos observar que a barra de propriedades passa a exibir as opções
            de níveis de zoom:</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit1/imagem18.png') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top:16px;"><b>a.</b> 
            <img style="display: inline-block;" src="{{ asset('assets/img/photoshop/unit1/imagem19.png') }}" alt="guia">
            Zoom in / Zoom out – Permitem trocar o padrão de zoom para
            ampliar ou reduzir ao clicar com a ferramenta na tela de pintura.</p>
            <p style="margin-top:16px;"><b>b.</b> 
            <img style="display: inline-block;" src="{{ asset('assets/img/photoshop/unit1/imagem20.png') }}" alt="guia">
            100% - Permite ajustar para 100% do tamanho de ampliação.</p>
            <p style="margin-top:16px;"><b>c.</b> 
            <img style="display: inline-block;" src="{{ asset('assets/img/photoshop/unit1/imagem21.png') }}" alt="guia">
            Fit Screen – Permite encaixar a imagem na tela do programa
            baseando-se na resolução da tela do computador.</p>
            <p style="margin-top:16px;"><b>d.</b> 
            <img style="display: inline-block;" src="{{ asset('assets/img/photoshop/unit1/imagem22.png') }}" alt="guia">
            Fill Screen – Permite que imagens que possuem resolução
            baixa ultrapassem o limite de ampliação de 100% para encaixar na
            tela.</p>
            <p style="margin-top:16px;">Através das teclas de atalho – Os níveis de zoom podem ser alterados com a
            combinação de algumas teclas:</p>
            <p style="margin-top:16px;"><b>a.</b> CTRL + (sinal de adição) / CTRL + (sinal subtração) – Aumentar ou reduzir
            a ampliação.</p>
            <p style="margin-top:16px;"><b>b.</b> CTRL + 1 – Ampliação da imagem para 100%.</p>
            <p style="margin-top:16px;"><b>c.</b> CTRL + 0 – Encaixe da ampliação para a tela do programa.</p>
            <p style="margin-top:16px;">Através do menu view – Alguns níveis de zoom podem ser acessados apenas
            através de menus, como é o caso do Print size. Este nível nos permite conferir
            o tamanho de impressão da imagem.</p>
            <p style="margin-top:16px;">Temos ainda como alterar o modo de tela para trabalhar no programa. Estas alterações incluem e remoção temporária de algumas barras e painéis para liberar mais
            espaço em tela para trabalho.</p>
            <p style="margin-top:16px;">Podemos alterar essas opções através do menu View – Screen Modes:</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit1/imagem23.png') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top:16px;">Standart Screen Mode – Modo padrão com as barras, menus e painéis.</p>
            <p style="margin-top:16px;">Full Screen Mode with Menu Bar – Modo tela cheia exibindo apenas a barra
            de menus.</p>
            <p style="margin-top:16px;">Full Screen Mode – Modo tela cheia completo sem nenhuma barra, menu ou
            painel.</p>
            <p style="margin-top:16px;">Outra forma de alterar o modo de tela é através do botão Change Screen Mode situado na barra de ferramentas.</p>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit1/imagem24.png') }}" alt="guia">
                </figure>
            </div>
            <p style="margin-top:16px;">Outra forma de alterar o modo de tela é através do botão Change Screen Mode situado na barra de ferramentas.</p>
            <h5 class="barlaw center-align">A T I V I D A D E S</h5>
            <p style="margin-top:16px;"><b>1.</b> Colecione e crie um banco de imagens através da web e experimente imagens
            desse banco aplicando as técnicas de níveis de zoom e redimensionamento de
            algumas delas.</p>
            <p style="margin-top:16px;"><b>2.</b> Organize esse banco de imagens criando sub-pastas determinando a catégoria
            de cada imagem. </p>
            <div class="clear"></div>            
        </div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
