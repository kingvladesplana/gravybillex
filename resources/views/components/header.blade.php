{{-- Mobile Menu hidden on LARGE (lg) --}}
<nav class="md:pr-10 md:pl-10 xl:hidden navBar p-5 bg-white w-full">
    <div class="flex justify-between w-full ">
        <a href="/"><span class="text-xl cursor-pointer" id="logo">Gravybill</span></a>

        <span class="text-3xl z-[2] xl:hidden block cursor-pointer">
            <ion-icon name="menu-outline" onclick="Menu(this)"></ion-icon>
        </span>

        <ul class="opacity-0 left-0 z-[1] z-auto static absolute bg-white w-full transition-all ease-in duration-500">
            <li class="mx-5 py-3 md:pl-5">
                <a href="/">Home</a>
            </li>
            <li class="mx-5 py-3 md:pl-5">
                <a href="#">About Us</a>
            </li>
            <li class="mx-5 py-3 md:pl-5">
                <a href="#">Contact Us</a>
            </li>
            <li class="mx-5 py-3 md:pl-5">
                <a href="#">How It Works</a>
            </li>
            <ul>
                <li class="mx-4 py-3 md:pl-5">
                    <a href="/login">
                        <button class="btn-primary mr-2">Login</button>
                    </a>
                </li>
                <li class="mx-4 py-3 md:pl-5">
                    <a href="/">
                        <button class="btn-secondary mr-2">Start a Fundraiser</button>
                    </a>
                </li>
            </ul>
        </ul>
    </div>
</nav>

<script>
    function Menu(e) {
        let list = document.querySelector('ul');

        e.name === 'menu-outline' ? (e.name = "close-outline", list.classList.add('top-[70px]'), list.classList.add(
            'opacity-100')) : (e.name = "menu-outline", list.classList.remove('top-[50px]'), list.classList
            .remove('opacity-100'))
    }
</script>



{{-- Desktop Menu hidden on SMALL-MEDIUM (sm,md) --}}

<nav class="navBar hidden xl:block p-2 bg-white">
    <div class="flex items-center justify-between w-full pl-20 pr-20 2xl:pl-60 2xl:pr-60">
        <ul class="bg-white flex items-center navLinks">
            <span class="text-xl cursor-pointer" id="logo">Gravybill</span>
            <li class="mx-3 py-3 md:pl-5">
                <a href="#">Home</a>
            </li>
            <li class="mx-3 py-3 md:pl-5">
                <a href="#">About Us</a>
            </li>
            <li class="mx-3 py-3 md:pl-5">
                <a href="#">Contact Us</a>
            </li>
            <li class="mx-3 py-3 md:pl-5">
                <a href="#">How It Works</a>
            </li>
        </ul>

        <ul class="flex">
            @auth
                <li>
                    <span class="font-bold uppercase">Welcome {{ auth()->user()->name }}</span>
                </li>
                <li class="mx-4 py-3">
                    <a href="/users/dashboard">
                        <button class="btn-primary mr-2">Go to Dashboard</button>
                    </a>
                </li>

                <form class="mx-4 py-3"method="POST" action="/logout">
                    @csrf
                    <button class="btn-secondary mr-2">Logout</button>
                </form>
            @else
                <li class="mx-4 py-3">
                    <a href="/login">
                        <button class="btn-primary mr-2">Login</button>
                    </a>
                </li>
                <li class="mx-4 py-3">
                    <a href="/">
                        <button class="btn-secondary mr-2">Start a Fundraiser</button>
                    </a>
                </li>
            @endauth
        </ul>
    </div>
</nav>
