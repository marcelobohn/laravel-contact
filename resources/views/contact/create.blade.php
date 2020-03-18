@extends('layouts.app')
 
@section('content')
<h2 style="margin-top: 12px;" class="text-center">Add Contact</a></h2>
<br>
 
<form action="{{ route('contacts.store') }}" method="POST" name="add_contact">
{{ csrf_field() }}
 
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Name</strong>
            <input type="text" name="name" class="form-control" placeholder="Enter name">
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Contact</strong>
            <input type="text" name="contact" class="form-control" placeholder="Enter contact">
            <span class="text-danger">{{ $errors->first('contact') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Email</strong>
            <input type="text" name="email" class="form-control" placeholder="Enter email">
            <span class="text-danger">{{ $errors->first('email') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
 
</form>
@endsection