@extends('layouts.app')

@section('title', 'Edit Family')
<!-- section key, value karena section ini bukan diambil dari file tetapi dari key-->

@section('content')

    <form action="/familys/{{ $familys['id'] }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control is-valid" id="first_name" name="first_name" aria-describedby="first_name" value="{{ old('first_name') ? old('first_name') : $familys['first_name'] }}" required>
            @error('first_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div id="first_nameFeedback" class="valid-feedback">
                Your Name Looks good!
            </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control is-valid" id="last_name" name="last_name" aria-describedby="last_name" value="{{ old('last_name') ? old('last_name') : $familys['last_name'] }}" required>
            @error('last_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div id="last_nameFeedback" class="valid-feedback">
                Your Name Looks good!
            </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="number_phone">Number Phone</label>
            <input type="text" class="form-control is-invalid" id="number_phone" name="number_phone" aria-describedby="number_phone" value="{{ old('number_phone') ? old('number_phone') : $familys['number_phone'] }}" required>
            @error('number_phone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div id="number_phoneFeedback" class="invalid-feedback">
                Please provide a valid number.
            </div>
        </div>
            <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="address">Address</label>
            <input type="text" class="form-control is-invalid" id="address" name="address" aria-describedby="address" value="{{ old('address') ? old('address') : $familys['address'] }}" required>
            @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div id="addressFeedback" class="invalid-feedback">
                Please provide a valid address.
            </div>
        </div>
        </div>
            <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="email">Email</label>
            <input type="text" class="form-control is-invalid" id="email" name="email" aria-describedby="email" value="{{ old('email') ? old('email') : $familys['email'] }}" required>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div id="emailFeedback" class="invalid-feedback">
                Please provide a valid email address.
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
            <label class="form-check-label" for="invalidCheck3">
                Agree to terms and conditions
            </label>
            <div  id="invalidCheck3Feedback" class="invalid-feedback">
                You must agree before submitting.
            </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>

@endsection
<!-- end section hanya ditulis sekali aja di paling akhir -->
