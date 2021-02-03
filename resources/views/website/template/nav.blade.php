<nav class="nav-inner" id="menu">
    <ul>
        <li>
        <a href="{{url('/')}}" class="act-link">Home</a>
        </li>
        <li><a href="{{url('/services')}}">Services</a></li>
        <li>
            <a href="{{url('/portfolio')}}">Portfolio</a>
        </li>
        {{-- <li>
            <a href="{{url('/product')}}">Product</a>
        </li> --}}
      
           
        <li><a href="{{url('/about')}}">About</a></li>
        <li><a href="{{url('/contact')}}">Contact</a></li>
        <li><a href="{{route('blog')}}">Blog</a></li>
        
    </ul>
</nav>