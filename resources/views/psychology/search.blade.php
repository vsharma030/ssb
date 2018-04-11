@include('master')
@include('nav')

<div class="container">
    <label> <h2> Search</h2></label>
    <form method="POST" action="{{action('WatController@search')}}">
        {{csrf_field()}}
        <div><label for="search">Enter Word</label>
            <input type="text" id="search" class="form-control" title="search" name="search" required>
        </div>
        <div>
            <hr>
            <button type="submit" class="btn btn-primary"> Search </button>
        </div>
    </form>
</div>


