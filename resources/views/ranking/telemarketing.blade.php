@include('layouts.ranking.head')
@section('titulo','Telemarketing')

<main>
    <div id="ranking">
        <div class="adicionar-dados">
            <form id="filtro">
                <label class="mini-title upper">De</label>
                <input type="text" name="de" placeholder="00/00/0000">
                <label class="mini-title upper">Até</label>
                <input type="text" name="ate" placeholder="00/00/0000">
                <button type="submit" class="suave click"><span class="suave">Filtrar</span></button>
                <a href="/ranking/telemarketing"><span class="suave">Resetar</span></a>
            </form>
            <script>
                $("#filtro input[name='de']").mask("00/00/0000", {reverse: false})
                $("#filtro input[name='ate']").mask("00/00/0000", {reverse: false})
                $("#filtro").submit(function(e){
                    e.preventDefault();
                    let de = $("#filtro input[name='de']").val().split("/");
                    let ate = $("#filtro input[name='ate']").val().split("/");
                    window.location = "/ranking/telemarketing/filtro/"+de[2]+"-"+de[1]+"-"+de[0]+"/"+ate[2]+"-"+ate[1]+"-"+ate[0];
                });
            </script>
            <a href="/ranking/dados"><span class="suave">Adicionar dados</span></a>
        </div>
        <div class="rankings box">
            <h3>Ranking de Telemarketing</h3>
            <div class="item">
                <ul>
                    <li class="head">
                        <h6 class="mini-title upper">N°</h6>
                        <h6 class="mini-title upper">Vendedor</h6>
                        <h6 class="mini-title upper">Visitas</h6>
                        <h6 class="mini-title upper">MTR</h6>
                        <!-- <h6 class="mini-title upper">CE</h6> -->
                        <h6 class="mini-title upper">Total</h6>
                        <h6 class="mini-title upper">CONV</h6>
                        <h6 class="mini-title upper">Unidade</h6>
                    </li>
                    @if($vendedores_todos)
                        <?php
                            $i = 0;
                            $v_visitas = 0; 
                            $v_mrt = 0; 
                            $v_elleve = 0; 
                            $v_total = 0; 
                            $v_apr = 0; 
                        ?>
                        @foreach($vendedores_todos as $v)
                            <?php
                                $v_visitas += $v->dado_visitas; 
                                $v_mrt += $v->dado_mrt; 
                                $v_elleve += $v->dado_elleve; 
                                $v_total += $v->dado_total; 
                            ?>
                            <li>
                                <h6>{{ ++$i }}°</h6>
                                <h6>{{ $v->funcionario_nome }}</h6>
                                <h6>{{ $v->dado_visitas }}</h6>
                                <h6>{{ $v->dado_mrt }}</h6>
                                <!-- <h6>{{ $v->dado_elleve }}</h6> -->
                                <h6>{{ $v->dado_total }}</h6>
                                @if($v->dado_apr == 0)
                                    <h6 class="vermelho"><span>{{ $v->dado_apr }}</span></h6>
                                @elseif($v->dado_apr <= 3.99)
                                    <h6 class="verde"><span>{{ $v->dado_apr }}</span></h6>
                                @elseif($v->dado_apr >= 4 && $v->dado_apr <= 4.99)
                                    <h6 class="amarelo"><span>{{ $v->dado_apr }}</span></h6>
                                @elseif($v->dado_apr > 4.99)
                                    <h6 class="vermelho"><span>{{ $v->dado_apr }}</span></h6>
                                @endif
                                <h6 class="truncate">{{ $v->unidade->unidade_nome }}</h6>
                            </li>
                        @endforeach
                        <li>
                            <h6>#</h6>
                            <h6>Outros</h6>
                            <h6>{{ $vendedores_outros["dado_visitas"] }}</h6>
                            <h6>{{ $vendedores_outros["dado_mrt"] }}</h6>
                            <!-- <h6>{{ $vendedores_outros["dado_elleve"] }}</h6> -->
                            <h6>{{ $vendedores_outros["dado_total"] }}</h6>
                            @if($vendedores_outros["dado_apr"] == 0)
                                <h6 class="vermelho"><span>{{ $vendedores_outros["dado_apr"] }}</span></h6>
                            @elseif($vendedores_outros["dado_apr"] <= 3.99)
                                <h6 class="verde"><span>{{ $vendedores_outros["dado_apr"] }}</span></h6>
                            @elseif($vendedores_outros["dado_apr"] >= 4 && $vendedores_outros["dado_apr"] <= 4.99)
                                <h6 class="amarelo"><span>{{ $vendedores_outros["dado_apr"] }}</span></h6>
                            @elseif($vendedores_outros["dado_apr"] > 4.99)
                                <h6 class="vermelho"><span>{{ $vendedores_outros["dado_apr"] }}</span></h6>
                            @endif
                            <h6 class="truncate"> --- </h6>
                        </li>
                        <li class="head">
                            <h6 class="mini-title upper"></h6>
                            <h6 class="mini-title upper">Total</h6>
                            <h6 class="mini-title upper">{{ $v_visitas + $vendedores_outros["dado_visitas"] }}</h6>
                            <h6 class="mini-title upper">{{ $v_mrt + $vendedores_outros["dado_mrt"] }}</h6>
                            <!-- <h6 class="mini-title upper">{{ $v_elleve + $vendedores_outros["dado_elleve"] }}</h6> -->
                            <h6 class="mini-title upper">{{ $v_total + $vendedores_outros["dado_total"] }}</h6>
                            <?php
                                if(($v_total + $vendedores_outros["dado_total"]) > 0){
                                    $v_apr = number_format(($v_visitas + $vendedores_outros["dado_visitas"]) / ($v_total + $vendedores_outros["dado_total"]), 2);
                                }
                            ?>
                            @if($v_apr == 0)
                                <h6 class="vermelho"><span>{{ $v_apr }}</span></h6>
                            @elseif($v_apr <= 3.99)
                                <h6 class="verde"><span>{{ $v_apr }}</span></h6>
                            @elseif($v_apr >= 4 && $v_apr <= 4.99)
                                <h6 class="amarelo"><span>{{ $v_apr }}</span></h6>
                            @elseif($v_apr > 4.99)
                                <h6 class="vermelho"><span>{{ $v_apr }}</span></h6>
                            @endif
                            <h6 class="mini-title upper"></h6>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</main>