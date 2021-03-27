@extends('panel.layouts.panel')

@section('content')
@include('panel.layouts.header')
<div class="main-content">
    <div class="row no-gutters font-size-13 margin-bottom-10">
        <div class="col-3 padding-20 border-radius-3 bg-white margin-left-10 margin-bottom-10">
            <p> تعداد کاربران </p>
            <p>20 نفر</p>
        </div>
        <div class="col-3 padding-20 border-radius-3 bg-white margin-left-10 margin-bottom-10">
            <p>تعداد پست ها</p>
            <p>20 پست</p>
        </div>
        <div class="col-3 padding-20 border-radius-3 bg-white margin-left-10 margin-bottom-10">
            <p>تعداد نظرات</p>
            <p>300 نظر</p>
        </div>
        <div class="col-3 padding-20 border-radius-3 bg-white  margin-bottom-10">
            <p>تعداد دسته بندی ها</p>
            <p>300 نظر</p>
        </div>
    </div>

</div>
@endsection
