//VARIABLES
    var ourWorkSlideViewWindow = document.querySelector('.ev-our-work-carousel-view-window') ? document.querySelector('.ev-our-work-carousel-view-window').clientWidth : null;
    var ourWokrSlider = document.querySelector('.ev-our-work-carousel-slider') ? document.querySelector('.ev-our-work-carousel-slider') : null;
    var ourWorkSlides = document.querySelectorAll('.ev-our-work-slide-wrapper') ? document.querySelectorAll('.ev-our-work-slide-wrapper') : null;
    var ourWorkSliderNextButton = document.querySelector('.ev-our-work-carousel-next') ? document.querySelector('.ev-our-work-carousel-next') : null;
    var ourWorkSliderPrevButton = document.querySelector('.ev-our-work-carousel-previous') ? document.querySelector('.ev-our-work-carousel-previous') : null;

    var ourWorkSliderCurrentIndex = 0;
    var ourWorkSliderCurrentTranslate = 0;

//LISTENERS
    window.addEventListener('resize', setOurWorkWindowsWidth, false);
    if(ourWorkSliderNextButton){ourWorkSliderNextButton.addEventListener('click', goToOurWorkNextSlide, false);}
    if(ourWorkSliderPrevButton){ourWorkSliderPrevButton.addEventListener('click', goToOurWorkPrevSlide, false);}

//FUNCTIONS
    function setOurWorkWindowsWidth(){
        if(ourWokrSlider){
            ourWorkSliderCurrentIndex = 0;
            ourWorkSliderCurrentTranslate = 0;
            ourWokrSlider.style.transform = 'translate('+ ourWorkSliderCurrentTranslate +'px)';
        }
    }

    function goToOurWorkNextSlide(){
        if(ourWorkSliderCurrentIndex < ourWorkSlides.length -1){
            ourWorkSliderCurrentIndex++;
            var slideWidth = ourWorkSlides[0].clientWidth;
            ourWorkSliderCurrentTranslate = (slideWidth * ourWorkSliderCurrentIndex) * -1
            ourWokrSlider.style.transform = 'translate('+ ourWorkSliderCurrentTranslate +'px)';
        }
        else{
            ourWorkSliderCurrentIndex = 0;
            ourWorkSliderCurrentTranslate = 0;
            ourWokrSlider.style.transform = 'translate('+ ourWorkSliderCurrentTranslate +'px)';
        }
    }
    
    function goToOurWorkPrevSlide(){
        if(ourWorkSliderCurrentIndex > 0){
            ourWorkSliderCurrentIndex--;
            var slideWidth = ourWorkSlides[0].clientWidth;
            ourWorkSliderCurrentTranslate = (slideWidth * ourWorkSliderCurrentIndex) * -1
            ourWokrSlider.style.transform = 'translate('+ ourWorkSliderCurrentTranslate +'px)';
            
        }
    }