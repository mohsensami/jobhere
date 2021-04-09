@extends('panel.layouts.master')

@section('style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" /> --}}
@endsection

@section('content')
    @include('panel.layouts.header')
    <div class="main-content font-size-13">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item {{ Request::is('panel/ads') ? 'is-active' : '' }}" href="{{ route('ads.index') }}">همه آگهی ها</a>
                <a class="tab__item {{ Request::is('panel/ads/create') ? 'is-active' : '' }}" href="{{ route('ads.create') }}">+ آگهی جدید</a>
            </div>
        </div>
        <div class="bg-white table__box">
            


            <p class="box__title">ایجاد آگهی جدید</p>
            <div class="row no-gutters bg-white">
                <div class="col-12">
                    <form action="{{ route('ads.update', ['ad'=>$ad->id]) }}" method="POST" class="padding-30">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="title">عنوان موقعیت شغلی</label>
                            <input name="title" id="title" type="text" class="text" value="{{ $ad->title }}">
                        </div>
                        <div>
                            <label for="mode">نوع همکاری</label>
                            <select class="text" name="mode" id="mode">
                                <optgroup label="دستمزد">
                                    <option value="1">تمام وقت</option>
                                    <option value="2">پاره وقت</option>
                                    <option value="3">پروژه ای</option>
                                  </optgroup>
                              </select>
                        </div>
                        <div>
                            <label for="salary">میزان دستمزد</label>
                            <select class="text" name="salary" id="salary">
                                <optgroup label="دستمزد">
                                    <option value="1">تا ۱ میلیون تومان</option>
                                    <option value="2">تا ۲ میلیون تومان</option>
                                    <option value="3">تا ۳ میلیون تومان</option>
                                    <option value="4">تا ۴ میلیون تومان</option>
                                    <option value="5">تا ۶ میلیون تومان</option>
                                    <option value="6">تا ۸ میلیون تومان</option>
                                    <option value="7">تا ۱۲ میلیون تومان</option>
                                    <option value="8">بیش از ۱۲ میلیون تومان</option>
                                  </optgroup>
                              </select>
                        </div>
                          <div>
                              <label for="content">توضیح فرصت شغلی</label>
                              <textarea id="content" name="content" class="text">{{ $ad->content }}</textarea>
                          </div>
                        
                        <button class="btn btn-webamooz_net">ایجاد مقاله</button>
                    </form>
                </div>
            </div>



        </div>
    </div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script> --}}
{{--    <script src="/assets/js/summernote-rtl.js"></script>--}}
    <script>
        $(document).ready(function($) {
            $('#content').summernote({
                height: 250,
                tabsize: 2,
                // placeholder: 'شامل: مسئولیت‌ها، شرایط احراز و مزایای شغلی',
                toolbar: [
                    ['style', ['style']],
                    ['fontsize', ['fontsize']],
                    ['font', ['bold', 'underline']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    // ['insert',['ltr','rtl']],
                    ['view', ['fullscreen', 'codeview']]
                ],
            });
        });
    </script>
@endsection
