<!--START SIDEBAR -->
  <div class="col-md-3">
    <div class="card">
      <div class="card-header"><h4>Profile Picture</h4></div>
      <img src="/img/avatar/{{ Auth::user()->avatar }}" alt="profile_picture"style="border-radius:50%;width:250px; height:250px;">
    </div>
    <br>
      <div class="card">
          <div class="card-header"><h4>Account Navigation</h4></div>
        <a href="{!! route('home') !!}" class="btn btn-primary btn-block">Dashboard</a>
        <a href="{!! route('profile') !!}" class="btn btn-primary btn-block">Profile Settings</a>
        <a href="{!! route('changepassword') !!}" class="btn btn-primary btn-block">Change Password</a>
        <a href="{!! route('profileavatar') !!}" class="btn btn-primary btn-block">Profile picture</a>
        </div>
        </div>
