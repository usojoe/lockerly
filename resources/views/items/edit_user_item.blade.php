@extends('layouts.master')
@section('title', 'User List')
@section('content')

<div class="maincontainer">
    <div class="col-md-2 leftbar">        
        @include('layouts.menu')
    </div>
    
    <div class="col-md-10 rightBar">
        <form class="form-horizontal" method="post" action="{{url('updateuseritem/'.$record->id)}}" enctype="multipart/form-data">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title">Edit Item</h3>
                </div>
                <div class="panel-body">
                    <table>
                   
                    <tr>
                    <td>User:</td>
                    <td>
                        <select name="user" style="width: 179px;">
                            <option value="">Select user</option>
                            @foreach ($users as $val)
                            <option value="{{ $val->id }}" {{ ($val->id == $record->user_id) ? "selected=''" : ''}} >{{ $val->first_name }} {{ $val->last_name }}</option>
                            @endforeach
                        </select>
                        
                        {!! $errors->first('user', '<span class="help-block text-danger">:message</span>') !!}
                    </td>
                    </tr>
                    
                    <tr>
                    <td>Item:</td>
                    <td>
                        <select name="item" style="width: 179px;">
                            <option value="">Select user</option>
                            @foreach ($items as $val)
                            <option value="{{ $val->id }}" {{ ($val->id == $record->item_id) ? "selected=''" : ''}} >{{ $val->title }}</option>
                            @endforeach
                        </select>
                        
                        {!! $errors->first('user', '<span class="help-block text-danger">:message</span>') !!}
                    </td>
                    </tr>
                    
                    <tr>
                    <td>From date: </td>
                    <td>
                        <input type="text" name="from_date" value="{{ (old('from_date') != '') ? old('from_date') : $record->from_date }}" >
                        {!! $errors->first('from_date', '<span class="help-block text-danger">:message</span>') !!} 
                    </td>
                    </tr>
                    
                    <tr>
                    <td>To date: </td>
                    <td>
                        <input type="text" name="to_date" value="{{ (old('to_date') != '') ? old('to_date') : $record->to_date }}" >
                        {!! $errors->first('to_date', '<span class="help-block text-danger">:message</span>') !!} 
                    </td>
                    </tr>

                   
                    <tr><td colspan="2">&nbsp;</td></tr>

                    <tr>
                    <td><input type="hidden" name="_token" value="{{ csrf_token() }}"></td> 
                    <td>
                        <input type="submit" name="add_item" value="Udate User Item" class="btn btn-default" />
                        <a href="{{ URL::to('/useritemlist') }}" class="btn btn-default">Back</a>
                    </td>
                    </tr>
                </table>
                </div>
            </div>            
        </form>
    </div>
    
    <div style="clear: both;"></div>
</div>

@endsection

