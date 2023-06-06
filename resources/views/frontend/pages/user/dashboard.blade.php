<h1>User Dashboard</h1>
<form class="m-0" method="POST" action="{{ url('logout') }}">
  @csrf
  <a class="btn btn-dark w-100" href="{{ url('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">
    <i class="fas fa-power-off mr-3"></i>Logout
  </a>
</form>
