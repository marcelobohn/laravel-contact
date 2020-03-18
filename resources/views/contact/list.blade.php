@extends('layouts.app')
   
@section('content')
  @auth
   <a href="{{ route('contacts.create') }}" class="btn btn-success mb-2">New contact</a><br>   
  @endauth
   <div class="row">
        <div class="col-12">
          
          <table class="table table-bordered" id="laravel_crud">
           <thead>
              <tr>
                 <th>Id</th>
                 <th>Name</th>
                 <th>Contact</th>
                 <th>Email</th>
                 @auth
                  <th colspan="3">Actions</th>
                 @endauth
              </tr>
           </thead>
           <tbody>
              @foreach($contacts as $contact)
              <tr>
                 <td>{{ $contact->id }}</td>
                 <td>{{ $contact->name }}</td>
                 <td>{{ $contact->contact }}</td>
                 <td>{{ $contact->email }}</td>
                 @auth
                  <td><a href="{{ route('contacts.edit',$contact->id)}}" class="btn btn-primary">Edit</a></td>
                  <td><a href="{{ route('contacts.show',$contact->id)}}" class="btn btn-primary">Show</a></td>
                  <td>
                  <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
                     {{ csrf_field() }}
                     @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                     </form>
                     </td>
                  @endauth
              </tr>
              @endforeach
           </tbody>
          </table>
          {!! $contacts->links() !!}
       </div> 
   </div>
 @endsection  