document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('registro');
    const password = document.getElementById('password');
    const confpassword = document.getElementById("confirmpassword");
    const modal = document.getElementById("pass-modal");
    const closebtn = document.querySelector(".close");


    form.addEventListener("submit", function (e) {
        if (password.value !== confpassword.value) {
            e.preventDefault();
            modal.style.display = "block";
        }
    });

    closebtn.addEventListener("click", function () {
        modal.style.display = "none";

    });

    window.addEventListener("click", function (e) {
        if (e.target == modal)  {
            modal.style.display = "none";
        }

    });
});