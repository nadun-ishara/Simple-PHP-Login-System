const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");


sign_up_btn.addEventListener("click", () => {
    container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
});


const togglePassBtns = document.querySelectorAll(".toggle-pass");

togglePassBtns.forEach(btn => {
    btn.addEventListener("click", function() {
        const passwordInput = this.previousElementSibling;
        
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            this.classList.replace("fa-eye", "fa-eye-slash");
        } else {
            passwordInput.type = "password";
            this.classList.replace("fa-eye-slash", "fa-eye");
        }
    });
});