<x-app3 title='user mangment'>
 <!-- Content Wrapper. Contains page content -->
 <div class="">

     <!-- Content Header (Page header) -->
     <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
                 <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Cars Management</h1>
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
                <li  class="breadcrumb-item ms-auto"> <a class="btn btn-success" href="{{ route('cars.create') }}"> + Create New Cars </a></li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
    <!-- Main content -->
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Cars Management</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Create as</th>
                            <th>Number Car</th>
                            <th>Type Car</th>
                            <th>date Taking</th>
                            <th>price Day</th>
                            <th>imageCar</th>
                            <th>plusInformation</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        {{-- @foreach ($data as $key => $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                @if(!empty($user->getRoleNames()))
                                    @foreach($user->getRoleNames() as $v)
                                    <label class="badge text-success">{{ $v }}</label>
                                    @endforeach
                                @endif
                                </td>
                                <td>
                                    <div class="btn-group " role="">
                                <a class="btn btn-info mr-3" href="{{ route('users.show',$user->id) }}">Show</a>
                                <a class="btn btn-primary mr-3" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                    </div>

                                </td>
                            </tr>
                        @endforeach --}}

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


{{-- {!! $data->render() !!} --}}
</div>
</x-app3>

