const sidebar = document.getElementById('sidenavbar');
const barsIcon = document.querySelector('.bars');
const darkLayer = document.querySelector('.dark-layer');
let sidebarIsOpen = false;

const openSidebar = () => {
    sidebar.style.width = "60%";
    sidebarIsOpen = true;
    darkLayer.style.display = 'block';
    var elements = document.getElementsByClassName('sidebartext');
    for (var i = 0; i < elements.length; i++) {
        elements[i].classList.add('tracking');
        elements[i].classList.remove('trackingo');
    }
}

const closeSidebar = () => {
    sidebar.style.width = "0%";
    sidebarIsOpen = false;
    darkLayer.style.display = 'none';
    var elements = document.getElementsByClassName('sidebartext');
    for (var i = 0; i < elements.length; i++) {
        elements[i].classList.remove('tracking');
        elements[i].classList.add('trackingo');
    }    
}

barsIcon.addEventListener('click', () => {
    if (sidebarIsOpen) {
        closeSidebar();
    } else {
        openSidebar();
    }
});

darkLayer.addEventListener('click', () => {
    closeSidebar();
});
