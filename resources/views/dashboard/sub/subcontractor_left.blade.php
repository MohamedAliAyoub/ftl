<div class="left">
    <!-- Start The Sidebar Section -->
    <aside id="sidebar-wrapper">
        <ul class="sidebar-nav list-unstyled">
            <li class="user mt-2 mb-3">
                <img src="dashboard/images/user.png" alt=""> 
                <strong>{{auth()->user()->name}}</strong>
            </li>
            <li>
                <a href="{{route('index')}} "><img src="dashboard/images/home-icon.svg" alt=""> <span>Home</span></a>
            </li>
            <li>
                <a href="{{route('account')}}"><img src="dashboard/images/account.svg" alt=""> <span>Account</span></a>
            </li>
            <li>
                <a><img src="dashboard/images/send.svg" alt=""> <span>Messages</span></a>
            </li>
            <li>    
                <a   href=" {{route('sub.requests')}}"><img src="dashboard/images/req.svg" alt=""> <span>My Requests</span></a>

            </li>
            <li>    
                <a   href=" {{route('sub.compare')}}"><img src="dashboard/images/req.svg" alt=""> <span>Comparing</span></a>

            </li>
         
          
        </ul>
        <div class="upload-btn pr-4 pl-2">
            <a href=" {{route('sub.requests')}}"><button>
                <img src="dashboard/images/upload.svg" alt=""> UPLOAD SHIPPMENT
            </button></a>
        </div>
    </aside>
    <!-- End The Sidebar Section -->
</div>