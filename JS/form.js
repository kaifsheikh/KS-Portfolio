const authModel = document.querySelector('.auth-model');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const loginBtnModel = document.querySelector('.login-btn-modal');
const closeBtnModel = document.querySelector('.close-btn-model');
const profileBox = document.querySelector('.profile-box');
const avatorCircle = document.querySelector('.avatar-circle');
const alertBox = document.querySelector('.alert-box');

registerLink.addEventListener('click', (e) => {
  e.preventDefault(); // ⛔ prevent link default behavior
  authModel.classList.add('slide');
});

loginLink.addEventListener('click', (e) => {
  e.preventDefault(); // ⛔ prevent link default behavior
  authModel.classList.remove('slide');
});


if(loginBtnModel) loginBtnModel.addEventListener('click', () => authModel.classList.add('show'));
closeBtnModel.addEventListener('click', () => authModel.classList.remove('show' , 'slide'));

if(avatorCircle) avatorCircle.addEventListener('click' , () => profileBox.classList.toggle('show'));

if(alertBox){
  setTimeout(() => {
    alertBox.classList.add('show');
}, 50);

setTimeout(() => {
  alertBox.classList.remove('show');
  setTimeout(() => alertBox.remove(), 1000);

}, 6000);

}
