<div class="header d-flex item-center bg-white width-100 border-bottom padding-12-30">
    <div class="header__right d-flex flex-grow-1 item-center">
        <span class="bars"></span>
        <a class="header__logo" href="#"></a>
    </div>
    <div class="header__left d-flex flex-end item-center margin-top-2">
        <a onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{ route('logout') }}" class="logout" title="خروج"></a>
        <form style="display: none;" id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf

        </form>
    </div>
</div>
<div class="jobhere-breadcrumb">
    <ul>
        <li><a href="index.blade.php" title="پیشخوان">پیشخوان</a></li>
    </ul>
</div>
