<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="<?=\yii\helpers\Url::home()?>" class="brand-link">
        <img src="<?=$assetDir?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">

            <?php
            echo \hail812\adminlte3\widgets\Menu::widget([
                'items' => [
                    ['label' => 'Home', 'url' => ['site/index'], 'iconStyle' => 'far'],
                    ['label' => 'Jenis', 'url' => ['/jenis'], 'iconStyle' => 'far'],
                    ['label' => 'Satuan', 'url' => ['/satuan'], 'iconStyle' => 'far'],
                    // ['label' => 'Gii',  'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank'],
                ],
            ]);
            ?>
        </nav>
    </div>
</aside>