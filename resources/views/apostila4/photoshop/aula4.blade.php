@extends('layouts.template')
@section('titulo','PHOTOSHOP | Aula 4 - Smart Objects e Smart Filters')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade1" data-etapa="aula4">
			<h3 class="barlow">PHOTOSHOP</h3>
			<h5 class="barlow upper">Aula 4 - Smart Objects e Smart Filters</h5>
			{{-- <span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila3/UNIT 7/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
            </audio> --}}
            <div class="clear"></div>
            <h5 class="barlow">Compreendendo Smart Objects</h5>
            <p style="margin-top: 16px">
                Objetos inteligentes são camadas que contêm dados de imagem vetoriais ou raster,
                como arquivos do Photoshop ou do Illustrator. Os objetos inteligentes preservam o conteúdo de origem de uma imagem com todas as suas características originais, permitindo
                que você execute a edição não destrutiva na camada. No Photoshop CC e CS6, você pode
                incorporar o conteúdo de uma imagem em um documento do Photoshop. No Photoshop CC, você também pode criar Linked Smart Objects cujo conteúdo é referenciado a
                partir de arquivos de imagem externos. O conteúdo de um objeto inteligente vinculado
                são atualizados quando seu arquivo de imagem de origem é alterado.
            </p>
            <p>
                Objetos inteligentes vinculados são distintos de instâncias duplicadas de um objeto inteligente 
                dentro de um documento do Photoshop. Com Objetos Inteligentes Vinculados,
                você pode usar um arquivo de origem compartilhado em vários documentos do Photoshop, que é um conceito 
                familiar e de boas-vindas para web designers.
            </p>
            <p style="margin-top:32px"><b>Vantagens de usar Smart Objects</b></p>
            <p>Usando Smart Objects podemos:</p>
            <ul class="lista-vertical">
                <li>
                    <p>
                        • Realizar transformações não destrutivas. Podemos escalar, girar, inclinar, distorcer, transformar a perspectiva ou 
                        deformar uma camada sem perder dados de imagem originais ou qualidade porque as transformações não afetam os dados originais.
                    </p>
                </li>
                <li>
                    <p>
                        • Trabalhar com dados vetoriais, como ilustrações vetoriais do Illustrator, que de
                        outra forma seriam rasterizadas no Photoshop.
                    </p>
                </li>
                <li>
                    <p>
                        • Executar a filtragem não destrutiva. É possível editar filtros aplicados a Objetos
                        Inteligentes a qualquer momento.
                    </p>
                </li>
                <li>
                    <p>
                        • Editar um objeto inteligente e atualizar automaticamente todas as instâncias
                        vinculadas.
                    </p>
                </li>
                <li><p>• Aplicar uma máscara de camada que esteja vinculada ou não vinculada à camada de Objeto Inteligente.</p><li>
                </li>
                    <p>
                        • Experimentar vários designs com imagens de marcador de posição de baixa
                        resolução que substituiremos posteriormente pelas versões finais.
                    </p>
                </li>
            </ul>

            <p>
                Não podemos executar operações que alteram dados de pixels - como pintura, esquivando, queimando ou clonando - diretamente para uma camada de Objeto Inteligente, a menos que ela seja primeiramente convertida em uma camada regular,
                que será rasterizada. Para executar operações que alteram dados de pixel, podemos editar o conteúdo de um Objeto Inteligente, clonar uma nova camada acima da
                camada de Objeto Inteligente, editar duplicatas do Objeto Inteligente ou criar uma nova camada.            
            </p>
            <p style="margin-top:32px">Converter camadas em SmartObjects</p>
            <p>
                1. Clique com o botão direito na camada que deseja converter em Smart Object e
                selecione Convert to Smart Object no menu.
            </p>
            <div>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit7/imagem1.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style=margin-top:32px>2. Ou através do menu Layer – Smart Object – Convert to Smart Object<p>
            <div style=margin-top:16px>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit7/imagem2.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">
                3. Ou ainda, acessando Convert to Smart Object através do menu do painel Layers.
                Quando a camada for convertida em Smart Object, um ícone surgirá anexado no canto
                inferior direito da miniatura da camada no painel Layers.
            </p>
            <div style=margin-top:16px>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit7/imagem3.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">Criando Smart Objects incorporados</p>
            <p>Podemos criar objetos inteligentes incorporados usando vários métodos:</p>
            <p>• Clicando no comando Open as Smart Object do menu File.</p>
            <div style=margin-top:16px>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit7/imagem4.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">• Incorporando um arquivo através do comando Place Embeded do menu File.</p>
            <div style=margin-top:16px>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit7/imagem5.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:32px">• Colando dados do Illustrator</p>
            <p>• Ou converter uma ou mais camadas do Photoshop em Smart Objects.</p>
            <p><b>Criando Linked Smart Objects</b></p>
            <p>
                No Photoshop, podemos criar Linked Smart Objects, onde o conteúdo dos Smart Objects
                vinculados são atualizados quando o arquivo de imagem de origem é alterado. Smart
                Objects vinculados são particularmente úteis para equipes ou em casos em que os recursos devem ser reutilizados em todos os projetos.
            </p>
            <p>Podemos inserir um arquivo como Linked Smart Object clicando em File – Place Linked</p>
            <div style=margin-top:16px>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit7/imagem6.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>

            <p style="margin-top: 32px"><b>Economia de tamanho de arquivo usando Linked Smart Objects</b></p>
            <p>
                Como os Linked Smart Objects mantêm uma dependência em um arquivo externo ao
                invés de incorporar um arquivo de origem dentro do documento, eles geralmente resultam em tamanhos de arquivo significativamente menores.
            </p>
            <p>
                Embora Linked Smart Objects não armazenem o arquivo original no documento que
                o contém, eles ainda armazenam uma versão achatada e dimensionada dos dados de
                imagem do arquivo original. Em alguns casos, o tamanho desses dados pode ser muito
                maior do que o tamanho do arquivo original, tornando a economia de tamanho do arquivo desprezível.
            </p>

            <p style="margin-top: 32px"><b>Atualizar Linked Smart Objects</b></p>
            <p>
                Se um arquivo de origem externa for alterado enquanto um documento do Photoshop
                estiver aberto, o Linked Smart Object relevante será automaticamente atualizado. No
                entanto, quando você abre um documento do Photoshop contendo Linked Smart Objects fora da sincronização, é possível atualizar os Smart Objects:
            </p>
            <p>• Clique com o botão direito do mouse em uma camada de Linked Smart Objecte escolha Update Modified Content</p>
            <div style=margin-top:16px>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit7/imagem7.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top: 32px">• Ou clicando em Layer – Smart Object - Update Modified Content</p>
            <div style=margin-top:16px>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit7/imagem8.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>

            <p style="margin-top: 32px"><b>Aplicando filtros a um smart object</b></p>
            <p>
                Qualquer filtro aplicado a um Smart Object é um Smart Filter. Smart Filters aparecem
                no painel Camadas abaixo da camada de Smart Object à qual eles são aplicados. Porque
                podemos ajustar, remover ou ocultar Filtros Inteligentes, eles não são destrutivos.
            </p>
            <p>
                Podemos aplicar qualquer filtro do Photoshop (que tenha sido habilitado para trabalhar
                com os Smart Filters), exceto Lens Blur, Flame Frame, Trees e Vanishing Point - como um
                smart filter. Além disso, você pode aplicar Shadow / Highlight, que é um ajuste como
                Smart Filters.
            </p>

            <p style="margin-top: 32px"><b>Trabalhando com Smart Filters</b></p>
            <p>
                Para trabalhar com Smart Filters, selecione uma camada de Smart Object, escolha
                um filtro e defina as opções desse filtro. Depois de aplicar um Smart Filter, podemos
                ajustá-lo, reorganizá-lo ou excluí-lo.
            </p>
            <div style=margin-top:16px>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit7/imagem9.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
            <p style="margin-top:16px">Podemos utilizar máscaras de filtro para máscarar seletivamente efeitos de um Smart Filter.</p>
            
            <p style="margin-top:32px"><b>Editar um Smart Filter</b></p>

            <p>Se um Smart Filter contiver configurações editáveis, podemos editá-las a qualquer momento. Também podemos editar opções de mesclagem para Smart Filters.</p>
            <p>
                Ao editar um Smart Filter, não é possível pré-visualizar filtros empilhados acima dele.
                Depois de terminar de editar o Smart Filter, o Photoshop exibirá novamente os filtros
                empilhados acima dele.
            </p>
            <ul class="lista-vertical">
                <li><p>• Clique duas vezes no Smart Filter no painel Layers.</p></li>
                <li><p>• Defina as opções de filtro e clique em OK.</p></li>
            </ul>

            <p style="margin-top: 32px"><b>Mask Smart Filters</b></p>
            <p>
                Quando aplicamos um Smart Filter a um Smart Object, o Photoshop exibe uma miniatura de máscara vazia (branca) na linha Smart Filters no painel Layers sob o Smart Object.
                Por padrão, essa máscara mostra todo o efeito do filtro. (Se tivermos feito uma seleção
                antes de aplicar o Smart Filter, o Photoshop exibirá a máscara apropriada em vez de uma
                máscara vazia na linha Smart Filters no painel Layers).
            </p>
            <p>
                Podemos usar máscaras de filtro para máscarar seletivamente os Smart Filers. Quando
                máscararmos Smart Filters, o máscaramento se aplica a todos os Smart Filters - não podemos máscarar Smart Filters individuais.
            </p>
            <p>
                As máscaras de filtro funcionam como máscaras de camada, e podemos usar muitas
                das mesmas técnicas com elas. Como máscaras de camada, as máscaras de filtro são
                armazenadas como canais alfa no painel Canais e podemos carregar seus limites como
                uma seleção.
            </p>
            <p>
                Assim como nas máscaras de camada, podemos pintar em uma máscara de filtro. As
                áreas do filtro que pintamos em preto estão ocultas; Áreas que pintamos em branco
                são visíveis; E áreas que pintamos em tons de cinza aparecem em vários níveis de
                transparência.
            </p>
            <p>
                Podemos utilizar os controles no painel Masks para alterar a densidade da máscara do
                filtro, adicionar penetração às extremidades da máscara ou inverter a máscara.
            </p>
            <div style=margin-top:16px>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/unit7/imagem10.png') }}" alt="guia">
                </figure>
            </div>
            <div class="clear"></div>
        </div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
