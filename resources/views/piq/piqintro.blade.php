@include('master')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12" align="middle" style="font-size: 30px;background-color: lightblue">PIQ</div>
    </div>
</div>

<div class="container" style="padding: 1%">
    <h1><strong>PIQ PART 1</strong></h1>
    <form action="/piq/piqpart2.blade.php" method="post">
        <div class="row" style="padding: 2%;">
            <div class="col-lg-6">
                <label>Enter Your Name</label>
            </div>
            <div class="col-lg-6">
                <input type="text" id="name" placeholder="Full Name" required>
            </div>


            <div class="col-lg-6">
                <label>Enter Your Father's Name</label>
            </div>
            <div class="col-lg-6">
                <input type="text" id="name" placeholder="Full Name" required>
            </div>
            <div class="col-lg-12">
                <label><h4>Place of Maximum Residence</h4></label>

            </div>
            <div class="container">
                <div class="row">
                    <div class=" col-lg-2">
                        <label style="text-align: center">City</label>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" id="name" placeholder="City" required>
                    </div>
                    <div class=" col-lg-2">
                        <label style="text-align: center">State</label>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" id="name" placeholder="State" required>
                    </div>

                </div>

            </div>

            <div class="col-lg-12">
                <label><h4>Present Address</h4></label>
            </div>
            <div class="container">
                <div class="row">
                    <div class=" col-lg-2">
                        <label style="text-align: center">City</label>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" id="name" placeholder="City" required>
                    </div>
                    <div class=" col-lg-2">
                        <label style="text-align: center">State</label>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" id="name" placeholder="State" required>
                    </div>
                    <div class=" col-lg-2">
                        <label style="text-align: center">Population</label>
                    </div>
                    <div class="col-lg-2">
                        <input type="number" id="name" placeholder="Population" required>
                    </div>

                </div>

            </div>

            <div class="col-lg-12">
                <label><h4>Permanent Address</h4></label>
            </div>
            <div class="container">
                <div class="row">
                    <div class=" col-lg-1">
                        <label style="text-align: center">City</label>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" id="name" placeholder="City" required>
                    </div>
                    <div class=" col-lg-1">
                        <label style="text-align: center">State</label>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" id="name" placeholder="State" required>
                    </div>
                    <div class=" col-lg-1">
                        <label style="text-align: center">Population</label>
                    </div>
                    <div class="col-lg-2">
                        <input type="number" id="name" placeholder="Population" required>
                    </div>
                    <div class=" col-lg-1">
                        <label style="text-align: center">Whether Dist HQ</label>
                    </div>
                    <div class="col-lg-2">
                        <div class="radio">
                            <label><input type="radio" name="optradio">Yes </label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="optradio">No </label>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <button class="btn-success" formaction="">Next Page</button>
        </div>
        </div>

    </form>
</div>
