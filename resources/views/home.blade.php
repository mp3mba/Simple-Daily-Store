@extends('layouts.app')

@section('content')
<div class="container" style="height: 100vh">
    <div class="mt-1 p-5 text-black rounded" style="background-color: #dedede">
        <h3 class="text-uppercase fw-normal">Keep your data safely recorded</h3>
        <h4>Click <b>view data</b> to view records, click <b>new record</b> to enter new data</h4>
        <div class="d-flex justify-content-center pb-5">
            <div class="mt-4">
                <button class="border-0 p-2 fw-bold fs-6 rounded" style="background-color: #9F4E03"><a href="{{route('new_data')}}" class="text-decoration-none text-uppercase text-white">new data</a></button>
                <button class="border p-2 fw-bold fs-6 rounded" style="background-color: #9F4E03"><a href="{{route('view_data')}}" class="text-decoration-none text-uppercase text-white">view data</a></button>
            </div>
        </div>
    </div>
</div>
@endsection
