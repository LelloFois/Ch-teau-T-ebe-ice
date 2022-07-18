@extends('layouts.indexAdmin')

@section('styleLink')
 
<link rel="stylesheet" href={{ mix("css/admin-events.css") }}>
 
@endsection

{{-- <title>{{$title}} </title> --}}

 @include('components/adminNav') 



    @section('content')

<main class="events-admin">

    <div class="events-header">
        
        <h1>WELCOME TO THE EVENTS PAGE</h1>
        <button>Add Event</button>

    </div>
        
    <div class="events-table">
        <table>
            <thead>
              <tr>
                <th>Host Name</th>
                <th>Nr. of Guests</th>
                <th>Date</th>
                <th>Desription</th>
                <th>Requirements</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>

                </th>
              </tr>
            </tbody>
        </table>
    </div>

</main>

    @endsection