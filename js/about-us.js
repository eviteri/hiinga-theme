
var accordionDirectors = document.querySelectorAll('.ev-show-more-directors') ? document.querySelectorAll('.ev-show-more-directors') : null;
var directorsWrappers = document.querySelectorAll('.about-us-section-3-item')? document.querySelectorAll('.about-us-section-3-item') : null;

if(accordionDirectors){
    accordionDirectors.forEach(function(accordion){
        accordion.addEventListener('click', function(){
            toggleShowMoreDirectors(accordion);
        }, false)
    })
}

if(directorsWrappers && window.innerWidth <= 900){
    directorsWrappers.forEach((el, index)=>{
        if( (index +1)%2 == 0 ){
            el.classList.add('about-us-light-gray-background')
        }
    })
}

function toggleShowMoreDirectors(el){
    
    var caption =  "";
    var panel = el.nextElementSibling;
    if (panel.style.maxHeight){
        panel.style.maxHeight = null;
        caption = el.getAttribute("show-more") ? el.getAttribute("show-more") : "+ Show more";
        el.innerHTML = caption;
    }else{
        panel.style.maxHeight = "3000px";
        caption = el.getAttribute("show-less") ? el.getAttribute("show-less") : "- Show less";
        el.innerHTML = caption;
    }
    
    
}