<x-app3 title='user edit'>

    <!-- Content Header (Page header) -->
     <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="h3 mb-2 text-gray-800">Edit User</h1>
            </div>
            <div class="col-sm-6 mt-3">
              <ol class="breadcrumb float-sm-right">
                <li  class="breadcrumb-item ms-auto"> <a class="btn btn-primary" href="{{ route('users.index') }}"><i class="fas fa-hand-point-left"></i> Page Table User </a></li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Something went wrong.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif


    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
            </div>
            <div class="card-body">
                {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example1">Name</label>
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">*
                        <label class="form-label" for="form6Example5">Email</label>
                        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                    </div>
                </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example1">Password</label>
                        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                    </div>
                    </div>
                    <div class="col">
                    <div class="form-outline">
                          <label class="form-label" for="form6Example5">Confirm Password</label>
                        {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                    </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-5">
                    <div class="form-group">
                        <strong>Role:</strong>
                        {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
                    </div>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>

    </div>



    {{-- <div class="shadow-sm p-3 mb-5 bg-body-tertiary rounded">
        {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            <label class="form-label" for="form6Example1">Name</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                <label class="form-label" for="form6Example5">Email</label>
            </div>
        </div>
        </div>
        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                <label class="form-label" for="form6Example1">Password</label>
            </div>
            </div>
            <div class="col">
            <div class="form-outline">
                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                <label class="form-label" for="form6Example5">Confirm Password</label>
            </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-5">
            <div class="form-group">
                <strong>Role:</strong>
                {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
            </div>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        {!! Form::close() !!}
    </div> --}}

</x-app3>
