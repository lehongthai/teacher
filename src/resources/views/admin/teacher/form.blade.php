@extends('layouts.admin')
@section('title', __('lable.manager_teacher'))

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ __('lable.manager_teacher') }}
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-body">
          <form role="form" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="teacher_code">{{ __('label.teacher_code') }}</label>
                  <input type="text" class="form-control" id="teacher_code" placeholder="{{ __('label.placeholder_teacher_code') }}">
                </div>
                <div class="form-group">
                  <label for="teacher_name">{{ __('label.teacher_name') }}</label>
                  <input type="text" class="form-control" id="teacher_name" placeholder="{{ __('label.placeholder_teacher_name') }}">
                </div>
                <div class="form-group">
                  <label for="teacher_position">{{ __('label.teacher_position') }}</label>
                  <input type="text" class="form-control" id="teacher_position" placeholder="{{ __('label.placeholder_teacher_position') }}">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">{{ __('label.submit') }}</button>
              </div>
            </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->

@endsection

@section('style')
<link rel="stylesheet" href="/admin/plugins/datatables/dataTables.bootstrap.css">
@endsection

@section('script')
<script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $("#datatables-list").DataTable();
  });
</script>
@endsection