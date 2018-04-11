@include('master')

@include('nav')
<hr>
@yield('create')
<div class="container">
    <label> <h1> Add a New Word to Database</h1></label>
    <form  method="POST" action="/WATS">

        {{csrf_field()}}
    <div class="form-group">
        <label for="word">Word</label>
        <input type="text" id="word" class="form-control" title="word" name="word" required>
    </div>

        <div class="form-group">
            <label for="sentence">Sentence</label>
            <input type="text" id="text" class="form-control" title="text" name="text" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Sentence</button>

    </form>

</div>
<p></p>



@foreach($wor as $worr)

    <div class="list-group">
        <hr>
        <div class="list-group-item list-group-item-success">
            <h4>   &nbsp;&nbsp;&nbsp;&nbsp;{{$worr->word}}</h4>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$worr->text}} </div>
    </div>
@endforeach
