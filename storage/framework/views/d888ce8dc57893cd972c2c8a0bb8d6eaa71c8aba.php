<?php $__env->startSection('titulo','Unit 3 | Tipos de Cortes'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade3" data-etapa="Tipos_de _Corte_Transições">
			<h3 class="barlow">UNIT 3</h3>
			<h5 class="barlow upper">Aula 07 – Tipos de Corte, Transições</h5>
			<h5>Tipos de Corte</h5>
			<p>
				Determinar “onde corta” é o objetivo principal da montagem. O corte está previsto na decupagem
				e, na hora da filmagem, quando o diretor grita “CORTA!” está determinando que a
				câmara pode ser desligada, pois o ponto de corte que ele prevê para o filme já passou, geralmente
				alguns segundos atrás. Mas é o montador, mais tarde, que vai escolher exatamente em
				que momento o plano “A” será interrompido para dar lugar ao plano “B”.
			</p><br>
			<p>
				Essa noção de “A”/B” é muito importante na montagem. O corte sempre estabelece uma
				relação entre dois planos, com exceção do começo e do fim do filme, quando a relação se dá
				com os créditos (“letreiros”) iniciais e finais. Numa conversa com o montador, ao se discutir
				o ponto exato de um corte, é comum que sejam usadas frases como: “O plano A está muito
				longo”, ou “Tira dois quadros do início do plano B”, ou “Precisamos de mais um segundo no
				final do plano A”.
			</p><br>

			<p>
				Quando corta, o montador está organizando e dando ritmo ao filme. Além disso, ele deve tomar
				cuidado com a <b>CONTINUIDADE</b>, isto é, a sensação que o espectador tem de que a história
				segue em frente “naturalmente”, sem dar pulos incômodos ou que desorientam a narrativa. É
				claro que você pode querer exatamente isso: incomodar e desorientar o espectador.
				(fonte: www.primeirofilme.com.br)
			</p>

			<h5>Hard Cut (The Standart)</h5>

			<p>
				O Hard Cut é o corte básico na edição. Esse tipo de corte é utilizado quando quando você quer
				cortar de um clip para outro sem nenhum tipo de transição, ou quando você corte do fim de
				um clip para o incio de outro. O único lado ruim do Hard Cut é ele dá a menor quantidade de
				significado visual.
			</p>

			<h5>Jump Cut</h5>

			<p>
				O Jump Cut é um corte seco feito em uma sequência de imagem do mesmo plano onde se
				avança no tempo. É muito usado por youtubers para deixar o vídeo mais dinâmico, cortando
				a “respiração” e pausas. No cinema a aplicação do jump cut é mais abrangente, serve para
				transmitir urgência ou criar a sensação de avanço no tempo.
			</p>

			<h5>L – Cut e J-Cut</h5>

			<p>
				O L-Cut é um tipo de corte que acontece quando o áudio do primeiro corte se prolonga e é
				transferido para o segundo.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit3/imagem_unit3_1.png')); ?>" alt="L – Cut">
				</figure>
			</div><br>

			<p>
				O J cut é o contrário, ele acontece quando o áudio do segundo corte começa antes, ele é
				antecipado, o som chega para o espectador antes da imagem. Eles são usados de forma
				sutil e geram uma transição suave entre os planos sempre orientado pelo áudio.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit3/imagem_unit3_2.png')); ?>" alt="L – Cut">
				</figure>
			</div><br>

			<h5>Cutting on Action</h5>
			<p>
				O Cutting on Action e uma técnica que não pode faltar, obviamjente, em um filme ação. Nessa
				técnica o editor corta de um shot para outro e combina com a ação de outros shots. Ao
				assistir a montagem finalizada tem-se a impressão de continuidade, No cutting on action o
				personagem começa a ação em um plano e finaliza no outro. Uma cena de soco ou chute ou
				um personagem abrindo uma porta podem ser exemplos da aplicação do cutting on action.
			</p><br>
			<h5>Cutaway</h5>
			<p>
				O cutaway interrompe a ação principal e leva o espectador para longe dela, inserindo um
				objeto na cena, geralmente o traz de volta para a ação principal. É usado para dar contexto a
				cena e aumentar a dramaticidade.
			</p><br>
			<h5>Cross Cut</h5>
			<p>
				Cross cut também conhecido como edição paralela é o corte intercalado entre duas cenas que
				acontecem em lugares diferentes e ao mesmo tempo. Pode aumentar a tensão e o suspense da cena.
			</p><br>
			<h5>Match Cut</h5>
			<p>
				O match cut é o tipo de corte que combina cenas diferentes mas com imagens semelhantes,
				transitando de um espaço para o outro sem perder a coerência e sem desorientar o espectador.
				Uma das cenas mais icônicas produzida com essa técnica é a do filme “2001: uma odisséia
				no espaço” do Stanley Kubrick.
			</p><br>
			<h5>Transições</h5>
			<p>
				Na edição de filme, a transição refere-se a como um shot termina e o próximo começa, e o
				dispositivo fílmico que liga um para o outro. Muitos tipos diferentes de transições têm sido
				empregados desde os primeiros anos do cinema. Alguns são desatualizados, utilizados principalmente
				para se referir a esses primeiros anos, mas outros ainda são muito utilizados hoje.
				Cada tipo invoca uma emoção diferente. Compreender essas emoções é essencial para a edição
				principal.
			</p>
			<p>
				No Adobe Premeire, os efeitos de transição são encontrados através do painel Effects, acessando
				os subgrupos de efeitos do grupo principal Video Transitions.
			</p><br>
			<h5>Cut</h5>
			<p>
				O tipo de transição mais básico e comum é o corte. Um corte ocorre quando um shot substitui
				instantaneamente o outro. Os cortes são tão amplamente utilizados que os filmes apresentam
				normalmente milhares deles.
			</p><br>
			<h5>Fade In / Fade Out</h5>
			<p>
				Fade ins e fade outs são o segundo tipo de transição mais comum. Fade out acontece quando
				a imagem é gradualmente substituída por tela preta ou qualquer outra cor sólida. Tradicionalmente,
				fade outs foram usados para concluir filmes. Fade ins são o oposto: uma cor sólida gradualmente
				dá lugar à imagem, comumente usada no início dos filmes. Apesar de ser a segunda
				transição mais utilizada, os fades são raramente adotados pelos editores. Um longa-metragem
				comum terá apenas alguns fades, se isso acontecer. Fades são usados com moderação porque
				implicam o fim de um segmento de história principal. Os Fades também são utilizados ao permitir
				que o tempo da platéia respirar após uma sequência muito intensa. O efeito Dip to Black
				pode reproduzir facilmente a técnica de fades. Para isso, deve-se apenas arrastar o efeito do
				painel Effects para o corte de edição entre os clips que você deseja criar a transição.
			</p><br>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit3/imagem_unit3_3.png')); ?>" alt="L – Cut">
				</figure>
			</div><br>

			<h5>Dissolve</h5>
			<p>
				Tambem conhecido como overlapping (sobreposição), dissolves acontecem quando um shot
				gradualmente é substituido pelo próximo. Um desaparece assim que o outro aparece. Por alguns
				segundos, eles se sobrepõem, e ambos ficam visíveis. O dissolve é comumente utilizado
				para representar uma passagem de tempo.
				O efeito Cross Dissolve pode reproduzir facilmente a técnica de sobreposição. Para isso,
				deve-se apenas arrastar o efeito do painel Effects para o corte de edição entre os clips que
				você deseja criar a transição.
			</p><br>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit3/imagem_unit3_4.png')); ?>" alt="L – Cut">
				</figure>
			</div><br>

			<h5>Wipe</h5>
			<p>
				Na técnica Wipe, um shot substitui outro viajando de um lado para o outro do quadro, movendo
				o shot anterior para fora da tela. George Lucas usou a técnica Wipe deliberadamente durante
				toda a série Star Wars. O efeito Wipe pode reproduzir facilmente a técnica de para mover o shot
				de um lado para o outro. Para isso, deve-se apenas arrastar o efeito que encontra-se dentre todos
				os efeitos da pasta Wipe, para o corte de edição entre os clips que você deseja criar a transição.
			</p><br>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit3/imagem_unit3_5.png')); ?>" alt="L – Cut">
				</figure>
			</div><br>
			<h5>Iris</h5>
			<p>
				Uma transição antiquada dificilmente empregada hoje é a íris, quando um emaranhado de
				circulares fecha a imagem a uma tela preta. As íris são encontradas em alguns cartoons como
				este exemplo, os Looney Tunes e Betty Boop. O efeito Iris in Round pode reproduzir facilmente
				a técnica Iris. Para isso, deve-se apenas arrastar o efeito que encontra-se dentre todos os
				efeitos da pasta Iris, para o corte de edição entre os clips que você deseja criar a transição.
			</p><br>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit3/imagem_unit3_6.png')); ?>" alt="L – Cut">
				</figure>
			</div><br>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit3/imagem_unit3_7.png')); ?>" alt="L – Cut">
				</figure>
			</div><br>
			<h5>Zoom</h5>
			<p>
				Uma transição de zoom reduz uma cena dentro ou fora na proporção de uma cena para outra.
				O efeito Cross Zoom pode reproduzir facilmente a técnica de Zoom. Para isso, deve-se apenas
				arrastar o efeito que encontra-se na pasta Zoom, para o corte de edição entre os clips que
				você deseja criar a transição.
			</p>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit3/imagem_unit3_8.png')); ?>" alt="L – Cut">
				</figure>
			</div><br>

			<h5 class="barlow center-align">A T I V I D A D E S</h5>
            <p style="margin-top: 16px"><b>1.</b>  Criar transições entre cenas de videos capturados com a camera.</p>
			<p style="margin-top: 16px"><b>2.</b>  Aplicar tecnicas de tipos de corte apresentados em sala usando tecnicas de edição.</p>

		</div>
	</div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apostila-imugi\resources\views/apostila6/unidade3/Tipos_de _Corte_Transições.blade.php ENDPATH**/ ?>