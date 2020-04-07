const sidebar = document.getElementById('sidenavbar');
const barsIcon = document.querySelector('.bars');
const darkLayer = document.querySelector('.dark-layer');
let sidebarIsOpen = false;

const openSidebar = () => {
    sidebar.style.width = "60%";
    sidebarIsOpen = true;
    darkLayer.style.display = 'block';
}

const closeSidebar = () => {
    sidebar.style.width = "0%";
    sidebarIsOpen = false;
    darkLayer.style.display = 'none';
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



// function opensidebar() {
//     if (sidebarIsOpen) {
//         var sidebar = document.getElementById('sidenavbar');
//         var body = document.getElementById('content');
//         sidebar.style.width = "60%";
//         body.style.backgroundColor = "rgba(0,0,0,0.4)";

//         var elements = document.getElementsByClassName('sidebartext');
//         for (var i = 0; i < elements.length; i++) {
//             elements[i].classList.add('tracking');
//             elements[i].classList.remove('trackingo');
//         }

//     } else {
//         var sidebar = document.getElementById('sidenavbar');
//         var body = document.getElementById('content');
//         sidebar.style.width = "0%";
//         body.style.backgroundColor = "rgba(0,0,0,0)";
//         var elements = document.getElementsByClassName('sidebartext');
//         for (var i = 0; i < elements.length; i++) {
//             elements[i].classList.remove('tracking');
//             elements[i].classList.add('trackingo');
//         }
//     }
// }
