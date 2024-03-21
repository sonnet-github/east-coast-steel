import 'owl.carousel';

class FeaturedProductsUX {

    constructor($block) {

        this.block = $block;
        this.slider = this.block.find('.owl-carousel');
    }

    init() {
        console.log('featured product');

        this.initializeSlider();
    }

    initializeSlider() {

        const block = this.block;
        const slider = this.slider;
        const controlsContainer = this.controlsContainer;

        if(!slider.length) {

            return;
        }

        slider.on('initialized.owl.carousel', function(event) {

            setTimeout(() => {

                block.find('.owl-prev').addClass('slide-prev-button');
                block.find('.owl-next').addClass('slide-next-button');

            }, 200);

        });

        slider.owlCarousel({
            items: 1,
            margin: 24,
            loop: false,
            nav: true,
            navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
            navElement: 'button',
            navContainer: '.owl-carousel-controls',
            responsive: {
                768: {
                    items: 1,
                    margin: 30
                },
                992: {
                    items: 3
                },
            }
        });

        
    }

}

$(function(){

    if($('[data-ux="featured-products"]').length) {

        let _module = new FeaturedProductsUX($('[data-ux="featured-products"]'));

        _module.init();
    }
    
})