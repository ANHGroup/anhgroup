  <header class="main_header">

    <div class="row">
      <img src="{{asset('assets/frontend/images/ANH_Group_logo_white.jpg')}}" style="width:60px; position:fixed; top:0; left:20px;height:50px;" class="" alt="ANH Group Logo">
      <div class="mobile-toggle"> <span></span> <span></span> <span></span></div>
      <div class="navbar">
         <div class="search-box">
        <form action="search.php" method="get">
            <input type="text" name="search" maxlength="60" placeholder="Search..." required>
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div class="search-box" id="search-responsive">
    <form action="search.php" method="get">
        <input type="text" name="search" maxlength="60" placeholder="Search..." required>
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>
    <nav>
        <ul class="main_menu" style="">
          <li><a href="{{ route('index') }}">Home</a></li>
          <li><a href="{{ route('about') }}">About</a></li>
                            
        </ul>
      </nav>
   
</div>
      
      
    </div>
    
  </header>

  