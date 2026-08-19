@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="section hero">
    <h1 class="page-title">Laravel migration seeder</h1>

</section>

<section class="section">
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">agency</th>
                    <th scope="col">departure station</th>
                    <th scope="col">arrival station</th>
                    <th scope="col">departure time</th>
                    <th scope="col">arrival time</th>
                    <th scope="col">codice treno</th>
                    <th scope="col">numero carrozze</th>
                    <th scope="col">in orario</th>
                    <th scope="col">cancellato</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                <tr>
                    <td>
                        {{$train["agency"]}}
                    </td>
                    <td>
                        {{$train["departure_station"]}}
                    </td>
                    <td>
                        {{$train["arrival_station"]}}
                    </td>
                    <td>
                        {{$train["departure_time"]}}
                    </td>
                    <td>
                        {{$train["arrival_time"]}}
                    </td>
                    <td>
                        {{$train["train_code"]}}
                    </td>
                    <td>
                        {{$train["number_of_carragies"]}}
                    </td>
                    <td>
                        {{$train["is_on_time"]}}
                    </td>
                    <td>
                        {{$train["is_cancelled"]}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection