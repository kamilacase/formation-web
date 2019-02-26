var modal = document.getElementById('myModal');
var btn = document.getElementById('myBtn');
var btn1 = document.getElementById('myBtn1')
var span = document.getElementsByClassName("close")[0];
function myFunction(x) {
    btn.onclick = function () {
        x.classList.toggle("change");
        modal.style.display = "block";
    }
    btn1.onclick = function () {
        x.classList.toggle("change");
        modal.style.display = "block";
    }
    span.onclick = function () {
        modal.style.display = "none";
        x.classList.toggle("change");

    }

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
            x.classList.toggle("change");
        }
    }
}

