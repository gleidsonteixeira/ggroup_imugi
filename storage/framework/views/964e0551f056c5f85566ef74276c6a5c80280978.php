
<?php $__env->startSection('titulo','Unit 29 | Renderização'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade29" data-etapa="renderizacao">
			<h3 class="barlow">Unit 29 - Capítulo VI Renderização</h3>
			<h5 class="barlow upper">Aula 29 – Telas - Arquivo final</h5>
			<p>
				Desenvolvemos objetos, animações, joint points, animações com partículas e todo o
				necessário para produção da parte visual e simulações que usam extruturas lógicas, essas
				partes separadas podem ser usadas para diversos objetivos como produzir imagens, vídeos e
				mesh, recurso que será usado no nosso próximo módulo para criar um jogo.
				
			</p>
			<p>
				Devemos ficar atentos ao nosso objetivo final, se desejamos criar um filme curta ou longa
				metragem precisamos ficar atentos as configurações de saída do arquivo e principalmente o
				ambiente de reprodução, sem esquecer também da qualidade da captura do arquivo, iluminação,
				composição de quadro e fotografia.
			</p>


			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit29/imagem_unit29_1.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Escrever ajuda a manter pensamentos mais claros, improvisos quase sempre trazem maus
				resultados, mas um bom planejamento e execução pode tranformar seu projeto em algo com
				qualidade e valor, então é importante saber cobrar pelo tempo destinado ao desenvolvimento.
			</p>

			<p>
				Hoje o mercado permite dezenas de formatos de exibição em superfícies de telas planas
				e suscetíveis ao toque <b>(Touchscreen)</b>, televisores com capacidade de montar imagens
				cada vez maiores. Seu material precisa ser intercambiável ou exibível de várias formas, temos
				as projeções em quadro esférico já que o tubo de raiz catódica das tvs antigas é uma lente,
				sucedendo eles vieram as telas planas, onde surgiu o termo wildscreen com mais imagens na
				lateral. A necessidade de mais definição e nitidez levou ao desenvolvimento dos monitore de
				plasma incandecentes, onde foi criado o supercontraste e uma redução drástica no consumo
				bem como a variação de sinal analógico e digital.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit29/imagem_unit29_2.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
			    Almentando ainda mais as definições e proporções de imagem pulamos de 900X400 720p
				para 1080X720 1080p, o formato HD(High difinition), posteriormente sucedidos pelas telas
				LCD imagens ultraHD com tamanho de 1980X1080 1080p, aproximando a exibição residencial
				das exibições nas grandes telas, que também receberam modificações tendo imagens capturadas
				e projetadas por 2 cameras combinadas e utilizando super projetores capazes de produzir
				simultaneamente duas imagens que quando combinadas por um óculos de lentes coloridas
				gera em nossas mentes a ilusão visual, o odiado e amado Cinema 3D.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit29/imagem_unit29_3.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Os televisores e portáteis também seguiram tendências, por exemplo, como eu deixo
				uma imagem maior na tela de um telefone celular? Simples, reduzindo o tamanho do pixel.
				Destaque para a tecnologia desenvolvida pela Sony para a tela do PSP, que usa um sistema de
				pixels tão pequenos que individualmanete são invisíveis a olho nú, sua tela de retina é capaz
				de reproduzir uma imagem de 1080X720 720p em uma tela de apenas 4,3 polegadas*. Posteriormente
				toda tecnologia de <b>smart gats</b> absorveu esse parâmetros para a próxima geração.
			</p>

			<p>
				*Polegada é a unidade de medida usada para calcular o tamanho das telas, issa contagem
				é feita na diagonal da tela, para ralizar essa medida começamos na diagonal inferior direita
				e traçamos uma linha reta até a diagonal superior do lado direto da tela. Apesar de algumas
				telas serem feitas para ser tocadas não é recomendado que você toque a superfície de uma Tv
				LCD, ela é muito delicada e você pode causar danos na tela, para medir a sua tv tire a medida
				com um cordão e depois meça o cordão em polegadas.
			</p>
			<h5>Renderização e taxa de quadros</h5>

			<p>Já realizamos várias vezes e precisamos entender essa ferramenta. Quando criamos todos
				os nossos objetos e fazermos as animações pretendemos usá-los para criar um filme, precisamos
				realizar o processo de renderização, isso tornará possível que seu projeto seja visualizado sem
				a necessidade do software usado para criar o projeto, podendo usar recursos dos programas
				de visualização <b>Windows media player, VLC, Realplayer</b> e muitos outros.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit29/imagem_unit29_4.png')); ?>" alt="guia4">
				</figure>
			</div>

			<p>Renderizar seu projeto vai transformar todos os meshs, texturas, animações e propriedades
				físicas em um único arquivo com extenções específicas, diferente da que conseguimos
				quando salvamos naturalmente o projeto pelo cinema 4D, isso é exportação de material, ao
				salvar podemos também modificar os formatos para tornar os arquivos compatíveis com outros
				softwares, como vamos precisar para desenvolver nossos projetos no Unity.
			</p>

			<h5>Taxa de formação de quadros</h5>
				
			<p>
				Imagens estáticas são compostas por um único quadro ou frame, uma animação ou vídeo
				é uma ilusão provocada pela velocidade com que as animações são trocadas na sua frente,
				essa velocidade é chamada de <b>taxa de formação</b> de quadros ou <b>frame hate</b>, quando configuramos
				o painel de renderização no cinema 4D estamos configurando como vamos receber
				essa saída, como um único quadro ou como uma sequência deles.
			</p>

			<p>
				A indústria atual usa alguns formatos padrões de velocidade de fram hate, 30 fps ou
				frames por segundo é nossa unidade de medida para frame hate. Exemplos: desenhos da Disney
				dos anos 90 e stopmotions exibem uma taxa de quadros de 30 imagens por segundo, logo o frame hate do arquivo é medido em 30 fps, imagens reproduzidas na tela de cinema usam 33
				fps como frame hate, já os vídeos games que não usam aquivos pré renderizados mas cria suas
				próprias renderizações em tempo real tende a ter uma perca de resolução na imagem para
				compensar a alta taxa de quadros que nos mais recentes chega a 60 fps reais e estáveis e com
				grande quantidade de objetos sendo processados simultaneamente, usam esse recurso para
				garantir a fluidez da imagem sendo exibida ou sua plasticidade de movimento qualquer. Queda
				nesse processo de renderização é desconfortável de ser observada sendo capaz de compromenter
				toda capacidade de imersão do seu produto, para garantir uma boa reprodução e não
				deixar linhas na sua imagem final.
			</p>

			<h5>Linhas na imagem</h5>

			<p>O que acontece quando eu reproduzo um vídeo em uma tela com formatos incompatíveis?
				Mesmo com o planejamento isso pode acontecer, para corrigir o fato da tela ser incapaz de
				realizar a reprodução existe um processo chamado <b>downgraed</b>, onde a imagem vai se encaixar
				as proporções da tela de reprodução criando linhas no topo e na base da imagem. O mesmo
				também acontece quando se captura um vídeo com o telefone celular e se reproduz o mesmo
				em uma tv, a imagem não terá comprimento suficiente para preencher a tela, decida se seu
				vídeo vai ser reproduzido pelo Youtube e verifique as configuraçõe de vídeo para o formato
				necessário e aplique essas configurações no painel de renderização.
			</p>

			<h5>Avi, hdv.263, mkv, ultra formatos</h5>

			<p>
				Para salvar o arquivo e armazenar essas informações garantindo a reprodução de maneira
				eficaz os computadores usam formatos digitais, esses formatos são definições e propriedades
				para codificadores de vídeos serem capazes de reproduzir seu arquivo final com a melhor fidelidade
				possível, esses arquivos mudam de acordo com os tamanhos especulados no painel
				configurações de render, imagens entre esses valores terão arquivos finais diferentes.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit29/imagem_unit29_5.png')); ?>" alt="guia5">
				</figure>
			</div>

			<p>
				Esse formato de arquivo é usado pelo sistema operacional que executará o vídeo, então
				tome cuidado quando estiver tentando rodar esse vídeo em uma smart tv ou software de
				exibição compatível com o formato, Windows media player não reproduz sem plugin *.mp4,
				*.rmvb ou *.mkv esses programas são chamados de move player.
			</p>
		</div>


	</div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila5/unidade29/renderizacao.blade.php ENDPATH**/ ?>