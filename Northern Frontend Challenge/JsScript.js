function submit() {
    var email = $("#email").val();
    var validation = validateEmail(email);
}

function validateEmail(email)
{
    return /\S+@\S+\.\S+/.test(email)
}