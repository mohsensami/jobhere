@extends('panel.layouts.master')

@section('content')
    @include('panel.layouts.header')
    <div class="main-content font-size-13">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item {{ Request::is('panel/ads') ? 'is-active' : '' }}" href="{{ route('ads.index') }}">همه آگهی ها</a>
                <a class="tab__item {{ Request::is('panel/ads/create') ? 'is-active' : '' }}" href="{{ route('ads.create') }}">+ آگهی جدید</a>
            </div>
        </div>
        <div class="d-flex flex-space-between item-center flex-wrap padding-30 border-radius-3 bg-white">
        </div>
        <div class="bg-white table__box">
            <table class="table">
                <thead role="rowgroup">
                <tr role="row" class="title-row">
                    <th>عنوان آگهی</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ads as $ad)
                    <tr role="row" class="">
                        <td>{{ $ad->title }}</td>
{{--                        <td>{{ $user->getRoleInFarsi() }}</td>--}}
{{--                        <td>{{ $user->getCreatedAtInJalali() }}</td>--}}
                        <td>
{{--                            @if(auth()->user()->id !== $user->id && $user->role !== 'admin')--}}
                                <a  href="{{ route('ads.destroy', $ad->id) }}" onclick="destroyPost(event, {{ $ad->id }})" class="item-delete mlg-15" title="حذف"></a>
{{--                            @endif--}}
                            <a href="{{ route('ads.edit', ['ad' => $ad->id]) }}" class="item-edit " title="ویرایش"></a>
                            <form action="{{ route('ads.destroy', ['ad' => $ad->id]) }}" method="post" id="destroy-user-{{ $ad->id }}">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $ads->appends(request()->query())->links() }}
        </div>
    </div>
@endsection


@section('script')
    <script>
        function destroyPost(event, id) {
            event.preventDefault();
            document.getElementById('destroy-user-' + id).submit();
        }
    </script>
@endsection