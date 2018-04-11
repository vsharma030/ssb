<nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav text-md-center nav-justified w-100">
            <li class="nav-item active">
                <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li>
                <a class="nav-link" onclick="goBack()"><button class="btn-primary"> Go Back </button></a>

                <script>
                    function goBack() {
                        window.history.back();
                    }
                </script>
            </li>
            <li>
                <a class="nav-link" onclick="goForward()"><button class="btn-primary">Go Forward</button> </a>
                <script>
                    function goForward() {
                        window.history.forward();

                    }
                </script>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/search">Search </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/deletewat">Delete </a>
            </li>


        </ul>
    </div>
</nav>