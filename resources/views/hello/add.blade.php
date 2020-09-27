@extends('Layouts.helloapp')
@section('title', 'Add')
@section('menubar')
  @parent
  新規作成ページ
@endsection

@section('content')
  <table>
  <form action="/hello/add" method="post">
    {{  csrf_field()  }}
    <tr><th>name: </th><td><input type="text" name="name"></td></tr>
    <tr><th>mail: </th><td><input type="text" name="mail"></td></tr>
    <tr><th>age: </th><td><input type="text" name="age"></td></tr>
    <tr><th><td><input type="submit" value="send"></td></th></tr>
  </form>
  </table>
@endsection
@section('footer')
copyright 2017 tuyano.
@endsection
