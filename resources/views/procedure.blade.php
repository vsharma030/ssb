@extends('master')
@include('nav')

<style>
    ul.a{
list-style-type: square;
}

ol.b {
    list-style-type: upper-roman;
}
</style>
<body background="img/psychology.jpg">

<div class="container" align="middle">

    <u><h1> First Stage</u></h1>
    <h2> Screen In</h2>

</div>
<div class="container" align="middle" style="padding: 50px;">
    <div class="row">

    <div class="col-lg-6">
        <strong>
        <li> Verbal </li>
        <li> Non-Verbal</li>
        </strong>
    </div>
    <div class="col-lg-6">
        <strong>
        <li>PPDT</li>
        <li>PPDT-Group Discussion</li>
        </strong>
    </div>
    </div>
</div>

<div class="container" align="middle">
    <u><h1> Second Stage</h1></u>
</div>

<div class="container">

    <div class="row">
        <div class="col-lg-4" align="left">
            <h2>Psychology</h2>
            <ul><strong >
                    <a href="tat_test"> Thematical Appreception Test</a><br>
                Word Association Test<br>
                Situation Reaction Test<br>
                    Self Description<br>
                </strong>
            </ul>
        </div>

        <div class="col-lg-4" align="middle">
            <h2> Group Task </h2>
            <ul><strong>
                   Progressive Group Task<br>
                    Half Group Task<br>
                    Group Disucssion<br>
                    Lecurette<br>
                    Individual Task<br>
                    Command Task<br>
                    Group Planning Exercise<br>
                    Group Obstacle Race<br>
                    Final Group Task<br>
                </strong>
            </ul>
        </div>

        <div class="col-lg-4" align="middle">
            <h2> Interview</h2>
            <ul><strong>
                    Personal INTERVIEW

                </strong>
            </ul>
        </div>
    </div>
</div>
{{--
<div class="container">
    <div class="title m-b-md" style="font-size:280%">
        Procedure
    </div>

    <div class="row" style="font-size:20">

        <ul class="a">
    <div class="col-md-4">

    <b><li>Psychology</li></b>

    <ol class="b">
        <div class="row">
        <li><a href="tat">TAT</a></li>
        <li><a href="wat"> WAT</a></li>
        <li>SRT</li>
        <li>SD</li>
        </div>
    </ol></div>
    <div class="col-md-4">
        <b><div class="row"><li>Interview</li></div></b></div>
    <div class="col-md-4">
    <b><div class="row"> <li>Group Task</li></div></b>
    <ol class="b">
        <div class="row">
        <li>PGT</li>
        <li>HGT</li>
        <li>Group Disucssion</li>
        <li>Lecurette</li>
        <li>IO</li>
        <li>Command Task</li>
        <li>GPE</li>
        <li>GOR</li>
            <li>FGT</li></div>
    </ol></div>
</ul></div>
</div>--}}
