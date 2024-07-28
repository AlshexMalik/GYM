 
 <!-- Start Header  -->
 <header>
    <div class="container">
        <div class="logo">
             <a href="{{ url('/') }}">Fitness <span>Club</span></a>
        </div>
        <a href="javascript:void(0)" class="ham-burger">
          <span></span>	
          <span></span>
        </a>
        <div class="nav">
            <ul>
                <?php if(Auth::user()) {if(Auth::user()->role === "user" or Auth::user()->role === "agent" ){
                ?><li>
                    @if(Auth::user()->role === "agent")
                    <a href="{{route('agent.profile')}}">Profile</a>
                    @endif
                    @if(Auth::user()->role === "user")
                    <a href="{{route('user.profile')}}">Profile</a>
                    @endif
                    
                    </li><?php
                }}?>
                <li><a href="{{ url('/') }}">Home</a></li>                 

                <li><a href="{{route('exercises')}}">EXERCISES</a></li>
                <?php if(Auth::user()) {if(Auth::user()->role === "admin"){
                    ?><li><a href="{{route('add.exercises')}}">ADD EXERCISES</a></li><?php
                }}?>

                    
                @if (Route::has('login'))
                    @auth
                       
                        @if(Auth::user()->role === "admin")       
                        <li><a href="{{ url('admin/Logout') }}" >LogOut</a></li>
                        @endif       
                        @if(Auth::user()->role === "agent")       
                        <li><a href="{{ url('agent/Logout') }}" >LogOut</a></li>
                        @endif       
                        @if(Auth::user()->role === "user")       
                        <li><a href="{{ url('user/Logout') }}" >LogOut</a></li>
                        @endif       
                    @else
                    <li><a href="{{ route('login') }}" >Log in</a></li>

                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                @endif
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</header>
<!-- End Header  -->