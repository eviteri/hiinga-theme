//VARIABLES
    var slideViewWindow = document.querySelector('.ev-carousel-view-window') ? document.querySelector('.ev-carousel-view-window').clientWidth : null;
    var slider = document.querySelector('.ev-carousel-slider') ? document.querySelector('.ev-carousel-slider') : null;
    var slides = document.querySelectorAll('.ev-slide-wrapper') ? document.querySelectorAll('.ev-slide-wrapper') : null;
    var sliderNextButton = document.querySelector('.ev-carousel-next') ? document.querySelector('.ev-carousel-next') : null;
    var sliderPrevButton = document.querySelector('.ev-carousel-previous') ? document.querySelector('.ev-carousel-previous') : null;

    var currentIndex = 0;
    var currentTranslate = 0;

//EVENT LISTENERS
    window.addEventListener('resize', setWindowsWidth, false);
    if(sliderNextButton){sliderNextButton.addEventListener('click', goToNextSlide, false);}
    if(sliderPrevButton){sliderPrevButton.addEventListener('click', goToPrevSlide, false);}

//FUNCTIONS
    function setWindowsWidth(){
        if(slider){
            currentIndex = 0;
            currentTranslate = 0;
            slider.style.transform = 'translate('+ currentTranslate +'px)';
        }
    }

    function goToNextSlide(){
        
        if(currentIndex < slides.length -1){
            currentIndex++;
            var slideWidth = slides[0].clientWidth;
            currentTranslate = (slideWidth * currentIndex) * -1
            slider.style.transform = 'translate('+ currentTranslate +'px)';
        }else{
            currentIndex = 0;
            currentTranslate = 0;
            slider.style.transform = 'translate('+ currentTranslate +'px)';
        } 
    }

    function goToPrevSlide(){
        if(currentIndex > 0){
            currentIndex --;
            var slideWidth = slides[0].clientWidth;
            currentTranslate = (slideWidth * currentIndex) * -1
            slider.style.transform = 'translate('+ currentTranslate +'px)';
        }
    }

