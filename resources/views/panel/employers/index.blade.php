@extends('panel.layouts.panel')

@section('content')
    @include('panel.layouts.header')
    <div class="main-content font-size-13">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item is-active" href="#">همه کاربران</a>
                <a class="tab__item" href="#">ایجاد کاربر جدید</a>
            </div>
        </div>
        <div class="d-flex flex-space-between item-center flex-wrap padding-30 border-radius-3 bg-white">
        </div>
        <div class="bg-white table__box">
            <table class="table">
                <thead role="rowgroup">
                <tr role="row" class="title-row">
                    <th>شناسه</th>
                    <th>نام و نام خانوادگی</th>
                    <th>ایمیل</th>
                    <th>موبایل</th>
                    <th>سطح کاربری</th>
                    <th>تاریخ عضویت</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employers as $employer)
                    <tr role="row" class="">
                        <td>{{ $employer->id }}</td>
                        <td>{{ $employer->company_name }}</td>
                        <td>{{ $employer->company_name }}</td>
                        <td>{{ $employer->company_name }}</td>
{{--                        <td>{{ $user->getRoleInFarsi() }}</td>--}}
{{--                        <td>{{ $user->getCreatedAtInJalali() }}</td>--}}
                        <td>
{{--                            @if(auth()->user()->id !== $user->id && $user->role !== 'admin')--}}
                                <a href="#" class="item-delete mlg-15" title="حذف"></a>
{{--                            @endif--}}
                            <a href="#" class="item-edit " title="ویرایش"></a>
                            <form action="#" method="post" id="destroy-user-{{ $employer->id }}">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{-- {{ $users->links() }} --}}
        </div>
    </div>
@endsection
