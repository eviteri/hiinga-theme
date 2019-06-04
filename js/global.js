
document.body.className += " js-loading";


var burgerButton = document.querySelector('.ev-burger-wrapper');
var navigation = document.querySelector('.ev-site-navigation');
var subscribeForm = document.querySelector('#subscribe_form')
var loading = document.querySelector('.ev-site-loding-wrapper');
var accordions = document.querySelectorAll('.ev-accordion-show-more') ? document.querySelectorAll('.ev-accordion-show-more') : null;
// Detect request animation frame               // IE Fallback
var scroll = window.requestAnimationFrame || function(callback){window.setTimeout(callback, 100/60)};
var elementsToShow = document.querySelectorAll('.ev-show-on-scroll');
var buttonLinks = document.querySelectorAll('.ev-btn-link') ? document.querySelectorAll('.ev-btn-link') : null;



//EVENT LISTENERS
window.addEventListener("load", showPage, false);
burgerButton.addEventListener('click', toggleMenu, false);
subscribeForm.addEventListener('submit', validateSubscribeForm, false);

if(accordions){
    accordions.forEach(function(accordion){
        accordion.addEventListener('click', function(){
            toggleShowMoreAccordion(accordion);
        }, false)
    })
}

if (buttonLinks){
    buttonLinks.forEach(function(button){
        button.addEventListener('click', function(){
            siteRedirect(button);
        }, false)
    })
}

//FUNCTIONS
function siteRedirect(el){
    var href = el.getAttribute('href');
    window.location.href = href;
}

function toggleShowMoreAccordion(el){
    var panel = el.nextElementSibling;
    var caption =  "";
    if (panel.style.maxHeight){
        panel.style.maxHeight = null;
        caption = el.getAttribute("show-more") ? el.getAttribute("show-more") : "+ Show more";
        el.innerHTML = caption;
    } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
        caption = el.getAttribute("show-less") ? el.getAttribute("show-less") : "- Show less";
        el.innerHTML = caption;
    } 
}

function loop(){
    elementsToShow.forEach(function(element){
        if(isElementInViewport(element)){
            element.classList.add('ev-is-visible');
        }else{
            element.classList.remove('ev-is-visible')
        }
    });
    scroll(loop);
}

// Call the loop for the first time
loop();

// Helper function from: http://stackoverflow.com/a/7557433/274826
function isElementInViewport(el) {
    // special bonus for those using jQuery
    if (typeof jQuery === "function" && el instanceof jQuery) {
        el = el[0];
    }
    var rect = el.getBoundingClientRect();
    return (
        (rect.top <= 0
            && rect.bottom >= 0)
        ||
        (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.top <= (window.innerHeight || document.documentElement.clientHeight))
        ||
        (rect.top >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
    );
}

function showPage(){
    document.body.className = document.body.className.replace("js-loading", "");
}
function toggleMenu(){
    if(!navigation.classList.contains('ev-open-menu')){
        navigation.classList.remove('ev-close-menu');
        navigation.classList.add('ev-open-menu');
    }else{
        navigation.classList.remove('ev-open-menu');
        navigation.classList.add('ev-close-menu');
    }
}
function validateSubscribeForm(event){
    event.preventDefault();
    var isValid = true;
    var firstName = document.querySelector('#user_fname');
    var lastName = document.querySelector('#user_lname');
    var email = document.querySelector('#user_email');

    var name_pattern = /^[a-zA-Z.' ]*$/;
    var email_pattern = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;

    if(firstName.value.trim() === ""){
        isValid = false;
        firstName.style.border = "1px solid red";
        alert("First Name can not be blank")
        return isValid
    }else if(!name_pattern.test(firstName.value.trim())){
        isValid = false;
        firstName.style.border = "1px solid red";
        alert("You have entered an invalid first name");
        return isValid
    }else{
        firstName.style.border = "";
    }

    if(lastName.value.trim() === ""){
        isValid = false;
        lastName.style.border = "1px solid red";
        alert("Last Name can not be blank")
        return isValid
    }else if(!name_pattern.test(lastName.value.trim())){
        isValid = false;
        lastName.style.border = "1px solid red";
        alert("You have entered an invalid last name");
        return isValid
    }else{
        lastName.style.border = "";
    }

    if(email.value.trim() === ""){
        isValid = false;
        email.style.border = "1px solid red";
        alert("Email can not be blank")
        return isValid
    }else if(!email_pattern.test(email.value.trim())){
        isValid = false;
        email.style.border = "1px solid red";
        alert("You have entered an invalid email");
        return isValid
    }else{
        email.style.border = "";
    }

    if(isValid){
        var data = {
            firstName: firstName.value,
            lastName: lastName.value,
            email: email.value
        }
        loading.style.display = "flex";
        setTimeout(function(){
            alert("thanks for subscribe");
            loading.style.display = "none";
            subscribeForm.reset();
        }, 3000);
    }

}

