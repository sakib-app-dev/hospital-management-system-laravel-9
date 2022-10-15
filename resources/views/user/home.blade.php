@extends('user.master')
@section('content')
    

        @if (session()->has('msg'))
          <div class="alert alert-success">

              {{ session()->get('msg') }}

              <button type="button" class="close" data-dismiss="alert">
                  x
              </button>

          </div>
    
        @endif



  @include('user.top-banner')

  @include('user.doctors')
  @include('user.latestnews')

  @include('user.appointment')




@endsection


  


