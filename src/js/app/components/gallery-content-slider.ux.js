import 'owl.carousel';

class GalleryContentSlider {

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
            dots: true,
            nav: false,
            navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
            navElement: 'button',
            navSpeed: 1300,
            animateOut: 'animate__fadeOut',
            animateIn: 'animate__fadeIn',
            responsive: {
                768: {
                    nav: true,
                    dots: false
                },
            }
        });

        
    }

}

$(function(){

    if($('[data-ux="gallery-content-slider"]').length) {

        let _module = new GalleryContentSlider($('[data-ux="gallery-content-slider"]'));

        _module.init();
    }
    
})