@extends('layouts.template')
@section('titulo','Unit 42 | Prefab')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade42" data-etapa="prefab">
			<h3 class="barlow">UNIT 41</h3>
			<h5 class="barlow upper">Prefab</h5>
           
<p>O sistema Prefab da Unity permite que você crie, configure e armazene um <strong>GameObject</strong> completo
com todos os seus componentes, valores de propriedade e GameObjects filhos/child
como um Asset reutilizável. O Asset Prefab atua como um modelo a partir do qual você pode
criar novas instâncias <strong>Prefab na Scene</strong>.</p>
<p>Quando você deseja reutilizar um GameObject configurado de uma maneira particular - como
um personagem não-jogador (NPC), adereço ou parte de cenário - em vários lugares em sua
cena, ou em várias cenas em seu projeto ao mesmo tempo, você deve convertê-lo em um
Prefab. Isso é melhor do que simplesmente copiar e colar o GameObject, porque o sistema
Prefab permite que você mantenha automaticamente todas as cópias em sincronia.</p>
<p>Quaisquer edições que você fizer em um Asset Prefab são automaticamente repetidas nas
instâncias desse Prefab, permitindo que você faça facilmente grandes mudanças em todo o
seu Projeto, sem ter que fazer repetidamente a mesma edição em todas as cópias do Asset.</p>
<p>Você pode agrupar Prefabs dentro de outros Prefabs para criar hierarquias complexas de objetos
que são fáceis de editar em vários níveis.</p>
<h5 class="barlow upper">Exemplo de prefabs de inimigos.</h5>
<p>No entanto, isso não significa que todas as instâncias do Prefab precisam ser idênticas. Você
pode substituir as configurações em instâncias prefab individuais se quiser que algumas instâncias
de um Prefab sejam diferentes de outras.</p>
<p>Você também deve usar Prefabs quando quiser instanciar GameObjects em tempo de execução
que não existam em sua cena no início - por exemplo, para fazer powerups, efeitos especiais,
projéteis ou NPCs aparecerem nos momentos certos durante o jogo.</p>
<h5 class="barlow upper">Alguns exemplos comuns de uso do Prefab incluem.</h5>
<p><strong>assets de ambientes/Environmental Assets</strong>: Por exemplo, um certo tipo de árvore usada várias
vezes em um nível (como visto na imagem acima).</p>
<p><strong>Personagens não-jogadores (NPCs)/Non-player characters (NPCs)</strong>: Por exemplo, um certo
tipo de robô pode aparecer em seu jogo várias vezes, em vários níveis. Eles podem diferir
(usando substituições ) na velocidade em que se movem ou no som que fazem.</p>
<p><strong>Projéteis/Projectiles</strong>: Por exemplo, o canhão de um pirata pode instanciar uma bola de canhão
Prefab cada vez que é disparada.</p>
<p><strong>O personagem principal (jogador)/The player</strong> - O prefab do jogador pode ser colocado no
ponto de partida em cada nível (cenas separadas) do seu jogo.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit41/imagem13.png') }}" alt="guia1" style="width:45%;">
</figure>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit41/imagem14.png') }}" alt="guia1" style="width:65%;">
</figure>

</div>
</div>
</main>

<script>
	activeMenu();
</script>

@endsection
