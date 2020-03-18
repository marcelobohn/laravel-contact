@extends('contact.layout')
   
@section('content')
  <a href="{{ route('contacts.create') }}" class="btn btn-success mb-2">New contact</a> 
  <br>
   <div class="row">
        <div class="col-12">
          
          <table class="table table-bordered" id="laravel_crud">
           <thead>
              <tr>
                 <th>Id</th>
                 <th>Name</th>
                 <th>Contact</th>
                 <th>Email</th>
                 <th colspan="2">Actions</th>
              </tr>
           </thead>
           <tbody>
              @foreach($contacts as $contact)
              <tr>
                 <td>{{ $contact->id }}</td>
                 <td>{{ $contact->name }}</td>
                 <td>{{ $contact->contact }}</td>
                 <td>{{ $contact->email }}</td>
                 <td><a href="{{ route('contacts.edit',$contact->id)}}" class="btn btn-primary">Edit</a></td>
                 <td>
                 <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
                  {{ csrf_field() }}
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                </td>
              </tr>
              @endforeach
           </tbody>
          </table>
          {!! $contacts->links() !!}
       </div> 
   </div>
 @endsection  