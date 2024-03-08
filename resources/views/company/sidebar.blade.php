<ul class="list-group list-group-flush">
    <li class="list-group-item {{ Request::is('company/dashboard') ? 'active' : '' }}">
        <a href="{{ route('company_dashboard') }}">Dashboard</a>
    </li>
     <li class="list-group-item {{ Request::is('company/make-payment') ? 'active' : '' }}">
        <a href="{{ route('company_make_payment') }}">Make Payment</a>
    </li>
    <li class="list-group-item {{ Request::is('company/orders') ? 'active' : '' }}">
        <a href="{{ route('company_orders') }}">Orders</a>
    </li>

    <li class="list-group-item">
        <a href="{{ route('company_logout') }}">Logout</a>
    </li>
</ul>
