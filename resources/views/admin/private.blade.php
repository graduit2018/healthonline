@extends('admin.layouts.dashboard.layout')

 @section('content')
    <private-chat :user="{{auth()->user()}}"></private-chat>
 @endsection
