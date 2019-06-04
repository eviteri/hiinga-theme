var singlePostForm = document.querySelector('#ev-single-subscribe-form') ? document.querySelector('#ev-single-subscribe-form') : null;

if(singlePostForm){
    singlePostForm.addEventListener('submit', validateSinglePostForm, false);
}

function validateSinglePostForm(){
    event.preventDefault();
    var data = {};
    var firstName = document.querySelector('#s_firstname');
    var lastName = document.querySelector('#s_lastname');
    var email = document.querySelector('#s_email');

    var name_pattern = /^[a-zA-Z.' ]*$/;
    var email_pattern = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
    var errorCounter = 0;

    //Validating First Name
    if(firstName.value.trim() === ""){
        firstName.style.border = "1px solid red";
        firstName.nextElementSibling.innerHTML = "this field is required";
        errorCounter++;
    }else if(!name_pattern.test(firstName.value.trim())){
        firstName.style.border = "1px solid red";
        firstName.nextElementSibling.innerHTML = "You have entered an invalid first name";
        errorCounter++;
    }else{
        firstName.style.border = "";
        firstName.nextElementSibling.innerHTML = "";
        data["firsName"] = firstName.value;
    }

    //Validating Last Name
    if(lastName.value.trim() === ""){
        lastName.style.border = "1px solid red";
        lastName.nextElementSibling.innerHTML = "this field is required";
        errorCounter++;
    }else if(!name_pattern.test(lastName.value.trim())){
        lastName.style.border = "1px solid red";
        lastName.nextElementSibling.innerHTML = "You have entered an invalid last name";
        errorCounter++;
    }else{
        lastName.style.border = "";
        lastName.nextElementSibling.innerHTML = "";
        data["lastName"] = lastName.value;
    }

    //Validating Email
    if(email.value.trim() === ""){
        email.style.border = "1px solid red";
        email.nextElementSibling.innerHTML = "this field is required";
        errorCounter++;
    }else if(!email_pattern.test(email.value.trim())){
        email.style.border = "1px solid red";
        email.nextElementSibling.innerHTML = "You have entered an invalid email";
        errorCounter++;
    }else{
        email.style.border = "";
        email.nextElementSibling.innerHTML = "";
        data["email"] = email.value;
    }

    if(errorCounter > 0){
        return false;
    }else{
        loading.style.display = "flex";
        console.log(data);
        setTimeout(function(){
            alert("Thank you for subscribing.");
            loading.style.display = "none";
            singlePostForm.reset();
        }, 3000);
    }
}