@extends('layouts.app')
 
@section('content')
<h2 style="margin-top: 12px;" class="text-center">Edit Contact</a></h2>
<br>
 
<form action="{{ route('contacts.update', $contact_info->id) }}" method="POST" name="update_contact">
{{ csrf_field() }}
@method('PATCH')
 
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Name</strong>
            <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{ $contact_info->name }}">
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Contact</strong>
            <input type="text" name="contact" class="form-control" placeholder="Enter contact" value="{{ $contact_info->contact }}">
            <span class="text-danger">{{ $errors->first('contact') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Email</strong>
            <input type="text" name="email" class="form-control" placeholder="Enter email" value="{{ $contact_info->email }}">
            <span class="text-danger">{{ $errors->first('email') }}</span>
        </div>
    </div>

    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
 
</form>
@endsection