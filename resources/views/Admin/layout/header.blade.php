
<nav class="navbar navbar-default" >
  <div class="container-fluid" >
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="padding-right: 500px; padding-left: 50px;">Account</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{asset('index')}}">Dashboard</a></li>
      <li><a href="{{asset('account')}}">Account</a></li>
      <li><a href="{{route('entry.index')}}">Entries</a></li>
      <li><a href="{{route('orderUser.index')}}">Order</a></li>
      <li><a href="{{route('bill.index')}}">Create Bill</a></li>

      <li><a href="#">Logout(Admin@gmail.com)</a></li>
    </ul>
  </div>
</nav>