@extends("layouts.app")

@section('content')

    <div class="">
        <div class="container">
            <div class="fs-4">
                <span>CURRENT SERIES</span>
            </div>
            <div class="row">
                @foreach ($comics as $comic)
                <div class="col-2">
                    <div>
                        <img class="image" src="{{$comic['thumb']}}">
                        <h5 class="mb-3">{{ $comic['title'] }}</h5>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center pb-3">
                <button class="btn btn-info text-white fw-bold">LOAD MORE</button>

            </div>
        </div>
    </div>



@endsection