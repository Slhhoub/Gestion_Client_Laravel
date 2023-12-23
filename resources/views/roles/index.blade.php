<x-app3 title='role mangment'>


       <!-- Content Header (Page header) -->
       <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Roles Management</h1>
                  <!-- Topbar Search -->
                  <form class="d-none d-sm-inline-block form-inline navbar-search">
                  <div class="input-group">
                      <input type="text" class="form-control  " placeholder="Search for name..."
                          aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                          <button class="btn btn-primary" type="button">
                              <i class="fas fa-search fa-sm"></i>
                          </button>
                      </div>
                  </div>
              </form>
            </div>
            <div class="col-sm-6 mt-3">
              <ol class="breadcrumb float-sm-right">
                <li  class="breadcrumb-item ms-auto"> <a class="btn btn-success" href="{{ route('roles.create') }}"> + Create New Role </a></li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>





@if ($message = Session::get('success'))
    <div class="alert alert-success mt-5 mb-5">
        <p>{{ $message }}</p>
    </div>
@endif


<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Roles Management</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($roles as $key => $role)
                            <tr>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-info mr-3" href="{{ route('roles.show', $role->id) }}">Show</a>
                                        <a class="btn btn-primary mr-3" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


{{-- <table class="table table-bordered mt-3 shadow-sm mb-5 bg-body rounded text-center">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th width="300px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roles as $key => $role)
        <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $role->name }}</td>
            <td>
                <div class="btn-group" role="group">
                    <a class="btn btn-info me-2" href="{{ route('roles.show', $role->id) }}">Show</a>
                    <a class="btn btn-primary me-2" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table> --}}

{!! $roles->render() !!}




</x-app3>
