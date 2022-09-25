<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Users</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('tweets.index') }}"
       class="nav-link {{ Request::is('tweets*') ? 'active' : '' }}">
        <p>Tweets</p>
    </a>
</li>


