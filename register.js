const signUpButton=document.getElementById('signUpButton')
const signIpButton=document.getElementById('signInButton')
const signInForm=document.getElementById('signIn');
const signUpForm=document.getElementById('signUp');
 
signUpButton.addEventListener('click',function(){
    signInForm.style.display='none';
    signUpForm.style.display='block';
})
signIpButton.addEventListener('click',function(){
    signUpForm.style.display='none';
    signInForm.style.display='block';
})
