//button event
window.addEventListener("load", () => {
    const form = document.getElementById("multiForm");
    const Donate = document.getElementById("donate");
    const Signup = document.getElementById("signup");
    const DonateBtn = document.getElementById("DBtn");
    const SignupBtn = document.getElementById("signupBtn");
    const Signin = document.getElementById("signin");
    const SigninBtn = document.getElementById("signinBtn");
    const SigninLink = document.getElementById("signinLink");
    const Payment = document.getElementById("payment");
    const KpayBtn = document.getElementById("kpayBtn");
    const WaveBtn = document.getElementById("waveBtn");
    const PayBtn = document.getElementById("payBtn");
    const pay_btns = document.getElementsByClassName("pay_btn");
    const donate_rate = document.getElementById("donate_rate");
    const upload = document.getElementById("upload");

    form.addEventListener("submit", (e) => {
        e.preventDefault();
    });

    SignupBtn.addEventListener("click", () => {
        Signup.style.display = "none";
        Donate.style.display = "block";
        // console.log("hello");
    });

    SigninBtn.addEventListener("click", () => {
        Signin.style.display = "none";
        Donate.style.display = "block";
        // console.log("hello");
    });

    SigninLink.addEventListener("click", () => {
        Signup.style.display = "none";
        Signin.style.display = "block";
        // console.log("hello");
    });

    DonateBtn.addEventListener("click", () => {
        Donate.style.display = "none";
        Payment.style.display = "block";
        // console.log("hello");
    });

    KpayBtn.addEventListener("click", () => {
        Payment.style.display= "none";
        upload.style.display="block";
        // console.log("hello");
    });

    WaveBtn.addEventListener("click", () => {
        Payment.style.display= "none";
        upload.style.display="block";
    });

    Array.from(pay_btns).forEach(btn => {
        btn.addEventListener("click", function (e) {
            e.preventDefault();
            donate_rate.value = this.value;
        });
    });

})


// upload images