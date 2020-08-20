@extends('layouts/main')
@extends('add')

@section('title','HCIS')

@section('container')

<div class="container">
    <div class="float-sm-right"><button class="btn btn-primary" data-toggle="modal"
            data-target=".bd-example-modal-lg"><i class="fa fa-plus-square"></i> Add</button></div>

    <table id="tblData" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Employee No</th>
                <th>Employee Name</th>
                <th>Gender</th>
                <th>Employment Status</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employee as $emp)
            <tr>

                <td>{{ $loop->iteration }}</td>
                <td>{{ $emp->emp_no }}</td>
                <td>{{ $emp->full_name }}</td>
                <td>{{ $emp->gender }}</td>
                <td>{{ $emp->employment_status }}</td>
                <td>{{ $emp->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@if(Session::has('errors'))
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
    $(document).ready(function(){
        $('#modalAdd').modal({show: true});
    });
</script>
@endif