@extends('layouts.master')
@section('title', 'User List')
@section('content')

<div class="maincontainer">
    <div class="col-md-2 leftbar"> 
        @include('layouts.menu')
    </div>
    
    <div class="col-md-10 rightBar">
        
        @include('partials.flash_notification')
        
        <table border="0" class="table table-hover"> 
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>User Type</th>
            <th>Item</th>
            <th>Option</th>
        </tr>
    @foreach ($user_list as $val)
    <tr>
        <td>{{ $val->first_name }}</td>
        <td>{{ $val->last_name }}</td>
        <td>{{ $val->email }}</td>
        <td>{{ $val->user_type }}</td>
        <td>{{ $val->title }}</td>
        <td>
            <a href="{{ URL::to('edituser/'.$val->id) }}"><span class="glyphicon glyphicon-edit"></span> Edit</a>
            <a href="{{ URL::to('deleteuser/'.$val->id) }}" onclick="return confirm('Are you sure you want to delete this user?');"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a>
        </td>
    </tr>
    @endforeach
    </table>
    </div>
    
    <div style="clear: both;"></div>
</div>

@endsection

