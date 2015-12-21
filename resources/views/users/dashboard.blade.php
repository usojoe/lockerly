@extends('layouts.master')
@section('title', 'Add User')
@section('content')

<div class="maincontainer">
    <div class="col-md-2 leftbar">        
        <div class="menu">
    <ul>       
        <li><a href="/logout">Log Out</a></li>
    </ul>
    <br>                    
</div>
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
                          {{$users->first_name}}
                      </td>
                      </tr>

                      <tr>
                      <td>Last Name: </td>
                      <td>
                          {{$users->first_name}}
                      </td>
                      </tr>

                      <tr>
                      <td>Email: </td>
                      <td>
                          {{$users->email}}
                      </td>
                      </tr>
                     
                                           
                      <tr>
                      <td>Item type: </td>
                      <td>
                          {{$users->title}}
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

