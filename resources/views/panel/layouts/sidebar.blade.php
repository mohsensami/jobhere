<span class="bars d-none padding-0-18"></span>
<a class="header__logo  d-none" href="#"></a>
<div class="profile__info border cursor-pointer text-center">
    <div class="avatar__img"><img src="/assets/img/pro.jpg" class="avatar___img">
        <input type="file" accept="image/*" class="hidden avatar-img__input">
        <div class="v-dialog__container" style="display: block;"></div>
        <div class="box__camera default__avatar"></div>
    </div>
    <span class="profile__name">نام شرکت</span>
</div>

<ul>
    <li class="item-li i-dashboard is-active"><a href="{{ route('panel.dashboard') }}">پیشخوان</a></li>
    <li class="item-li i-dashboard is-active"><a href="{{ route('panel.employers') }}">کارفرماها</a></li>
    <li class="item-li i-user__inforamtion"><a href="{{ route('panel.profile') }}">اطلاعات کاربری</a></li>
</ul>
