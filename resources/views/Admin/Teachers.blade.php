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
        <h3 class="card-title">Add Teacher</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="teachers/create" method="post">
        @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="name" class="form-control" name="first_name" id="first_name" placeholder="Enter First Name...">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="name" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name...">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="phone" class="form-control" name="phone_number" id="phone_number" placeholder="+92 XXX XXXXXXX">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Bio</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Bio...">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Twitter</label>
                    <input type="link" class="form-control" name="twitter" id="twitter" placeholder="link?">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Facebook</label>
                    <input type="link" class="form-control" name="facebook" id="facebook" placeholder="link?">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Youtube</label>
                    <input type="link" class="form-control" name="youtube" id="youtube" placeholder="link?">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Gmail</label>
                    <input type="link" class="form-control" name="gmail" id="gmail" placeholder="link?">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Linkedin</label>
                    <input type="link" class="form-control" name="linkdin" id="linkdin" placeholder="link?">
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
                    <h3 class="card-title">Teacher List</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Bio</th>
                            <th>Twitter</th>
                            <th>Facebook</th>
                            <th>Youtube</th>
                            <th>Linkedin</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($teachers as $t)
                        <tr>
                            <td><strong><a href="teacher/destroy/{{$t->id}}" style="color: red;">DELETE</a></strong></td>
                            <td>{{ $t->first_name }} {{$t->last_name}}</td>
                            <td>{{ $t->phone_number }}</td>
                            <td>{{ isset($t->description)? "Yes": "No" }}</td>
                            <td>{{ isset($t->twitter)? "Yes": "No" }}</td>
                            <td>{{ isset($t->facebook)? "Yes": "No" }}</td>
                            <td>{{ isset($t->youtube)? "Yes": "No" }}</td>
                            <td>{{ isset($t->linkdin)? "Yes": "No" }}</td>
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