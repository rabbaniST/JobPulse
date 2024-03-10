<ul class="list-group list-group-flush">
    <li class="list-group-item {{ Request::is('candidate/dashboard') ? 'active' : '' }}">
        <a href="{{ route('candidate_dashboard') }}">Dashboard</a>
    </li>
    <li class="list-group-item {{ Request::is('candidate/edit-profile') ? 'active' : '' }}">
        <a href="{{ route('candidate_edit_profile') }}">Edit Profile</a>
    </li>
    <li class="list-group-item {{ Request::is('candidate/edit-password') ? 'active' : '' }}">
        <a href="{{ route('candidate_edit_password') }}">Edit Password</a>
    </li>
    <li class="list-group-item">
        <a href="{{ route('candidate_logout') }}">Logout</a>
    </li>
</ul>
