<div class="mb-4 grid grid-cols-1 gap-6 xl:grid-cols-2">
    <div
        class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 overflow-hidden xl:col-span-2 border border-blue-gray-100 shadow-sm">
        <div
            class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none m-0 flex items-center justify-between p-6">
            <div>
                <h6
                    class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900 mb-1">
                   Info Cliente</h6>
            </div>
            <div x-data="{ open: false }" class="relative">
                <button @onClick ("open=!open") aria-expanded="false" aria-haspopup="menu" id=":rd2:"
                    class=" align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
                    type="button"><span
                        class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="currenColor" viewBox="0 0 24 24" stroke-width="3"
                            stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z">
                            </path>
                        </svg></span>
                </button>
                <div x-show="open" @click.away="open = false"
                    class="bg-white min-w-[180px] p-3 border border-blue-gray-50 rounded-md shadow-lg shadow-blue-gray-500/10 font-sans text-sm font-normal text-blue-gray-500 overflow-auto focus:outline-none z-[999]"
                    tabindex="0" id=":r4u:" role="menu" aria-labelledby=":r4v:" aria-orientation="vertical"
                    data-projection-id="12"
                    style="position: absolute; top: 757.1px; left: 811.525px; opacity: 1; transform-origin: center top; transform: scale(1);">
                    <button tabindex="-1" role="menuitem"
                        class="block w-full pt-[9px] pb-2 px-3 rounded-md text-start leading-tight cursor-pointer select-none transition-all hover:bg-blue-gray-50 hover:bg-opacity-80 focus:bg-blue-gray-50 focus:bg-opacity-80 active:bg-blue-gray-50 active:bg-opacity-80 hover:text-blue-gray-900 focus:text-blue-gray-900 active:text-blue-gray-900 outline-none">Action</button><button
                        tabindex="-1" role="menuitem"
                        class="block w-full pt-[9px] pb-2 px-3 rounded-md text-start leading-tight cursor-pointer select-none transition-all hover:bg-blue-gray-50 hover:bg-opacity-80 focus:bg-blue-gray-50 focus:bg-opacity-80 active:bg-blue-gray-50 active:bg-opacity-80 hover:text-blue-gray-900 focus:text-blue-gray-900 active:text-blue-gray-900 outline-none">Another
                        Action</button><button tabindex="-1" role="menuitem"
                        class="block w-full pt-[9px] pb-2 px-3 rounded-md text-start leading-tight cursor-pointer select-none transition-all hover:bg-blue-gray-50 hover:bg-opacity-80 focus:bg-blue-gray-50 focus:bg-opacity-80 active:bg-blue-gray-50 active:bg-opacity-80 hover:text-blue-gray-900 focus:text-blue-gray-900 active:text-blue-gray-900 outline-none">Something
                        else here</button>
                </div>
            </div>
        </div>

        {{-- riquadro --}}
        <div class="p-6 overflow-x-scroll px-0 pt-0 pb-2">
            @foreach ($clients as $client )


            <div
                class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md mx-3 -mt-16 mb-6 lg:mx-4 border border-blue-gray-100">
                <div class="p-4">
                    <div class="mb-10 flex items-center justify-between flex-wrap gap-6">
                        <div class="flex items-center gap-6 mt-11">
                            @php
                            $imageSrc = '/public/img/' . $client->imageLogo;
                            $clientImagePath = public_path($imageSrc);
                            $finalImageSrc = file_exists($clientImagePath)
                                ? $imageSrc
                                : '/public/img/default.jpg';

                            @endphp
                            <img
                             src="{{ Vite::asset($finalImageSrc) }}" alt="{{ $client->name }}"
                                class="inline-block relative object-cover object-center !rounded-full rounded-md w-[74px] h-[74px] shadow-lg shadow-blue-gray-500/40">
                            <div>
                                <h5
                                    class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900 mb-1">
                                    {{$client->name}}</h5>
                                <p
                                    class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                    {{$client->referente}}/{{$client->function}}</p>
                            </div>
                        </div>
                        <div class="w-96">
                            <div class="overflow-hidden block">
                                <nav>
                                    <ul role="tablist"
                                        class="flex relative bg-blue-gray-50 bg-opacity-60 rounded-lg p-1 flex-row">
                                        <li role="tab"
                                            class="flex items-center justify-center text-center w-full h-full relative bg-transparent py-1 px-2 text-blue-gray-900 antialiased font-sans text-base font-normal leading-relaxed select-none cursor-pointer"
                                            data-value="app">
                                            <div class="z-20 text-inherit"><svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                                                    class="-mt-1 mr-2 inline-block h-5 w-5">
                                                    <path
                                                        d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z">
                                                    </path>
                                                    <path
                                                        d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z">
                                                    </path>
                                                </svg>App</div>
                                            <div class="absolute inset-0 z-10 h-full bg-white rounded-md shadow"
                                                data-projection-id="14" style="opacity: 1;"></div>
                                        </li>
                                        <li role="tab"
                                            class="flex items-center justify-center text-center w-full h-full relative bg-transparent py-1 px-2 text-blue-gray-900 antialiased font-sans text-base font-normal leading-relaxed select-none cursor-pointer"
                                            data-value="message">
                                            <div class="z-20 text-inherit"><svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                                                    class="-mt-0.5 mr-2 inline-block h-5 w-5">
                                                    <path fill-rule="evenodd"
                                                        d="M12 2.25c-2.429 0-4.817.178-7.152.521C2.87 3.061 1.5 4.795 1.5 6.741v6.018c0 1.946 1.37 3.68 3.348 3.97.877.129 1.761.234 2.652.316V21a.75.75 0 001.28.53l4.184-4.183a.39.39 0 01.266-.112c2.006-.05 3.982-.22 5.922-.506 1.978-.29 3.348-2.023 3.348-3.97V6.741c0-1.947-1.37-3.68-3.348-3.97A49.145 49.145 0 0012 2.25zM8.25 8.625a1.125 1.125 0 100 2.25 1.125 1.125 0 000-2.25zm2.625 1.125a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm4.875-1.125a1.125 1.125 0 100 2.25 1.125 1.125 0 000-2.25z"
                                                        clip-rule="evenodd"></path>
                                                </svg>Message</div>
                                        </li>
                                        <li role="tab"
                                            class="flex items-center justify-center text-center w-full h-full relative bg-transparent py-1 px-2 text-blue-gray-900 antialiased font-sans text-base font-normal leading-relaxed select-none cursor-pointer"
                                            data-value="settings">
                                            <div class="z-20 text-inherit"><svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                                                    class="-mt-1 mr-2 inline-block h-5 w-5">
                                                    <path fill-rule="evenodd"
                                                        d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 00-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 00-2.282.819l-.922 1.597a1.875 1.875 0 00.432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 000 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 00-.432 2.385l.922 1.597a1.875 1.875 0 002.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 002.28-.819l.923-1.597a1.875 1.875 0 00-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 000-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 00-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 00-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 00-1.85-1.567h-1.843zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z"
                                                        clip-rule="evenodd"></path>
                                                </svg>Settings</div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="gird-cols-1 mb-12 grid gap-12 px-4 lg:grid-cols-2 xl:grid-cols-3">
                        <div>
                            <h6
                                class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900 mb-3">
                                Platform Settings</h6>
                            <div class="flex flex-col gap-12">
                                <div>
                                    <p
                                        class="antialiased font-sans mb-4 block text-xs font-semibold uppercase text-blue-gray-500">
                                        account</p>
                                    <div class="flex flex-col gap-6">
                                        <div class="inline-flex items-center">
                                            <div class="relative inline-block w-8 h-4 cursor-pointer rounded-full">
                                                <input id="Email me when someone follows me" type="checkbox"
                                                    class="peer appearance-none w-8 h-4 absolute bg-blue-gray-100 rounded-full cursor-pointer transition-colors duration-300 checked:bg-gray-900 peer-checked:border-gray-900 peer-checked:before:bg-gray-900"
                                                    checked=""><label for="Email me when someone follows me"
                                                    class="bg-white w-5 h-5 border border-blue-gray-100 rounded-full shadow-md absolute top-2/4 -left-1 -translate-y-2/4 peer-checked:translate-x-full transition-all duration-300 cursor-pointer before:content[''] before:block before:bg-blue-gray-500 before:w-10 before:h-10 before:rounded-full before:absolute before:top-2/4 before:left-2/4 before:-translate-y-2/4 before:-translate-x-2/4 before:transition-opacity before:opacity-0 hover:before:opacity-10 peer-checked:border-gray-900 peer-checked:before:bg-gray-900">
                                                    <div
                                                        class="inline-block top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 p-5 rounded-full">
                                                    </div>
                                                </label></div><label
                                                class="select-none cursor-pointer mt-px ml-3 mb-0 text-sm font-normal text-blue-gray-500"
                                                for="Email me when someone follows me">Email me when someone follows
                                                me</label>
                                        </div>
                                        <div class="inline-flex items-center">
                                            <div class="relative inline-block w-8 h-4 cursor-pointer rounded-full">
                                                <input id="Email me when someone answers on my post" type="checkbox"
                                                    class="peer appearance-none w-8 h-4 absolute bg-blue-gray-100 rounded-full cursor-pointer transition-colors duration-300 checked:bg-gray-900 peer-checked:border-gray-900 peer-checked:before:bg-gray-900"><label
                                                    for="Email me when someone answers on my post"
                                                    class="bg-white w-5 h-5 border border-blue-gray-100 rounded-full shadow-md absolute top-2/4 -left-1 -translate-y-2/4 peer-checked:translate-x-full transition-all duration-300 cursor-pointer before:content[''] before:block before:bg-blue-gray-500 before:w-10 before:h-10 before:rounded-full before:absolute before:top-2/4 before:left-2/4 before:-translate-y-2/4 before:-translate-x-2/4 before:transition-opacity before:opacity-0 hover:before:opacity-10 peer-checked:border-gray-900 peer-checked:before:bg-gray-900">
                                                    <div
                                                        class="inline-block top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 p-5 rounded-full">
                                                    </div>
                                                </label></div><label
                                                class="select-none cursor-pointer mt-px ml-3 mb-0 text-sm font-normal text-blue-gray-500"
                                                for="Email me when someone answers on my post">Email me when someone
                                                answers on my post</label>
                                        </div>
                                        <div class="inline-flex items-center">
                                            <div class="relative inline-block w-8 h-4 cursor-pointer rounded-full">
                                                <input id="Email me when someone mentions me" type="checkbox"
                                                    class="peer appearance-none w-8 h-4 absolute bg-blue-gray-100 rounded-full cursor-pointer transition-colors duration-300 checked:bg-gray-900 peer-checked:border-gray-900 peer-checked:before:bg-gray-900"
                                                    checked=""><label for="Email me when someone mentions me"
                                                    class="bg-white w-5 h-5 border border-blue-gray-100 rounded-full shadow-md absolute top-2/4 -left-1 -translate-y-2/4 peer-checked:translate-x-full transition-all duration-300 cursor-pointer before:content[''] before:block before:bg-blue-gray-500 before:w-10 before:h-10 before:rounded-full before:absolute before:top-2/4 before:left-2/4 before:-translate-y-2/4 before:-translate-x-2/4 before:transition-opacity before:opacity-0 hover:before:opacity-10 peer-checked:border-gray-900 peer-checked:before:bg-gray-900">
                                                    <div
                                                        class="inline-block top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 p-5 rounded-full">
                                                    </div>
                                                </label></div><label
                                                class="select-none cursor-pointer mt-px ml-3 mb-0 text-sm font-normal text-blue-gray-500"
                                                for="Email me when someone mentions me">Email me when someone mentions
                                                me</label>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p
                                        class="antialiased font-sans mb-4 block text-xs font-semibold uppercase text-blue-gray-500">
                                        application</p>
                                    <div class="flex flex-col gap-6">
                                        <div class="inline-flex items-center">
                                            <div class="relative inline-block w-8 h-4 cursor-pointer rounded-full">
                                                <input id="New launches and projects" type="checkbox"
                                                    class="peer appearance-none w-8 h-4 absolute bg-blue-gray-100 rounded-full cursor-pointer transition-colors duration-300 checked:bg-gray-900 peer-checked:border-gray-900 peer-checked:before:bg-gray-900"><label
                                                    for="New launches and projects"
                                                    class="bg-white w-5 h-5 border border-blue-gray-100 rounded-full shadow-md absolute top-2/4 -left-1 -translate-y-2/4 peer-checked:translate-x-full transition-all duration-300 cursor-pointer before:content[''] before:block before:bg-blue-gray-500 before:w-10 before:h-10 before:rounded-full before:absolute before:top-2/4 before:left-2/4 before:-translate-y-2/4 before:-translate-x-2/4 before:transition-opacity before:opacity-0 hover:before:opacity-10 peer-checked:border-gray-900 peer-checked:before:bg-gray-900">
                                                    <div
                                                        class="inline-block top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 p-5 rounded-full">
                                                    </div>
                                                </label></div><label
                                                class="select-none cursor-pointer mt-px ml-3 mb-0 text-sm font-normal text-blue-gray-500"
                                                for="New launches and projects">New launches and projects</label>
                                        </div>
                                        <div class="inline-flex items-center">
                                            <div class="relative inline-block w-8 h-4 cursor-pointer rounded-full">
                                                <input id="Monthly product updates" type="checkbox"
                                                    class="peer appearance-none w-8 h-4 absolute bg-blue-gray-100 rounded-full cursor-pointer transition-colors duration-300 checked:bg-gray-900 peer-checked:border-gray-900 peer-checked:before:bg-gray-900"
                                                    checked=""><label for="Monthly product updates"
                                                    class="bg-white w-5 h-5 border border-blue-gray-100 rounded-full shadow-md absolute top-2/4 -left-1 -translate-y-2/4 peer-checked:translate-x-full transition-all duration-300 cursor-pointer before:content[''] before:block before:bg-blue-gray-500 before:w-10 before:h-10 before:rounded-full before:absolute before:top-2/4 before:left-2/4 before:-translate-y-2/4 before:-translate-x-2/4 before:transition-opacity before:opacity-0 hover:before:opacity-10 peer-checked:border-gray-900 peer-checked:before:bg-gray-900">
                                                    <div
                                                        class="inline-block top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 p-5 rounded-full">
                                                    </div>
                                                </label></div><label
                                                class="select-none cursor-pointer mt-px ml-3 mb-0 text-sm font-normal text-blue-gray-500"
                                                for="Monthly product updates">Monthly product updates</label>
                                        </div>
                                        <div class="inline-flex items-center">
                                            <div class="relative inline-block w-8 h-4 cursor-pointer rounded-full">
                                                <input id="Subscribe to newsletter" type="checkbox"
                                                    class="peer appearance-none w-8 h-4 absolute bg-blue-gray-100 rounded-full cursor-pointer transition-colors duration-300 checked:bg-gray-900 peer-checked:border-gray-900 peer-checked:before:bg-gray-900"><label
                                                    for="Subscribe to newsletter"
                                                    class="bg-white w-5 h-5 border border-blue-gray-100 rounded-full shadow-md absolute top-2/4 -left-1 -translate-y-2/4 peer-checked:translate-x-full transition-all duration-300 cursor-pointer before:content[''] before:block before:bg-blue-gray-500 before:w-10 before:h-10 before:rounded-full before:absolute before:top-2/4 before:left-2/4 before:-translate-y-2/4 before:-translate-x-2/4 before:transition-opacity before:opacity-0 hover:before:opacity-10 peer-checked:border-gray-900 peer-checked:before:bg-gray-900">
                                                    <div
                                                        class="inline-block top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 p-5 rounded-full">
                                                    </div>
                                                </label></div><label
                                                class="select-none cursor-pointer mt-px ml-3 mb-0 text-sm font-normal text-blue-gray-500"
                                                for="Subscribe to newsletter">Subscribe to newsletter</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="relative flex flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-none">
                            <div
                                class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none mx-0 mt-0 mb-4 flex items-center justify-between gap-4">
                                <h6
                                    class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
                                    Profile Information</h6><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                                    class="h-4 w-4 cursor-pointer text-blue-gray-500">
                                    <path
                                        d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">
                                    </path>
                                </svg>
                            </div>
                            <div class="p-0">
                                <p
                                    class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-500">
                                   {{$client->description}}</p>
                                <hr class="my-8 border-blue-gray-50">
                                <ul class="flex flex-col gap-4 p-0">
                                    <li class="flex items-center gap-4">
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-semibold capitalize">
                                            referente aziendale:</p>
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-500">
                                            {{$client->referente}}</p>
                                    </li>
                                    <li class="flex items-center gap-4">
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-semibold capitalize">
                                            name:</p>
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-500">
                                            {{$client->name}}</p>
                                    </li>
                                    <li class="flex items-center gap-4">
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-semibold capitalize">
                                            mobile:</p>
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-500">
                                            {{$client->phone_number}}</p>
                                    </li>
                                    <li class="flex items-center gap-4">
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-semibold capitalize">
                                            email:</p>
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-500">
                                          {{$client->email}}</p>
                                    </li>
                                    <li class="flex items-center gap-4">
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-semibold capitalize">
                                            Partita IVA:</p>
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-500">
                                          {{$client->p_iva}}</p>
                                    </li>
                                    <li class="flex items-center gap-4">
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-semibold capitalize">
                                            location:</p>
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-500">
                                            {{$client->address}}, {{$client->city}}, {{$client->country}}</p>
                                    </li>
                                    <li class="flex items-center gap-4">
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-semibold capitalize">
                                            social:</p>
                                        <div class="flex items-center gap-4">
                                            <a href="#">{{$client->social_media}}</a>
                                        </div>
                                    </li>
                                    <li class="flex items-center gap-4">
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-semibold capitalize">
                                            sito web:</p>
                                        <div class="flex items-center gap-4">
                                            <a href="#">{{$client->website}}</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- platform settings --}}
                        <div>
                            <h6
                                class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900 mb-3">
                                Attività</h6>

                            <ul class="flex flex-col gap-6">
                            @foreach ($activities as $activity)
                                <div class="flex items-center justify-between gap-4">
                                    @if ($activity->semaforo === "verde")
                                        <div class="w-4 h-4 rounded-full bg-green-500 border-2 border-none">
                                    </div>
                                    @elseif ($activity->semaforo === "giallo")
                                    <div class="w-4 h-4 rounded-full bg-yellow-500 border-2 border-none">
                                    </div>
                                    @elseif ($activity->semaforo === "rosso")
                                    <div class="w-4 h-4 rounded-full bg-red-500 border-2 border-none">
                                    </div>
                                    @endif

                                    <div class="flex items-center gap-4">
                                        <div>
                                            <p
                                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 mb-1 font-semibold">
                                                {{Str::limit($activity->title,20)}}</p>
                                            <p
                                                class="block antialiased font-sans text-xs font-normal text-blue-gray-400">
                                                {{$activity->subject}}</p>
                                            <p
                                            class="block antialiased font-sans text-xs font-normal text-blue-gray-400">
                                            {{$activity->start_date}}</p>
                                         </div>
                                    </div><button
                                        class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20"
                                        type="button">View</button>
                                </div>
                                @endforeach
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
