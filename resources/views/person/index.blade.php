@extends('Layouts.helloapp')
@section('title', 'Person.index')
@section('menubar')
  @parent
  更新ページ
@endsection

@section('content')
  <table>
    <tr><th>Data</th></tr>
    @foreach ($items as $item)
      <tr>
        <td>{{$item->getData()}}</td>
      </tr>
    @endforeach
  </table>
@endsection
@section('footer')
copyright 2017 tuyano.
@endsection


