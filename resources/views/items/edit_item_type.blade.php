@extends('layouts.master')
@section('title', 'User List')
@section('content')

<div class="maincontainer">
    <div class="col-md-2 leftbar">        
        @include('layouts.menu')
    </div>
    
    <div class="col-md-10 rightBar">
        <form class="form-horizontal" method="post" action="{{url('updateitemtype/'.$item->id)}}" enctype="multipart/form-data">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title">Edit Item</h3>
                </div>
                <div class="panel-body">
                    <table>
                    <tr>
                    <td>Item Type Name: </td>
                    <td>
                        <input type="text" name="item_type_name" value="{{ (old('item_type_name') != '') ? old('item_type_name') : $item->item_type_name }}" >
                        {!! $errors->first('item_type_name', '<span class="help-block text-danger">:message</span>') !!} 
                    </td>
                    </tr>

                    <tr>
                    <td>Description: </td>
                    <td>
                        <textarea name="description">{{ (old('description') != '') ? old('description') : $item->description }}</textarea>
                        {!! $errors->first('description', '<span class="help-block text-danger">:message</span>') !!} 
                    </td>
                    </tr>

                   
                    <tr><td colspan="2">&nbsp;</td></tr>

                    <tr>
                    <td><input type="hidden" name="_token" value="{{ csrf_token() }}"></td> 
                    <td>
                        <input type="submit" name="add_item" value="Udate Item Type" class="btn btn-default" />
                        <a href="{{ URL::to('/itemlist') }}" class="btn btn-default">Back</a>
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

