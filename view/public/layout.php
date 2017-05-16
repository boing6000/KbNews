<?php if (is_file(ipThemeFile('_header.php'))) { echo ipView(ipThemeFile('_header.php'))->render(); } ?>
    <div class="row bg-main-color eff-main-color">
        <div class="col-md-12">
            <?php echo ipContent()->getBlockContent('kbNews');?>
        </div>
    </div>

    <div class="clear"></div>
</div> <?php if (is_file(ipThemeFile('_footer.php'))) { echo ipView(ipThemeFile('_footer.php'))->render(); } ?>