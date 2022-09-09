function expand() {
    var el = document.getElementById('navbarul');
    var elvl = el.style.left
    if (elvl == '-1100px') {
        if (document.getElementById("navbarr").style.height == '80px') {
            console.log(1)
            el.setAttribute('style', 'left:0px;  top: 80px')
            scrollFunction()
        } else if (document.getElementById("navbarr").style.height == '170px') {
            el.setAttribute('style', 'left:0px;  top: 170px')
            scrollFunction()
        } else {
            el.setAttribute('style', 'left:0px;')
        }
    } else {
        el.setAttribute('style', 'left:-1100px;')
    }
};

window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        if (window.screen.width > 940) {
            document.getElementById("navbarr").style.height = "80px";
            document.getElementById("navlogo").style.height = "150px";
            document.getElementById("navlogo").style.width = "225px";
            document.getElementById("navbarul").style.top = "80px";
        } else {
            document.getElementById("navbarr").style.height = "170px";
            document.getElementById("navlogo").style.height = "250px";
            document.getElementById("navlogo").style.width = "auto";
            document.getElementById("navbarul").style.top = "170px";
        }

    } else {
        if (window.screen.width > 940) {
            document.getElementById("navbarr").style.height = "170px";
            document.getElementById("navlogo").style.height = "250px";
            document.getElementById("navlogo").style.width = "auto";
            document.getElementById("navbarul").style.top = "170px";
        } else {
            document.getElementById("navbarr").style.height = "170px";
            document.getElementById("navlogo").style.height = "250px";
            document.getElementById("navlogo").style.width = "auto";
            document.getElementById("navbarul").style.top = "170px";
        }

    }
}




