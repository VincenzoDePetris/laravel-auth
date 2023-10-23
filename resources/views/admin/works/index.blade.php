@extends('layouts.app');

@section('content')
<div class="container mt-5">
  <table>
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($works as $work)
      <tr>
        <th scope="row">{{ $work->id }} </th>
        <td>{{ $work->title }} </td>
        <td>{{ $work->description }} </td>
        <td><a href="{{ route('admin.works.show', $work ) }}">Show Detail</a> </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
</div>
@endsection