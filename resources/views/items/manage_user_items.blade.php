@extends('layouts.master')
@section('title', 'Item List')
@section('content')

<div class="maincontainer">
    <div class="col-md-2 leftbar"> 
        @include('layouts.menu')
    </div>
    
    <div class="col-md-10 rightBar">
        
        <a href="/assignuseritem"><span class="glyphicon glyphicon-plus"></span> New User Item</a>
        <br><br>
        
        @include('partials.flash_notification')
        
        <table border="0" class="table table-hover"> 
        <tr>
            <th>User</th>
            <th>Item</th>
            <th>From Date</th>
            <th>To Date</th>
            <th>Option</th>
        </tr>
    @foreach ($user_item_list as $val)
    <tr>
        <td>{{ $val->first_name }} {{ $val->last_name }}</td>
        <td>{{ $val->title }}</td>
        <td>{{ $val->from_date }}</td>
        <td>{{ $val->to_date }}</td>
        <td>
            <a href="{{ URL::to('edituseritem/'.$val->id) }}"><span class="glyphicon glyphicon-edit"></span> Edit</a>
            <a href="{{ URL::to('deleteuseritem/'.$val->id) }}" onclick="return confirm('Are you sure you want to delete this user items?');"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a>
        </td>
    </tr>
    @endforeach
    </table>
    </div>
    
    <div style="clear: both;"></div>
</div>

@endsection

