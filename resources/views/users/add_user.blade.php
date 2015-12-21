@extends('layouts.master')
@section('title', 'Add User')
@section('content')

<div class="maincontainer">
    <div class="col-md-2 leftbar">        
        @include('layouts.menu')
    </div>
    
    <div class="col-md-10 rightBar">
        <form class="form-horizontal" method="post" action="{{url('saveuser')}}" enctype="multipart/form-data">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Add User</h3>
                </div>
                <div class="panel-body">
                    <table>
                      <tr>
                      <td>First Name: </td>
                      <td>
                          <input type="text" name="first_name" value="{{ old('first_name') }}" >
                          {!! $errors->first('first_name', '<span class="help-block text-danger">:message</span>') !!} 
                      </td>
                      </tr>

                      <tr>
                      <td>Last Name: </td>
                      <td>
                          <input type="text" name="last_name" value="{{ old('last_name') }}" >
                          {!! $errors->first('last_name', '<span class="help-block text-danger">:message</span>') !!} 
                      </td>
                      </tr>

                      <tr>
                      <td>Email: </td>
                      <td>
                          <input type="text" name="email" value="{{ old('email') }}" >
                           {!! $errors->first('email', '<span class="help-block text-danger">:message</span>') !!} 
                      </td>
                      </tr>
                      
                      <tr>
                      <td>Password: </td>
                      <td>
                          <input type="text" name="password" value="{{ old('password') }}" >
                           {!! $errors->first('password', '<span class="help-block text-danger">:message</span>') !!} 
                      </td>
                      </tr>
                      
                      <tr>
                      <td>User type: </td>
                      <td>
                          <select name="user_type" style="width: 179px;">
                              <option value="">Select user type</option>
                              <option value="register">Register</option>
                              <option value="admin">Admin</option>
                          </select>
                          
                          {!! $errors->first('user_type', '<span class="help-block text-danger">:message</span>') !!}
                      </td>
                      </tr>
                      
                     
                      <tr><td colspan="2">&nbsp;</td></tr>

                      <tr>
                      <td><input type="hidden" name="_token" value="{{ csrf_token() }}"></td> 
                      <td>
                      <input type="submit" name="add_user" value="Add User" class="btn btn-default" />
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

