<span class="bars d-none padding-0-18"></span>
<a class="header__logo  d-none" href="#"></a>
<div class="profile__info border cursor-pointer text-center">
    <div class="avatar__img"><img src="{{ auth()->user()->getProfileUrl() }}" class="avatar___img">
        <input type="file" accept="image/*" class="hidden avatar-img__input">
        <div class="v-dialog__container" style="display: block;"></div>
        <div class="box__camera default__avatar"></div>
    </div>
    <span class="profile__name">{{ auth()->user()->full_name }}</span>
</div>

<ul>
    <li class="item-li i-dashboard {{ Request::is('dashboard*') ? 'is-active' : '' }}"><a href="{{ route('panel.dashboard') }}">پیشخوان</a></li>
    <li class="item-li i-dashboard {{ Request::is('employers*') ? 'is-active' : '' }}"><a href="{{ route('panel.employers') }}">کارفرماها</a></li>
    <li class="item-li i-dashboard {{ Request::is('*ads*') ? 'is-active' : '' }}"><a href="{{ route('ads.index') }}">آگهی ها</a></li>
    <li class="item-li i-dashboard"><a href="{{ route('cvs.edit',['cv'=>Auth::user()->id]) }}">رزومه ساز</a></li>
    <li class="item-li i-user__inforamtion {{ Request::is('profile*') ? 'is-active' : '' }}"><a href="{{ route('panel.profile') }}">اطلاعات کاربری</a></li>
</ul>
