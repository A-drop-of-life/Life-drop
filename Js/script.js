
        var mb = document.getElementById('icon');
        var sv = document.getElementById('navbar');
        sv.style.top = "-100vh";
        mb.onclick = function () {
            if (sv.style.top == "-100vh") {
                sv.style.top = "8px";
            } else {
                sv.style.top = "-100vh";
            }
        }


    
        var m = document.getElementById('logo');
        var s = document.getElementById('cont');
        s.style.right = "-100%";
        m.onclick = function () {
            if (s.style.right == "-100%") {
                s.style.right = "0";
            } else {
                s.style.right = "-100%";
            }
        }
    

    
        var x = document.getElementById('social');
        var y = document.getElementById('social-2');
        y.style.right = "-100%";
        x.onclick = function () {
            if (y.style.right == "-100%") {
                y.style.right = "120px";
            } else {
                y.style.right = "-100%";
            }
        }
    
