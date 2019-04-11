@extends('patient.layouts.dashboard.layout')

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Patient Dashboard</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
              <i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        You are logged in!
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        Footer
    </div>
    <!-- /.box-footer-->
</div>
@endsection
