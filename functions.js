const btnMain = document.getElementById('btnMain');
const contentShow = new bootstrap.Offcanvas('#contentShow');

btnMain.addEventListener('click', (e) => {
    e.preventDefault();
    contentShow.show();

});