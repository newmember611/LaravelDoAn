@extends('master')
@section('content')
<form action="{{route('user.updateDeactive', $user['id'])}}" method="POST">
    {{csrf_field()}}
    {{ method_field('PATCH') }}

    <p>Xác nhận khóa tài khoản<p>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>
@endsection