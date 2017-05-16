$(document).ready(function () {
    var kbNews = $('.kbNews');

    var $grid = kbNews.isotope({
        itemSelector: '.col-md-3',
        layoutMode: 'masonry',
        masonry: {
            columnWidth: '.col-md-3'
        }
    });

    setTimeout(function(){
        $grid.isotope({ filter: '*' })
    }, 10);

});

