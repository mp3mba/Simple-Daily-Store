@extends('layouts.app')

@section('content')
<div class="container">

    @if(Session::has('message'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{Session::get('message')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

    <form action="{{route('add_user')}}" method="POST" class="form-control border border-dark p-5">
        @csrf
    <h2 class="text-uppercase text-center fw-bold">Add new user</h2>
    <div class="row">
        <div class="col-lg-6">
            <div class="col-auto">
                <label for="name" class="col-form-label fw-bold fs-5">Name:</label>
            </div>
            <div class="col-auto">
                <input type="text" id="name" class="form-control border border-dark w-75" name="name">
            </div>
            <div class="col-auto">
                <label for="email" class="col-form-label fw-bold fs-5">Email:</label>
            </div>
            <div class="col-auto">
                <input type="email" id="email" class="form-control border border-dark w-75" name="email">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="col-auto">
                <label for="password" class="col-form-label fw-bold fs-5">Password:</label>
            </div>
            <div class="col-auto">
                <input type="password" id="password" class="form-control border border-dark w-75" name="password">
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="">
            <button type="submit" class="w-25 border p-2 fw-bold fs-6 rounded" style="background-color: #c0af11">Add user</button>
        </div>
    </div>
    </form>
</div>
@endsection