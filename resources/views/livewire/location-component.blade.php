@if (Session::has('city'))
    <li style=""><a href="{{ route('home.change_location') }}"><i class="fa fa-map-marker"></i> {{ Session::get('city') }}, {{ Session::get('state') }}</a></li>
@else
    <li style=""><a href="{{ route('home.change_location') }}"><i class="fa fa-map-marker"></i> Rabat,Morocco</a></li>
@endif
