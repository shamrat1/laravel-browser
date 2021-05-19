<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">{{ucwords($setting->site_name) ?? 'YOur Site'}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      @foreach($pages->where('priority','0') as $page)
        <li class="nav-item">
            <a class="nav-link" href="{{route('frontend.page',$page->slug)}}">{{ $page->title }}</a>
        </li>
      @endforeach
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Other Links
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach($pages->where('priority','1') as $page)
                <a class="dropdown-item" href="{{route('frontend.page',$page->slug)}}">{{ $page->title }}</a>
            @endforeach
        </div>
      </li>
    </ul>
  </div>
</nav>