@include('layouts.ranking.head')

<section id="notfound">
    <h1>404</h1>
    <h2>Não encontramos a página que você está procurando: <a onclick="voltar()" class="suave click">Voltar</a></h2>
</section>

<script>
    function voltar(){
        window.history.back();
    }
</script>