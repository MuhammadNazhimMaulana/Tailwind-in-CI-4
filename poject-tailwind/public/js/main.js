// Button
let tombolProfil = document.querySelector('#btnProfil');
let tombolWarna = document.querySelector('#btnWarna');
let tombolNotif = document.querySelector('#btnNotif');

tombolProfil.onclick = function(){
    
    let divProfil = document.querySelector('#divProfil');
    munulHide(divProfil);
}

tombolWarna.onclick = function(){
    
    let divWarna = document.querySelector('#divWarna');
    munulHide(divWarna);
}

tombolNotif.onclick = function(){
    
    let divNotif = document.querySelector('#divNotif');
    munulHide(divNotif);
}

function munulHide(element){
    if(element.classList.contains('hidden')){
        element.classList.remove('hidden');
    }else{
        element.classList.add('hidden');
    }
}

// Ubah Warna Sidebar
function setWarna(color){
    let sidebar = document.querySelector('aside');
    let sideMobile = document.querySelector('#sideMobile');

    localStorage.setItem('color', color);

    sidebar.className = color + ' relative h-screen w-72 md:w-64 hidden sm:block shadow-xl';

    sideMobile.className = color + ' w-full py-5 px-6 sm:hidden';
}

if(localStorage.getItem('color') === 'null'){
    var colorStg = 'bg-blue-500';
}else{
    var colorStg = localStorage.getItem('color');
}

setWarna(colorStg);

// Sidebar sembunyi atau muncul
let btnSideBar = document.querySelector('#btnSideBar');

btnSideBar.onclick = function() {

    let sidebar = document.querySelector('aside');
    let sideMobile = document.querySelector('#sideMobile');

    if(sidebar.classList.contains('sm:block')){
        sidebar.classList.replace('sm:block', 'sm:hidden');
    }else{
        sidebar.classList.replace('sm:hidden', 'sm:block');    
    }

    if(sideMobile.classList.contains('hidden')){
        sideMobile.classList.remove('hidden');
    }else{
        sideMobile.classList.add('hidden');    
    }
    
}