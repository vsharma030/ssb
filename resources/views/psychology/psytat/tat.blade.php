@include('master')
@include('nav')

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-xs-4">
            <img id="tat" src="img/black.jpg" style="width: 100%;">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-xs-4">
            <button type="button" class="btn btn-primary" onclick="document.getElementById('tat').src='img/tat1.jpg'"> Touch Me</button>
        </div>
        <div class="col-lg-4 col-xs-4">
            <button type="button" class="btn btn-primary" onclick="document.getElementById('tat').src='img/Black.jpg'"> Black</button>
        </div>
    </div>
</div>



