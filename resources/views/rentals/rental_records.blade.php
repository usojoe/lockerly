@extends('layouts.master')
@section('title', 'Rental Records')
@section('content')

<div class="maincontainer">
  <div class="col-md-2 leftbar">
    @include('layouts.menu')
  </div>

  <div class="col-md-10 rightBar">

    @include('partials.flash_notification')

    <table border="0" class="table table-hover">
      @foreach ($rental_list as $val)
      <tr>
        <td>{{ $val->renter }}</td>
        <td>{{ $val->owner }}</td>
        <td>{{ $val->rental term }}</td>
        <td>
          <a href="{{ URL::to('editrental/'.$val->id) }}"><span class="glyphicon glyphicon-edit"></span>Edit</a>
          <a href="{{ URL::to('deleterental/'.$val->id) }}" onclick="return confirm('Are you sure you want to delete this rental record?');"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a>
        </td>
      </tr>
      @endforeach
    </table>
  </div>

  <div style="clear: both;"></div>
</div>

@endsection
