@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <div class="col">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">company</th>
                    <th scope="col">departure station</th>
                    <th scope="col">arrival station</th>
                    <th scope="col">departure time</th>
                    <th scope="col">arrival time</th>
                    <th scope="col">train code</th>
                    <th scope="col">carriages number</th>
                    <th scope="col">on time</th>
                    <th scope="col">cancelled</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                        <tr>
                            <th scope="row">{{$train->id}}</th>
                            <td>{{$train->company}}</td>
                            <td>{{$train->departure_station}}</td>
                            <td>{{$train->arrival_station}}</td>
                            <td>{{$train->departure_time}}</td>
                            <td>{{$train->arrival_time}}</td>
                            <td>{{$train->train_code}}</td>
                            <td>{{$train->carriages_number}}</td>
                            <td>{{$train->on_time}}</td>
                            <td>{{$train->cancelled}}</td>
                        </tr>
                    @endforeach
                
                </tbody>
            </table>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, delectus ad esse illum omnis earum eligendi sint a minus quasi, inventore nulla autem. Maxime voluptatem eligendi veniam voluptates. Soluta, sunt!</p>
            </div>
        </div>
    </div>

</div>
@endsection