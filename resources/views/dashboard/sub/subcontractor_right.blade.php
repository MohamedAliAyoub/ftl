<section class="right">
    <div class="profile-content">
        <header>
            <div class="img-section">
                <img src="dashboard/images/user.png" alt="">
                <p class="mt-2">
                    <img src="dashboard/images/edit.svg" alt=""> 
                    <a href="#">Edit</a>
                </p>
            </div>
            <div class="notif-section">
                <a href="#">
                    <img src="dashboard/images/notification.svg" alt="">
                </a>
            </div>
        </header>
        <article>
            <ul class="list-unstyled">
                <li>
                    <strong>
                        {{auth()->user()->name}}
                    </strong>
                </li>
                <li>
                    Subcontractor
                </li>
                <li class="mt-4">
                    E-mail:
                </li>
                <li>
                    {{auth()->user()->email}}
                    <img src="{{asset('dashboard/images/check-mark.svg') }}" alt="">
                </li>
                <li class="mt-2">
                    Phone:
                </li>
                <li>
                      {{auth()->user()->phone}}
                </li>
                <li class="mt-2">
                    Account Type:
                </li>
                <li>
                   SubConstuctor
                </li>
                <li class="mt-4">
                    <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                       </form>
                </li>
            </ul>
        </article>
    </div>
</section>