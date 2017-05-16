<?php $pageCount = ceil( $count / $limit ); $prev = ($page == 1) ? 1 : $page - 1; $next = ($page == $pageCount) ? $pageCount : $page + 1; ?> <?php if( $pageCount > 1 ): ?>
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <li class="<?php echo $prev == 1 ? 'disabled' : '' ?>">
                <a href="<?php echo ipRouteUrl('kbNews', ['pageID' => $prev]); ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php for( $i=1;$i<=$pageCount;$i++ ): ?>
                <?php if( $i==$page ): ?>
                    <li class="active"><a href="javascript:void(0)"><?php echo $i; ?></a></li>
                <?php else: ?>
                    <li><a href="<?php echo ipRouteUrl('kbNews', ['pageID' => $i]); ?>"><?php echo $i; ?></a></li>
                <?php endif; ?>
            <?php endfor; ?>
            <li class="<?php echo $page == $pageCount ? 'disabled' : '' ?>">
                <a href="<?php echo ipRouteUrl('kbNews', ['pageID' => $next]); ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav> <?php endif; ?>
