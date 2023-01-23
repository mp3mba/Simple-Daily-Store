@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('message'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{Session::get('message')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

    <form method="post" action="{{route('add_data')}}" class="form-control border border-dark p-5">
        @csrf
    <h2 class="text-uppercase text-center fw-bold">enter new data</h2>
    <div class="row">
        <div class="col-auto">
        <label for="date" class="col-form-label fw-bold fs-5">Select date:</label>
        </div>
        <div class="col-auto">
        <input type="date" name="date" id="date" class="form-control border border-dark" required>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="col-auto">
                <label for="bath_soap" class="col-form-label fw-bold fs-5">Bath soap:</label>
            </div>
            <div class="col-auto">
                <input type="number" name="b_soap" id="bath_soap" class="form-control border border-dark">
            </div>
            <div class="col-auto">
                <label for="laundry_soap" class="col-form-label fw-bold fs-5">Laundry soap:</label>
            </div>
            <div class="col-auto">
                <input type="number" name="l_soap" id="l_soap" class="form-control border border-dark">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="col-auto">
                <label for="deter_soap" class="col-form-label fw-bold fs-5">Detregent soap:</label>
            </div>
            <div class="col-auto">
                <input type="number" name="d_soap" id="deter_soap" class="form-control border border-dark">
            </div>
            <div class="col-auto">
                <label for="bulb" class="col-form-label fw-bold fs-5">Bulb pieces:</label>
            </div>
            <div class="col-auto">
                <input type="number" name="b_soap" id="bulb" class="form-control border border-dark">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="col-auto">
                <label for="diesel" class="col-form-label fw-bold fs-5">Diesel litre:</label>
            </div>
            <div class="col-auto">
                <input type="number" name="d_litre" id="diesel" class="form-control border border-dark">
            </div>
            <div class="col-auto">
                <label for="d_cost" class="col-form-label fw-bold fs-5">Diesel cost:</label>
            </div>
            <div class="col-auto">
                <input type="number" name="d_cost" id="d_cost" class="form-control border border-dark">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="col-auto">
                <label for="maintenance_cost" class="col-form-label fw-bold fs-5">Maintenance cost:</label>
            </div>
            <div class="col-auto">
                <input type="number" name="m_cost" id="maintenance_cost" class="form-control border border-dark">
            </div>
            <div class="col-auto">
                <label for="maintenance" class="col-form-label fw-bold fs-5">Maintenence:</label>
            </div>
            <div class="col-auto">
                <textarea name="maintenance" cols="40" rows="2" class="col-form-label fw-bold fs-5"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="">
            <button type="submit" class="w-25 border p-2 fw-bold fs-6 rounded" style="background-color: #c0af11">Add data</button>
        </div>
    </div>
</form>
</div>
@endsection