@extends('layouts.app')

@section('content')
<div class="container">
    <div class="title-box-d" style="margin-top: 10em">
        <h3 class="title-d">Add Property Form</h3>
    </div>

    <form action="/create_property/{{ $id }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="form-group">
              <input type="text" name="city" class="form-control form-control-lg form-control-a" placeholder="Enter City" required>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="form-group">
              <input name="state" type="text" required class="form-control form-control-lg form-control-a" placeholder="Enter Area name" >
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="form-group">
              <input name="amount" type="text" required class="form-control form-control-lg form-control-a" placeholder="Enter Amount" >
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <input type="text" name="house_no" class="form-control form-control-lg form-control-a" placeholder="Enter House Number" required>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <input name="area" type="text" required class="form-control form-control-lg form-control-a" placeholder="Enter Size of the Apartment" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <input type="text" name="road_no" class="form-control form-control-lg form-control-a" placeholder="Enter Road Number" required>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="beds">Select number of Beds</label>
                    <select name="beds" class="form-control">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                    </select>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="baths">Select number of Baths</label>
                        <select name="baths" class="form-control">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                        </select>
                      </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="garage">Select number of garage</label>
                        <select name="garage" class="form-control">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                        </select>
                      </div>
                </div>
            </div>
            <div class="col-md-6">
                <fieldset>
                    <legend>Add if you have these</legend>
                    <input type="radio" name="balcony" value="1" /><label for="balcony">Balcony</label><br />
                    <input type="radio" name="parking" value="1"  /><label for="parking">Parking</label><br />
                    <input type="radio" name="deck" value="1" /><label for="deck">Deck</label><br />
                </fieldset>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    <label for="property_image" style="font-size: 2em;"><strong>Add property Image</strong>  </label><br>
                    <input type="file" name="property_image">
                  </div>
            </div>
        </div>

        <div class="col-md-12 text-center">
            <input type="submit" value="submit" class="btn btn-a" name="Add Property"/>
        </div>
    </form>
</div>

@endsection
