@extends('layouts.master')
@section('title', 'User List')
@section('content')

<div class="maincontainer">
    <div class="col-md-2 leftbar">        
        @include('layouts.menu')
    </div>
    
    <div class="col-md-10 rightBar">
        <form class="form-horizontal" method="post" action="{{url('updateuser/'.$user->id)}}" enctype="multipart/form-data">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title">Edit User</h3>
                </div>
                <div class="panel-body">
                    <table>
                    <tr>
                    <td>First Name: </td>
                    <td>
                        <input type="text" name="first_name" value="{{ (old('first_name') != '') ? old('first_name') : $user->first_name }}" >
                        {!! $errors->first('first_name', '<span class="help-block text-danger">:message</span>') !!} 
                    </td>
                    </tr>

                    <tr>
                    <td>Last Name: </td>
                    <td>
                        <input type="text" name="last_name" value="{{ (old('last_name') != '') ? old('last_name') : $user->last_name }}" >
                        {!! $errors->first('last_name', '<span class="help-block text-danger">:message</span>') !!} 
                    </td>
                    </tr>

                    <tr>
                    <td>Email: </td>
                    <td>
                        <input type="text" name="email" value="{{ (old('email') != '') ? old('email') : $user->email }}" >
                        {!! $errors->first('email', '<span class="help-block text-danger">:message</span>') !!} 
                    </td>
                    </tr>
                    
                    <tr>
                    <td>User type: </td>
                    <td>
                        <select name="user_type" style="width: 179px;">
                            <option value="">Select user type</option>
                            <option value="register" {{ ($user->user_type == 'register') ? "selected=''" : ''}}>Register</option>
                            <option value="admin" {{ ($user->user_type == 'admin') ? "selected=''" : ''}}>Admin</option>
                        </select>

                        {!! $errors->first('user_type', '<span class="help-block text-danger">:message</span>') !!}
                    </td>
                    </tr>
                    
                    <tr>
                    <td>Item type:</td>
                    <td>
                        <select name="item" style="width: 179px;">
                            <option value="">Select item</option>
                            @foreach ($item_list as $val)
                            <option value="{{ $val->id }}" {{ ($val->id == @$item_id) ? "selected=''" : ''}} >{{ $val->title }}</option>
                            @endforeach
                        </select>
                        
                        {!! $errors->first('item', '<span class="help-block text-danger">:message</span>') !!}
                    </td>
                    </tr>

                    <tr><td colspan="2">&nbsp;</td></tr>

                    <tr>
                    <td><input type="hidden" name="_token" value="{{ csrf_token() }}"></td> 
                    <td>
                        <input type="submit" name="add_user" value="Udate User" class="btn btn-default" />
                        <a href="{{ URL::to('userList') }}" class="btn btn-default">Back</a>
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

