@extends('layouts.app')

@section('content')

     <div class="card card-primary">
         <div class="card-header">

         </div>
         <!-- /.card-header -->
         <!-- form start -->
<form action="" method="post">
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Full name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter" name="name" value="{{ Auth::user()->name}}">
        </div>


        <div class="form-group">
            <label for="exampleInputEmail1">Job title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter job" name="title" value="">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" value="{{ Auth::user()->email}}">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Linkedin</label>
            <input type="url" class="form-control" id="exampleInputPassword1" placeholder="Enter your Linkedin">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Linkedin</label>
            <input type="url" class="form-control" id="exampleInputPassword1" placeholder="Enter your Linkedin">
        </div>



        <div class="btn-group">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Small button
            </button>
            <ul class="dropdown-menu">
                ...
            </ul>
        </div>





        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>

                <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                </div>



            </div>
        </div>


        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
     </div>
</form>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection
