@extends('user.master')
@section('content')
    
            <div  style="padding: 70px">
                <table align="center">
                    <tr>
                        <th class="tbl tbl_color">Doctor Name</th>
                        <th class="tbl tbl_color">Date</th>
                        <th class="tbl tbl_color">Message</th>
                        <th class="tbl tbl_color">Status</th>
                        <th class="tbl tbl_color">Cancel</th>
                    </tr>
                    @foreach ($appoint as $data)
                    <tr align="center">
                        <td class="tbl">{{$data->doctor  }}</td>
                        <td class="tbl">{{$data->date  }}</td>
                        <td class="tbl">{{$data->massage  }}</td>
                        <td class="tbl">{{$data->status  }}</td>
                        <td class="tbl"><a class="btn btn-danger" onclick="return confirm('Are You Sure to Cancel the Appointment')" href="{{ url('cancel_appoint',$data->id) }}"> Cancel</a></td>
                    </tr>   
                    @endforeach
                
                </table>
            </div>
            
        
@endsection





