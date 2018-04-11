@include('master')
@include('nav')


<div class="container">
    <label> Delete Wat</label>
    <label> </label>


    <form method="POST" action="{{action('WatController@destroy')}}">
        {{csrf_field()}}
        <div><label for="search">Enter the word which you want to delete</label>
            <input type="text" id="delete" class="form-control" title="delete" name="delete" required>
        </div>
        <div>
            <hr>
            <button type="submit" class="btn btn-primary"> Delete </button>
        </div>
    </form>


</div>