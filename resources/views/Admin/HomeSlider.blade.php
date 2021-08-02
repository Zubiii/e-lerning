
<div class="container" >
    <br>
    @if (session('status'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Alert!</h5>
            {{ session('status') }}
        </div>
        <br>
    @endif
    @if (session('deleted'))
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
            {{ session('deleted')}}
        </div>
    @endif
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Add Home Slider</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="create/home-slider" enctype="multipart/form-data">
        @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Summary</label>
                    <input type="text" class="form-control" name="shortDes" id="shortDes" placeholder="Enter Short Description">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Button Name</label>
                    <input type="text" class="form-control" name="btnName" id="btnName" placeholder="Enter Button Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Button URL</label>
                    <input type="text" class="form-control" name="btnUrl" id="btnUrl" placeholder="Enter Button URL">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="image">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
<br>
<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Home Slider</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Has Image?</th>
                            <th>Button Text</th>
                            <th>Button Link</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($home as $h)
                        <tr>
                            <td><strong><a href="delete/home-slider/{{$h->id}}" style="color: red;">DELETE</a></strong></td>
                            <td>{{ $h->name }}</td>
                            <td>{{ $h->title }}</td>
                            <td>{{ $h->image }}</td>
                            <td>{{ $h->btnName }}</td>
                            <td>{{ $h->btnUrl }}</td>
                            <td>{{ $h->shortDes}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
        </div>
    </div>
</div>