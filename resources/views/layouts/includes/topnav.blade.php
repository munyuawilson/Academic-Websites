<nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info bg-light">
                        <i class="fas fa-align-left "></i>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto px-3">
                        
                        <li class="px-3">
                            <a href="#"> <i class="ficon far fa-bell" aria-hidden="true"></i></a>
                        </li>
                        <li class="px-3">
                            <a href="#"> <i class="ficon far fa-comments " aria-hidden="true"></i></a>
                        </li>
                        
                        <li class="px-3 dropdown">
  <a class=" btn  dropdown-toggle text-black" type="button" data-bs-toggle="dropdown" aria-expanded="false">
  <span class="text-black">{{ $user->name }}</span>
</a>
  <ul class="dropdown-menu">
  <li><a class="dropdown-item" href=""><i class="fas fa-user-edit"></i> Edit Profile</a></li>
 
  <li> <form action="{{ route('logout') }}" method="POST">
    @csrf
  <a class="dropdown-item" href="/logout"><i class="fas fa-sign-out-alt"></i> Log Out</a>
</form></li>
  </ul>
</li>
                       
                        </ul>
                    </div>
                </div>
            </nav>