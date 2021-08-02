
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
        <h3 class="card-title">Add Course Video</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="course-video/create">
        @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Category ID</label>
                    <select name="course_id" class="form-control">
                        @foreach($courseList as $c_list)
                            <option value="{{ $c_list->id }}">{{ $c_list->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title...">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Youtube Id</label>
                    <input type="text" class="form-control" name="youtube_id" id="youtube_id" placeholder="Enter Youtube ID...">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control" name="short_des" id="short_des" placeholder="Enter Short Description...">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Episode Number</label>
                    <input type="number" class="form-control" name="episode_num" id="episode_num" placeholder="Enter Button Name...">
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
                    <h3 class="card-title">Course Video Detail</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 400px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Course ID</th>
                            <th>Title</th>
                            <th>Youtube Id</th>
                            <th>Description</th>
                            <th>Episode</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(1)
                        @foreach($courseLecture as $cl)
                        <tr>
                            <td><strong><a href="course-video/destroy/{{$cl->id}}" style="color: red;">DELETE</a></strong></td>
                            <td>{{ $cl->course_id }}</td>
                            <td>{{ $cl->title }}</td>
                            <td>{{ $cl->youtube_id }}</td>
                            <td>{{ $cl->short_des }}</td>
                            <td>{{ $cl->episode_num }}</td>
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