@extends('admin.master')
@section('content')
<div class="container-fluid" style="padding-top:70px">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" align="center">Doctors List</h4>
               
                
                <table class="table">
                    <thead>
                    <tr align="center">
                        <th>Doctor Name</th>
                        <th>Phone</th>
                        <th>Spaciality</th>
                        <th>Room</th>
                        <th>image</th>
                        <th>Action</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $doclist)
                        <tr align="center">
                            <td>{{ $doclist->name }}</td>
                            <td>{{ $doclist->phone }}</td>
                            <td>{{ $doclist->spaciality }}</td>
                            <td>{{ $doclist->room }}</td>
                            <td>
                                <img src="{{ asset('/doctorimage') }}/{{ $doclist->image }}" alt="" style="height: 100px; width:100px;border-radius:30%">
                            </td>
                            <td>
                                <a href="{{ url('/edit_doctor_info',$doclist->id) }}" class="btn btn-success" style="margin-bottom: 5px">Edit</a><br>
                                <a href="{{ url('/delete_doctor') }}/{{ $doclist->id }}" onclick="alert('Are You Sure..');" class="btn btn-danger">Delete</a>
                            </td>
                            
                        </tr>
                        @endforeach
                    
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>
@endsection