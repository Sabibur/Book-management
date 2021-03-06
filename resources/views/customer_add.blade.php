@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row justify-content-center">
  <div class="p-2 bg-white col-md-7 m-auto rounded text-center">
    <h2 >New Customer</h2>

  </div>
        <div class="col-md-7 bg-white px-5 rounded">
          <form  action="{{ url('/customer/add/insert') }}" method="post" enctype="multipart/form-data">
            @csrf



            @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

            <div class="form-group row">
              <label class="col-sm-2 col-form-label"><strong>ID</strong></label>
              <div class="col-sm-10">
                <input type="text"  name="customer_code" class="form-control" value="{{ old('customer_code') }}" placeholder="Enter Customer ID">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"><strong>Name</strong></label>
              <div class="col-sm-10">
                <input type="text"  name="name" class="form-control" value="{{ old('name') }}" placeholder="Enter Customer Name">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"><strong>Address</strong></label>
              <div class="col-sm-10">
                <textarea name="address" rows="2" class="form-control" >{{ old('address') }}</textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"><strong>Photo</strong></label>
              <div class="col-sm-10">
                <input type="file" name="photo" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"><strong>Mobile</strong></label>
              <div class="col-sm-10">
                <input type="text" name="mobile" class="form-control"  placeholder="Enter Customer Mobile" value="{{ old('mobile') }}">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"><strong>Quantity</strong></label>
              <div class="col-sm-10">
                <input type="number" name="quantity" class="form-control"  placeholder="Quantity" value="{{ old('quantity') }}">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"><strong>Rate</strong></label>
              <div class="col-sm-10">
                <input type="number" name="rate" class="form-control"  placeholder="Rate" value="{{ old('rate') }}">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"><strong>Discount</strong></label>
              <div class="col-sm-10">
                <input type="number" name="discount" class="form-control"  placeholder="Discount" value="{{ old('discount') }}">
              </div>
            </div>
            {{-- <div class="form-group row">
              <label class="col-sm-2 col-form-label"><strong>Total</strong></label>
              <div class="col-sm-10">
                <input type="number" name="total" class="form-control"  placeholder="Total">
              </div>
            </div> --}}
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"><strong>Payment</strong></label>
              <div class="col-sm-10">
                <input type="number" name="payment" class="form-control"  placeholder="Payment" value="{{ old('payment') }}">
              </div>
            </div>
            {{-- <div class="form-group row">
              <label class="col-sm-2 col-form-label"><strong>Due</strong></label>
              <div class="col-sm-10">
                <input type="number" name="due" class="form-control"  placeholder="Due">
              </div>
            </div> --}}
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"><strong>Comment</strong></label>
              <div class="col-sm-10">
                <textarea name="comment" rows="2" class="form-control" >{{ old('address') }}</textarea>
              </div>
            </div>
            <div class="p-3 offset-5">
              <button type="submit" name="" class="btn btn-primary">Submit</button>
            </div>

          </form>

        </div>
    </div>
</div>
@endsection
