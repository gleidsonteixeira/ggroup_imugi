@include('layouts.ranking.head')
@section('titulo','Ranking')

<main>
    <div id="ranking">
        <div class="adicionar-dados">
            <form id="filtro">
                <label class="mini-title upper">De</label>
                <input type="text" name="de" placeholder="00/00/0000">
                <label class="mini-title upper">Até</label>
                <input type="text" name="ate" placeholder="00/00/0000">
                <button type="submit" class="suave click"><span class="suave">Filtrar</span></button>
                <a href="/ranking"><span class="suave">Resetar</span></a>
            </form>
            <script>
                $("#filtro input[name='de']").mask("00/00/0000", {reverse: false})
                $("#filtro input[name='ate']").mask("00/00/0000", {reverse: false})
                $("#filtro").submit(function(e){
                    e.preventDefault();
                    let de = $("#filtro input[name='de']").val().split("/");
                    let ate = $("#filtro input[name='ate']").val().split("/");
                    window.location = "/ranking/filtro/"+de[2]+"-"+de[1]+"-"+de[0]+"/"+ate[2]+"-"+ate[1]+"-"+ate[0];
                });
            </script>
            <a href="/ranking/dados"><span class="suave">Adicionar dados</span></a>
        </div>
        <div class="rankings box">
            <?php
                $url = URL::current();
                $data = [];
                if(Str::contains($url, "filtro")){
                    $filtro = explode("filtro/", $url);
                    $data = explode("/", $filtro[1]); 
                }
            ?>
            <h3>Ranking Geral {{ count($data) > 0 ? "de ".date("d/m/Y", strtotime($data[0]))." até ".date("d/m/Y", strtotime($data[1])) : "" }}</h3>
            <div class="item">
                <ul class="geral">
                    <li class="head">
                        <h6 class="mini-title upper">N°</h6>
                        <h6 class="mini-title upper">Unidade</h6>
                        <h6 class="mini-title upper">Visitas</h6>
                        <h6 class="mini-title upper">MTR</h6>
                        <!-- <h6 class="mini-title upper">CE</h6> -->
                        <h6 class="mini-title upper">TOTAL</h6>
                        <h6 class="mini-title upper">CONV</h6>
                        @if(Auth::user()->cargo->cargo_nome == "Administrador")
                        <h6 class="mini-title upper"></h6>
                        @endif
                    </li>
                    @if($vendedoresGeral)
                        <?php 
                            $i = 0;
                            $v_visitas = 0; 
                            $v_mrt = 0; 
                            $v_elleve = 0; 
                            $v_total = 0; 
                            $v_apr = 0; 
                        ?>
                        @foreach($vendedoresGeral as $v)
                            <?php
                                $v_visitas += $v["dado_visitas"];
                                $v_mrt += $v["dado_mrt"];
                                $v_elleve += $v["dado_elleve"];
                                $v_total += $v["dado_total"];
                            ?>
                            <li>
                                <h6>{{ ++$i }}°</h6>
                                <h6>{{ $v["unidade_nome"] }}</h6>
                                <h6>{{ $v["dado_visitas"] }}</h6>
                                <h6>{{ $v["dado_mrt"] }}</h6>
                                <!-- <h6>{{ $v["dado_elleve"] }}</h6> -->
                                <h6>{{ $v["dado_total"] }}</h6>
                                @if($v["dado_apr"] == 0)
                                    <h6 class="vermelho"><span>{{ $v["dado_apr"] }}</span></h6>
                                @elseif($v["dado_apr"] <= 3)
                                    <h6 class="verde"><span>{{ $v["dado_apr"] }}</span></h6>
                                @elseif($v["dado_apr"] > 3 && $v["dado_apr"] <= 6)
                                    <h6 class="amarelo"><span>{{ $v["dado_apr"] }}</span></h6>
                                @elseif($v["dado_apr"] > 6)
                                    <h6 class="vermelho"><span>{{ $v["dado_apr"] }}</span></h6>
                                @endif
                                @if(Auth::user()->cargo->cargo_nome == "Administrador")
                                <h6 class="truncate" style="display: flex;align-items: center;justify-content: center;">
                                @if(count($data) > 0)
                                    <a style="height: 30px;" href="/ranking/unidade/{{ $v['unidade_id'] }}/filtro/{{ $data[0] }}/{{ $data[1] }}">
                                @else
                                    <a style="height: 30px;" href="/ranking/unidade/{{ $v['unidade_id'] }}">
                                @endif
                                        <i class="material-icons click suave" translate="no">bar_chart</i>
                                    </a>
                                </h6>
                                @endif
                            </li>
                        @endforeach
                        <li class="head">
                            <h6 class="mini-title upper"></h6>
                            <h6 class="mini-title upper">Total</h6>
                            <h6 class="mini-title upper">{{ $v_visitas }}</h6>
                            <h6 class="mini-title upper">{{ $v_mrt }}</h6>
                            <!-- <h6 class="mini-title upper">{{ $v_elleve }}</h6> -->
                            <h6 class="mini-title upper">{{ $v_total }}</h6>
                            <?php
                                if($v_total > 0){
                                    $v_apr = number_format($v_visitas / $v_total, 2);
                                }
                            ?>
                            @if($v_apr == 0)
                                <h6 class="vermelho"><span>{{ $v_apr }}</span></h6>
                            @elseif($v_apr <= 3)
                                <h6 class="verde"><span>{{ $v_apr }}</span></h6>
                            @elseif($v_apr > 3 && $v_apr <= 6)
                                <h6 class="amarelo"><span>{{ $v_apr }}</span></h6>
                            @elseif($v_apr > 6)
                                <h6 class="vermelho"><span>{{ $v_apr }}</span></h6>
                            @endif
                            @if(Auth::user()->cargo->cargo_nome == "Administrador")
                            <h6 class="mini-title upper"></h6>
                            @endif
                        </li>
                    @endif
                </ul>
                @if(Auth::user()->cargo->cargo_nome == "Administrador")
                <div class="graficos">
                    <canvas id="conversoes" height="300"></canvas>
                    <!-- <canvas id="visitas" height="300"></canvas>
                    <canvas id="mrt" height="300"></canvas>
                    <canvas id="ce" height="300"></canvas>
                    <canvas id="apr" height="300"></canvas> -->
                    <script>

                        let dados = "";
                        const canvas_conversoes = document.getElementById('conversoes').getContext('2d');
                        // const canvas_visitas = document.getElementById('visitas').getContext('2d');
                        // const canvas_mrt = document.getElementById('mrt').getContext('2d');
                        // const canvas_ce = document.getElementById('ce').getContext('2d');
                        // const canvas_apr = document.getElementById('apr').getContext('2d');
                        let grafico_conversoes = new Chart(canvas_conversoes, {
                            type: 'bar',
                            data: {
                                labels: [
                                    ],
                                datasets: [{
                                    data: [],
                                }]
                            },
                            options: {
                                responsive: false,
                                plugins: {
                                    title: {
                                        display: true,
                                        position: 'top',
                                        text: 'Buscando informações',
                                        font: {
                                            size: 18,
                                            color: 'rgba(255, 255, 255, 1)'
                                        },
                                    },
                                }
                            }
                        });
                        // let grafico_visitas = new Chart(canvas_visitas, {
                        //     type: 'bar',
                        //     data: {
                        //         labels: [
                        //             ],
                        //         datasets: [{
                        //             data: [],
                        //         }]
                        //     },
                        //     options: {
                        //         responsive: false,
                        //         plugins: {
                        //             title: {
                        //                 display: true,
                        //                 position: 'top',
                        //                 text: 'Buscando informações',
                        //                 font: {
                        //                     size: 18,
                        //                     color: 'rgba(255, 255, 255, 1)'
                        //                 },
                        //             },
                        //         }
                        //     }
                        // });
                        // let grafico_mrt = new Chart(canvas_mrt, {
                        //     type: 'bar',
                        //     data: {
                        //         labels: [
                        //             ],
                        //         datasets: [{
                        //             data: [],
                        //         }]
                        //     },
                        //     options: {
                        //         responsive: false,
                        //         plugins: {
                        //             title: {
                        //                 display: true,
                        //                 position: 'top',
                        //                 text: 'Buscando informações',
                        //                 font: {
                        //                     size: 18,
                        //                     color: 'rgba(255, 255, 255, 1)'
                        //                 },
                        //             },
                        //         }
                        //     }
                        // });
                        // let grafico_ce = new Chart(canvas_ce, {
                        //     type: 'bar',
                        //     data: {
                        //         labels: [
                        //             ],
                        //         datasets: [{
                        //             data: [],
                        //         }]
                        //     },
                        //     options: {
                        //         responsive: false,
                        //         plugins: {
                        //             title: {
                        //                 display: true,
                        //                 position: 'top',
                        //                 text: 'Buscando informações',
                        //                 font: {
                        //                     size: 18,
                        //                     color: 'rgba(255, 255, 255, 1)'
                        //                 },
                        //             },
                        //         }
                        //     }
                        // });
                        // let grafico_apr = new Chart(canvas_apr, {
                        //     type: 'bar',
                        //     data: {
                        //         labels: [
                        //             ],
                        //         datasets: [{
                        //             data: [],
                        //         }]
                        //     },
                        //     options: {
                        //         responsive: false,
                        //         plugins: {
                        //             title: {
                        //                 display: true,
                        //                 position: 'top',
                        //                 text: 'Buscando informações',
                        //                 font: {
                        //                     size: 18,
                        //                     color: 'rgba(255, 255, 255, 1)'
                        //                 },
                        //             },
                        //         }
                        //     }
                        // });

                        function ciclos(funcionario_id){
                            request = $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                url: '/ranking/ciclos',
                                type: 'get',
                                error: function(){
                                    alerta("Ocorreu um erro, atualize a página");
                                },
                                success: function(data, textStatus, xhr) {
                                    dados = data;
                                },
                                complete: function(xhr, textStatus) {
                                    rankingConversoes();
                                    // rankingVisitas();
                                    // rankingMRT();
                                    // rankingCE();
                                    // rankingAPR();
                                } 
                            });
                        } ciclos();

                        function rankingConversoes(){
                            let datasets = [];
                            Object.values(dados).map((dado) => {
                                let dataset = {
                                    label: dado[0].periodo,
                                    data: Object.values(dado).map((item) => item.dado_total),
                                    backgroundColor: "rgba(125, 194, 66, .5)",
                                    borderColor: "rgba(125, 194, 66, 1)",
                                    borderWidth: '2'
                                }
                                datasets.push(dataset);
                            });
                            grafico_conversoes.data.datasets = datasets;
                            grafico_conversoes.data.labels = Object.values(dados[0]).map((item) => item.unidade_nome);
                            grafico_conversoes.options.plugins =   {
                                                            title: {
                                                                display: true,
                                                                position: 'top',
                                                                text: 'Conversões por Unidade',
                                                                font: {
                                                                    size: 18,
                                                                    color: 'rgba(125, 194, 66, 1)'
                                                                },
                                                            },
                                                            // tooltip:{
                                                            //     callbacks:{
                                                            //         label: function(context){
                                                            //             var label = colunas[context.dataIndex] || '';
                                                            //             // if (label) {
                                                            //             //     label += ': ';
                                                            //             // }
                                                            //             // var total = 0;
                                                            //             // Object.values(dados).map((item) => total += item.dado_total);
                                                            //             // // dados.forEach( d => {
                                                            //             // //     total += d;
                                                            //             // // });
                                                            //             // var percentual = ((context.dataset.data[context.dataIndex] / total) * 100).toFixed(2);
                                                            //             // label += context.dataset.data[context.dataIndex] + "(" + percentual+ "%)";
                                                            //             return label;
                                                            //         }
                                                            //     }
                                                            // }
                                                        }
                            grafico_conversoes.update();
                        }

                        // function rankingVisitas(){
                        //     let datasets = [];
                        //     Object.values(dados).map((dado) => {
                        //         let dataset = {
                        //             label: dado[0].periodo,
                        //             data: Object.values(dado).map((item) => item.dado_visitas),
                        //             backgroundColor: "rgba(125, 194, 66, .5)",
                        //             borderColor: "rgba(125, 194, 66, 1)",
                        //             borderWidth: '2'
                        //         }
                        //         datasets.push(dataset);
                        //     });
                        //     grafico_visitas.data.datasets = datasets;
                        //     grafico_visitas.data.labels = Object.values(dados[0]).map((item) => item.unidade_nome);
                        //     grafico_visitas.options.plugins =   {
                        //                                     title: {
                        //                                         display: true,
                        //                                         position: 'top',
                        //                                         text: 'Visitas por Unidade',
                        //                                         font: {
                        //                                             size: 18,
                        //                                             color: 'rgba(255, 255, 255, 1)'
                        //                                         },
                        //                                     },
                        //                                     // tooltip:{
                        //                                     //     callbacks:{
                        //                                     //         label: function(context){
                        //                                     //             var label = colunas[context.dataIndex] || '';
                        //                                     //             // if (label) {
                        //                                     //             //     label += ': ';
                        //                                     //             // }
                        //                                     //             // var total = 0;
                        //                                     //             // Object.values(dados).map((item) => total += item.dado_total);
                        //                                     //             // // dados.forEach( d => {
                        //                                     //             // //     total += d;
                        //                                     //             // // });
                        //                                     //             // var percentual = ((context.dataset.data[context.dataIndex] / total) * 100).toFixed(2);
                        //                                     //             // label += context.dataset.data[context.dataIndex] + "(" + percentual+ "%)";
                        //                                     //             return label;
                        //                                     //         }
                        //                                     //     }
                        //                                     // }
                        //                                 }
                        //     grafico_visitas.update();
                        // }

                        // function rankingMRT(){
                        //     let datasets = [];
                        //     Object.values(dados).map((dado) => {
                        //         let dataset = {
                        //             label: dado[0].periodo,
                        //             data: Object.values(dado).map((item) => item.dado_mrt),
                        //             backgroundColor: "rgba(125, 194, 66, .5)",
                        //             borderColor: "rgba(125, 194, 66, 1)",
                        //             borderWidth: '2'
                        //         }
                        //         datasets.push(dataset);
                        //     });
                        //     grafico_mrt.data.datasets = datasets;
                        //     grafico_mrt.data.labels = Object.values(dados[0]).map((item) => item.unidade_nome);
                        //     grafico_mrt.options.plugins =   {
                        //                                     title: {
                        //                                         display: true,
                        //                                         position: 'top',
                        //                                         text: 'MRT por Unidade',
                        //                                         font: {
                        //                                             size: 18,
                        //                                             color: 'rgba(255, 255, 255, 1)'
                        //                                         },
                        //                                     },
                        //                                     // tooltip:{
                        //                                     //     callbacks:{
                        //                                     //         label: function(context){
                        //                                     //             var label = colunas[context.dataIndex] || '';
                        //                                     //             // if (label) {
                        //                                     //             //     label += ': ';
                        //                                     //             // }
                        //                                     //             // var total = 0;
                        //                                     //             // Object.values(dados).map((item) => total += item.dado_total);
                        //                                     //             // // dados.forEach( d => {
                        //                                     //             // //     total += d;
                        //                                     //             // // });
                        //                                     //             // var percentual = ((context.dataset.data[context.dataIndex] / total) * 100).toFixed(2);
                        //                                     //             // label += context.dataset.data[context.dataIndex] + "(" + percentual+ "%)";
                        //                                     //             return label;
                        //                                     //         }
                        //                                     //     }
                        //                                     // }
                        //                                 }
                        //     grafico_mrt.update();
                        // }

                        // function rankingCE(){
                        //     let datasets = [];
                        //     Object.values(dados).map((dado) => {
                        //         let dataset = {
                        //             label: dado[0].periodo,
                        //             data: Object.values(dado).map((item) => item.dado_elleve),
                        //             backgroundColor: "rgba(125, 194, 66, .5)",
                        //             borderColor: "rgba(125, 194, 66, 1)",
                        //             borderWidth: '2'
                        //         }
                        //         datasets.push(dataset);
                        //     });
                        //     grafico_ce.data.datasets = datasets;
                        //     grafico_ce.data.labels = Object.values(dados[0]).map((item) => item.unidade_nome);
                        //     grafico_ce.options.plugins =   {
                        //                                     title: {
                        //                                         display: true,
                        //                                         position: 'top',
                        //                                         text: 'CE por Unidade',
                        //                                         font: {
                        //                                             size: 18,
                        //                                             color: 'rgba(255, 255, 255, 1)'
                        //                                         },
                        //                                     },
                        //                                     // tooltip:{
                        //                                     //     callbacks:{
                        //                                     //         label: function(context){
                        //                                     //             var label = colunas[context.dataIndex] || '';
                        //                                     //             // if (label) {
                        //                                     //             //     label += ': ';
                        //                                     //             // }
                        //                                     //             // var total = 0;
                        //                                     //             // Object.values(dados).map((item) => total += item.dado_total);
                        //                                     //             // // dados.forEach( d => {
                        //                                     //             // //     total += d;
                        //                                     //             // // });
                        //                                     //             // var percentual = ((context.dataset.data[context.dataIndex] / total) * 100).toFixed(2);
                        //                                     //             // label += context.dataset.data[context.dataIndex] + "(" + percentual+ "%)";
                        //                                     //             return label;
                        //                                     //         }
                        //                                     //     }
                        //                                     // }
                        //                                 }
                        //     grafico_ce.update();
                        // }

                        // function rankingAPR(){
                        //     let datasets = [];
                        //     Object.values(dados).map((dado) => {
                        //         let dataset = {
                        //             label: dado[0].periodo,
                        //             data: Object.values(dado).map((item) => item.dado_apr),
                        //             backgroundColor: "rgba(125, 194, 66, .5)",
                        //             borderColor: "rgba(125, 194, 66, 1)",
                        //             borderWidth: '2'
                        //         }
                        //         datasets.push(dataset);
                        //     });
                        //     grafico_apr.data.datasets = datasets;
                        //     grafico_apr.data.labels = Object.values(dados[0]).map((item) => item.unidade_nome);
                        //     grafico_apr.options.plugins =   {
                        //                                     title: {
                        //                                         display: true,
                        //                                         position: 'top',
                        //                                         text: 'APR por Unidade',
                        //                                         font: {
                        //                                             size: 18,
                        //                                             color: 'rgba(255, 255, 255, 1)'
                        //                                         },
                        //                                     },
                        //                                     // tooltip:{
                        //                                     //     callbacks:{
                        //                                     //         label: function(context){
                        //                                     //             var label = colunas[context.dataIndex] || '';
                        //                                     //             // if (label) {
                        //                                     //             //     label += ': ';
                        //                                     //             // }
                        //                                     //             // var total = 0;
                        //                                     //             // Object.values(dados).map((item) => total += item.dado_total);
                        //                                     //             // // dados.forEach( d => {
                        //                                     //             // //     total += d;
                        //                                     //             // // });
                        //                                     //             // var percentual = ((context.dataset.data[context.dataIndex] / total) * 100).toFixed(2);
                        //                                     //             // label += context.dataset.data[context.dataIndex] + "(" + percentual+ "%)";
                        //                                     //             return label;
                        //                                     //         }
                        //                                     //     }
                        //                                     // }
                        //                                 }
                        //     grafico_apr.update();
                        // }

                    </script>
                </div>
                @endif
            </div>
        </div>
        <div class="rankings box">
            <h3>Ranking de Vendedores {{ count($data) > 0 ? "de ".date("d/m/Y", strtotime($data[0]))." até ".date("d/m/Y", strtotime($data[1])) : "" }} <a href="/ranking/vendedores"><span class="suave">Ver Todos</span></a></h3>
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
                        <h6 class="mini-title upper"></h6>
                    </li>
                    @if($vendedores_top10)
                        <?php
                            $i = 0;
                            $v_visitas = 0; 
                            $v_mrt = 0; 
                            $v_elleve = 0; 
                            $v_total = 0; 
                            $v_apr = 0; 
                        ?>
                        @foreach($vendedores_top10 as $v)
                            <?php
                                $v_visitas += $v->dado_visitas; 
                                $v_mrt += $v->dado_mrt; 
                                $v_elleve += $v->dado_elleve; 
                                $v_total += $v->dado_total; 
                            ?>
                            <li>
                                <h6>{{ ++$i }}°</h6>
                                <h6>{{ strtoupper($v->funcionario_nome) }}</h6>
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
                                <h6 class="truncate"><i class="material-icons click suave ver-tudo" translate="no" funcionario_id="{{ $v->funcionario_id }}">bar_chart</i></h6>
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
                            <h6 class="truncate"></h6>
                        </li>
                        <li class="head">
                            <h6 class="mini-title upper"></h6>
                            <h6 class="mini-title upper">Total</h6>
                            <h6 class="mini-title upper">{{ $v_visitas + $vendedores_outros["dado_visitas"] }}</h6>
                            <h6 class="mini-title upper">{{ $v_mrt + $vendedores_outros["dado_mrt"] }}</h6>
                            <!-- <h6 class="mini-title upper">{{ $v_elleve + $vendedores_outros["dado_elleve"] }}</h6> -->
                            <h6 class="mini-title upper">{{ $v_total + $vendedores_outros["dado_total"] }}</h6>
                            <?php
                                $v_soma = ($v_total + $vendedores_outros["dado_total"]);
                                if( $v_soma > 0){
                                    $v_apr = number_format(($v_visitas + $vendedores_outros["dado_visitas"]) / $v_soma, 2);
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
                            <h6 class="mini-title upper"></h6>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="rankings box">
            <h3>Ranking de Telemarketing {{ count($data) > 0 ? "de ".date("d/m/Y", strtotime($data[0]))." até ".date("d/m/Y", strtotime($data[1])) : "" }} <a href="/ranking/telemarketing"><span class="suave">Ver Todos</span></a></h3>
            <div class="item">
                <ul>
                    <li class="head">
                        <h6 class="mini-title upper">N°</h6>
                        <h6 class="mini-title upper">Atendente</h6>
                        <h6 class="mini-title upper">Visitas</h6>
                        <h6 class="mini-title upper">MTR</h6>
                        <!-- <h6 class="mini-title upper">CE</h6> -->
                        <h6 class="mini-title upper">Total</h6>
                        <h6 class="mini-title upper">CONV</h6>
                        <h6 class="mini-title upper">Unidade</h6>
                        <h6 class="mini-title upper"></h6>
                    </li>
                    @if($telemarketing_top10)
                        <?php
                            $j = 0;
                            $t_visitas = 0; 
                            $t_mrt = 0; 
                            $t_elleve = 0; 
                            $t_total = 0; 
                            $t_apr = 0; 
                        ?>
                        @foreach($telemarketing_top10 as $t)
                            <?php
                                $t_visitas += $t->dado_visitas; 
                                $t_mrt += $t->dado_mrt; 
                                $t_elleve += $t->dado_elleve; 
                                $t_total += $t->dado_total; 
                            ?>
                            <li>
                                <h6>{{ ++$j }}°</h6>
                                <h6>{{ strtoupper($t->funcionario_nome) }}</h6>
                                <h6>{{ $t->dado_visitas }}</h6>
                                <h6>{{ $t->dado_mrt }}</h6>
                                <!-- <h6>{{ $t->dado_elleve }}</h6> -->
                                <h6>{{ $t->dado_total }}</h6>
                                @if($t->dado_apr == 0)
                                    <h6 class="vermelho"><span>{{ $t->dado_apr }}</span></h6>
                                @elseif($t->dado_apr <= 3)
                                    <h6 class="verde"><span>{{ $t->dado_apr }}</span></h6>
                                @elseif($t->dado_apr > 3 && $t->dado_apr <= 6)
                                    <h6 class="amarelo"><span>{{ $t->dado_apr }}</span></h6>
                                @elseif($t->dado_apr > 6)
                                    <h6 class="vermelho"><span>{{ $t->dado_apr }}</span></h6>
                                @endif
                                <h6 class="truncate">{{ $t->unidade->unidade_nome }}</h6>
                                <h6 class="truncate"><i class="material-icons click suave ver-tudo" translate="no" funcionario_id="{{ $t->funcionario_id }}">bar_chart</i></h6>
                            </li>
                        @endforeach
                        <li>
                            <h6>#</h6>
                            <h6>Outros</h6>
                            <h6>{{ $telemarketing_outros["dado_visitas"] }}</h6>
                            <h6>{{ $telemarketing_outros["dado_mrt"] }}</h6>
                            <!-- <h6>{{ $telemarketing_outros["dado_elleve"] }}</h6> -->
                            <h6>{{ $telemarketing_outros["dado_total"] }}</h6>
                            @if($telemarketing_outros["dado_apr"] == 0)
                                <h6 class="vermelho"><span>{{ $telemarketing_outros["dado_apr"] }}</span></h6>
                            @elseif($telemarketing_outros["dado_apr"] <= 3.99)
                                <h6 class="verde"><span>{{ $telemarketing_outros["dado_apr"] }}</span></h6>
                            @elseif($telemarketing_outros["dado_apr"] >= 4 && $telemarketing_outros["dado_apr"] <= 4.99)
                                <h6 class="amarelo"><span>{{ $telemarketing_outros["dado_apr"] }}</span></h6>
                            @elseif($telemarketing_outros["dado_apr"] > 4.99)
                                <h6 class="vermelho"><span>{{ $telemarketing_outros["dado_apr"] }}</span></h6>
                            @endif
                            <h6 class="truncate"> --- </h6>
                            <h6 class="truncate"></h6>
                        </li>
                        <li class="head">
                            <h6 class="mini-title upper"></h6>
                            <h6 class="mini-title upper">Total</h6>
                            <h6 class="mini-title upper">{{ $t_visitas + $telemarketing_outros["dado_visitas"] }}</h6>
                            <h6 class="mini-title upper">{{ $t_mrt + $telemarketing_outros["dado_mrt"] }}</h6>
                            <!-- <h6 class="mini-title upper">{{ $t_elleve + $telemarketing_outros["dado_elleve"] }}</h6> -->
                            <h6 class="mini-title upper">{{ $t_total + $telemarketing_outros["dado_total"] }}</h6>
                            <?php
                                $t_soma = ($t_total + $telemarketing_outros["dado_total"]);
                                if($t_soma > 0){
                                    $t_apr = number_format(($t_visitas + $telemarketing_outros["dado_visitas"]) / $t_soma, 2);
                                }
                            ?>
                            @if($t_apr == 0)
                                <h6 class="vermelho"><span>{{ $t_apr }}</span></h6>
                            @elseif($t_apr <= 3.99)
                                <h6 class="verde"><span>{{ $t_apr }}</span></h6>
                            @elseif($t_apr >= 4 && $t_apr <= 4.99)
                                <h6 class="amarelo"><span>{{ $t_apr }}</span></h6>
                            @elseif($t_apr > 4.99)
                                <h6 class="vermelho"><span>{{ $t_apr }}</span></h6>
                            @endif
                            <h6 class="mini-title upper"></h6>
                            <h6 class="mini-title upper"></h6>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</main>

<div id="lateral" class="suave">
    <div id="ver" class="content suave">
        <h4>Visualizar <i class="material-icons click suave fechar" translate="no">close</i></h4>
        <form id="formVer">
            <label>Funcionário</label>
            <input type="text" name="funcionario_nome" disabled />
            <div class="metade esquerda">
                <label>De</label>
                <input type="text" name="ver_de">
            </div>
            <div class="metade direita">
                <label>Até</label>
                <input type="text" name="ver_ate">
            </div>
            <div class="clear"></div>
            <button type="submit" class="click suave"><span class="suave">Filtrar</span></button>
            <label style="margin-top: 16px;">Dados</label>
            <ul class="dados"></ul>
        </form>
    </div>
</div>

<script>

    $("#formVer input[name='ver_de'], #formVer input[name='ver_ate']").mask("00/00/0000");

    $(document).on("click", ".ver-tudo", function(){
        $("#lateral, #ver").addClass("active");
        let funcionario_id = $(this).attr("funcionario_id");
        
        buscar(funcionario_id);
        
        function buscar(funcionario_id){
            request = $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/ranking/funcionarios/'+funcionario_id,
                type: 'get',
                error: function(){
                    alerta("Ocorreu um erro, atualize a página");
                },
                success: function(data, textStatus, xhr) {
                    $("#formVer ul").empty();
                    $("#formVer input[name='funcionario_nome']").val(data.funcionario_nome);
                    data.dados.forEach((d) => {
                        let dado_total = (d.dado_mrt + d.dado_elleve);
                        let li =    '<li>'+
                                        '<h6>'+d.dado_data+'</h6>'+
                                        '<h6><span class="mini-title upper">Visitas</span>'+d.dado_visitas+'</h6>'+
                                        '<h6><span class="mini-title upper">MRT</span>'+d.dado_mrt+'</h6>'+
                                        '<h6><span class="mini-title upper">CE</span>'+d.dado_elleve+'</h6>'+
                                        '<h6><span class="mini-title upper">Total</span>'+(d.dado_mrt + d.dado_elleve)+'</h6>';
                                        if(dado_total > 0){
                                            let dado_apr = (d.dado_visitas / (d.dado_mrt + d.dado_elleve)).toFixed(2);
                                            if(dado_apr <= 3.99){
                                                li += '<h6 style="color: #00e676;"><span class="mini-title upper">CONV</span>'+dado_apr+'</h6>';
                                            }else if(dado_apr >= 4 && dado_apr <= 4.99){
                                                li += '<h6 style="color: #e2e600;"><span class="mini-title upper">CONV</span>'+dado_apr+'</h6>';
                                            }else if(dado_apr > 4.99){
                                                li += '<h6 style="color: #e60000;"><span class="mini-title upper">CONV</span>'+dado_apr+'</h6>';
                                            }
                                        }else{
                                            li += '<h6 style="color: #e60000;"><span class="mini-title upper">CONV</span>0</h6>';
                                        }
                            li +=   '</li>';
                        $("#formVer ul").append(li);
                    });
                },
                complete: function(xhr, textStatus) {} 
            });
        }
    });

    $("#formVer").submit(function(e){
        e.preventDefault();
        $("#formVer ul li").css({"display":"flex"});
        let de = $("#formVer input[name='ver_de']").val().split("/");
        let ate = $("#formVer input[name='ver_ate']").val().split("/");
        let de_ver = Date.parse(de[2]+"-"+de[1]+"-"+de[0]);
        let ate_ver = Date.parse(ate[2]+"-"+ate[1]+"-"+ate[0]);

        $("#formVer ul li h6:first-child").each(function(){
            let data = $(this).text().split("/");
            let data_ver = Date.parse(data[2]+"-"+data[1]+"-"+data[0]);
            if(data_ver >= de_ver && data_ver <= ate_ver){
                $(this).offsetParent().css({"display":"flex"});
            }else{
                $(this).offsetParent().css({"display":"none"});
            }
        });
    });
    
    $(".fechar").click(function(){
        $("#lateral, #ver").removeClass("active");
    });

</script>