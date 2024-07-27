//button event
window.addEventListener("load",()=>{
    const form= document.getElementById("multiForm");
    const Donate=document.getElementById("donate");
    const Signup=document.getElementById("signup");
    const DonateBtn=document.getElementById("DBtn");
    const SignupBtn=document.getElementById("signupBtn");
    const Signin=document.getElementById("signin");
    const SigninBtn=document.getElementById("signinBtn");
    const SigninLink=document.getElementById("signinLink");
    const Payment=document.getElementById("payment");
    const KpayBtn=document.getElementById("kpayBtn");
    const WaveBtn=document.getElementById("waveBtn");
    const PayBtn=document.getElementById("payBtn");

    form.addEventListener("submit",(e)=>{
        e.preventDefault();
    });

    SignupBtn.addEventListener("click",()=>{
        Signup.style.display="none";
        Donate.style.display="block";
        // console.log("hello");
    });

    SigninBtn.addEventListener("click",()=>{
        Signin.style.display="none";
        Donate.style.display="block";
        // console.log("hello");
    });

    SigninLink.addEventListener("click",()=>{
        Signup.style.display="none";
        Signin.style.display="block";
        // console.log("hello");
    });

    DonateBtn.addEventListener("click",()=>{
        Donate.style.display="none";
        Payment.style.display="block";
        // console.log("hello");
    });

    KpayBtn.addEventListener("click",()=>{
        PayBtn.innerText='Kpay';
        PayBtn.classList.remove('bg-yellow-400');
        PayBtn.classList.remove('text-sky-500');
        PayBtn.classList.add('bg-blue-800');
        PayBtn.classList.add('text-white');
    });

    WaveBtn.addEventListener("click",()=>{
        PayBtn.innerText='WavePay';
        PayBtn.classList.remove('bg-blue-800');
        PayBtn.classList.remove('text-white');
        PayBtn.classList.add('bg-yellow-400');
        PayBtn.classList.add('text-sky-500')
    });

    
})


// upload images