@extends('layouts.mainlayout')
@section('content')

   <script src="https://cdn.tailwindcss.com"></script>

            <div class="container-xl px-4 mt-4">
                <!-- Account page navigation-->
                <form action="{{route('image.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <hr class="mt-0 mb-4">
                <div class="row">
                    <div class="col-xl-4">
                        <!-- Profile picture card-->
                        <div class="card mb-4 mb-xl-0">
                            <div class="card-header"> Picture</div>
                            <div class="card-body text-center">
                                <!-- Profile picture image-->
                                <img class="img-account-profile rounded-circle mb-2" src="https://sb-admin-pro.startbootstrap.com/assets/img/illustrations/profiles/profile-1.png" alt="">
                                <!-- Profile picture help block-->
                                <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                                <!-- Profile picture upload button-->
                                <input class="btn btn-sm btn-primary   @error('image') is-invaild
                                @enderror" name="image[]" type="file" id="multiFile"  multiple>
                                @error('image')
                                        <div class="alert alert-danger">{{$message}}</div>

                                        @enderror
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-8">
                        <!-- Account details card-->
                        <div class="card mb-4">
                            <div class="card-header">Image Details</div>
                            <div class="card-body">
                                    <!-- Form Group (username)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="name">Name</label>
                                        <input class="form-control @error('name') is-invaild
                                        @enderror" name="name" id="name" type="text" placeholder="Enter Image Name">
                                        @error('name')
                                        <div class="alert alert-danger">{{$message}}</div>

                                        @enderror
                                    </div>
                                      <!-- Form Group (username)-->
                                      <div class="mb-3">
                                        <label class="small mb-1" for="category">category</label>
                                        <input class="form-control @error('category') is-invaild
                                        @enderror" name="category" id="category" type="text" placeholder="image category">
                                        @error('category')
                                        <div class="alert alert-danger">{{$message}}</div>

                                        @enderror
                                    </div>


                                    <!-- Save changes button-->
                                    <input type="submit" class="btn btn-primary" placeholder="Save changes" type="button">

                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>


@endsection('content')
