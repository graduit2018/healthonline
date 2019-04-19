@extends('admin.layouts.dashboard.layout')

@section('content')
    <Chat :user="{{auth()->user()}}"></Chat>
@endsection
