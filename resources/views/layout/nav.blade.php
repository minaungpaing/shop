<div class="container-fluid">
    <div class="heading">
        <p><font color="#ff7315"><i class="fa fa-phone"></i> Call Us: </font>09-761728032</p>
        <ul>
            <li onclick="openNav()"><i class="fa fa-user"></i></li>
            <li>My Cart<i class="fa fa-shopping-cart"></i></li>
        </ul>        
    </div>
    <div class="clearfix"></div>
    <nav class="navbar navbar-expand-lg navbar-dark" >
        <a class="navbar-brand" href="#"><h4 style="letter-spacing:2px;">PARA<font color="#ff7315">D</font>ISE.c<font color="#ff7315">o</font>m</h4></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ Request::segment(1) === 'index' ? 'active' : null }}">
                <a class="nav-link "  href="{{ URL::to('/') }}">Home</a>
            </li>
            <li class="nav-item {{ Request::segment(1) === 'shop' ? 'active' : null }}">
                <a class="nav-link" href="{{ URL::to('/shop') }}">Shopping</a>
            </li>
            <li class="nav-item {{ Request::segment(1) === 'about' ? 'active' : null }}">
                <a class="nav-link " href="{{ URL::to('/about') }}">About</a>
            </li>            
            <li class="nav-item {{ Request::segment(1) === 'contact' ? 'active' : null }}">
                <a class="nav-link" href="{{ URL::to('/contact') }}">Contact</a>
            </li>
            </ul>
        </div>
    </nav>
</div>


<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div style="height:100px;"></div>
    <div class="container">
        <center style="color:#fff;"><h5>LOGIN HERE!</h5></center>
        <br>
        <div class="login">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <br>
                <button type="submit" class="btn btn-xs" id="mybtn1">SIGN IN</button>
            </form>
        </div>
       
    </div>
</div>