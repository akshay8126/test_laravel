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
                <table class="table table-bordered" class="display nowrap" id="example2" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Image Name</th>
                            <th>Category</th>
                            {{-- <th> Image</th> --}}
                            <th>View Image</th>
                            <th>Delete Image</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($ImageLi as $BannerInf)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $BannerInf->name }}</td>
                                <td>{{ $BannerInf->category }}</td>
                                {{-- <td> <a href="{{ '/storage/' . $BannerInf->image }}" target="blank"><img width=250
                                            height=130 src="{{ '/storage/' . $BannerInf->image }}"></a></td> --}}

                                <td class="text-left">
                                    <a class="btn btn-sm btn-primary px-4" style="font-family: myFirstFont"
                                        href='viewgallery/{{ $BannerInf->id }}'>View</a>
                                </td>
                                <td class="text-left">
                                    <a class="btn btn-sm btn-danger px-4" style="font-family: myFirstFont"
                                        href='delete/{{ $BannerInf->id }}'>Delete</a>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>


                </table>
            </div>
        </div>
    </div>
@endsection('content')
