import 'owl.carousel';

class ReviewsUX {

    constructor($block) {

        this.block = $block;
        this.slider = this.block.find('.owl-carousel');
    }

    init() {
        
        this.initializeSlider();
    }

    initializeSlider() {

        const block = this.block;
        const slider = this.slider;

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
            margin: 30,
            loop: false,
            nav: false,
            navElement: 'button',
            dots: true,
            responsive: {
                768: {
                    dots: false,
                    nav: true,
                    navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
                    dots: false,
                }
            }
        });

        
    }

}

$(function(){

    if($('[data-ux="reviews"]').length) {

        let _module = new ReviewsUX($('[data-ux="reviews"]'));

        _module.init();
    }
    
})