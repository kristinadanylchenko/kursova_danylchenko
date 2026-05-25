document.addEventListener("DOMContentLoaded", function () {

    const form = document.querySelector("form");

    form.addEventListener("submit", function (event) {

        const firstName = document.querySelector('input[name="first_name"]').value;
        const lastName = document.querySelector('input[name="last_name"]').value;
        const email = document.querySelector('input[name="email"]').value;
        const phone = document.querySelector('input[name="phone_number"]').value;

        if (
            firstName === "" ||
            lastName === "" ||
            email === "" ||
            phone === ""
        ) {

            event.preventDefault();

            alert("Будь ласка, заповніть усі поля!");

        }

    });

});

const urlParams = new URLSearchParams(window.location.search);

if (urlParams.get('success') === '1') {

    const successMessage = document.getElementById('success-message');

successMessage.style.display = 'flex';

setTimeout(() => {

    successMessage.style.display = 'none';

    window.history.replaceState({}, document.title, window.location.pathname);

}, 3000);

}