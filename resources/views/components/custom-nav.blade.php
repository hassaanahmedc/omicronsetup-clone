<header>
    <nav>
        {{-- heading --}}
        <div
            class="relative w-full text-center bg-lightMd-topBarBg dark:bg-darkMd-topBarBg">
            <h1 class="text-3xl font-bold text-black dark:text-white">OMICRON
                SETUP 1.0</h1>
            <div class="absolute top-0 right-0">
                <div id="lightModeToggle"
                    class="hidden cursor-pointer">
                    <x-sun />
                </div>
                <div id="darkModeToggle"
                    class="hidden cursor-pointer">
                    <x-full-moon />
                </div>
            </div>
            {{-- Nav Links --}}
            <ul
                class="w-full pl-14 flex gap-8 bg-lightMd-Nav_Bg dark:bg-darkMd-Nav_Bg">
                <li
                    class="text-lightMd-background dark:text-darkMd-background text-3xl font-bold hover:bg-lightMd-background hover:dark:bg-darkMd-background px-2 hover:text-lightMd-title_txt hover:dark:text-darkMd-Nav_Bg cursor-pointer">
                    <a href="{{ route('index') }}">HOME</a>
                </li>
                <li
                    class="text-lightMd-background dark:text-darkMd-background text-3xl font-bold hover:bg-lightMd-background hover:dark:bg-darkMd-background px-2 hover:text-lightMd-title_txt hover:dark:text-darkMd-Nav_Bg cursor-pointer">
                    <a href="{{ route('about-us') }}">ABOUT ME</a>
                </li>
                <li
                    class="text-lightMd-background dark:text-darkMd-background text-3xl font-bold hover:bg-lightMd-background hover:dark:bg-darkMd-background px-2 hover:text-lightMd-title_txt hover:dark:text-darkMd-Nav_Bg cursor-pointer">
                    <a href="{{ route('projects') }}">PROJECTS</a>
                </li>
                <li
                    class="text-lightMd-background dark:text-darkMd-background text-3xl font-bold hover:bg-lightMd-background hover:dark:bg-darkMd-background px-2 hover:text-lightMd-title_txt hover:dark:text-darkMd-Nav_Bg cursor-pointer">
                    <a href="{{ route('contact') }}">CONTACT</a>
                </li>
            </ul>
    </nav>
</header>
