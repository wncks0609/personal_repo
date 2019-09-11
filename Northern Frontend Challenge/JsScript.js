function submit() {
    var email = $("#email").val();
    var validation = validateEmail(email);

    if(validation)
    {
        $("#submit").text("Submitting...");
        setTimeout(function() {
            window.location = "submittedPage.html";
        },2000);

    }
    else {
        $("#error").text("Please enter a vaild email address."); 
        $("#email").css("border", "3px solid #D02035"); 
    }
}

function validateEmail(email)
{
    return /\S+@\S+\.\S+/.test(email)
}