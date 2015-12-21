@extends('layouts.master')
@section('title', 'Add User Item')
@section('content')

<div class="maincontainer">
    <div class="col-md-2 leftbar">        
        @include('layouts.menu')
    </div>
    
    <div class="col-md-10 rightBar">
        <form class="form-horizontal" method="post" action="{{url('/saveassignuseritem')}}" enctype="multipart/form-data">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Add User Item</h3>
                </div>
                <div class="panel-body">
                    <table>
                      <tr>
                      <td>User: </td>
                      <td>
                          <select name="user" style="width: 179px;">
                              <option value="">Select user</option>
                              @foreach ($users as $val)
                              <option value="{{ $val->id }}">{{ $val->first_name }} {{ $val->last_name }}</option>
                              @endforeach
                          </select>
                          
                          {!! $errors->first('user', '<span class="help-block text-danger">:message</span>') !!} 
                      </td>
                      </tr>
                      
                      <tr>
                      <td>Item: </td>
                      <td>
                          <select name="item" style="width: 179px;">
                              <option value="">Select item</option>
                              @foreach ($items as $val)
                              <option value="{{ $val->id }}">{{ $val->title }}</option>
                              @endforeach
                          </select>
                          
                          {!! $errors->first('item', '<span class="help-block text-danger">:message</span>') !!} 
                      </td>
                      </tr>
                        
                      <tr>
                      <td>Form date: </td>
                      <td>
                          <input type="text" value="" name="from_date" placeholder="Y-m-d" />                          
                            {!! $errors->first('from_date', '<span class="help-block text-danger">:message</span>') !!} 
                      </td>
                      </tr>

                      <tr>
                      <td>To date: </td>
                      <td>
                        <input type="text" value="" name="to_date" placeholder="Y-m-d" />       
                        
                          {!! $errors->first('to_date', '<span class="help-block text-danger">:message</span>') !!} 
                      </td>
                      </tr>
                     
                      <tr><td colspan="2">&nbsp;</td></tr>

                      <tr>
                      <td><input type="hidden" name="_token" value="{{ csrf_token() }}"></td> 
                      <td>
                      <input type="submit" name="add_user" value="Add Item" class="btn btn-default" />
                      <a href="{{ URL::to('useritemlist') }}" class="btn btn-default">Back</a>
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

    

