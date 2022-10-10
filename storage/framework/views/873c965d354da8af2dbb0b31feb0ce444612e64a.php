<?php echo $__env->make('layouts.ranking.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('titulo','Ranking'); ?>

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
        <div class="rankings">
            <div class="item box">
                <h3>Ranking Geral</h3>
                <ul class="geral">
                    <li class="head">
                        <h6 class="mini-title upper">N°</h6>
                        <h6 class="mini-title upper">Unidade</h6>
                        <h6 class="mini-title upper">Visitas</h6>
                        <h6 class="mini-title upper">MTR</h6>
                        <h6 class="mini-title upper">CE</h6>
                        <h6 class="mini-title upper">TOTAL</h6>
                        <h6 class="mini-title upper">CONV</h6>
                    </li>
                    <?php if($vendedoresGeral): ?>
                        <?php 
                            $i = 0;
                            $v_visitas = 0; 
                            $v_mrt = 0; 
                            $v_elleve = 0; 
                            $v_total = 0; 
                            $v_apr = 0; 
                        ?>
                        <?php $__currentLoopData = $vendedoresGeral; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $v_visitas += $v["dado_visitas"];
                                $v_mrt += $v["dado_mrt"];
                                $v_elleve += $v["dado_elleve"];
                                $v_total += $v["dado_total"];
                            ?>
                            <li>
                                <h6 unidade_id='<?php echo e($v["unidade_id"]); ?>'><?php echo e(++$i); ?>°</h6>
                                <h6><?php echo e($v["unidade_nome"]); ?></h6>
                                <h6><?php echo e($v["dado_visitas"]); ?></h6>
                                <h6><?php echo e($v["dado_mrt"]); ?></h6>
                                <h6><?php echo e($v["dado_elleve"]); ?></h6>
                                <h6><?php echo e($v["dado_total"]); ?></h6>
                                <?php if($v["dado_apr"] == 0): ?>
                                    <h6 class="vermelho"><span><?php echo e($v["dado_apr"]); ?></span></h6>
                                <?php elseif($v["dado_apr"] <= 3): ?>
                                    <h6 class="verde"><span><?php echo e($v["dado_apr"]); ?></span></h6>
                                <?php elseif($v["dado_apr"] > 3 && $v["dado_apr"] <= 6): ?>
                                    <h6 class="amarelo"><span><?php echo e($v["dado_apr"]); ?></span></h6>
                                <?php elseif($v["dado_apr"] > 6): ?>
                                    <h6 class="vermelho"><span><?php echo e($v["dado_apr"]); ?></span></h6>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li class="head">
                            <h6 class="mini-title upper"></h6>
                            <h6 class="mini-title upper">Total</h6>
                            <h6 class="mini-title upper"><?php echo e($v_visitas); ?></h6>
                            <h6 class="mini-title upper"><?php echo e($v_mrt); ?></h6>
                            <h6 class="mini-title upper"><?php echo e($v_elleve); ?></h6>
                            <h6 class="mini-title upper"><?php echo e($v_total); ?></h6>
                            <?php
                                if($v_total > 0){
                                    $v_apr = number_format($v_visitas / $v_total, 2);
                                }
                            ?>
                            <?php if($v_apr == 0): ?>
                                <h6 class="vermelho"><span><?php echo e($v_apr); ?></span></h6>
                            <?php elseif($v_apr <= 3): ?>
                                <h6 class="verde"><span><?php echo e($v_apr); ?></span></h6>
                            <?php elseif($v_apr > 3 && $v_apr <= 6): ?>
                                <h6 class="amarelo"><span><?php echo e($v_apr); ?></span></h6>
                            <?php elseif($v_apr > 6): ?>
                                <h6 class="vermelho"><span><?php echo e($v_apr); ?></span></h6>
                            <?php endif; ?>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="rankings">
            <div class="item box">
                <h3>Ranking de Vendedores</h3>
                <ul>
                    <li class="head">
                        <h6 class="mini-title upper">N°</h6>
                        <h6 class="mini-title upper">Vendedor</h6>
                        <h6 class="mini-title upper">Visitas</h6>
                        <h6 class="mini-title upper">MTR</h6>
                        <h6 class="mini-title upper">CE</h6>
                        <h6 class="mini-title upper">Total</h6>
                        <h6 class="mini-title upper">CONV</h6>
                        <h6 class="mini-title upper">Unidade</h6>
                    </li>
                    <?php if($vendedores_top10): ?>
                        <?php
                            $i = 0;
                            $v_visitas = 0; 
                            $v_mrt = 0; 
                            $v_elleve = 0; 
                            $v_total = 0; 
                            $v_apr = 0; 
                        ?>
                        <?php $__currentLoopData = $vendedores_top10; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $v_visitas += $v->dado_visitas; 
                                $v_mrt += $v->dado_mrt; 
                                $v_elleve += $v->dado_elleve; 
                                $v_total += $v->dado_total; 
                            ?>
                            <li>
                                <h6><?php echo e(++$i); ?>°</h6>
                                <h6><?php echo e($v->funcionario_nome); ?></h6>
                                <h6><?php echo e($v->dado_visitas); ?></h6>
                                <h6><?php echo e($v->dado_mrt); ?></h6>
                                <h6><?php echo e($v->dado_elleve); ?></h6>
                                <h6><?php echo e($v->dado_total); ?></h6>
                                <?php if($v->dado_apr == 0): ?>
                                    <h6 class="vermelho"><span><?php echo e($v->dado_apr); ?></span></h6>
                                <?php elseif($v->dado_apr <= 3.99): ?>
                                    <h6 class="verde"><span><?php echo e($v->dado_apr); ?></span></h6>
                                <?php elseif($v->dado_apr >= 4 && $v->dado_apr <= 4.99): ?>
                                    <h6 class="amarelo"><span><?php echo e($v->dado_apr); ?></span></h6>
                                <?php elseif($v->dado_apr > 4.99): ?>
                                    <h6 class="vermelho"><span><?php echo e($v->dado_apr); ?></span></h6>
                                <?php endif; ?>
                                <h6 class="truncate"><?php echo e($v->unidade->unidade_nome); ?></h6>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <h6>#</h6>
                            <h6>Outros</h6>
                            <h6><?php echo e($vendedores_outros["dado_visitas"]); ?></h6>
                            <h6><?php echo e($vendedores_outros["dado_mrt"]); ?></h6>
                            <h6><?php echo e($vendedores_outros["dado_elleve"]); ?></h6>
                            <h6><?php echo e($vendedores_outros["dado_total"]); ?></h6>
                            <?php if($vendedores_outros["dado_apr"] == 0): ?>
                                <h6 class="vermelho"><span><?php echo e($vendedores_outros["dado_apr"]); ?></span></h6>
                            <?php elseif($vendedores_outros["dado_apr"] <= 3.99): ?>
                                <h6 class="verde"><span><?php echo e($vendedores_outros["dado_apr"]); ?></span></h6>
                            <?php elseif($vendedores_outros["dado_apr"] >= 4 && $vendedores_outros["dado_apr"] <= 4.99): ?>
                                <h6 class="amarelo"><span><?php echo e($vendedores_outros["dado_apr"]); ?></span></h6>
                            <?php elseif($vendedores_outros["dado_apr"] > 4.99): ?>
                                <h6 class="vermelho"><span><?php echo e($vendedores_outros["dado_apr"]); ?></span></h6>
                            <?php endif; ?>
                            <h6 class="truncate"> --- </h6>
                        </li>
                        <li class="head">
                            <h6 class="mini-title upper"></h6>
                            <h6 class="mini-title upper">Total</h6>
                            <h6 class="mini-title upper"><?php echo e($v_visitas + $vendedores_outros["dado_visitas"]); ?></h6>
                            <h6 class="mini-title upper"><?php echo e($v_mrt + $vendedores_outros["dado_mrt"]); ?></h6>
                            <h6 class="mini-title upper"><?php echo e($v_elleve + $vendedores_outros["dado_elleve"]); ?></h6>
                            <h6 class="mini-title upper"><?php echo e($v_total + $vendedores_outros["dado_total"]); ?></h6>
                            <?php
                                $v_soma = ($v_total + $vendedores_outros["dado_total"]);
                                if($v_soma > 0){
                                    $v_apr = number_format(($v_visitas + $vendedores_outros["dado_visitas"]) / $v_soma, 2);
                                }
                            ?>
                            <?php if($v_apr == 0): ?>
                                <h6 class="vermelho"><span><?php echo e($v_apr); ?></span></h6>
                            <?php elseif($v_apr <= 3.99): ?>
                                <h6 class="verde"><span><?php echo e($v_apr); ?></span></h6>
                            <?php elseif($v_apr >= 4 && $v_apr <= 4.99): ?>
                                <h6 class="amarelo"><span><?php echo e($v_apr); ?></span></h6>
                            <?php elseif($v_apr > 4.99): ?>
                                <h6 class="vermelho"><span><?php echo e($v_apr); ?></span></h6>
                            <?php endif; ?>
                            <h6 class="mini-title upper"></h6>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="rankings">
            <div class="item box">
                <h3>Ranking de Telemarketing</h3>
                <ul>
                    <li class="head">
                        <h6 class="mini-title upper">N°</h6>
                        <h6 class="mini-title upper">Atendente</h6>
                        <h6 class="mini-title upper">Visitas</h6>
                        <h6 class="mini-title upper">MTR</h6>
                        <h6 class="mini-title upper">CE</h6>
                        <h6 class="mini-title upper">Total</h6>
                        <h6 class="mini-title upper">CONV</h6>
                        <h6 class="mini-title upper">Unidade</h6>
                    </li>
                    <?php if($telemarketing_top10): ?>
                        <?php
                            $j = 0;
                            $t_visitas = 0; 
                            $t_mrt = 0; 
                            $t_elleve = 0; 
                            $t_total = 0; 
                            $t_apr = 0; 
                        ?>
                        <?php $__currentLoopData = $telemarketing_top10; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $t_visitas += $t->dado_visitas; 
                                $t_mrt += $t->dado_mrt; 
                                $t_elleve += $t->dado_elleve; 
                                $t_total += $t->dado_total; 
                            ?>
                            <li>
                                <h6><?php echo e(++$j); ?>°</h6>
                                <h6><?php echo e($t->funcionario_nome); ?></h6>
                                <h6><?php echo e($t->dado_visitas); ?></h6>
                                <h6><?php echo e($t->dado_mrt); ?></h6>
                                <h6><?php echo e($t->dado_elleve); ?></h6>
                                <h6><?php echo e($t->dado_total); ?></h6>
                                <?php if($t->dado_apr == 0): ?>
                                    <h6 class="vermelho"><span><?php echo e($t->dado_apr); ?></span></h6>
                                <?php elseif($t->dado_apr <= 3): ?>
                                    <h6 class="verde"><span><?php echo e($t->dado_apr); ?></span></h6>
                                <?php elseif($t->dado_apr > 3 && $t->dado_apr <= 6): ?>
                                    <h6 class="amarelo"><span><?php echo e($t->dado_apr); ?></span></h6>
                                <?php elseif($t->dado_apr > 6): ?>
                                    <h6 class="vermelho"><span><?php echo e($t->dado_apr); ?></span></h6>
                                <?php endif; ?>
                                <h6 class="truncate"><?php echo e($t->unidade->unidade_nome); ?></h6>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <h6>#</h6>
                            <h6>Outros</h6>
                            <h6><?php echo e($telemarketing_outros["dado_visitas"]); ?></h6>
                            <h6><?php echo e($telemarketing_outros["dado_mrt"]); ?></h6>
                            <h6><?php echo e($telemarketing_outros["dado_elleve"]); ?></h6>
                            <h6><?php echo e($telemarketing_outros["dado_total"]); ?></h6>
                            <?php if($telemarketing_outros["dado_apr"] == 0): ?>
                                <h6 class="vermelho"><span><?php echo e($telemarketing_outros["dado_apr"]); ?></span></h6>
                            <?php elseif($telemarketing_outros["dado_apr"] <= 3.99): ?>
                                <h6 class="verde"><span><?php echo e($telemarketing_outros["dado_apr"]); ?></span></h6>
                            <?php elseif($telemarketing_outros["dado_apr"] >= 4 && $telemarketing_outros["dado_apr"] <= 4.99): ?>
                                <h6 class="amarelo"><span><?php echo e($telemarketing_outros["dado_apr"]); ?></span></h6>
                            <?php elseif($telemarketing_outros["dado_apr"] > 4.99): ?>
                                <h6 class="vermelho"><span><?php echo e($telemarketing_outros["dado_apr"]); ?></span></h6>
                            <?php endif; ?>
                            <h6 class="truncate"> --- </h6>
                        </li>
                        <li class="head">
                            <h6 class="mini-title upper"></h6>
                            <h6 class="mini-title upper">Total</h6>
                            <h6 class="mini-title upper"><?php echo e($t_visitas + $telemarketing_outros["dado_visitas"]); ?></h6>
                            <h6 class="mini-title upper"><?php echo e($t_mrt + $telemarketing_outros["dado_mrt"]); ?></h6>
                            <h6 class="mini-title upper"><?php echo e($t_elleve + $telemarketing_outros["dado_elleve"]); ?></h6>
                            <h6 class="mini-title upper"><?php echo e($t_total + $telemarketing_outros["dado_total"]); ?></h6>
                            <?php
                                $t_soma = ($t_total + $telemarketing_outros["dado_total"]);
                                if($t_soma > 0){
                                    $t_apr = number_format(($t_visitas + $telemarketing_outros["dado_visitas"]) / $t_soma, 2);
                                }
                            ?>
                            <?php if($t_apr == 0): ?>
                                <h6 class="vermelho"><span><?php echo e($t_apr); ?></span></h6>
                            <?php elseif($t_apr <= 3.99): ?>
                                <h6 class="verde"><span><?php echo e($t_apr); ?></span></h6>
                            <?php elseif($t_apr >= 4 && $t_apr <= 4.99): ?>
                                <h6 class="amarelo"><span><?php echo e($t_apr); ?></span></h6>
                            <?php elseif($t_apr > 4.99): ?>
                                <h6 class="vermelho"><span><?php echo e($t_apr); ?></span></h6>
                            <?php endif; ?>
                            <h6 class="mini-title upper"></h6>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</main><?php /**PATH C:\xampp\htdocs\imugi\resources\views/ranking/index.blade.php ENDPATH**/ ?>