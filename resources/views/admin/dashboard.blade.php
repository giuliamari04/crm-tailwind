<x-app-layout>
                <div class="min-h-screen bg-blue-gray-50/50">

                    <div class="p-4 xl:ml-80">
                        {{-- top navbar --}}
                        <nav
                            class="block w-full max-w-full bg-transparent text-white shadow-none rounded-xl transition-all px-0 py-3">
                            <div class="flex flex-col-reverse justify-between gap-6 md:flex-row md:items-center">
                                <div class="capitalize">
                                    <nav aria-label="breadcrumb" class="w-max">
                                        <ol
                                            class="flex flex-wrap items-center w-full bg-opacity-60 rounded-md bg-transparent p-0 transition-all">
                                            <li
                                                class="flex items-center text-blue-gray-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-light-blue-500">
                                                <a href="#/dashboard">
                                                    <p
                                                        class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-50 transition-all hover:text-blue-500 hover:opacity-100">
                                                        dashboard</p>
                                                </a><span
                                                    class="text-blue-gray-500 text-sm antialiased font-sans font-normal leading-normal mx-2 pointer-events-none select-none">/</span>
                                            </li>
                                            <li
                                                class="flex items-center text-blue-gray-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-light-blue-500">
                                                <p
                                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                                    home</p>
                                            </li>
                                        </ol>
                                    </nav>
                                    <h6
                                        class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
                                        home</h6>
                                </div>
                                <div class="flex items-center">
                                    <div class="mr-auto md:mr-4 md:w-56">

                                    </div><button
                                        class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 grid xl:hidden"
                                        type="button"><span
                                            class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" aria-hidden="true" stroke-width="3"
                                                class="h-6 w-6 text-blue-gray-500">
                                                <path fill-rule="evenodd"
                                                    d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                                                    clip-rule="evenodd"></path>
                                            </svg></span></button><a href="#/auth/sign-in"><button
                                            class="align-middle select-none font-sans font-bold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 hidden items-center gap-1 px-4 xl:flex normal-case"
                                            type="button"><svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                                                class="h-5 w-5 text-blue-gray-500">
                                                <path fill-rule="evenodd"
                                                    d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>{{$user->name}}</button><button
                                            class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 grid xl:hidden"
                                            type="button"><span
                                                class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"><svg
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" aria-hidden="true"
                                                    class="h-5 w-5 text-blue-gray-500">
                                                    <path fill-rule="evenodd"
                                                        d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                                        clip-rule="evenodd"></path>
                                                </svg></span></button></a><button aria-expanded="false"
                                        aria-haspopup="menu" id=":r2:"
                                        class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
                                        type="button"><span
                                            class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" aria-hidden="true"
                                                class="h-5 w-5 text-blue-gray-500">
                                                <path fill-rule="evenodd"
                                                    d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg></span></button>
                                </div>
                            </div>
                        </nav>

                        {{-- container dettagli --}}
                        <div class="mt-12">
                            <div class="mb-12 grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-4">
                                {{-- prima card --}}
                                {{-- <div
                                    class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm">
                                    <div
                                        class="bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-gray-900/20 absolute grid h-12 w-12 place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="currentColor" aria-hidden="true" class="w-6 h-6 text-white">
                                            <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"></path>
                                            <path fill-rule="evenodd"
                                                d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z"
                                                clip-rule="evenodd"></path>
                                            <path
                                                d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z">
                                            </path>
                                        </svg></div>
                                    <div class="p-4 text-right">
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                            Today's Money</p>
                                        <h4
                                            class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                            $53k</h4>
                                    </div>
                                    <div class="border-t border-blue-gray-50 p-4">
                                        <p
                                            class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                            <strong class="text-green-500">+55%</strong>&nbsp;than last week</p>
                                    </div>
                                </div>
                                serve? mah, non credo
                                --}}
                                {{-- seconda card --}}
                                <div
                                    class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm">
                                    <div
                                        class="bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-gray-900/20 absolute grid h-12 w-12 place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="currentColor" aria-hidden="true" class="w-6 h-6 text-white">
                                            <path
                                                d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z">
                                            </path>
                                        </svg></div>
                                    <div class="p-4 text-right">
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                            Referente</p>
                                        <h4
                                            class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                            {{$user->name}}</h4>
                                    </div>

                                </div>
                                {{-- terza card --}}
                                <div
                                    class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm">
                                    <div
                                        class="bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-gray-900/20 absolute grid h-12 w-12 place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="currentColor" aria-hidden="true" class="w-6 h-6 text-white">
                                            <path
                                                d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                                            </path>
                                        </svg></div>
                                    <div class="p-4 text-right">
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                            Cliente</p>
                                        <h4
                                            class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                            {{$clientsCount}}</h4>
                                    </div>

                                </div>
                                {{-- quarta card --}}
                                <div
                                    class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm">
                                    <div
                                        class="bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-gray-900/20 absolute grid h-12 w-12 place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="currentColor" aria-hidden="true" class="w-6 h-6 text-white">
                                            <path
                                                d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z">
                                            </path>
                                        </svg></div>
                                    <div class="p-4 text-right">
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                            Attività in corso</p>
                                        <h4
                                            class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                            {{$activitiesCount}}</h4>
                                    </div>

                                </div>
                            </div>
                            {{-- tre grafici  --}}
                            <div class="mb-6 grid grid-cols-1 gap-y-12 gap-x-6 md:grid-cols-2 xl:grid-cols-3">
                                {{-- prima card grafico --}}
                                <div
                                    class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm">
                                    <div
                                        class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-white text-gray-700">
                                        <div type="bar" height="220" series="[object Object]"
                                            options="[object Object]" width="100%" style="min-height: 235px;">
                                            <div id="apexchartsmz3au7pa"
                                                class="apexcharts-canvas apexchartsmz3au7pa apexcharts-theme-light"
                                                style="width: 313px; height: 220px;"><svg id="SvgjsSvg4572"
                                                    width="313" height="220" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <foreignObject x="0" y="0" width="313" height="220">
                                                        <div class="apexcharts-legend"
                                                            xmlns="http://www.w3.org/1999/xhtml"
                                                            style="max-height: 110px;"></div>
                                                    </foreignObject>
                                                    <g id="SvgjsG4648" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(11.600000381469727, 0)">
                                                        <g id="SvgjsG4649" class="apexcharts-yaxis-texts-g"><text
                                                                id="SvgjsText4651" font-family="inherit" x="20"
                                                                y="36.5" text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="300" fill="#37474f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan4652">50</tspan>
                                                                <title>50</title>
                                                            </text><text id="SvgjsText4654" font-family="inherit"
                                                                x="20" y="65.84015981483459" text-anchor="end"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-weight="300" fill="#37474f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan4655">40</tspan>
                                                                <title>40</title>
                                                            </text><text id="SvgjsText4657" font-family="inherit"
                                                                x="20" y="95.18031962966919" text-anchor="end"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-weight="300" fill="#37474f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan4658">30</tspan>
                                                                <title>30</title>
                                                            </text><text id="SvgjsText4660" font-family="inherit"
                                                                x="20" y="124.52047944450378" text-anchor="end"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-weight="300" fill="#37474f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan4661">20</tspan>
                                                                <title>20</title>
                                                            </text><text id="SvgjsText4663" font-family="inherit"
                                                                x="20" y="153.86063925933837" text-anchor="end"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-weight="300" fill="#37474f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan4664">10</tspan>
                                                                <title>10</title>
                                                            </text><text id="SvgjsText4666" font-family="inherit"
                                                                x="20" y="183.20079907417298" text-anchor="end"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-weight="300" fill="#37474f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan4667">0</tspan>
                                                                <title>0</title>
                                                            </text></g>
                                                    </g>
                                                    <g id="SvgjsG4574" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(41.60000038146973, 35)">
                                                        <defs id="SvgjsDefs4573">
                                                            <linearGradient id="SvgjsLinearGradient4577"
                                                                x1="0" y1="0" x2="0"
                                                                y2="1">
                                                                <stop id="SvgjsStop4578" stop-opacity="0.4"
                                                                    stop-color="rgba(216,227,240,0.4)" offset="0">
                                                                </stop>
                                                                <stop id="SvgjsStop4579" stop-opacity="0.5"
                                                                    stop-color="rgba(190,209,230,0.5)" offset="1">
                                                                </stop>
                                                                <stop id="SvgjsStop4580" stop-opacity="0.5"
                                                                    stop-color="rgba(190,209,230,0.5)" offset="1">
                                                                </stop>
                                                            </linearGradient>
                                                            <clipPath id="gridRectMaskmz3au7pa">
                                                                <rect id="SvgjsRect4582" width="255.39999961853027"
                                                                    height="150.70079907417298" x="-2" y="-2"
                                                                    rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskmz3au7pa"></clipPath>
                                                            <clipPath id="nonForecastMaskmz3au7pa"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskmz3au7pa">
                                                                <rect id="SvgjsRect4583" width="255.39999961853027"
                                                                    height="150.70079907417298" x="-2" y="-2"
                                                                    rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <rect id="SvgjsRect4581" width="5.7462857055664065"
                                                            height="146.70079907417298" x="0" y="0" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke-dasharray="3" fill="url(#SvgjsLinearGradient4577)"
                                                            class="apexcharts-xcrosshairs" y2="146.70079907417298"
                                                            filter="none" fill-opacity="0.9"></rect>
                                                        <g id="SvgjsG4603" class="apexcharts-grid">
                                                            <g id="SvgjsG4604"
                                                                class="apexcharts-gridlines-horizontal">
                                                                <line id="SvgjsLine4616" x1="0"
                                                                    y1="29.340159814834596" x2="251.39999961853027"
                                                                    y2="29.340159814834596" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4617" x1="0"
                                                                    y1="58.68031962966919" x2="251.39999961853027"
                                                                    y2="58.68031962966919" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4618" x1="0"
                                                                    y1="88.02047944450379" x2="251.39999961853027"
                                                                    y2="88.02047944450379" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4619" x1="0"
                                                                    y1="117.36063925933838" x2="251.39999961853027"
                                                                    y2="117.36063925933838" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG4605" class="apexcharts-gridlines-vertical">
                                                                <line id="SvgjsLine4607" x1="0"
                                                                    y1="0" x2="0"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4608" x1="35.91428565979004"
                                                                    y1="0" x2="35.91428565979004"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4609" x1="71.82857131958008"
                                                                    y1="0" x2="71.82857131958008"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4610" x1="107.74285697937012"
                                                                    y1="0" x2="107.74285697937012"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4611" x1="143.65714263916016"
                                                                    y1="0" x2="143.65714263916016"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4612" x1="179.5714282989502"
                                                                    y1="0" x2="179.5714282989502"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4613" x1="215.48571395874023"
                                                                    y1="0" x2="215.48571395874023"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4614" x1="251.39999961853027"
                                                                    y1="0" x2="251.39999961853027"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <line id="SvgjsLine4622" x1="0"
                                                                y1="146.70079907417298" x2="251.39999961853027"
                                                                y2="146.70079907417298" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine4621" x1="0" y1="1"
                                                                x2="0" y2="146.70079907417298"
                                                                stroke="transparent" stroke-dasharray="0"
                                                                stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG4606" class="apexcharts-grid-borders">
                                                            <line id="SvgjsLine4615" x1="0" y1="0"
                                                                x2="251.39999961853027" y2="0"
                                                                stroke="#dddddd" stroke-dasharray="5"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine4620" x1="0"
                                                                y1="146.70079907417298" x2="251.39999961853027"
                                                                y2="146.70079907417298" stroke="#dddddd"
                                                                stroke-dasharray="5" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG4584"
                                                            class="apexcharts-bar-series apexcharts-plot-series">
                                                            <g id="SvgjsG4585" class="apexcharts-series"
                                                                rel="1" seriesName="Views" data:realIndex="0">
                                                                <path id="SvgjsPath4590"
                                                                    d="M 15.083999977111816 141.70179907417298 L 15.083999977111816 5.001 C 15.083999977111816 2.5010000000000003 17.583999977111816 0.001 20.083999977111816 0.001 L 20.083999977111816 0.001 C 20.45714282989502 0.001 20.830285682678223 2.501 20.830285682678223 5.001 L 20.830285682678223 141.70179907417298 C 20.830285682678223 144.20179907417298 18.330285682678223 146.70179907417298 15.830285682678223 146.70179907417298 L 15.830285682678223 146.70179907417298 C 15.45714282989502 146.70179907417298 15.083999977111816 144.20179907417298 15.083999977111816 141.70179907417298 Z "
                                                                    fill="rgba(56,142,60,0.8)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="round"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMaskmz3au7pa)"
                                                                    pathTo="M 15.083999977111816 141.70179907417298 L 15.083999977111816 5.001 C 15.083999977111816 2.5010000000000003 17.583999977111816 0.001 20.083999977111816 0.001 L 20.083999977111816 0.001 C 20.45714282989502 0.001 20.830285682678223 2.501 20.830285682678223 5.001 L 20.830285682678223 141.70179907417298 C 20.830285682678223 144.20179907417298 18.330285682678223 146.70179907417298 15.830285682678223 146.70179907417298 L 15.830285682678223 146.70179907417298 C 15.45714282989502 146.70179907417298 15.083999977111816 144.20179907417298 15.083999977111816 141.70179907417298 Z "
                                                                    pathFrom="M 15.083999977111816 146.70179907417298 L 15.083999977111816 146.70179907417298 L 20.830285682678223 146.70179907417298 L 20.830285682678223 146.70179907417298 L 20.830285682678223 146.70179907417298 L 20.830285682678223 146.70179907417298 L 20.830285682678223 146.70179907417298 L 15.083999977111816 146.70179907417298 Z"
                                                                    cy="0" cx="50.998285636901855" j="0"
                                                                    val="50" barHeight="146.70079907417298"
                                                                    barWidth="5.7462857055664065"></path>
                                                                <path id="SvgjsPath4592"
                                                                    d="M 50.998285636901855 141.70179907417298 L 50.998285636901855 93.0214794445038 C 50.998285636901855 90.5214794445038 53.498285636901855 88.0214794445038 55.998285636901855 88.0214794445038 L 55.998285636901855 88.0214794445038 C 56.37142848968506 88.0214794445038 56.74457134246826 90.5214794445038 56.74457134246826 93.0214794445038 L 56.74457134246826 141.70179907417298 C 56.74457134246826 144.20179907417298 54.24457134246826 146.70179907417298 51.74457134246826 146.70179907417298 L 51.74457134246826 146.70179907417298 C 51.37142848968506 146.70179907417298 50.998285636901855 144.20179907417298 50.998285636901855 141.70179907417298 Z "
                                                                    fill="rgba(56,142,60,0.8)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="round"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMaskmz3au7pa)"
                                                                    pathTo="M 50.998285636901855 141.70179907417298 L 50.998285636901855 93.0214794445038 C 50.998285636901855 90.5214794445038 53.498285636901855 88.0214794445038 55.998285636901855 88.0214794445038 L 55.998285636901855 88.0214794445038 C 56.37142848968506 88.0214794445038 56.74457134246826 90.5214794445038 56.74457134246826 93.0214794445038 L 56.74457134246826 141.70179907417298 C 56.74457134246826 144.20179907417298 54.24457134246826 146.70179907417298 51.74457134246826 146.70179907417298 L 51.74457134246826 146.70179907417298 C 51.37142848968506 146.70179907417298 50.998285636901855 144.20179907417298 50.998285636901855 141.70179907417298 Z "
                                                                    pathFrom="M 50.998285636901855 146.70179907417298 L 50.998285636901855 146.70179907417298 L 56.74457134246826 146.70179907417298 L 56.74457134246826 146.70179907417298 L 56.74457134246826 146.70179907417298 L 56.74457134246826 146.70179907417298 L 56.74457134246826 146.70179907417298 L 50.998285636901855 146.70179907417298 Z"
                                                                    cy="88.02047944450379" cx="86.9125712966919" j="1"
                                                                    val="20" barHeight="58.68031962966919"
                                                                    barWidth="5.7462857055664065"></path>
                                                                <path id="SvgjsPath4594"
                                                                    d="M 86.9125712966919 141.70179907417298 L 86.9125712966919 122.36163925933839 C 86.9125712966919 119.86163925933839 89.4125712966919 117.36163925933839 91.9125712966919 117.36163925933839 L 91.9125712966919 117.36163925933839 C 92.2857141494751 117.36163925933839 92.6588570022583 119.86163925933839 92.6588570022583 122.36163925933839 L 92.6588570022583 141.70179907417298 C 92.6588570022583 144.20179907417298 90.1588570022583 146.70179907417298 87.6588570022583 146.70179907417298 L 87.6588570022583 146.70179907417298 C 87.2857141494751 146.70179907417298 86.9125712966919 144.20179907417298 86.9125712966919 141.70179907417298 Z "
                                                                    fill="rgba(56,142,60,0.8)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="round"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMaskmz3au7pa)"
                                                                    pathTo="M 86.9125712966919 141.70179907417298 L 86.9125712966919 122.36163925933839 C 86.9125712966919 119.86163925933839 89.4125712966919 117.36163925933839 91.9125712966919 117.36163925933839 L 91.9125712966919 117.36163925933839 C 92.2857141494751 117.36163925933839 92.6588570022583 119.86163925933839 92.6588570022583 122.36163925933839 L 92.6588570022583 141.70179907417298 C 92.6588570022583 144.20179907417298 90.1588570022583 146.70179907417298 87.6588570022583 146.70179907417298 L 87.6588570022583 146.70179907417298 C 87.2857141494751 146.70179907417298 86.9125712966919 144.20179907417298 86.9125712966919 141.70179907417298 Z "
                                                                    pathFrom="M 86.9125712966919 146.70179907417298 L 86.9125712966919 146.70179907417298 L 92.6588570022583 146.70179907417298 L 92.6588570022583 146.70179907417298 L 92.6588570022583 146.70179907417298 L 92.6588570022583 146.70179907417298 L 92.6588570022583 146.70179907417298 L 86.9125712966919 146.70179907417298 Z"
                                                                    cy="117.36063925933838" cx="122.82685695648193"
                                                                    j="2" val="10"
                                                                    barHeight="29.340159814834596"
                                                                    barWidth="5.7462857055664065"></path>
                                                                <path id="SvgjsPath4596"
                                                                    d="M 122.82685695648193 141.70179907417298 L 122.82685695648193 87.15344748153687 C 122.82685695648193 84.65344748153687 125.32685695648193 82.15344748153687 127.82685695648193 82.15344748153687 L 127.82685695648193 82.15344748153687 C 128.19999980926514 82.15344748153687 128.57314266204833 84.65344748153687 128.57314266204833 87.15344748153687 L 128.57314266204833 141.70179907417298 C 128.57314266204833 144.20179907417298 126.07314266204833 146.70179907417298 123.57314266204833 146.70179907417298 L 123.57314266204833 146.70179907417298 C 123.19999980926514 146.70179907417298 122.82685695648193 144.20179907417298 122.82685695648193 141.70179907417298 Z "
                                                                    fill="rgba(56,142,60,0.8)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="round"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMaskmz3au7pa)"
                                                                    pathTo="M 122.82685695648193 141.70179907417298 L 122.82685695648193 87.15344748153687 C 122.82685695648193 84.65344748153687 125.32685695648193 82.15344748153687 127.82685695648193 82.15344748153687 L 127.82685695648193 82.15344748153687 C 128.19999980926514 82.15344748153687 128.57314266204833 84.65344748153687 128.57314266204833 87.15344748153687 L 128.57314266204833 141.70179907417298 C 128.57314266204833 144.20179907417298 126.07314266204833 146.70179907417298 123.57314266204833 146.70179907417298 L 123.57314266204833 146.70179907417298 C 123.19999980926514 146.70179907417298 122.82685695648193 144.20179907417298 122.82685695648193 141.70179907417298 Z "
                                                                    pathFrom="M 122.82685695648193 146.70179907417298 L 122.82685695648193 146.70179907417298 L 128.57314266204833 146.70179907417298 L 128.57314266204833 146.70179907417298 L 128.57314266204833 146.70179907417298 L 128.57314266204833 146.70179907417298 L 128.57314266204833 146.70179907417298 L 122.82685695648193 146.70179907417298 Z"
                                                                    cy="82.15244748153687" cx="158.741142616272" j="3"
                                                                    val="22" barHeight="64.54835159263611"
                                                                    barWidth="5.7462857055664065"></path>
                                                                <path id="SvgjsPath4598"
                                                                    d="M 158.741142616272 141.70179907417298 L 158.741142616272 5.001 C 158.741142616272 2.5010000000000003 161.241142616272 0.001 163.741142616272 0.001 L 163.741142616272 0.001 C 164.11428546905518 0.001 164.4874283218384 2.501 164.4874283218384 5.001 L 164.4874283218384 141.70179907417298 C 164.4874283218384 144.20179907417298 161.9874283218384 146.70179907417298 159.4874283218384 146.70179907417298 L 159.4874283218384 146.70179907417298 C 159.11428546905518 146.70179907417298 158.741142616272 144.20179907417298 158.741142616272 141.70179907417298 Z "
                                                                    fill="rgba(56,142,60,0.8)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="round"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMaskmz3au7pa)"
                                                                    pathTo="M 158.741142616272 141.70179907417298 L 158.741142616272 5.001 C 158.741142616272 2.5010000000000003 161.241142616272 0.001 163.741142616272 0.001 L 163.741142616272 0.001 C 164.11428546905518 0.001 164.4874283218384 2.501 164.4874283218384 5.001 L 164.4874283218384 141.70179907417298 C 164.4874283218384 144.20179907417298 161.9874283218384 146.70179907417298 159.4874283218384 146.70179907417298 L 159.4874283218384 146.70179907417298 C 159.11428546905518 146.70179907417298 158.741142616272 144.20179907417298 158.741142616272 141.70179907417298 Z "
                                                                    pathFrom="M 158.741142616272 146.70179907417298 L 158.741142616272 146.70179907417298 L 164.4874283218384 146.70179907417298 L 164.4874283218384 146.70179907417298 L 164.4874283218384 146.70179907417298 L 164.4874283218384 146.70179907417298 L 164.4874283218384 146.70179907417298 L 158.741142616272 146.70179907417298 Z"
                                                                    cy="0" cx="194.65542827606203" j="4"
                                                                    val="50" barHeight="146.70079907417298"
                                                                    barWidth="5.7462857055664065"></path>
                                                                <path id="SvgjsPath4600"
                                                                    d="M 194.65542827606203 141.70179907417298 L 194.65542827606203 122.36163925933839 C 194.65542827606203 119.86163925933839 197.15542827606203 117.36163925933839 199.65542827606203 117.36163925933839 L 199.65542827606203 117.36163925933839 C 200.02857112884521 117.36163925933839 200.40171398162843 119.86163925933839 200.40171398162843 122.36163925933839 L 200.40171398162843 141.70179907417298 C 200.40171398162843 144.20179907417298 197.90171398162843 146.70179907417298 195.40171398162843 146.70179907417298 L 195.40171398162843 146.70179907417298 C 195.02857112884521 146.70179907417298 194.65542827606203 144.20179907417298 194.65542827606203 141.70179907417298 Z "
                                                                    fill="rgba(56,142,60,0.8)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="round"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMaskmz3au7pa)"
                                                                    pathTo="M 194.65542827606203 141.70179907417298 L 194.65542827606203 122.36163925933839 C 194.65542827606203 119.86163925933839 197.15542827606203 117.36163925933839 199.65542827606203 117.36163925933839 L 199.65542827606203 117.36163925933839 C 200.02857112884521 117.36163925933839 200.40171398162843 119.86163925933839 200.40171398162843 122.36163925933839 L 200.40171398162843 141.70179907417298 C 200.40171398162843 144.20179907417298 197.90171398162843 146.70179907417298 195.40171398162843 146.70179907417298 L 195.40171398162843 146.70179907417298 C 195.02857112884521 146.70179907417298 194.65542827606203 144.20179907417298 194.65542827606203 141.70179907417298 Z "
                                                                    pathFrom="M 194.65542827606203 146.70179907417298 L 194.65542827606203 146.70179907417298 L 200.40171398162843 146.70179907417298 L 200.40171398162843 146.70179907417298 L 200.40171398162843 146.70179907417298 L 200.40171398162843 146.70179907417298 L 200.40171398162843 146.70179907417298 L 194.65542827606203 146.70179907417298 Z"
                                                                    cy="117.36063925933838" cx="230.56971393585206"
                                                                    j="5" val="10"
                                                                    barHeight="29.340159814834596"
                                                                    barWidth="5.7462857055664065"></path>
                                                                <path id="SvgjsPath4602"
                                                                    d="M 230.56971393585206 141.70179907417298 L 230.56971393585206 34.3411598148346 C 230.56971393585206 31.841159814834597 233.06971393585206 29.341159814834594 235.56971393585206 29.341159814834594 L 235.56971393585206 29.341159814834594 C 235.94285678863525 29.341159814834594 236.31599964141847 31.841159814834597 236.31599964141847 34.3411598148346 L 236.31599964141847 141.70179907417298 C 236.31599964141847 144.20179907417298 233.81599964141847 146.70179907417298 231.31599964141847 146.70179907417298 L 231.31599964141847 146.70179907417298 C 230.94285678863525 146.70179907417298 230.56971393585206 144.20179907417298 230.56971393585206 141.70179907417298 Z "
                                                                    fill="rgba(56,142,60,0.8)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="round"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMaskmz3au7pa)"
                                                                    pathTo="M 230.56971393585206 141.70179907417298 L 230.56971393585206 34.3411598148346 C 230.56971393585206 31.841159814834597 233.06971393585206 29.341159814834594 235.56971393585206 29.341159814834594 L 235.56971393585206 29.341159814834594 C 235.94285678863525 29.341159814834594 236.31599964141847 31.841159814834597 236.31599964141847 34.3411598148346 L 236.31599964141847 141.70179907417298 C 236.31599964141847 144.20179907417298 233.81599964141847 146.70179907417298 231.31599964141847 146.70179907417298 L 231.31599964141847 146.70179907417298 C 230.94285678863525 146.70179907417298 230.56971393585206 144.20179907417298 230.56971393585206 141.70179907417298 Z "
                                                                    pathFrom="M 230.56971393585206 146.70179907417298 L 230.56971393585206 146.70179907417298 L 236.31599964141847 146.70179907417298 L 236.31599964141847 146.70179907417298 L 236.31599964141847 146.70179907417298 L 236.31599964141847 146.70179907417298 L 236.31599964141847 146.70179907417298 L 230.56971393585206 146.70179907417298 Z"
                                                                    cy="29.340159814834593" cx="266.4839995956421"
                                                                    j="6" val="40"
                                                                    barHeight="117.36063925933838"
                                                                    barWidth="5.7462857055664065"></path>
                                                                <g id="SvgjsG4587"
                                                                    class="apexcharts-bar-goals-markers">
                                                                    <g id="SvgjsG4589"
                                                                        className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskmz3au7pa)">
                                                                    </g>
                                                                    <g id="SvgjsG4591"
                                                                        className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskmz3au7pa)">
                                                                    </g>
                                                                    <g id="SvgjsG4593"
                                                                        className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskmz3au7pa)">
                                                                    </g>
                                                                    <g id="SvgjsG4595"
                                                                        className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskmz3au7pa)">
                                                                    </g>
                                                                    <g id="SvgjsG4597"
                                                                        className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskmz3au7pa)">
                                                                    </g>
                                                                    <g id="SvgjsG4599"
                                                                        className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskmz3au7pa)">
                                                                    </g>
                                                                    <g id="SvgjsG4601"
                                                                        className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskmz3au7pa)">
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG4588"
                                                                    class="apexcharts-bar-shadows apexcharts-hidden-element-shown">
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG4586"
                                                                class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine4623" x1="0" y1="0"
                                                            x2="251.39999961853027" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                                        </line>
                                                        <line id="SvgjsLine4624" x1="0" y1="0"
                                                            x2="251.39999961853027" y2="0"
                                                            stroke-dasharray="0" stroke-width="0"
                                                            stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG4625" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG4626" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, -4)"><text id="SvgjsText4628"
                                                                    font-family="inherit" x="17.95714282989502"
                                                                    y="175.70079907417298" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="300" fill="#37474f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: inherit;">
                                                                    <tspan id="SvgjsTspan4629">M</tspan>
                                                                    <title>M</title>
                                                                </text><text id="SvgjsText4631" font-family="inherit"
                                                                    x="53.87142848968506" y="175.70079907417298"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="300" fill="#37474f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: inherit;">
                                                                    <tspan id="SvgjsTspan4632">T</tspan>
                                                                    <title>T</title>
                                                                </text><text id="SvgjsText4634" font-family="inherit"
                                                                    x="89.7857141494751" y="175.70079907417298"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="300" fill="#37474f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: inherit;">
                                                                    <tspan id="SvgjsTspan4635">W</tspan>
                                                                    <title>W</title>
                                                                </text><text id="SvgjsText4637" font-family="inherit"
                                                                    x="125.69999980926514" y="175.70079907417298"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="300" fill="#37474f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: inherit;">
                                                                    <tspan id="SvgjsTspan4638">T</tspan>
                                                                    <title>T</title>
                                                                </text><text id="SvgjsText4640" font-family="inherit"
                                                                    x="161.61428546905518" y="175.70079907417298"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="300" fill="#37474f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: inherit;">
                                                                    <tspan id="SvgjsTspan4641">F</tspan>
                                                                    <title>F</title>
                                                                </text><text id="SvgjsText4643" font-family="inherit"
                                                                    x="197.52857112884521" y="175.70079907417298"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="300" fill="#37474f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: inherit;">
                                                                    <tspan id="SvgjsTspan4644">S</tspan>
                                                                    <title>S</title>
                                                                </text><text id="SvgjsText4646" font-family="inherit"
                                                                    x="233.44285678863525" y="175.70079907417298"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="300" fill="#37474f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: inherit;">
                                                                    <tspan id="SvgjsTspan4647">S</tspan>
                                                                    <title>S</title>
                                                                </text></g>
                                                        </g>
                                                        <g id="SvgjsG4668" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG4669" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG4670" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                </svg>
                                                <div class="apexcharts-tooltip apexcharts-theme-dark">
                                                    <div class="apexcharts-tooltip-title"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                                        <span class="apexcharts-tooltip-marker"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-6 px-6 pt-0">
                                        <h6
                                            class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
                                            Website View</h6>
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                            Last Campaign Performance</p>
                                    </div>
                                    <div class="p-6 border-t border-blue-gray-50 px-6 py-5">
                                        <p
                                            class="antialiased font-sans text-sm leading-normal flex items-center font-normal text-blue-gray-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" aria-hidden="true" stroke-width="2"
                                                class="h-4 w-4 text-blue-gray-400">
                                                <path fill-rule="evenodd"
                                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>&nbsp;campaign sent 2 days ago</p>
                                    </div>
                                </div>
                                {{-- seconda card grafico --}}
                                <div
                                    class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm">
                                    <div
                                        class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-white text-gray-700">
                                        <div type="line" height="220" series="[object Object]"
                                            options="[object Object]" width="100%" style="min-height: 235px;">
                                            <div id="apexchartssavklzir"
                                                class="apexcharts-canvas apexchartssavklzir apexcharts-theme-light"
                                                style="width: 313px; height: 220px;"><svg id="SvgjsSvg4671"
                                                    width="313" height="220" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev"
                                                    class="apexcharts-svg apexcharts-zoomable"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <foreignObject x="0" y="0" width="313" height="220">
                                                        <div class="apexcharts-legend"
                                                            xmlns="http://www.w3.org/1999/xhtml"
                                                            style="max-height: 110px;"></div>
                                                    </foreignObject>
                                                    <rect id="SvgjsRect4676" width="0" height="0" x="0"
                                                        y="0" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fefefe"></rect>
                                                    <g id="SvgjsG4755" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(18.899999618530273, 0)">
                                                        <g id="SvgjsG4756" class="apexcharts-yaxis-texts-g"><text
                                                                id="SvgjsText4758" font-family="inherit" x="20"
                                                                y="36.6" text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="300" fill="#37474f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan4759">600</tspan>
                                                                <title>600</title>
                                                            </text><text id="SvgjsText4761" font-family="inherit"
                                                                x="20" y="61.050133179028826" text-anchor="end"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-weight="300" fill="#37474f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan4762">500</tspan>
                                                                <title>500</title>
                                                            </text><text id="SvgjsText4764" font-family="inherit"
                                                                x="20" y="85.50026635805764" text-anchor="end"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-weight="300" fill="#37474f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan4765">400</tspan>
                                                                <title>400</title>
                                                            </text><text id="SvgjsText4767" font-family="inherit"
                                                                x="20" y="109.95039953708647" text-anchor="end"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-weight="300" fill="#37474f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan4768">300</tspan>
                                                                <title>300</title>
                                                            </text><text id="SvgjsText4770" font-family="inherit"
                                                                x="20" y="134.4005327161153" text-anchor="end"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-weight="300" fill="#37474f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan4771">200</tspan>
                                                                <title>200</title>
                                                            </text><text id="SvgjsText4773" font-family="inherit"
                                                                x="20" y="158.85066589514412" text-anchor="end"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-weight="300" fill="#37474f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan4774">100</tspan>
                                                                <title>100</title>
                                                            </text><text id="SvgjsText4776" font-family="inherit"
                                                                x="20" y="183.30079907417294" text-anchor="end"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-weight="300" fill="#37474f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan4777">0</tspan>
                                                                <title>0</title>
                                                            </text></g>
                                                    </g>
                                                    <g id="SvgjsG4673" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(48.89999961853027, 35)">
                                                        <defs id="SvgjsDefs4672">
                                                            <clipPath id="gridRectMasksavklzir">
                                                                <rect id="SvgjsRect4678" width="253.10000038146973"
                                                                    height="170.70079907417298" x="-7" y="-12"
                                                                    rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMasksavklzir"></clipPath>
                                                            <clipPath id="nonForecastMasksavklzir"></clipPath>
                                                            <clipPath id="gridRectMarkerMasksavklzir">
                                                                <rect id="SvgjsRect4679" width="296.1000003814697"
                                                                    height="198.70079907417298" x="-26" y="-26"
                                                                    rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <line id="SvgjsLine4677" x1="0" y1="0"
                                                            x2="0" y2="146.70079907417298"
                                                            stroke="#b6b6b6" stroke-dasharray="3"
                                                            stroke-linecap="butt" class="apexcharts-xcrosshairs"
                                                            x="0" y="0" width="1" height="146.70079907417298"
                                                            fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                            stroke-width="1"></line>
                                                        <g id="SvgjsG4702" class="apexcharts-grid">
                                                            <g id="SvgjsG4703"
                                                                class="apexcharts-gridlines-horizontal">
                                                                <line id="SvgjsLine4716" x1="0"
                                                                    y1="24.45013317902883" x2="244.10000038146973"
                                                                    y2="24.45013317902883" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4717" x1="0"
                                                                    y1="48.90026635805766" x2="244.10000038146973"
                                                                    y2="48.90026635805766" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4718" x1="0"
                                                                    y1="73.35039953708649" x2="244.10000038146973"
                                                                    y2="73.35039953708649" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4719" x1="0"
                                                                    y1="97.80053271611531" x2="244.10000038146973"
                                                                    y2="97.80053271611531" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4720" x1="0"
                                                                    y1="122.25066589514414" x2="244.10000038146973"
                                                                    y2="122.25066589514414" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG4704"
                                                                class="apexcharts-gridlines-vertical">
                                                                <line id="SvgjsLine4706" x1="0"
                                                                    y1="0" x2="0"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4707" x1="30.512500047683716"
                                                                    y1="0" x2="30.512500047683716"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4708" x1="61.02500009536743"
                                                                    y1="0" x2="61.02500009536743"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4709" x1="91.53750014305115"
                                                                    y1="0" x2="91.53750014305115"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4710" x1="122.05000019073486"
                                                                    y1="0" x2="122.05000019073486"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4711" x1="152.56250023841858"
                                                                    y1="0" x2="152.56250023841858"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4712" x1="183.0750002861023"
                                                                    y1="0" x2="183.0750002861023"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4713" x1="213.587500333786"
                                                                    y1="0" x2="213.587500333786"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4714" x1="244.10000038146973"
                                                                    y1="0" x2="244.10000038146973"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <line id="SvgjsLine4723" x1="0"
                                                                y1="146.70079907417298" x2="244.10000038146973"
                                                                y2="146.70079907417298" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine4722" x1="0" y1="1"
                                                                x2="0" y2="146.70079907417298"
                                                                stroke="transparent" stroke-dasharray="0"
                                                                stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG4705" class="apexcharts-grid-borders">
                                                            <line id="SvgjsLine4715" x1="0" y1="0"
                                                                x2="244.10000038146973" y2="0"
                                                                stroke="#dddddd" stroke-dasharray="5"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine4721" x1="0"
                                                                y1="146.70079907417298" x2="244.10000038146973"
                                                                y2="146.70079907417298" stroke="#dddddd"
                                                                stroke-dasharray="5" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG4680"
                                                            class="apexcharts-line-series apexcharts-plot-series">
                                                            <g id="SvgjsG4681" class="apexcharts-series"
                                                                zIndex="0" seriesName="Sales"
                                                                data:longestSeries="true" rel="1"
                                                                data:realIndex="0">
                                                                <path id="SvgjsPath4701"
                                                                    d="M 0 134.47573248465855 L 30.512500047683716 136.92074580256144 L 61.02500009536743 73.35039953708649 L 91.53750014305115 68.46037290128072 L 122.05000019073486 24.450133179028825 L 152.56250023841858 61.125332947572076 L 183.0750002861023 97.80053271611533 L 213.587500333786 90.46549276240667 L 244.10000038146973 24.450133179028825"
                                                                    fill="none" fill-opacity="1"
                                                                    stroke="rgba(2,136,209,0.8)" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="5"
                                                                    stroke-dasharray="0" class="apexcharts-line"
                                                                    index="0"
                                                                    clip-path="url(#gridRectMasksavklzir)"
                                                                    pathTo="M 0 134.47573248465855 L 30.512500047683716 136.92074580256144 L 61.02500009536743 73.35039953708649 L 91.53750014305115 68.46037290128072 L 122.05000019073486 24.450133179028825 L 152.56250023841858 61.125332947572076 L 183.0750002861023 97.80053271611533 L 213.587500333786 90.46549276240667 L 244.10000038146973 24.450133179028825"
                                                                    pathFrom="M -1 146.70079907417298 L -1 146.70079907417298 L 30.512500047683716 146.70079907417298 L 61.02500009536743 146.70079907417298 L 91.53750014305115 146.70079907417298 L 122.05000019073486 146.70079907417298 L 152.56250023841858 146.70079907417298 L 183.0750002861023 146.70079907417298 L 213.587500333786 146.70079907417298 L 244.10000038146973 146.70079907417298"
                                                                    fill-rule="evenodd"></path>
                                                                <g id="SvgjsG4682"
                                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                    data:realIndex="0">
                                                                    <g id="SvgjsG4684"
                                                                        class="apexcharts-series-markers"
                                                                        clip-path="url(#gridRectMarkerMasksavklzir)">
                                                                        <circle id="SvgjsCircle4685" r="5"
                                                                            cx="0" cy="134.47573248465855"
                                                                            class="apexcharts-marker no-pointer-events wz1np8l6t"
                                                                            stroke="#ffffff" fill="#0288d1"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9" rel="0"
                                                                            j="0" index="0"
                                                                            default-marker-size="5"></circle>
                                                                        <circle id="SvgjsCircle4686" r="5"
                                                                            cx="30.512500047683716"
                                                                            cy="136.92074580256144"
                                                                            class="apexcharts-marker no-pointer-events wq2tx78av"
                                                                            stroke="#ffffff" fill="#0288d1"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9" rel="1"
                                                                            j="1" index="0"
                                                                            default-marker-size="5"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG4687"
                                                                        class="apexcharts-series-markers"
                                                                        clip-path="url(#gridRectMarkerMasksavklzir)">
                                                                        <circle id="SvgjsCircle4688" r="5"
                                                                            cx="61.02500009536743"
                                                                            cy="73.35039953708649"
                                                                            class="apexcharts-marker no-pointer-events wz9ydma3z"
                                                                            stroke="#ffffff" fill="#0288d1"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9" rel="2"
                                                                            j="2" index="0"
                                                                            default-marker-size="5"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG4689"
                                                                        class="apexcharts-series-markers"
                                                                        clip-path="url(#gridRectMarkerMasksavklzir)">
                                                                        <circle id="SvgjsCircle4690" r="5"
                                                                            cx="91.53750014305115"
                                                                            cy="68.46037290128072"
                                                                            class="apexcharts-marker no-pointer-events wkqt0aad9"
                                                                            stroke="#ffffff" fill="#0288d1"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9" rel="3"
                                                                            j="3" index="0"
                                                                            default-marker-size="5"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG4691"
                                                                        class="apexcharts-series-markers"
                                                                        clip-path="url(#gridRectMarkerMasksavklzir)">
                                                                        <circle id="SvgjsCircle4692" r="5"
                                                                            cx="122.05000019073486"
                                                                            cy="24.450133179028825"
                                                                            class="apexcharts-marker no-pointer-events wuq7ie8q4"
                                                                            stroke="#ffffff" fill="#0288d1"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9" rel="4"
                                                                            j="4" index="0"
                                                                            default-marker-size="5"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG4693"
                                                                        class="apexcharts-series-markers"
                                                                        clip-path="url(#gridRectMarkerMasksavklzir)">
                                                                        <circle id="SvgjsCircle4694" r="5"
                                                                            cx="152.56250023841858"
                                                                            cy="61.125332947572076"
                                                                            class="apexcharts-marker no-pointer-events w7z10l6c3"
                                                                            stroke="#ffffff" fill="#0288d1"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9" rel="5"
                                                                            j="5" index="0"
                                                                            default-marker-size="5"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG4695"
                                                                        class="apexcharts-series-markers"
                                                                        clip-path="url(#gridRectMarkerMasksavklzir)">
                                                                        <circle id="SvgjsCircle4696" r="5"
                                                                            cx="183.0750002861023"
                                                                            cy="97.80053271611533"
                                                                            class="apexcharts-marker no-pointer-events w3fmop1nvi"
                                                                            stroke="#ffffff" fill="#0288d1"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9" rel="6"
                                                                            j="6" index="0"
                                                                            default-marker-size="5"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG4697"
                                                                        class="apexcharts-series-markers"
                                                                        clip-path="url(#gridRectMarkerMasksavklzir)">
                                                                        <circle id="SvgjsCircle4698" r="5"
                                                                            cx="213.587500333786"
                                                                            cy="90.46549276240667"
                                                                            class="apexcharts-marker no-pointer-events wzw6rzb28"
                                                                            stroke="#ffffff" fill="#0288d1"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9" rel="7"
                                                                            j="7" index="0"
                                                                            default-marker-size="5"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG4699"
                                                                        class="apexcharts-series-markers"
                                                                        clip-path="url(#gridRectMarkerMasksavklzir)">
                                                                        <circle id="SvgjsCircle4700" r="5"
                                                                            cx="244.10000038146973"
                                                                            cy="24.450133179028825"
                                                                            class="apexcharts-marker no-pointer-events wrv4rul77"
                                                                            stroke="#ffffff" fill="#0288d1"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9" rel="8"
                                                                            j="8" index="0"
                                                                            default-marker-size="5"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG4683" class="apexcharts-datalabels"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine4724" x1="0" y1="0"
                                                            x2="244.10000038146973" y2="0"
                                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                                        </line>
                                                        <line id="SvgjsLine4725" x1="0" y1="0"
                                                            x2="244.10000038146973" y2="0"
                                                            stroke-dasharray="0" stroke-width="0"
                                                            stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG4726" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG4727" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, -4)"><text
                                                                    id="SvgjsText4729" font-family="inherit" x="0"
                                                                    y="175.70079907417298" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="300" fill="#37474f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: inherit;">
                                                                    <tspan id="SvgjsTspan4730">Apr</tspan>
                                                                    <title>Apr</title>
                                                                </text><text id="SvgjsText4732"
                                                                    font-family="inherit" x="30.512500047683716"
                                                                    y="175.70079907417298" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="300" fill="#37474f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: inherit;">
                                                                    <tspan id="SvgjsTspan4733">May</tspan>
                                                                    <title>May</title>
                                                                </text><text id="SvgjsText4735"
                                                                    font-family="inherit" x="61.02500009536743"
                                                                    y="175.70079907417298" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="300" fill="#37474f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: inherit;">
                                                                    <tspan id="SvgjsTspan4736">Jun</tspan>
                                                                    <title>Jun</title>
                                                                </text><text id="SvgjsText4738"
                                                                    font-family="inherit" x="91.53750014305115"
                                                                    y="175.70079907417298" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="300" fill="#37474f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: inherit;">
                                                                    <tspan id="SvgjsTspan4739">Jul</tspan>
                                                                    <title>Jul</title>
                                                                </text><text id="SvgjsText4741"
                                                                    font-family="inherit" x="122.05000019073486"
                                                                    y="175.70079907417298" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="300" fill="#37474f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: inherit;">
                                                                    <tspan id="SvgjsTspan4742">Aug</tspan>
                                                                    <title>Aug</title>
                                                                </text><text id="SvgjsText4744"
                                                                    font-family="inherit" x="152.56250023841858"
                                                                    y="175.70079907417298" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="300" fill="#37474f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: inherit;">
                                                                    <tspan id="SvgjsTspan4745">Sep</tspan>
                                                                    <title>Sep</title>
                                                                </text><text id="SvgjsText4747"
                                                                    font-family="inherit" x="183.0750002861023"
                                                                    y="175.70079907417298" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="300" fill="#37474f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: inherit;">
                                                                    <tspan id="SvgjsTspan4748">Oct</tspan>
                                                                    <title>Oct</title>
                                                                </text><text id="SvgjsText4750"
                                                                    font-family="inherit" x="213.587500333786"
                                                                    y="175.70079907417298" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="300" fill="#37474f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: inherit;">
                                                                    <tspan id="SvgjsTspan4751">Nov</tspan>
                                                                    <title>Nov</title>
                                                                </text><text id="SvgjsText4753"
                                                                    font-family="inherit" x="244.10000038146973"
                                                                    y="175.70079907417298" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="300" fill="#37474f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: inherit;">
                                                                    <tspan id="SvgjsTspan4754">Dec</tspan>
                                                                    <title>Dec</title>
                                                                </text></g>
                                                        </g>
                                                        <g id="SvgjsG4778" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG4779" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG4780" class="apexcharts-point-annotations"></g>
                                                        <rect id="SvgjsRect4781" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"
                                                            class="apexcharts-zoom-rect"></rect>
                                                        <rect id="SvgjsRect4782" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"
                                                            class="apexcharts-selection-rect"></rect>
                                                    </g>
                                                </svg>
                                                <div class="apexcharts-tooltip apexcharts-theme-dark">
                                                    <div class="apexcharts-tooltip-title"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                                        <span class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(2, 136, 209);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-dark">
                                                    <div class="apexcharts-xaxistooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    </div>
                                                </div>
                                                <div
                                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-6 px-6 pt-0">
                                        <h6
                                            class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
                                            Daily Sales</h6>
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                            15% increase in today sales</p>
                                    </div>
                                    <div class="p-6 border-t border-blue-gray-50 px-6 py-5">
                                        <p
                                            class="antialiased font-sans text-sm leading-normal flex items-center font-normal text-blue-gray-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" aria-hidden="true" stroke-width="2"
                                                class="h-4 w-4 text-blue-gray-400">
                                                <path fill-rule="evenodd"
                                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>&nbsp;updated 4 min ago</p>
                                    </div>
                                </div>
                                {{-- terza card grafico --}}
                                <div
                                    class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm">
                                    <div
                                        class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-white text-gray-700">
                                        <div type="line" height="220" series="[object Object]"
                                            options="[object Object]" width="100%" style="min-height: 235px;">
                                            <div id="apexchartsj6i6rubl"
                                                class="apexcharts-canvas apexchartsj6i6rubl apexcharts-theme-light"
                                                style="width: 313px; height: 220px;"><svg id="SvgjsSvg4783"
                                                    width="313" height="220"
                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev"
                                                    class="apexcharts-svg apexcharts-zoomable"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <foreignObject x="0" y="0" width="313" height="220">
                                                        <div class="apexcharts-legend"
                                                            xmlns="http://www.w3.org/1999/xhtml"
                                                            style="max-height: 110px;"></div>
                                                    </foreignObject>
                                                    <rect id="SvgjsRect4788" width="0" height="0" x="0"
                                                        y="0" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fefefe"></rect>
                                                    <g id="SvgjsG4867" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(18.899999618530273, 0)">
                                                        <g id="SvgjsG4868" class="apexcharts-yaxis-texts-g"><text
                                                                id="SvgjsText4870" font-family="inherit" x="20"
                                                                y="36.6" text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="300" fill="#37474f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan4871">600</tspan>
                                                                <title>600</title>
                                                            </text><text id="SvgjsText4873" font-family="inherit"
                                                                x="20" y="61.050133179028826" text-anchor="end"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-weight="300" fill="#37474f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan4874">500</tspan>
                                                                <title>500</title>
                                                            </text><text id="SvgjsText4876" font-family="inherit"
                                                                x="20" y="85.50026635805764" text-anchor="end"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-weight="300" fill="#37474f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan4877">400</tspan>
                                                                <title>400</title>
                                                            </text><text id="SvgjsText4879" font-family="inherit"
                                                                x="20" y="109.95039953708647" text-anchor="end"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-weight="300" fill="#37474f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan4880">300</tspan>
                                                                <title>300</title>
                                                            </text><text id="SvgjsText4882" font-family="inherit"
                                                                x="20" y="134.4005327161153" text-anchor="end"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-weight="300" fill="#37474f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan4883">200</tspan>
                                                                <title>200</title>
                                                            </text><text id="SvgjsText4885" font-family="inherit"
                                                                x="20" y="158.85066589514412" text-anchor="end"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-weight="300" fill="#37474f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan4886">100</tspan>
                                                                <title>100</title>
                                                            </text><text id="SvgjsText4888" font-family="inherit"
                                                                x="20" y="183.30079907417294" text-anchor="end"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-weight="300" fill="#37474f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan4889">0</tspan>
                                                                <title>0</title>
                                                            </text></g>
                                                    </g>
                                                    <g id="SvgjsG4785" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(48.89999961853027, 35)">
                                                        <defs id="SvgjsDefs4784">
                                                            <clipPath id="gridRectMaskj6i6rubl">
                                                                <rect id="SvgjsRect4790" width="253.10000038146973"
                                                                    height="170.70079907417298" x="-7" y="-12"
                                                                    rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskj6i6rubl"></clipPath>
                                                            <clipPath id="nonForecastMaskj6i6rubl"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskj6i6rubl">
                                                                <rect id="SvgjsRect4791" width="296.1000003814697"
                                                                    height="198.70079907417298" x="-26" y="-26"
                                                                    rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <line id="SvgjsLine4789" x1="0" y1="0"
                                                            x2="0" y2="146.70079907417298"
                                                            stroke="#b6b6b6" stroke-dasharray="3"
                                                            stroke-linecap="butt" class="apexcharts-xcrosshairs"
                                                            x="0" y="0" width="1" height="146.70079907417298"
                                                            fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                            stroke-width="1"></line>
                                                        <g id="SvgjsG4814" class="apexcharts-grid">
                                                            <g id="SvgjsG4815"
                                                                class="apexcharts-gridlines-horizontal">
                                                                <line id="SvgjsLine4828" x1="0"
                                                                    y1="24.45013317902883" x2="244.10000038146973"
                                                                    y2="24.45013317902883" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4829" x1="0"
                                                                    y1="48.90026635805766" x2="244.10000038146973"
                                                                    y2="48.90026635805766" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4830" x1="0"
                                                                    y1="73.35039953708649" x2="244.10000038146973"
                                                                    y2="73.35039953708649" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4831" x1="0"
                                                                    y1="97.80053271611531" x2="244.10000038146973"
                                                                    y2="97.80053271611531" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4832" x1="0"
                                                                    y1="122.25066589514414" x2="244.10000038146973"
                                                                    y2="122.25066589514414" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG4816"
                                                                class="apexcharts-gridlines-vertical">
                                                                <line id="SvgjsLine4818" x1="0"
                                                                    y1="0" x2="0"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4819" x1="30.512500047683716"
                                                                    y1="0" x2="30.512500047683716"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4820" x1="61.02500009536743"
                                                                    y1="0" x2="61.02500009536743"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4821" x1="91.53750014305115"
                                                                    y1="0" x2="91.53750014305115"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4822" x1="122.05000019073486"
                                                                    y1="0" x2="122.05000019073486"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4823" x1="152.56250023841858"
                                                                    y1="0" x2="152.56250023841858"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4824" x1="183.0750002861023"
                                                                    y1="0" x2="183.0750002861023"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4825" x1="213.587500333786"
                                                                    y1="0" x2="213.587500333786"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4826" x1="244.10000038146973"
                                                                    y1="0" x2="244.10000038146973"
                                                                    y2="146.70079907417298" stroke="#dddddd"
                                                                    stroke-dasharray="5" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <line id="SvgjsLine4835" x1="0"
                                                                y1="146.70079907417298" x2="244.10000038146973"
                                                                y2="146.70079907417298" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine4834" x1="0" y1="1"
                                                                x2="0" y2="146.70079907417298"
                                                                stroke="transparent" stroke-dasharray="0"
                                                                stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG4817" class="apexcharts-grid-borders">
                                                            <line id="SvgjsLine4827" x1="0" y1="0"
                                                                x2="244.10000038146973" y2="0"
                                                                stroke="#dddddd" stroke-dasharray="5"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine4833" x1="0"
                                                                y1="146.70079907417298" x2="244.10000038146973"
                                                                y2="146.70079907417298" stroke="#dddddd"
                                                                stroke-dasharray="5" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG4792"
                                                            class="apexcharts-line-series apexcharts-plot-series">
                                                            <g id="SvgjsG4793" class="apexcharts-series"
                                                                zIndex="0" seriesName="Tasks"
                                                                data:longestSeries="true" rel="1"
                                                                data:realIndex="0">
                                                                <path id="SvgjsPath4813"
                                                                    d="M 0 134.47573248465855 L 30.512500047683716 136.92074580256144 L 61.02500009536743 73.35039953708649 L 91.53750014305115 92.91050608030955 L 122.05000019073486 24.450133179028825 L 152.56250023841858 85.5754661266009 L 183.0750002861023 48.900266358057664 L 213.587500333786 90.46549276240667 L 244.10000038146973 24.450133179028825"
                                                                    fill="none" fill-opacity="1"
                                                                    stroke="rgba(56,142,60,0.8)" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="5"
                                                                    stroke-dasharray="0" class="apexcharts-line"
                                                                    index="0"
                                                                    clip-path="url(#gridRectMaskj6i6rubl)"
                                                                    pathTo="M 0 134.47573248465855 L 30.512500047683716 136.92074580256144 L 61.02500009536743 73.35039953708649 L 91.53750014305115 92.91050608030955 L 122.05000019073486 24.450133179028825 L 152.56250023841858 85.5754661266009 L 183.0750002861023 48.900266358057664 L 213.587500333786 90.46549276240667 L 244.10000038146973 24.450133179028825"
                                                                    pathFrom="M -1 146.70079907417298 L -1 146.70079907417298 L 30.512500047683716 146.70079907417298 L 61.02500009536743 146.70079907417298 L 91.53750014305115 146.70079907417298 L 122.05000019073486 146.70079907417298 L 152.56250023841858 146.70079907417298 L 183.0750002861023 146.70079907417298 L 213.587500333786 146.70079907417298 L 244.10000038146973 146.70079907417298"
                                                                    fill-rule="evenodd"></path>
                                                                <g id="SvgjsG4794"
                                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                    data:realIndex="0">
                                                                    <g id="SvgjsG4796"
                                                                        class="apexcharts-series-markers"
                                                                        clip-path="url(#gridRectMarkerMaskj6i6rubl)">
                                                                        <circle id="SvgjsCircle4797" r="5"
                                                                            cx="0" cy="134.47573248465855"
                                                                            class="apexcharts-marker no-pointer-events wmfhjy772"
                                                                            stroke="#ffffff" fill="#388e3c"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9" rel="0"
                                                                            j="0" index="0"
                                                                            default-marker-size="5"></circle>
                                                                        <circle id="SvgjsCircle4798" r="5"
                                                                            cx="30.512500047683716"
                                                                            cy="136.92074580256144"
                                                                            class="apexcharts-marker no-pointer-events w92krcdwzi"
                                                                            stroke="#ffffff" fill="#388e3c"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9" rel="1"
                                                                            j="1" index="0"
                                                                            default-marker-size="5"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG4799"
                                                                        class="apexcharts-series-markers"
                                                                        clip-path="url(#gridRectMarkerMaskj6i6rubl)">
                                                                        <circle id="SvgjsCircle4800" r="5"
                                                                            cx="61.02500009536743"
                                                                            cy="73.35039953708649"
                                                                            class="apexcharts-marker no-pointer-events wgpa4src5"
                                                                            stroke="#ffffff" fill="#388e3c"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9" rel="2"
                                                                            j="2" index="0"
                                                                            default-marker-size="5"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG4801"
                                                                        class="apexcharts-series-markers"
                                                                        clip-path="url(#gridRectMarkerMaskj6i6rubl)">
                                                                        <circle id="SvgjsCircle4802" r="5"
                                                                            cx="91.53750014305115"
                                                                            cy="92.91050608030955"
                                                                            class="apexcharts-marker no-pointer-events wwq8c4zcsk"
                                                                            stroke="#ffffff" fill="#388e3c"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9" rel="3"
                                                                            j="3" index="0"
                                                                            default-marker-size="5"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG4803"
                                                                        class="apexcharts-series-markers"
                                                                        clip-path="url(#gridRectMarkerMaskj6i6rubl)">
                                                                        <circle id="SvgjsCircle4804" r="5"
                                                                            cx="122.05000019073486"
                                                                            cy="24.450133179028825"
                                                                            class="apexcharts-marker no-pointer-events wc4cy257e"
                                                                            stroke="#ffffff" fill="#388e3c"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9" rel="4"
                                                                            j="4" index="0"
                                                                            default-marker-size="5"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG4805"
                                                                        class="apexcharts-series-markers"
                                                                        clip-path="url(#gridRectMarkerMaskj6i6rubl)">
                                                                        <circle id="SvgjsCircle4806" r="5"
                                                                            cx="152.56250023841858"
                                                                            cy="85.5754661266009"
                                                                            class="apexcharts-marker no-pointer-events w5kfdsih4f"
                                                                            stroke="#ffffff" fill="#388e3c"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9" rel="5"
                                                                            j="5" index="0"
                                                                            default-marker-size="5"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG4807"
                                                                        class="apexcharts-series-markers"
                                                                        clip-path="url(#gridRectMarkerMaskj6i6rubl)">
                                                                        <circle id="SvgjsCircle4808" r="5"
                                                                            cx="183.0750002861023"
                                                                            cy="48.900266358057664"
                                                                            class="apexcharts-marker no-pointer-events wfmrcjuuk"
                                                                            stroke="#ffffff" fill="#388e3c"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9" rel="6"
                                                                            j="6" index="0"
                                                                            default-marker-size="5"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG4809"
                                                                        class="apexcharts-series-markers"
                                                                        clip-path="url(#gridRectMarkerMaskj6i6rubl)">
                                                                        <circle id="SvgjsCircle4810" r="5"
                                                                            cx="213.587500333786"
                                                                            cy="90.46549276240667"
                                                                            class="apexcharts-marker no-pointer-events wqbo3nrct"
                                                                            stroke="#ffffff" fill="#388e3c"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9" rel="7"
                                                                            j="7" index="0"
                                                                            default-marker-size="5"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG4811"
                                                                        class="apexcharts-series-markers"
                                                                        clip-path="url(#gridRectMarkerMaskj6i6rubl)">
                                                                        <circle id="SvgjsCircle4812" r="5"
                                                                            cx="244.10000038146973"
                                                                            cy="24.450133179028825"
                                                                            class="apexcharts-marker no-pointer-events wr57jksuu"
                                                                            stroke="#ffffff" fill="#388e3c"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9" rel="8"
                                                                            j="8" index="0"
                                                                            default-marker-size="5"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG4795" class="apexcharts-datalabels"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine4836" x1="0" y1="0"
                                                            x2="244.10000038146973" y2="0"
                                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                                        </line>
                                                        <line id="SvgjsLine4837" x1="0" y1="0"
                                                            x2="244.10000038146973" y2="0"
                                                            stroke-dasharray="0" stroke-width="0"
                                                            stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG4838" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG4839" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, -4)"><text
                                                                    id="SvgjsText4841" font-family="inherit" x="0"
                                                                    y="175.70079907417298" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="300" fill="#37474f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: inherit;">
                                                                    <tspan id="SvgjsTspan4842">Apr</tspan>
                                                                    <title>Apr</title>
                                                                </text><text id="SvgjsText4844"
                                                                    font-family="inherit" x="30.512500047683716"
                                                                    y="175.70079907417298" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="300" fill="#37474f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: inherit;">
                                                                    <tspan id="SvgjsTspan4845">May</tspan>
                                                                    <title>May</title>
                                                                </text><text id="SvgjsText4847"
                                                                    font-family="inherit" x="61.02500009536743"
                                                                    y="175.70079907417298" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="300" fill="#37474f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: inherit;">
                                                                    <tspan id="SvgjsTspan4848">Jun</tspan>
                                                                    <title>Jun</title>
                                                                </text><text id="SvgjsText4850"
                                                                    font-family="inherit" x="91.53750014305115"
                                                                    y="175.70079907417298" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="300" fill="#37474f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: inherit;">
                                                                    <tspan id="SvgjsTspan4851">Jul</tspan>
                                                                    <title>Jul</title>
                                                                </text><text id="SvgjsText4853"
                                                                    font-family="inherit" x="122.05000019073486"
                                                                    y="175.70079907417298" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="300" fill="#37474f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: inherit;">
                                                                    <tspan id="SvgjsTspan4854">Aug</tspan>
                                                                    <title>Aug</title>
                                                                </text><text id="SvgjsText4856"
                                                                    font-family="inherit" x="152.56250023841858"
                                                                    y="175.70079907417298" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="300" fill="#37474f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: inherit;">
                                                                    <tspan id="SvgjsTspan4857">Sep</tspan>
                                                                    <title>Sep</title>
                                                                </text><text id="SvgjsText4859"
                                                                    font-family="inherit" x="183.0750002861023"
                                                                    y="175.70079907417298" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="300" fill="#37474f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: inherit;">
                                                                    <tspan id="SvgjsTspan4860">Oct</tspan>
                                                                    <title>Oct</title>
                                                                </text><text id="SvgjsText4862"
                                                                    font-family="inherit" x="213.587500333786"
                                                                    y="175.70079907417298" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="300" fill="#37474f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: inherit;">
                                                                    <tspan id="SvgjsTspan4863">Nov</tspan>
                                                                    <title>Nov</title>
                                                                </text><text id="SvgjsText4865"
                                                                    font-family="inherit" x="244.10000038146973"
                                                                    y="175.70079907417298" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="300" fill="#37474f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: inherit;">
                                                                    <tspan id="SvgjsTspan4866">Dec</tspan>
                                                                    <title>Dec</title>
                                                                </text></g>
                                                        </g>
                                                        <g id="SvgjsG4890" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG4891" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG4892" class="apexcharts-point-annotations"></g>
                                                        <rect id="SvgjsRect4893" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"
                                                            class="apexcharts-zoom-rect"></rect>
                                                        <rect id="SvgjsRect4894" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"
                                                            class="apexcharts-selection-rect"></rect>
                                                    </g>
                                                </svg>
                                                <div class="apexcharts-tooltip apexcharts-theme-dark">
                                                    <div class="apexcharts-tooltip-title"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                                        <span class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(56, 142, 60);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-dark">
                                                    <div class="apexcharts-xaxistooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    </div>
                                                </div>
                                                <div
                                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-6 px-6 pt-0">
                                        <h6
                                            class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
                                            Completed Tasks</h6>
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                            Last Campaign Performance</p>
                                    </div>
                                    <div class="p-6 border-t border-blue-gray-50 px-6 py-5">
                                        <p
                                            class="antialiased font-sans text-sm leading-normal flex items-center font-normal text-blue-gray-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" aria-hidden="true" stroke-width="2"
                                                class="h-4 w-4 text-blue-gray-400">
                                                <path fill-rule="evenodd"
                                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>&nbsp;just updated</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 grid grid-cols-1 gap-6 xl:grid-cols-3">
                                {{-- tabella project e orders --}}
                                <div
                                    class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 overflow-hidden xl:col-span-2 border border-blue-gray-100 shadow-sm">
                                    <div
                                        class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none m-0 flex items-center justify-between p-6">
                                        <div>
                                            <h6
                                                class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900 mb-1">
                                                Projects</h6>
                                            <p
                                                class="antialiased font-sans text-sm leading-normal flex items-center gap-1 font-normal text-blue-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" aria-hidden="true" stroke-width="3"
                                                    class="h-4 w-4 text-blue-gray-200">
                                                    <path fill-rule="evenodd"
                                                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                                        clip-rule="evenodd"></path>
                                                </svg><strong>30 done</strong> this month</p>
                                        </div><button aria-expanded="false" aria-haspopup="menu" id=":rd2:"
                                            class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
                                            type="button"><span
                                                class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"><svg
                                                    xmlns="http://www.w3.org/2000/svg" fill="currenColor"
                                                    viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"
                                                    aria-hidden="true" class="h-6 w-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z">
                                                    </path>
                                                </svg></span></button>
                                    </div>
                                    <div class="p-6 overflow-x-scroll px-0 pt-0 pb-2">
                                        <table class="w-full min-w-[640px] table-auto">
                                            <thead>
                                                <tr>
                                                    <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                                        <p
                                                            class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                                                            companies</p>
                                                    </th>
                                                    <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                                        <p
                                                            class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                                                            members</p>
                                                    </th>
                                                    <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                                        <p
                                                            class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                                                            budget</p>
                                                    </th>
                                                    <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                                        <p
                                                            class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                                                            completion</p>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                                        <div class="flex items-center gap-4"><img
                                                                src="{{Vite::asset('/public/img/logo-xd.svg') }}"
                                                                alt="Material XD Version"
                                                                class="inline-block relative object-cover object-center !rounded-full w-9 h-9 rounded-md">
                                                            <p
                                                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                                                Material XD Version</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-3 px-5 border-b border-blue-gray-50"><img
                                                            src="{{Vite::asset('/public/img/team-1.jpeg') }}"
                                                            alt="Romina Hadid"
                                                            class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white"><img
                                                            src="{{Vite::asset('/public/img/team-2.jpeg') }}"
                                                            alt="Ryan Tompson"
                                                            class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5"><img
                                                            src="{{Vite::asset('/public/img/team-3.jpeg') }}"
                                                            alt="Jessica Doe"
                                                            class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5"><img
                                                            src="{{Vite::asset('/public/img/team-4.jpeg') }}"
                                                            alt="Alexander Smith"
                                                            class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5">
                                                    </td>
                                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                                        <p
                                                            class="block antialiased font-sans text-xs font-medium text-blue-gray-600">
                                                            $14,000</p>
                                                    </td>
                                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                                        <div class="w-10/12">
                                                            <p
                                                                class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">
                                                                60%</p>
                                                            <div
                                                                class="flex flex-start bg-blue-gray-50 overflow-hidden w-full font-sans rounded-full text-xs font-medium h-1">
                                                                <div class="flex justify-center items-center h-full overflow-hidden break-all rounded-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white"
                                                                    style="width: 60%;"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                                        <div class="flex items-center gap-4"><img
                                                                src="{{Vite::asset('/public/img/logo-atlassian.svg') }}"
                                                                alt="Add Progress Track"
                                                                class="inline-block relative object-cover object-center !rounded-full w-9 h-9 rounded-md">
                                                            <p
                                                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                                                Add Progress Track</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-3 px-5 border-b border-blue-gray-50"><img
                                                            src="{{Vite::asset('/public/img/team-2.jpeg') }}"
                                                            alt="Ryan Tompson"
                                                            class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white"><img
                                                            src="{{Vite::asset('/public/img/team-4.jpeg') }}"
                                                            alt="Alexander Smith"
                                                            class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5">
                                                    </td>
                                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                                        <p
                                                            class="block antialiased font-sans text-xs font-medium text-blue-gray-600">
                                                            $3,000</p>
                                                    </td>
                                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                                        <div class="w-10/12">
                                                            <p
                                                                class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">
                                                                10%</p>
                                                            <div
                                                                class="flex flex-start bg-blue-gray-50 overflow-hidden w-full font-sans rounded-full text-xs font-medium h-1">
                                                                <div class="flex justify-center items-center h-full overflow-hidden break-all rounded-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white"
                                                                    style="width: 10%;"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                                        <div class="flex items-center gap-4"><img

                                                                src="{{Vite::asset('/public/img/logo-slack.svg') }}"
                                                                alt="Fix Platform Errors"
                                                                class="inline-block relative object-cover object-center !rounded-full w-9 h-9 rounded-md">
                                                            <p
                                                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                                                Fix Platform Errors</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-3 px-5 border-b border-blue-gray-50"><img
                                                            {{-- src="/material-tailwind-dashboard-react/img/team-3.jpeg" --}}
                                                            src="{{Vite::asset('/public/img/team-3.jpeg') }}"
                                                            alt="Jessica Doe"
                                                            class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white"><img
                                                            {{-- src="/material-tailwind-dashboard-react/img/team-1.jpeg" --}}
                                                            src="{{Vite::asset('/public/img/team-1.jpeg') }}"
                                                            alt="Romina Hadid"
                                                            class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5">
                                                    </td>
                                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                                        <p
                                                            class="block antialiased font-sans text-xs font-medium text-blue-gray-600">
                                                            Not set</p>
                                                    </td>
                                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                                        <div class="w-10/12">
                                                            <p
                                                                class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">
                                                                100%</p>
                                                            <div
                                                                class="flex flex-start bg-blue-gray-50 overflow-hidden w-full font-sans rounded-full text-xs font-medium h-1">
                                                                <div class="flex justify-center items-center h-full overflow-hidden break-all rounded-full bg-gradient-to-tr from-green-600 to-green-400 text-white"
                                                                    style="width: 100%;"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                                        <div class="flex items-center gap-4"><img
                                                                {{-- src="/material-tailwind-dashboard-react/img/" --}}
                                                                src="{{Vite::asset('/public/img/logo-spotify.svg') }}"
                                                                alt="Launch our Mobile App"
                                                                class="inline-block relative object-cover object-center !rounded-full w-9 h-9 rounded-md">
                                                            <p
                                                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                                                Launch our Mobile App</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-3 px-5 border-b border-blue-gray-50"><img
                                                            {{-- src="/material-tailwind-dashboard-react/img/team-4.jpeg" --}}
                                                            src="{{Vite::asset('/public/img/team-4.jpeg') }}"
                                                            alt="Alexander Smith"
                                                            class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white"><img
                                                            {{-- src="/material-tailwind-dashboard-react/img/team-3.jpeg" --}}
                                                            src="{{Vite::asset('/public/img/team-3.jpeg') }}"
                                                            alt="Jessica Doe"
                                                            class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5"><img
                                                            {{-- src="/material-tailwind-dashboard-react/img/team-2.jpeg" --}}
                                                            src="{{Vite::asset('/public/img/team-2.jpeg') }}"
                                                            alt="Ryan Tompson"
                                                            class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5"><img
                                                            {{-- src="/material-tailwind-dashboard-react/img/team-1.jpeg" --}}
                                                            src="{{Vite::asset('/public/img/team-1.jpeg') }}"
                                                            alt="Romina Hadid"
                                                            class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5">
                                                    </td>
                                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                                        <p
                                                            class="block antialiased font-sans text-xs font-medium text-blue-gray-600">
                                                            $20,500</p>
                                                    </td>
                                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                                        <div class="w-10/12">
                                                            <p
                                                                class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">
                                                                100%</p>
                                                            <div
                                                                class="flex flex-start bg-blue-gray-50 overflow-hidden w-full font-sans rounded-full text-xs font-medium h-1">
                                                                <div class="flex justify-center items-center h-full overflow-hidden break-all rounded-full bg-gradient-to-tr from-green-600 to-green-400 text-white"
                                                                    style="width: 100%;"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                                        <div class="flex items-center gap-4"><img
                                                                {{-- src="/material-tailwind-dashboard-react/img/logo-jira.svg" --}}
                                                                src="{{Vite::asset('/public/img/logo-jira.svg') }}"
                                                                alt="Add the New Pricing Page"
                                                                class="inline-block relative object-cover object-center !rounded-full w-9 h-9 rounded-md">
                                                            <p
                                                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                                                Add the New Pricing Page</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-3 px-5 border-b border-blue-gray-50"><img
                                                            {{-- src="/material-tailwind-dashboard-react/img/" --}}
                                                            src="{{Vite::asset('/public/img/team-4.jpeg') }}"
                                                            alt="Alexander Smith"
                                                            class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white">
                                                    </td>
                                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                                        <p
                                                            class="block antialiased font-sans text-xs font-medium text-blue-gray-600">
                                                            $500</p>
                                                    </td>
                                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                                        <div class="w-10/12">
                                                            <p
                                                                class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">
                                                                25%</p>
                                                            <div
                                                                class="flex flex-start bg-blue-gray-50 overflow-hidden w-full font-sans rounded-full text-xs font-medium h-1">
                                                                <div class="flex justify-center items-center h-full overflow-hidden break-all rounded-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white"
                                                                    style="width: 25%;"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-3 px-5 ">
                                                        <div class="flex items-center gap-4"><img
                                                                {{-- src="/material-tailwind-dashboard-react/img/logo-invision.svg" --}}
                                                                src="{{Vite::asset('/public/img/logo-invision.svg') }}"
                                                                alt="Redesign New Online Shop"
                                                                class="inline-block relative object-cover object-center !rounded-full w-9 h-9 rounded-md">
                                                            <p
                                                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                                                Redesign New Online Shop</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-3 px-5 "><img
                                                            {{-- src="/material-tailwind-dashboard-react/img/team-1.jpeg" --}}
                                                            src="{{Vite::asset('/public/img/team-1.jpeg') }}"
                                                            alt="Romina Hadid"
                                                            class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white"><img
                                                            {{-- src="/material-tailwind-dashboard-react/img/team-4.jpeg" --}}
                                                            src="{{Vite::asset('/public/img/team-4.jpeg') }}"
                                                            alt="Alexander Smith"
                                                            class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5">
                                                    </td>
                                                    <td class="py-3 px-5 ">
                                                        <p
                                                            class="block antialiased font-sans text-xs font-medium text-blue-gray-600">
                                                            $2,000</p>
                                                    </td>
                                                    <td class="py-3 px-5 ">
                                                        <div class="w-10/12">
                                                            <p
                                                                class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">
                                                                40%</p>
                                                            <div
                                                                class="flex flex-start bg-blue-gray-50 overflow-hidden w-full font-sans rounded-full text-xs font-medium h-1">
                                                                <div class="flex justify-center items-center h-full overflow-hidden break-all rounded-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white"
                                                                    style="width: 40%;"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                {{-- orders overview --}}
                                <div
                                    class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm">
                                    <div
                                        class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none m-0 p-6">
                                        <h6
                                            class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900 mb-2">
                                            Orders Overview</h6>
                                        <p
                                            class="antialiased font-sans text-sm leading-normal flex items-center gap-1 font-normal text-blue-gray-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"
                                                aria-hidden="true" class="h-3.5 w-3.5 text-green-500">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18"></path>
                                            </svg><strong>24%</strong> this month</p>
                                    </div>
                                    <div class="p-6 pt-0">
                                        <div class="flex items-start gap-4 py-3">
                                            <div
                                                class="relative p-1 after:absolute after:-bottom-6 after:left-2/4 after:w-0.5 after:-translate-x-2/4 after:bg-blue-gray-50 after:content-[''] after:h-4/6">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" aria-hidden="true"
                                                    class="!w-5 !h-5 text-blue-gray-300">
                                                    <path fill-rule="evenodd"
                                                        d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                                                        clip-rule="evenodd"></path>
                                                </svg></div>
                                            <div>
                                                <p
                                                    class="antialiased font-sans text-sm leading-normal text-blue-gray-900 block font-medium">
                                                    $2400, Design changes</p><span
                                                    class="block antialiased font-sans text-xs font-medium text-blue-gray-500">22
                                                    DEC 7:20 PM</span>
                                            </div>
                                        </div>
                                        <div class="flex items-start gap-4 py-3">
                                            <div
                                                class="relative p-1 after:absolute after:-bottom-6 after:left-2/4 after:w-0.5 after:-translate-x-2/4 after:bg-blue-gray-50 after:content-[''] after:h-4/6">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" aria-hidden="true"
                                                    class="!w-5 !h-5 text-blue-gray-300">
                                                    <path fill-rule="evenodd"
                                                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z"
                                                        clip-rule="evenodd"></path>
                                                </svg></div>
                                            <div>
                                                <p
                                                    class="antialiased font-sans text-sm leading-normal text-blue-gray-900 block font-medium">
                                                    New order #1832412</p><span
                                                    class="block antialiased font-sans text-xs font-medium text-blue-gray-500">21
                                                    DEC 11 PM</span>
                                            </div>
                                        </div>
                                        <div class="flex items-start gap-4 py-3">
                                            <div
                                                class="relative p-1 after:absolute after:-bottom-6 after:left-2/4 after:w-0.5 after:-translate-x-2/4 after:bg-blue-gray-50 after:content-[''] after:h-4/6">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" aria-hidden="true"
                                                    class="!w-5 !h-5 text-blue-gray-300">
                                                    <path
                                                        d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z">
                                                    </path>
                                                </svg></div>
                                            <div>
                                                <p
                                                    class="antialiased font-sans text-sm leading-normal text-blue-gray-900 block font-medium">
                                                    Server payments for April</p><span
                                                    class="block antialiased font-sans text-xs font-medium text-blue-gray-500">21
                                                    DEC 9:34 PM</span>
                                            </div>
                                        </div>
                                        <div class="flex items-start gap-4 py-3">
                                            <div
                                                class="relative p-1 after:absolute after:-bottom-6 after:left-2/4 after:w-0.5 after:-translate-x-2/4 after:bg-blue-gray-50 after:content-[''] after:h-4/6">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" aria-hidden="true"
                                                    class="!w-5 !h-5 text-blue-gray-300">
                                                    <path d="M4.5 3.75a3 3 0 00-3 3v.75h21v-.75a3 3 0 00-3-3h-15z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M22.5 9.75h-21v7.5a3 3 0 003 3h15a3 3 0 003-3v-7.5zm-18 3.75a.75.75 0 01.75-.75h6a.75.75 0 010 1.5h-6a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z"
                                                        clip-rule="evenodd"></path>
                                                </svg></div>
                                            <div>
                                                <p
                                                    class="antialiased font-sans text-sm leading-normal text-blue-gray-900 block font-medium">
                                                    New card added for order #4395133</p><span
                                                    class="block antialiased font-sans text-xs font-medium text-blue-gray-500">20
                                                    DEC 2:20 AM</span>
                                            </div>
                                        </div>
                                        <div class="flex items-start gap-4 py-3">
                                            <div
                                                class="relative p-1 after:absolute after:-bottom-6 after:left-2/4 after:w-0.5 after:-translate-x-2/4 after:bg-blue-gray-50 after:content-[''] after:h-4/6">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" aria-hidden="true"
                                                    class="!w-5 !h-5 text-blue-gray-300">
                                                    <path
                                                        d="M18 1.5c2.9 0 5.25 2.35 5.25 5.25v3.75a.75.75 0 01-1.5 0V6.75a3.75 3.75 0 10-7.5 0v3a3 3 0 013 3v6.75a3 3 0 01-3 3H3.75a3 3 0 01-3-3v-6.75a3 3 0 013-3h9v-3c0-2.9 2.35-5.25 5.25-5.25z">
                                                    </path>
                                                </svg></div>
                                            <div>
                                                <p
                                                    class="antialiased font-sans text-sm leading-normal text-blue-gray-900 block font-medium">
                                                    Unlock packages for development</p><span
                                                    class="block antialiased font-sans text-xs font-medium text-blue-gray-500">18
                                                    DEC 4:54 AM</span>
                                            </div>
                                        </div>
                                        <div class="flex items-start gap-4 py-3">
                                            <div
                                                class="relative p-1 after:absolute after:-bottom-6 after:left-2/4 after:w-0.5 after:-translate-x-2/4 after:bg-blue-gray-50 after:content-[''] after:h-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" aria-hidden="true"
                                                    class="!w-5 !h-5 text-blue-gray-300">
                                                    <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"></path>
                                                    <path fill-rule="evenodd"
                                                        d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z"
                                                        clip-rule="evenodd"></path>
                                                    <path
                                                        d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z">
                                                    </path>
                                                </svg></div>
                                            <div>
                                                <p
                                                    class="antialiased font-sans text-sm leading-normal text-blue-gray-900 block font-medium">
                                                    New order #9583120</p><span
                                                    class="block antialiased font-sans text-xs font-medium text-blue-gray-500">17
                                                    DEC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- footer --}}
                        <div class="text-blue-gray-600">
                            <footer class="py-2 bg-white rounded-xl overflow-hidden text-gray-700 shadow-none m-0 flex items-center justify-between">
                                <div
                                    class="flex w-full flex-wrap items-center justify-center gap-6 px-2 md:justify-between">
                                    <p
                                        class="block antialiased font-sans text-sm leading-normal font-normal text-inherit text-white">
                                        © 2024, made with <svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                                            class="-mt-0.5 inline-block h-3.5 w-3.5 text-red-600">
                                            <path
                                                d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z">
                                            </path>
                                        </svg> by <a href="#" target="_blank"
                                            class="transition-colors hover:text-blue-500 font-bold">Tech Engeneering</a>
                                            {{-- made by Giulia Mariano with Tech Engeneering --}}
                                        for a better web.</p>
                                    <ul class="flex items-center gap-4">

                                        <li><a href="https://www.creative-tim.com/presentation" target="_blank"
                                                class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">About
                                                Us</a></li>

                                        <li><a href="https://www.creative-tim.com/license" target="_blank"
                                                class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">License</a>
                                        </li>
                                    </ul>
                                </div>
                            </footer>
                        </div>
                    </div>

    </div>
</x-app-layout>
