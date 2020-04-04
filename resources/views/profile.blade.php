@extends('master')
@section('main')
<form>
    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
    <div class="form-group">
        <label class="form-check-label"><input type="checkbox"> Remember me</label>
    </div>
      <a href="{{ route('trang-chu') }}">
        <button type="button" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"> Submit
            <i class="zmdi zmdi-delete"></i>
        </button>
    </a>
</form>
@endsection