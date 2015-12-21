@extends('layouts.master')
@section('title', 'User List')
@section('content')
    <form class="form-horizontal" method="post" action="{{url('/login')}}" enctype="multipart/form-data">
        <table style="margin: 75px auto 0px;">
        
        <tr><td colspan="2">@include('partials.flash_notification')</td></tr> 
        
        <tr>
        <td>Email: </td>
        <td>
            <input type="text" name="email" value="" >
            {!! $errors->first('email', '<span class="help-block text-danger">:message</span>') !!} 
        </td>
        </tr>
        
        <tr>
            <td colspan="2">&nbsp;</td>
        </tr>

        <tr>
            <td>Password: &nbsp;</td>
        <td>
            <input type="text" name="password" value="" >
            {!! $errors->first('password', '<span class="help-block text-danger">:message</span>') !!} 
        </td>
        </tr>
        
        <tr>
            <td colspan="2">&nbsp;</td>
        </tr>


        <tr>
        <td><input type="hidden" name="_token" value="{{ csrf_token() }}"></td> 
        <td>
        <input type="submit" name="login" value="Login" class="btn btn-default" />        
        </td>
        </tr>
        </table>
    </form>
@endsection
