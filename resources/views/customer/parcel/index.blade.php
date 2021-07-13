@extends('customer.layouts.master')
@section('title','Parcel')
@push('css')
@endpush
@section('content')

<div class="col-12">
    @include('customer.alert')

</div>
<div class="col-md-12">

<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Schedule a Delivery</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('customer.parcel.store')}}" id="parcel-form" method="POST">


              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="pickup_address">Pickup Address</label>
                    <textarea name="pickup_address" id="pickup_address" rows="4" class="form-control" placeholder="Enter pickup address"></textarea>
                  </div>

                  @error('pickup_address')
                  <small class="text-danger"> {{$message}} </small>
                  @enderror

                  <div class="form-group">
                    <label for="dropoff_address">Dropoff Address</label>
                    <textarea name="dropoff_address" id="dropoff_address" rows="4" class="form-control" placeholder="Enter pickup address"></textarea>
                  </div>
                  
                  @error('dropoff_address')
                  <small class="text-danger"> {{$message}} </small>
                  @enderror

                  <div class="form-group">
                    <label for="pickup_date">Pickup Date</label>
                    <input type="date" id="pickup_date" name="pickup_date" value="2021-07-22" min="2021-01-01" max="2022-12-31">
                  </div>
                  
                  @error('pickup_date')
                  <small class="text-danger"> {{$message}} </small>
                  @enderror

    

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

</div>

@stop

@push('js')
<!-- <script>
    $('parcel-form').attr('action','{{route('customer.parcel.store')}}').submit();
</script> -->
@endpush