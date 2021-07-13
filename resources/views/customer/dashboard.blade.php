@extends('customer.layouts.master')
@section('title','Dashboard')
@push('css')
@endpush
@section('content')
<div class="col-12">
            <!-- fetch data from DB -->
            @foreach($parcels as $parcel)

          <div class="card">
            <div class="card-header">
            Delivery Schedules For {{$parcel->pickup_date}}
            </div>
            <div class="card-body">
              <p class="card-text">
              <strong> Pick up Location </strong> {{$parcel->pickup_address}}
                <br>
                <strong> Drop off Location </strong> {{$parcel->drop_off_address}}
                <br>
                <strong> Status </strong> {{$parcel->status}}</p>
              
            </div>
          </div>

            @endforeach
@stop
@push('js')
@endpush
