<br /><br /><br />
<div class="content">
    <div class="container-fluid">
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <?php
        foreach ($registros->result() as $row) :
            ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <img src="../<?= $row->Imagen ?>" style="width: 80%"/>
                    <a href="#"><h2 class="titulo-blog" itemprop="name"><?= $row->Titulo ?></h2></a>
                    <i><?= "By ".$row->Hecho. " - " .date('m/d/Y', strtotime($row->Fecha)) ?></i>
                    <p class="texto-blog" itemprop="description"><?= substr($row->Texto, 0, 310) ?>... (Leer mas ...)</p>
                </div>    
            <?php
        endforeach;
        ?>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <?php 
        foreach ($registros->result() as $row) :
            ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img src="../<?= $row->Imagen ?>" style="width: 50%"/>
                <a href="#"><h2 class="titulo-blog_destacados" itemprop="name"><?= $row->Titulo ?></h2></a>
                <i><?= "By ".$row->Hecho. " - " .date('m/d/Y', strtotime($row->Fecha)) ?></i>
                <p class="texto-blog" itemprop="description"><?= substr($row->Texto, 0, 150) ?>... (Leer mas ...)</p>
            </div>
            <?php
        endforeach;
        ?>
        </div>
        <div class="clearfix"></div>
    </div>
</div>