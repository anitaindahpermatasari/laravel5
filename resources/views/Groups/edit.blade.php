@extends('layouts.app')

@section('title', 'Edit Groups')
<!-- section key, value karena section ini bukan diambil dari file tetapi dari key-->

@section('content')

    <form action="/groups/{{ $groups['id'] }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control is-valid" id="name" name="name" aria-describedby="name" value="{{ old('name') ? old('name') : $groups['name'] }}" required>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="valid-feedback">
                Your Name Looks good!
            </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="description">Description</label>
            <input type="text" class="form-control is-invalid" id="description" name="description" aria-describedby="description" value="{{ old('description') ? old('description') : $groups['description'] }}" required>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div id="descriptionFeedback" class="invalid-feedback">
                Please provide a valid description.
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
