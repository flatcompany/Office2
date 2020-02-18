@extends('layouts.app')

@section('content')
    
<div class="container">
<img class="avatar" src="/uploads/avatars/{{ $user->avatar }}">
    <h1> {{ $user->name }} </h1>
    <form enctype="multipart/form-data" action="/profile" method="POST" >
    <label>Изменить фото профиля</label>
    <input type="file" name="avatar">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" >
    <input type="submit" class="pull-right btn btn-sm btn-primary" >
    </form>
</div>
    
   

@endsection