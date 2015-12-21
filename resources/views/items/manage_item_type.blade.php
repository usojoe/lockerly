@extends('layouts.master')
@section('title', 'Item Type List')
@section('content')

<div class="maincontainer">
    <div class="col-md-2 leftbar"> 
        @include('layouts.menu')
    </div>
    
    <div class="col-md-10 rightBar">
        <a href="/additemtype"><span class="glyphicon glyphicon-plus"></span> New Item Type</a>
        <br><br>
        
        
        @include('partials.flash_notification')
        
        <table border="0" class="table table-hover"> 
        <tr>
            <th>Title</th>
            <th>Description</th>            
            <th>Option</th>
        </tr>
    @foreach ($item_list as $val)
    <tr>
        <td>{{ $val->item_type_name }}</td>
        <td>{{ $val->description }}</td>        
        <td>
            <a href="{{ URL::to('edititemtype/'.$val->id) }}"><span class="glyphicon glyphicon-edit"></span> Edit</a>
            <a href="{{ URL::to('deleteitemtype/'.$val->id) }}" onclick="return confirm('Are you sure you want to delete this items type?');"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a>
        </td>
    </tr>
    @endforeach
    </table>
    </div>
    
    <div style="clear: both;"></div>
</div>

@endsection

