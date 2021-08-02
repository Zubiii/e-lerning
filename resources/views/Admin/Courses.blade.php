
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
        <h3 class="card-title">Add Courses</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="courses/create" enctype="multipart/form-data">
        @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select name="category_id" class="form-control">
                        @foreach($courseCategories as $cc)
                            <option value="{{ $cc->id }}">{{ $cc->name }}</option>
                        @endforeach
                    </select>
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <label>Description</label>
                                </h3>
                                <!-- tools box -->
                                <div class="card-tools">
                                    <button
                                        type="button"
                                        class="btn btn-tool btn-sm"
                                        data-card-widget="collapse"
                                        data-toggle="tooltip"
                                        title="Collapse"
                                    >
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body pad">
                                <div class="mb-3">
                                    <TEXTAREA
                                        name="description"
                                        id="description"
                                        class="textarea"
                                        placeholder="Place some text here"
                                        style="
                                            width: 100%;
                                            height: 300px;
                                            font-size: 14px;
                                            line-height: 18px;
                                            border: 1px solid #dddddd;
                                            padding: 10px;
                                        "
                                    ></TEXTAREA>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
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
                <h3 class="card-title">Courses List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
            <table class="table table-head-fixed text-nowrap">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>Name</th>
                        <th>Category ID</th>
                        <th>Has Image?</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    @if(sizeof($courses)>0)
                        @foreach($courses as $c)
                            <tr>
                                <td><strong><a href="courses/destroy/{{$c->id}}" style="color: red;">DELETE</a></strong></td>
                                <td>{{ $c->name }}</td>
                                <td>{{ $c->category_id }}</td>
                                <td>{{ $c->img }}</td>
                                <td>{{ isset($c->desc)? "YES": "NO" }}</td>
                            </tr>
                        @endforeach
                    @endif
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