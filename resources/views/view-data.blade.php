@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-uppercase text-center fw-bold">records</h2>

    <form action="{{route('view_data')}}" method="get" class="form-control border-0 p-0">
      @csrf
    <div class="input-group w-25 mx-auto">
      <input type="date" name="date" class="form-control rounded" placeholder="Search by date" aria-label="Search" value="{{ request('date') }}" aria-describedby="search-addon" />
      <button type="submit" class="btn btn-primary" style="background-color: #9F4E03">search</button>
    </div>
    </form>
    <a href="{{route('view_data')}}" class="text-decoration-none"><button class="border-0" style="background-color: #c0af11;">Show all records <i class="fa-solid fa-arrows-rotate" style="color:white"></i></button></a>

    <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Date</th>
        <th scope="col">Bath soap</th>
        <th scope="col">Laundry soap</th>
        <th scope="col">Detregent soap</th>
        <th scope="col">Bulb pieces</th>
        <th scope="col">Diesel litre</th>
        <th scope="col">Diesel cost</th>
        <th scope="col">Maintenance</th>
        <th scope="col">maintenance cost</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($data as $datas)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{$datas->date}}</td>
        <td>{{$datas->b_soap}}</td>
        <td>{{$datas->l_soap}}</td>
        <td>{{$datas->d_soap}}</td>
        <td>{{$datas->bulb_pieces}}</td>
        <td>{{$datas->diesel_litre}}</td>
        <td>{{$datas->diesel_cost}}</td>
        <td>{{$datas->maintenance}}</td>
        <td>{{$datas->maintenance_cost}}</td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
  @endsection