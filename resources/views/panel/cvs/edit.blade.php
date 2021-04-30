@extends('panel.layouts.master')

@section('content')
    @include('panel.layouts.header')
    <div class="main-content font-size-13">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item is-active" href="#">رزومه ساز</a>
                <a class="tab__item" href="#">مشاهده رزومه</a>
            </div>
        </div>
        <div class="user-info bg-white font-size-13">
            <div class="box__title">درباره من</div>
            <div class="padding-30">
                <p>{{ $cv->employee->about_me }}</p>
            </div>
        </div>
    </div>
@endsection
