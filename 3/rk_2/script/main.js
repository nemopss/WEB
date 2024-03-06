function payHandler(event){
    alert("Заказ успешно оплачен!")
}

window.onload = function () {
    document.querySelector('.pay').onclick = payHandler;
}