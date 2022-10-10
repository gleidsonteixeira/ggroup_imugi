<?php $__env->startSection('titulo','Unit 31 | Player Modeling'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade31" data-etapa="player_character">
			<h3 class="barlow">UNIT 31</h3>
			<h5 class="barlow upper">Aula 31 – Player Modeling</h5>
			  <div class="container">
							<p>Vamos usar uma técnica que permite edição de suas faces e superfcies de maneira orgânica, como uma massa ﬂexível ao toque, tornando a modelagem mais dinâmica e permitndo
                    uma interação maior com improvisos. Para isso criaremos um cubo, nesse cubo podemos
                    fazer uma subdivisão atravéz do menu object propertes, confgure os eixos x,y e z para ter
                    respectvamente 20 faces cada uma.
							</p>
							<figure>
								<img src="<?php echo e(asset('assets/img/games_and_animation/unit31/imagem_unit31_6.png')); ?>" alt="guia6">
							</figure>
          <p>
            Feito isso devemos converter o objeto em editável, fazemos isso usando o “C” do teclado,
            e agora vamos migrar para mais um layout diferente. Vá para sculpt, se tver realizado tudo
            com sucesso essas opções estarão disponíveis em sua área de trabalho, toda essa área é dedicada ao uso de ferramentas de modelagem dinâmica.
          </p>
          <p>
            Você pode torcer, puchar e empurrar, selecione algumas das ferramentas a sua direta:
            <b> agarrar, suavisar, encerrar, cortar, pintar, aplainar, inﬂar, amplifcar, preencher, repetr e
            raspar.</b> Essas ferramentas são nominais, logo seus nomes são auto explicatvos e fazem exatamente o que seus respectvos nomes falam, então precisamos fcar atendos a duas coisas, se
            não tver surtndo efeito é porque não possui subdivisões o sufciente pra isso, e se desejamos
            que nossas alterações sejam feitas em ambos os lados, muito útl para quando estamos modelando coisas simétricas como corpos humanos e animais.
          </p>
          		<figure>
								<img src="<?php echo e(asset('assets/img/games_and_animation/unit31/imagem_unit31_7.png')); ?>" alt="guia7">
							</figure>
        </div>
				<div class="container">
					<h5>Forma humana</h5>
					<p>Para trabalharmos com uma escultura de forma humana como nosso cubo devemos ir até
                o painel <b> objecte propertes </b> e no parâmetro <b> simetry </b> podemos atvar a simetria nos eixos desejados, essa opção vai aplicar nos eixos que podem ser confgurados para X(YZ), Y(XZ) ou Z(XY).
          </p>

					<p>
              Click na primeira opção X(YZ), selecione uma ferramenta e tente realizar qualquer alteração ao cubo, note ao lado oposto ao seu posicionamento sobre o cubo permitndo uma
              visualização da sua ação e a exata posição da ação do lado oposto. Essas confgurações são
              relatvas a ferramentas, toda vez que escolher uma delas e desejar que ela se comporte dessa maneira, editando ao mesmo tempo dois lados de sua superfcie você deve confgurar as
              propriedades, essa é a única coisa que muda sobre essa ferramenta nesse layout de edição.
					</p>
					<figure>
						<img src="<?php echo e(asset('assets/img/games_and_animation/unit31/imagem_unit31_8.png')); ?>" alt="guia8">
					</figure>
					<h5>Criando o corpo</h5>
					<p>
              Nossa nova ferramenta permite um formato de edição mais confortável aos parâmetros
              humanos e com o uso de boas quantdades de improviso o seu domínio exige prátca, logo não
              tenha medo de seus primeiros resultados e muito menos sinta qualquer orgulho deles. Salve,
              contnue estudando e compare os arquivos antgos com os novos e será capaz de notar sua
              evolução no processo.
          </p>
          <p>
              Dessa vez vamos usar um corpo genérico e cria modifcações nele, só para treinar o uso de
              nossas ferramentas. Na opção <b> content browser </b> no painel <b> objects </b> vá para <b> presets </b>, agora em
              <b> sculptng </b>, base meshes e escolha um corpo, esse corpo precisa ser vestdo e moldado para ter
              alguma identidade.
          </p>
          <p>
            Lembre-se, toda vez que desejar que uma alteração aplicada aos dois lados do objeto
            deve procurar a opção <b> simetry </b> do layout <b> sculpt </b>, quando desejar que a alteração seja feita de
            um dos lados apenas deve desatvar essas opções. No início da paleta temos 3 ferramentas
            especiais, a primeira é <b> sudivide </b> que permite criar mais subdivisões a sua forma, ao utlizá-la
            você atvará a opção <b> decrease </b>, se utlizar ela removerá as subdivisões criadas, usando essa
            a terceira será atvada, ela permite devolver as subdivisões criadas primeiro, caso chege ao
            limite de subdivisão o botão <b> subdivisão </b> fcará atvo novamente. Isso nos mostra que além dos
            recursos normais do sistema operacional de desfazer uma ação e refazê-la, isso para que nós
            possamos sempre experimentar sem riscos antes de decidir nossos próximos passos.
        </p>
        <p>
          Crie as modifcações necessárias para deixar seu personagem próximo das imagens produzidas na aula anterior, use elas como orientação. Não precisa fcar perfeito mas esse é o
          nosso objetvo, sempre que executar uma opção que não sair como esperado não exite em
          usar o <b> “ctrl+z”. </b>
        </p>
				</div>
				<div class="container">
					<h5>Distribuindo os ossos</h5>
					<p>
            Para fazer as distribuições de osso com precisão a observação é nossa melhor arma, para
            dedos use suas próprias mãos como mapas de movimento, observe elas e use isso para identfcar suas formas de movimento. Por exemplo, o polegar é igual a todos os dedos mesmo
            que não pareça, as subdivisões dos dedos são as falanges, só a 3ª falange do polegar estão
            conectadas ao punho enquanto a dos outros dedos se encontra projetada pra fora da mão.
            Observar atletas em movimento nos dá um ótmo mapa de osso, esse osso no cinema 4D são
            <b> joint tool </b>, no menu <b> character </b> do layout <b> startup </b> crie os ossos ou com a ferramenta <b> joint toll </b>
            click em todas as áreas ligadas a juntas e artculações. Aplique os nossos recursos de <b> IK </b> ou  <b> FIK </b>
            para cada junta selecionando grupos de ossos pelo painel <b> object. </b>
          </p>
          <h5>Parentesco</h5>
          <p>
              Para realizar o parentesco que vai atribuir todos os movimentos aplicados em suas formas
              ao objeto mesh ou seu molde, vá até o menu character e lá click em commands, click e bliend
              e use o painel objetos para selecionar seus ossos, para modelar livremente seus movimentos
              e animação.
          </p>
          <p>
            <b> Dica: </b> toda animação é atribuída ao grupo de objetos envolvidos nela, logo podemos criar
            seres de movimentos pré estabelecidos para membros. Posteriormente isso será usado
            para nossa animação em play game com o Unity.
          </p>
				</div>
			</div>
    </div>
	</div>
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apostila-imugi\resources\views/apostila5/unidade31/player_character.blade.php ENDPATH**/ ?>