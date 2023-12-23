<x-app3 title='user show'>




<div class="container mt-5">
    <div class="pull-right">
        <li  class="breadcrumb-item ms-auto"> <a class="btn btn-primary" href="{{ route('users.index') }}"><i class="fas fa-hand-point-left"></i> Page Table User </a></li>
    </div>
</div>


<div class="container mt-2 ">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-5">
            <div class="card  " style="width: 18rem;">
                <h2 class="card-footer bg-light px-3 text-center">Show Roles</h2>
                <ul class="list-group list-group-light list-group-small text-center">
                  <li class="list-group-item px-3">Name :    {{ $user->name }}</li>
                  <li class="list-group-item px-3">Email :    {{ $user->email }}</li>
                  <li class="list-group-item px-3">Roles : <br>
                @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <label class="label label-success">{{ $v }}</label>
                @endforeach
            @endif
            </li>

                </ul>
              </div>
        </div>
        <div class="col-lg-3"></div>
    </div>








</div>
</x-app3>
