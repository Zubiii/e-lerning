<div class="container">
    <br />
    @if (session('status'))
    <div class="alert alert-success alert-dismissible">
        <button
            type="button"
            class="close"
            data-dismiss="alert"
            aria-hidden="true"
        >
            &times;
        </button>
        <h5><i class="icon fas fa-check"></i> Alert!</h5>
        {{ session("status") }}
    </div>
    <br />
    @endif @if (session('deleted'))
    <div class="alert alert-warning alert-dismissible">
        <button
            type="button"
            class="close"
            data-dismiss="alert"
            aria-hidden="true"
        >
            &times;
        </button>
        <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
        {{ session("deleted") }}
    </div>
    @endif

    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">About Website</h3>
        </div>
        <!-- /.card-header -->
        <form action="about-us/create" method="post">
        @csrf
            <div class="card-body">
                <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                    <label>Email</label>
                    <input name="email" id="email" type="email" class="form-control" placeholder="yourname@mail.com">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                    <label>Phone</label>
                    <input name="phone" id="phone" type="phone" class="form-control" placeholder="+92 XXX XXXXXXX ">
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Address</label>
                        <input name="address" id="address" type="address" class="form-control" placeholder="Enter Address ...">
                    </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Youtub ID</label>
                        <input name="youtubeid" id="youtubeid" type="text" class="form-control" placeholder="XXXXXXX">
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-outline card-primary">
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
                                    <button
                                        type="button"
                                        class="btn btn-tool btn-sm"
                                        data-card-widget="remove"
                                        data-toggle="tooltip"
                                        title="Remove"
                                    >
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body pad">
                                <div class="mb-3">
                                    <textarea
                                        name="description"
                                        id="description"
                                        class="textarea"
                                        placeholder="Place some text here"
                                        style="
                                            width: 100%;
                                            height: 200px;
                                            font-size: 14px;
                                            line-height: 18px;
                                            border: 1px solid #dddddd;
                                            padding: 10px;
                                        "
                                    ></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            <!-- /.card-footer -->
        </form>
        <!-- /.Form -->
    </div>

</div>
<br />
<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">About Us Information</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Youtube ID</th>
                            <th>Address</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($about as $a)
                        <tr>
                            <td><strong><a href="about-us/destroy/{{$a->id}}" style="color: red;">DELETE</a></strong></td>
                            <td>{{ $a->email }}</td>
                            <td>{{ $a->phone }}</td>
                            <td>{{ $a->youtubeid }}</td>
                            <td>{{ $a->address }}</td>
                            <td>{{ isset($a->description)?"Yes":"No" }}</td>
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