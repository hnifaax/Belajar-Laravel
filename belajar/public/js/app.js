// const activePage = window.location.pathname;
// console.navLinks = document.querySelectorAll('nav a').forEach(link => {
//     if(link.href(`${activePage}`)) {
//         link.classList.add('active');
//     }
// });



let calcScrollValue = () => {
    let scrollProgress = document.getElementById("progress");
    let pos = document.documentElement.scrollTop;
    let calcHeight= 
    document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let scrollValue = Math.round((pos * 90) / calcHeight);
    if (pos > 80) {
        scrollProgress.style.display = "grid";
    } else {
        scrollProgress.style.display = "none";
    }
    scrollProgress.addEventListener("click", () => {
        document.documentElement.scrollTop = 0;
    });
    
    scrollProgress.style.background = `#093396${scrollValue}%, #d7d7d7${scrollValue}%`;
};

window.onscroll = calcScrollValue;
window.onload = calcScrollValue;
