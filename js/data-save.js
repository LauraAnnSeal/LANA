let dataState = false;
const dataSaveBtn = document.querySelector('.btn-data-save')

dataSaveBtn.addEventListener('click', () => {
    dataState = !dataState
    dataStateChange()
})

function dataStateChange() {
    if(dataState){
        dataSaveBtn.classList.add('active')
        dataSaveBtn.innerHTML = '<i class="fa-solid fa-power-off"></i> Data Saving Mode: <b>ON</b>'
    } else {
        dataSaveBtn.classList.remove('active')
        dataSaveBtn.innerHTML = '<i class="fa-solid fa-power-off"></i> Data Saving Mode: <b>Off</b>'
    }
}