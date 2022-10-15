@extends('admin.master')
@section('content')
<div class="container-fluid page-body-wrapper">
    <div class="container" align="center" style="padding-top: 100px">
        
        
        @if (session()->has('msg'))
            <div class="alert alert-success">
                {{ session()->get('msg') }}
                <button type="button" class="close" data-dismiss="alert">
                    x
                </button>
            </div>
    
        @endif
        
        <form action="{{ url('upload_doctors_info') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding: 15px;">
                <label for="">Doctor's Name:</label>
                <input type="text" name="doctor_name" style="color: black" placeholder="Write The Doctor's Name..." required>
            </div>
            <div style="padding: 15px;">
                <label for="">Phone No:</label>
                <input type="number" name="phone" style="color: black" placeholder="Write The Doctor's Phone no..." required>
            </div>
            <div style="padding: 15px;">
                <label for="">Doctor's Speciality:</label>
                <select name="spaciality" id="" style="color: black; width:200px;" required>
                    <option value="">--select--</option>
                    <option value="skin">Skin</option>
                    <option value="heart">Heart</option>
                    <option value="eye">Eye</option>
                    <option value="nose">Nose</option>
                </select>
            </div>
            <div style="padding: 15px;">
                <label for="">Doctor's Room No..:</label>
                <input type="text" name="room" style="color: black" placeholder="Write The Doctor's Room No..." required>
            </div>
            <div style="padding: 15px;">
                <label for="">Doctor's Image:</label>
                <input type="file" name="img" >
            </div>
            <div style="padding: 15px;">
                <input type="submit" name="btn" class="btn btn-success">
            </div>
        </form>
    </div>
</div>
@endsection