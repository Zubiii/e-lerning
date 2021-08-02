<br>
<div class="container">
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
        <h3 class="card-title">Course Category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="course-category/create" method="post">
        @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Category Name ...">
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
                    <h3 class="card-title">Course Category List</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($courseCategories as $cc)
                        <tr>
                            <td><strong><a href="about-us/destroy/{{$cc->id}}" style="color: red;">DELETE</a></strong></td>
                            <td>{{ $cc->name }}</td>
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