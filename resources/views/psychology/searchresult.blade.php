@include('master')
@include('psychology/search')

<hr>
@foreach($x as $var)
    <p> &nbsp;&nbsp;&nbsp;&nbsp;<li><label>{{$var->word }} : {{$var->text}}</label></li>
    @endforeach








