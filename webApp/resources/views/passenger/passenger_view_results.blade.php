@extends('layout.passenger_master_plain')

@section('tab5')
    class="active "
@endsection

@section('content')
    <div class="container">
    <table class="responsive-table">
        <thead>
        <tr>

            <th data-field="booking_id">Booking Id <i class="material-icons">card_membership</i></th>
            <th data-field="date">Date <i class="material-icons">date_range</i></th>
            <th data-field="seats">No of Seats<i class="material-icons">airline_seat_recline_normal</i></th>
            <th data-field="bus_type">Bus Type <i class="material-icons">directions_bus</i></th>
            <th data-field="price">Price <i class="material-icons">euro_symbol</i></th>
            <th data-field="start">Base Station <i class="material-icons prefix">location_on</i></th>
            <th data-field="end">End Station <i class="material-icons prefix">location_off</i></th>
        </tr>
        </thead>

        <tbody>
        @foreach($journey_result as $row)
        <tr>
            <td>{{$row->booking_id}}</td>
            <td>{{$row->date}}</td>
            <td>{{$row->seats}}</td>
            <td>{{$row->type}}</td>
            <td>
                @if ( $row->type == 'highway')
                {{($row->price_highway)*$row->seats}}
                @elseif($row->type == 'luxury')
                {{$row->price_normal*$row->seats*2}}
                @elseif($row->type == 'semiluxury')
                {{$row->price_normal*$row->seats*1.5}}

                @else
                    {{$row->price_normal*$row->seats}}
                @endif
            <td>@if($row->direction=='1')
                {{ $row->station }}
                @else
                {{ $row->end_station }}
                @endif
            </td>
            <td>
                @if($row->direction=='1')
                {{ $row->end_station }}
                @else
                {{ $row->station }}
                @endif
            </td>

        </tr>
        @endforeach

        </tbody>
    </table>
    <a class="btn waves-effect waves-light" style="margin-top: 5%" type="button" name="action" href="/passenger_home">Exit
        <i class="material-icons right">send</i>
    </a>

    </div>
@endsection