@extends('layouts.pages.master')

@section('content')
        <!-- Full Width Column -->
<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {!! $pageName !!}
                <small>{!! $pageDesc !!}</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{!! url('/') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">{!! $pageName !!}</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="callout callout-info">
                <h4>Tip!</h4>
                <p>Add the layout-top-nav class to the body tag to get this layout. This feature can also be used with a sidebar! So use this class if you want to remove the custom dropdown menus from the navbar and use regular links instead.</p>
            </div>
            <div class="callout callout-danger">
                <h4>Warning!</h4>
                <p>The construction of this layout differs from the normal one. In other words, the HTML markup of the navbar and the content will slightly differ than that of the normal layout.</p>
            </div>
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">{!!  Request::url() !!}</h3>
                </div>
                <div class="box-body">
                    The great content goes here
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </section><!-- /.content -->
    </div><!-- /.container -->
</div><!-- /.content-wrapper -->

@endsection