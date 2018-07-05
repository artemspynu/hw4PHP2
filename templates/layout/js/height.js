window.onload = function () {
    setTimeout(function () {
        let i;
        let mainDivs = document.getElementsByClassName("product");
        let maxHeight = 0;
        for (i = 0; i < mainDivs.length; ++i) {
            if (maxHeight < mainDivs[i].clientHeight) {
                maxHeight = mainDivs[i].clientHeight;
            }
        }
        for (i = 0; i < mainDivs.length; ++i) {
            mainDivs[i].style.height = maxHeight + "px";
        }
    }, 1000);
};