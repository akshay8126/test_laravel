@extends('layouts.mainlayout')
@section('content')
    <h1 class="h3 mb-2 text-gray-800"></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Image List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                            @php
                            $allimg=explode("/img_img",$ImageLi[0]->image);
                            @endphp
                            @foreach ($allimg as $Banner)
                            <a href="{{ '/storage/' . $Banner }}" target="blank"><img width=250
                                                height=130 src="{{ '/storage/' . $Banner }}"></a>

                            @endforeach
            </div>
        </div>
    </div>
@endsection('content')
