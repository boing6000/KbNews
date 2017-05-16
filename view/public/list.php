<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Notícias</h1>
    </div>
    <nav id="filter" class="col-md-12 text-center isotopeFilter">
        <ul>
            <li class="pin">
                <a href="<?php echo ipRouteUrl('kbNews', ['pageID' => 1])?>" class="<?php echo $allActive ? 'current' : ''?> btn-theme btn-small">Todos</a>
            </li>

            <?php foreach ($categories as $i => $cat) { ?>
                <li>
                    <a href="<?php echo ipRouteUrl('kbNews', ['pageID' => 1, 'category' => $cat['urlPath']])?>" class="<?php echo $cat['active'] == $i ? 'current' : ''?> btn-theme btn-small">
                        <?php echo $cat['title']; ?>
                    </a>
                </li>
            <?php } ?>

        </ul>
    </nav>
</div>
<div class="row">
    <div class="col-md-12 kbNews">
        <?php foreach ($pages as $page): ?>
            <div class="col-md-3 cat-<?php echo $page['parentId'] ?>">
                <div class="news cat-<?php echo $page['parentId'] ?>">
                    <?php if (!isset($page['image'])) { ?>
                        <div class="img-figure">
                            <div class="cat"><?php echo $categories[$page['parentId']]['title']; ?></div>
                            <img src="<?php echo ipFileUrl('file/semfoto.jpg') ?>" class="img-responsive">
                        </div>
                    <?php } else { ?>
                        <div class="img-figure">
                            <div class="cat"><?php echo $categories[$page['parentId']]['title']; ?></div>
                            <img src="<?php echo ipFileUrl(ipReflection($page['image']['imageOriginal'], $imageOptions)) ?>"
                                 class="img-responsive">
                        </div>
                    <?php } ?>

                    <div class="title" style="position: relative;">
                        <h1><?php echo $page['title'] ?></h1>
                    </div>
                    <div class="description" style="padding: 20px; margin-top: -20px;">
                        <?php echo $page['intro']; ?>
                    </div>

                    <p class="more">
                        <a href="<?php echo $page['urlPath']; ?>"><?php echo _e('Leia Mais', 'Noticias');?></a>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>

        <?php if (count($pages) == 0): ?>
            <div class="bs-callout bs-callout-info">
                <h4><?php echo _e('Desculpe!', 'Noticias'); ?></h4>
                <p>
                    <?php echo _e('Nenhuma Notícia Encontrada!', 'Noticias'); ?>
                </p>
            </div>
        <?php endif; ?>

    </div>
    <div class="row text-center">
        <?php echo ipView($pagView, $pagination )->render(); ?>
    </div>
</div>