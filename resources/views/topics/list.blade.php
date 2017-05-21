@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Topics</div>

                <div class="panel-body">
                    <div class="list-group">

                      @foreach ($topics as $topic)
                      <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">{{$topic -> name}}</h4>
                        <p class="list-group-item-text">{{$topic -> description}}</p>
                      </a>
                      @endforeach

                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
