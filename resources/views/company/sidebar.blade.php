<ul class="list-group list-group-flush">
    <li class="list-group-item {{ Request::is('company/dashboard') ? 'active' : '' }}">
        <a href="{{ route('company_dashboard') }}">Dashboard</a>
    </li>

    <li class="list-group-item">
        <a href="{{ route('company_logout') }}">Logout</a>
    </li>
</ul>
