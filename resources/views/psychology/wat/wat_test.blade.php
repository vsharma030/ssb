<script src="https://w3schools.com/lib/w3.js"></script>

<div class="container" align="middle">
    <div class="row">
        <div class="col-lg-12" style="height: 500px; width: 500px;border: solid;background-color: black;">


            <div id="div1" class="fa" style="font-size: 75px;padding-top: 40%;color: white;"></div>

            <script>
                function tattest1() {
                    var a;
                    a = document.getElementById("div1");
                    a.innerHTML = "Hello";

                    setTimeout(function () {
                        a.innerHTML = "Hello";
                    },1000);
                    setTimeout(function () {
                        a.innerHTML = "By";
                    }, 2000);
                    setTimeout(function () {
                        a.innerHTML = "Indian Army";
                    }, 4000);
                    setTimeout(function () {
                        a.innerHTML = "Discipline";
                    }, 6000);
                    setTimeout(function () {
                        a.innerHTML = "HERO";
                    }, 7000);
                    setTimeout(function () {
                        a.innerHTML = "Practice";
                    }, 8000);
                    setTimeout(function () {
                        a.innerHTML="<img src=\"img/tat1.jpg\" style='width: 100%;height: 100%;'>";
                    },9000);
                    setTimeout(function () {
                        a.innerHTML="<img src=\"img/tat2.jpg\" style='width: 100%;height: 100%;'>";
                    },10000);
                }
                tattest1();
            </script>
        </div>
        {{--<button onclick="chargebattery()">Touch Me Baby</button>--}}

    </div>
</div>

