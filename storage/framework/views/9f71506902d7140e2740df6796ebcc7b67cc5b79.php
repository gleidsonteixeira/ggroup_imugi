<?php $__env->startSection('titulo','Unit 6 | Técnicas de Roteiro'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade18" data-etapa="tecnica_roteiro">
			<h3 class="barlow">UNIT 6</h3>
			<h5 class="barlow upper">Aula 18 – Técnicas de Roteiro</h5>
			<h5>Como criar um Roteiro</h5>
			<p>
				Para conseguir fazer um bom roteiro, primeiramente temos que ter uma boa estória para
				contar, depois saber como contá-la, e assim como tudo na vida, roteiro também possui alguns
				padrões. A melhor maneira de conseguir entender esses padrões é através de exemplos, aqui
				será mostrada a estrutura; para avançar mais a dica é ver o máximo de roteiros possíveis.
			</p>
			<p>
				Assim como na criação de contos, o roteiro também tem suas partes. Somente adicionando alguns comentários, primeiro porque o roteiro será lido, mas você tem que adicionar elementos
				que serão visíveis como ações, expressões e detalhes então o roteiro é dividido em cabeçalho
				de cena, ação, diálogos e transições. Não faça o roteiro “na hora”, isso deve ser feito já depois
				que a estória est ver concluída, após a criação do roteiro com base nessa estória o roteiro deve
				ser revisado para que não haja erros.
			</p>
			<p>
				Exemplo:
			</p>
			<p class="recuo">
				EXT. ESTRADA EM WHITECHAPEL LONDRES – NOITE (cabeçalho de cena)
				Parada em uma esquina, Polly olhava atentamente para cada possível cliente. (Ação)
				Um homem então dá sinal a ela para se dirigir a um beco, ela se aproxima do homem.
				(Ação)
			</p>
			<p class="recuo">
				POLLY personagem que faz o diálogo
				Boa noite moço.
			</p>
			<p class="recuo">
				HOMEM
				Boa noite madame.
				Ela se aproxima sensualmente do provável cliente o levando para dentro do beco.
				O homem puxa uma faca sem que ela perceba, tampa a boca dela e corta sua garganta.
			</p>
			<p class="recuo">
				CUT TO transição
			</p>
			<h5>Cabeçalho de cena</h5>
			<p  class="recuo">
				Será introduzido sempre que houver alguma mudança no cenário ou no tempo, separando uma cena da outra, escrito em letras maiúsculas explicando onde será a cena,
				utilizando de INT e EXT para indicar se será gravado em ambiente interno (INT) ou	externo (EXT), sendo que a escolha final será do diretor. O local que será representado, como: DÉCIMO OITAVO ANDAR DO PRÉDIO EVEREST, e no caso de ambientes
				internos, também deve-se indicar o cômodo:
			</p>
			<p class="recuo">
				DÉCIMO OITAVO ANDAR DO PRÉDIO EVEREST - APARTAMENTO 181 - COZINHA.
					E por último o tempo, DIA ou NOITE caso apareça algum relógio na cena ou o filme use muito o tempo para os acontecimentos, indique a hora exata: 1:15 - NOITE - 31
					DE AGOSTO 1888.
			</p>
			<p class="recuo">
				Muitos escritores numeram as suas cenas. A numeração aparece antes e depois do cabeçalho:	</p>
				<p class="recuo">1 TERRENO EM FRENTE A UM ESTÁBULO EM BUCKS, WHITECHAPEL - 3:40 - NOITE 1</p>
				<h5>Ação</h5>
				<p class="recuo">Essa é a hora que você descreve a cena. Caso apareça algum personagem novo, indique-o com
							letra maiúscula seguido de uma breve descrição física, caso seja um cenário novo descreva-o,
							mas sem detalhar muito como em romances literários, escreva sempre em tempo presente,
							não tente fazer o papel de diretor e indicar onde as câmeras serão posicionadas, escreva cada
							ação com um pequeno espaçamento entre elas para sugestões.
					</p>
					<p class="recuo">EXT. DUTFIELD’S YARD, BERNER STREET, WHITECHAPEL - 1:30 - NOITE - 30 DE SETEMBRO 1888</p>
					<p class="recuo">
						O DETETIVE com um enorme bigode acaba de chegar e interrompe uma avaliação mais minuciosa do corpo, mas Madson já havia reparado no corte no pescoço, que
						era mais profundo a esquerda indicando que o assassino seria destro se ele t ver segurado a vít ma por trás para o ato.
					</p>
					<p class="recuo">
						Madson tentou ver sobre os policiais que barravam a passagem de pedestres para o local, lembrando das outras vít mas do assassino, a ausência dos cortes no abdômen
						indicavam que talvez fosse outro assassino.
					</p>
					<p class="recuo">
						Percebendo que não haveria mais o que observar por ali, e só poderia tirar conclusões com o que ele já sabe, Madson resolve voltar para seu trabalho.
						Ouve-se um apito de outra direção, tentando chegar antes de os policiais barrarem
						sua passagem nessa nova ocorrência Madson corre.
					</p>
					<h5>CUT TO</h5>
					<p>
						Além da introdução de personagens, as letras maiúsculas na Ação algumas vezes são utilizadas ao se referirem a um som (um GRITO, um ASSOBIO), a objetos utilizados (um REVOLVER, um
						MARTELO), e qualquer outra coisa que o escritor queira chamar a atenção.
					</p>
					<p>
						Quando uma cena é interrompida devido ao fim de uma página, alguns escritores utilizam o termo (CONTINUA), com alinhamento just ficado na direita, onde era para ser a transição.
						Na página seguinte escrevem CONTINUA, com alinhamento just ficado para a esquerda, no lugar do cabeçalho de cena.
					</p>
					<h5>Diálogos</h5>
					<p>
						A parte do diálogo é composta pelo nome do personagem que está falando e abaixo o que ele está falando:
					</p>
					<p>
						MADSON: Mas o fato de ele não ter removido os órgãos como nas outras vít mas também sugere que ele pode ter sido interrompido enquanto fazia o que fez a Elizabeth, e por não ter concluído o ato, precisou fazê-lo com a outra vítima.
					</p>
					<p class="recuo">DETETIVE JORDAN <br>
							Ou que temos dois assassinos nas ruas, lembre-se que estamos em tempos confusos,
							e as pessoas tem muitos mot vos para fazerem isso com outras pessoas. Também
							existe o diálogo Parenthet cal, que é onde você escreve no bloco do diálogo, ações
							que ocorrem enquanto o diálogo acontece: <br>
							DETETIVE JORDAN <br>
							(surpreso) <br>
							Mas como assim? Como essa carta chegou aqui? <br>
							MADSON <br>
							Não importa, provavelmente o endereço é falso, olhe o endereço e mande alguém
							checar. O que tem dentro dessa caixa? <br>
							DETETIVE JORDAN <br>
							(abrindo a caixa) <br>
							Deixe eu dar uma olha.... <br>
							(pausa assustado) <br>
							DETETIVE JORDAN(CONT.) <br>
							Mas isso é uma parte da... <br>
							(pausa)
					</p>
					<p>
						Escreva parenthet cals de forma clara, que o ator entenda a expressão ou ação que ele deve
						fazer, sem dizer em detalhes o que o ator deverá fazer, isso é um trabalho em conjunto do
						diretor e do ator, não do escritor. Para indicar que as falas interrompidas por uma ação são
						do mesmo personagem, indique isso escrevendo (CONT) após o nome do personagem. Caso
						um diálogo seja interrompido por que a página acabou, escreva (MAIS) abaixo do diálogo e
						(CONT) ao lado do nome do personagem na folha seguinte. Para indicar o diálogo de um narrador, indique isso escrevendo V.O. (voice over) ao lado do nome do personagem.
					</p>
					<p class="recuo">
						MADSON (V.O.) <br>
						Essa onda de crimes começou em 1888. <br>
						Sempre fui interessado em casos policiais mas este me chamou atenção por um detalhe. <br>
						Eu vi a noite que o primeiro incidente ocorreu. <br>
						Quando alguém está falando mas não aparece na tela, ut liza-se o termo O.S. (off
						screen): <br>
						em uma rua sem movimento de Whitechaper, somente com uma dama na esquina. <br>
						MADSON (O.S.) <br>
						Ela veio para a rua menos movimentada da cidade, vai passar a noite aí e não vai
						encontrar um cliente como estou sem sono vou lá falar com ela, ahh.. pelo visto ela
						já conseguiu um cliente
					</p>
					<h5>Transições</h5>
					<p>
						As transições suaves de cena são chamadas FADE-IN e FADE-OUT, sendo que o FADE-IN é
						colocado no começo da cena, quando a tela ainda está preta e então a cena começa a surgir
						suavemente a partir desse preto, e o FADE-OUT é colocado nos finais de cena, fazendo essa transição da cena atual para a tela preta. Para a última transição do filme, deixa um espaço de
						três linhas e se escreve THE END centralizado. Apesar de ser papel do diretor e não do roteirista decidir quando deve cortar para outra cena, para indicar uma transição não para um fundo
						preto, mas para uma outra cena, usa-se o CUT TO.
					</p>
					<h5>Elaboração da História</h5>
					<p>
						Uma história deve ser elaborada de forma criativa e original, o desenvolvimento do enredo
						deve haver começo, meio e fi m. O uso de referência é essencial para o desenvolvimento de
						um roteiro, isso torna o enredo mais sustentável e ajuda ao escritor a situar situações com um
						referencial de onde cont nuar. No desenvolvimento da história é preciso ter a preocupação
						inicial com três coisas essenciais para o enredo: O protagonista, o objetivo e o local onde tudo
						acontece.
					</p>
					<p>
						Estas são as três bases que precisam estar bem estruturadas para formar um enredo consistente para um roteiro. O protagonista se encontra no local onde tudo acontece, e isto implica
						em seu cotidiano de sua realidade, o que já traz o seu objetivo. O que o protagonista quer?
						O	que ele deseja conseguir? Isto é ligado a sua personalidade, onde ele vive e o que ele deseja alcançar. Logo percebemos que as três bases formam um enredo que não sobreviveria sema
						harmonia destes três elementos.
					</p>
					<h5>O Protagonista</h5>
					<p>
						Você deve definir personalidade, características físicas e psicológicas, hobbies, paixões, amizades e inimizades, roupas, acessórios e armas. Estas características definem como o seu personagem é, por isso quanto mais detalhes forem colocados, mais realista o personagem se torna.
					</p>
					<h5>O Objetivo</h5>
					<p>
						É o que move o personagem, o que o torna mais real e faz com que a história se desenrole.
						O objetivo que o protagonista tem deve ser sempre acompanhado por inúmeras adversidades.
						São os obstáculos que tornaram o enredo interessante. Superar desafios e seguir em frente é
						o que torna a história cativante para o público.
					</p>
					<h5>Local onde tudo acontece</h5>
					<p>
						É o que contextualiza o protagonista em sua realidade social, sua posição no mundo em que
						ele vive. Todos os seus problemas estão aqui, os desafi os que ele terá de enfrentar, as pessoas
						que ele vai conhecer. Tudo será desenvolvido com o plano de fundo do mundo criado pelo
						escritor. Estas são três bases que giram em torno de uma história, elas sempre estarão presentes, mas a forma em que elas aparecem no enredo pode ser variável, desde mult protagonistas como um garoto no mundo real jogando um jogo onde os protagonistas do enredo são
						o garoto e seu personagem, ambos com a mesma personalidade, mas em mundos diferentes
						e com desafios diferentes. Não existe fórmula certa para uma história. É a originalidade e a
						criação de personagens diferenciados convivendo e superando seus limites constantemente
						que gera um enredo interessante de ser trabalhado levando a um desfecho ainda mais emocionante.
					</p>
					<h5>ATIVIDADES</h5>
					<ol class="unidade_6_5">
						<li>Elaborar roteiros para projetos em sala de aula. </li>
						<li>Dar inicio a roteiro para pojeto final de curta metragem.</li>
					</ol>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apostila-imugi\resources\views/apostila6/unidade6/tecnica_roteiro.blade.php ENDPATH**/ ?>