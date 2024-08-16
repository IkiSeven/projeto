const modalLogin = new bootstrap.Modal(document.getElementById('modalLogin'));
const modalReg = new bootstrap.Modal(document.getElementById('modalReg'));

const btnRegister = document.getElementById('btnRegister');
const btnRegClose = document.getElementById('btnRegClose');

const btnLogin = document.getElementById('btnLogin');
const btnLoginClose = document.getElementById('btnLoginClose');

btnLogin.addEventListener('click', (e) => {
    modalLogin.show();
});
btnLoginClose.addEventListener('click', (e) => {
    modalLogin.hide();
});

btnRegister.addEventListener('click', (e) => {
    modalReg.show();
});
btnRegClose.addEventListener('click', (e) => {
    modalReg.hide();
});