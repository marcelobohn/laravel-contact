@extends('layouts.app')
 
@section('content')
<h2 style="margin-top: 12px;" class="text-center">Show Contact</a></h2>
<br>
 
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Name</strong>
            <span>{{ $contact_info->name }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Contact</strong>
            <span>{{ $contact_info->contact }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Email</strong>
            <span>{{ $contact_info->email }}</span>
        </div>
    </div>
    <div class="col-md-12">
      <a href="{{ route('contacts.edit',$contact_info->id)}}" class="btn btn-primary">Edit</a>
      <a href="{{ route('contacts.index')}}" class="btn btn-primary">Back</a>
    </div>
</div>
 
@endsection