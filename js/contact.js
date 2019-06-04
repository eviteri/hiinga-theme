var contactForm = document.querySelector('#ev-contact-form') ? document.querySelector('#ev-contact-form') : null;

if(contactForm){
    contactForm.addEventListener('submit', validateContactForm, false);
}

function validateContactForm(event){
    event.preventDefault();
    var data = {};
    var firstName = document.querySelector('#c_fname');
    var lastName = document.querySelector('#c_lname');
    var email = document.querySelector('#c_email');
    var phoneNumber = document.querySelector('#c_phone');
    var comments = document.querySelector('#c_comments');
    var informationAbout = document.getElementsByName('c_information_about');
    
    var name_pattern = /^[a-zA-Z.' ]*$/;
    var email_pattern = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
    var comments_pattern = /^[a-zA-Z0-9,()-.!?$' ]*$/;
    /*
        To valid a phone number like 
        XXX-XXX-XXXX
        XXX.XXX.XXXX
        XXX XXX XXXX  
    */
    var phoneNumber_pattern = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;

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

    //Validating Phone Number;
    if(phoneNumber.value.trim() === ""){
        phoneNumber.style.border = "1px solid red";
        phoneNumber.nextElementSibling.innerHTML = "this field is required";
        errorCounter++;
    }else if(!phoneNumber_pattern.test(phoneNumber.value.trim())){
        phoneNumber.style.border = "1px solid red";
        phoneNumber.nextElementSibling.innerHTML = "You have entered an invalid phone";
        errorCounter++;
    }else{
        phoneNumber.style.border = "";
        phoneNumber.nextElementSibling.innerHTML = "";
        data["phoneNumber"] = phoneNumber.value;
    }

    //Validating Question/Comments
    if(comments.value.trim() === ""){
        comments.style.border = "1px solid red";
        comments.nextElementSibling.innerHTML = "this field is required";
        errorCounter++;
    }else if(!comments_pattern.test(comments.value.trim())){
        comments.style.border = "1px solid red";
        comments.nextElementSibling.innerHTML = "You have entered invalid characters";
        errorCounter++;
    }else{
        comments.style.border = "";
        comments.nextElementSibling.innerHTML = "";
        data["comments"] = comments.value;
    }

    //Validating at least one checkbox is selected
    var checkBoxesValue = [];
    informationAbout.forEach(function(el){
        if(el.checked){
            checkBoxesValue.push(el.value)
        }
    })

    var chkBoxesWrapper = document.querySelector('.ev-checkboxes-wrapper') ? document.querySelector('.ev-checkboxes-wrapper') : null;
    if(checkBoxesValue.length <= 0){
        isValid = false;
        if(chkBoxesWrapper){ 
            chkBoxesWrapper.style.border = "1px solid red";
            chkBoxesWrapper.nextElementSibling.innerHTML = "Please Check atleast ones item";
        }
        errorCounter++;
    }else{
        if(chkBoxesWrapper){ 
            chkBoxesWrapper.style.border = "";
            chkBoxesWrapper.nextElementSibling.innerHTML = "";
        }
        data["information"] = "Please send me information about " + checkBoxesValue.join(", ");
    }

    if(errorCounter > 0){
        return false;
    }else{
        loading.style.display = "flex";
        console.log(data);
        setTimeout(function(){
            alert("You message has been sent.");
            loading.style.display = "none";
            contactForm.reset();
        }, 3000);
    }



}