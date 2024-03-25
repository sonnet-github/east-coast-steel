import 'owl.carousel';

class ImageContentTabsUX {

    constructor($block) {

        this.block = $block;
        
    }

    init() {

        this.initializeTabs();
    }

    initializeTabs() {

        const tabButtons = this.block.find('.tab-btn');
        const tabContents = this.block.find('.tab-item');

        tabButtons.on('click', function(e) {
            e.preventDefault();

            const id = $(this).attr('data-id');
            const targetTab = $('.tab-item[data-id="'+ id +'"]');


            tabContents.removeClass('active');
            tabButtons.removeClass('active');

            $(this).addClass('active');
            targetTab.addClass('active');
        })

        
    }

}

$(function(){

    if($('[data-ux="image-content-tabs"]').length) {

        let _module = new ImageContentTabsUX($('[data-ux="image-content-tabs"]'));

        _module.init();
    }
    
})