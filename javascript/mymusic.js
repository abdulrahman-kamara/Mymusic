const email = document.getElementById("email");
const password = document.getElementById("password");
const form = document.getElementById("form");
const errormessage = document.getElementById("error");

form.addEventListener("submit", () => {
    let message = [];
    if (!email.value === 'rahmanraynkunta@gmailm.com' || email.value == null) {
        messages.push('the email address you entered is wrong')
    }

    if (password.length <= 7) {
        messages.push('password must be longer than that')
    }

    if (message.length > 0) {
        e.preventDefault();
        errormessage.innerText = messages.join(', ')
    }


})