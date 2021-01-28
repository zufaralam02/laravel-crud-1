<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{{request()->is('/') ? 'active' : ''}}"><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
    @if (Auth::user()->role == '0')
    <li class="{{request()->is('student') ? 'active' : ''}}"><a href="/student"><i class="fa fa-book"></i> <span>Student</span></a></li>
    @elseif (Auth::user()->role == '1')
    <li class="{{request()->is('teacher') ? 'active' : ''}}"><a href="/teacher"><i class="fa fa-book"></i> <span>Teacher</span></a></li>
    @elseif (Auth::user()->role == '2')
    <li class="{{request()->is('user') ? 'active' : ''}}"><a href="/user"><i class="fa fa-book"></i> <span>User</span></a></li>
    @endif
</ul>