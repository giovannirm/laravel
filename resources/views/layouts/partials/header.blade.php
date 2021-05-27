<header>
    <nav>
      <ul>
        <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a>
          {{-- @dump(request()->routeIs('home')) --}}
        </li>
        <li><a href="{{route('products.index')}}" class="{{request()->routeIs('products.*') ? 'active' : ''}}">Products</a>
          {{-- <?php dump(request()->routeIs('products.index')) ?> --}}
        </li>
        <li><a href="{{route('we')}}" class="{{request()->routeIs('we') ? 'active' : ''}}">We</a>
          {{-- @dump(request()->routeIs('we')) --}}
        </li>
        <li>
          <a href="{{route('contact.index')}}" class="{{request()->routeIs('contact.index') ? 'active' : ''}}">Contáctanos</a>
        </li>
      </ul>
    </nav>
  </header>