<a class="float-end">
    <div class="dropdown">
        <button class="btn three-dot dropbtn" onclick="myFunction()"></button>
        <div id="myDropdown" class="dropdown-content">
            <a href="{{url('/settings/'.$optionVal)}}">
                <img src="{{asset('assets/img/ayaraDonBtn.svg')}}" width="20px" height="20px" style="margin-right: 27px;">
                Ayarlar
            </a>
            <a href="{{url('/settings/'.$optionVal)}}">
                <img src="{{asset('assets/img/sifirla.svg')}}" width="20px" height="20px" style="margin-right: 27px;">
                Sıfırla
            </a>
            <a href="{{url('/about/'.$optionVal)}}">
                <img src="{{asset('assets/img/hakkindayaDonBtn.svg')}}" width="20px" height="20px" style="margin-right: 27px;">
                Hakkında
            </a>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <img width="20" height="20" src="{{asset('assets/img/cikisBtn.svg')}}" alt="" style="margin-right: 27px;">
                Çıkış
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </div>
    </div>
</a>
