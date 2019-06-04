var donateView = document.querySelector('.ev-donate-carousel-body-right') ? document.querySelector('.ev-donate-carousel-body-right') : null;
var donateSlider = document.querySelector('.ev-donate-carousel-slider') ? document.querySelector('.ev-donate-carousel-slider') : null;
var donateSlides = document.querySelectorAll('.ev-donate-carousel-slide') ? document.querySelectorAll('.ev-donate-carousel-slide') : null; 
var donateSteps = document.querySelectorAll('.ev-donate-header-item') ? document.querySelectorAll('.ev-donate-header-item') : null;
var donateNext = document.querySelector('.ev-donate-next') ? document.querySelector('.ev-donate-next') : null;
var donateIndicatorWrapper = document.querySelector('.ev-donate-carousel-header-bottom') ? document.querySelector('.ev-donate-carousel-header-bottom') : null;
var donateIndicator = document.querySelector('.ev-donate-carousel-indicator') ? document.querySelector('.ev-donate-carousel-indicator') : null;
var donateIndex = 0;

//EVENTE LISTENERS
if(donateNext){
    donateNext.addEventListener('click', donateGetNext, false)
}
if(donateSteps){
    donateSteps.forEach(function(el, index){
        el.addEventListener('click', function(){
            donateGetPrevious(index);
        }, false);
    })
}

function calculateDonateIndicatorWidth(index){
    var width = donateIndicatorWrapper.clientWidth / donateSlides.length;
        width = (width / donateIndicatorWrapper.clientWidth) * 100;  
        width = width * (index + 1);
        setDonateIndicatorWidth(width);
}

function setDonateIndicatorWidth(width){
    donateIndicator.style.maxWidth = width + "%";
}

function donateGetNext(){
    var slideWidth = donateSlides[0].clientWidth;
    var donateTranslate = 0;
    if(donateIndex < donateSlides.length - 1){
        donateIndex++;
        donateTranslate = (slideWidth * donateIndex) * -1
        donateSlider.style.transform = 'translate('+ donateTranslate +'px)';
        calculateDonateIndicatorWidth(donateIndex);
    }else{
        console.log("submit payment");
    }
    
}

function donateGetPrevious(index){
    donateIndex = index;
    var slideWidth = donateSlides[0].clientWidth;
    var donateTranslate  = (slideWidth * donateIndex) * -1
    donateSlider.style.transform = 'translate('+ donateTranslate +'px)';
    calculateDonateIndicatorWidth(donateIndex);
    
}

