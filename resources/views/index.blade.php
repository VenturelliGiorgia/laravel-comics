@extends("layouts.app")

@section('content')

<div class="bg-image"></div>
    <div class="my-bg">
        <div class="container">
            <div class="fs-4 series-container">

                <span>CURRENT SERIES</span>
            </div>
            <div class="pb-3"></div>
            <div class="row">
                @foreach ($comics as $comic)
                <div class="col-2">
                    <div>
                        <img class="image" src="{{$comic['thumb']}}">
                        <h5 class="mb-3 text-white">{{ $comic['title'] }}</h5>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center pb-3">
                <button class=" my-btn-classic">LOAD MORE</button>


            </div>
        </div>
    </div>



@endsection