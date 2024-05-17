<div class="mb-4 grid grid-cols-1 gap-6 xl:grid-cols-3">
<div
class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 overflow-hidden xl:col-span-2 border border-blue-gray-100 shadow-sm">
<div
    class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none m-0 flex items-center justify-between p-6">
    <div>
        <h6
            class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900 mb-1">
            Clienti</h6>
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
                        Nome Azienda</p>
                </th>
                <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                    <p
                        class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                        Settore</p>
                </th>
                <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                    <p
                        class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                        Inizio Interazione</p>
                </th>
                <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                    <p
                        class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                        Stato Attività</p>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client )
            <tr>
                <td class="py-3 px-5 border-b border-blue-gray-50">
                    <div class="flex items-center gap-4"><img
                            src="{{Vite::asset('/public/img/'.$client->imageLogo) }}"
                            alt="Material XD Version"
                            class="inline-block relative object-cover object-center !rounded-full w-9 h-9 rounded-md">
                        <p
                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                            {{$client->name}}</p>
                    </div>
                </td>
                <td class="py-3 px-5 border-b border-blue-gray-50">
                    <p
                    class="block antialiased font-sans text-xs font-medium text-blue-gray-600">
                    {{$client->industry}}</p>

                </td>
                <td class="py-3 px-5 border-b border-blue-gray-50">
                    <p
                        class="block antialiased font-sans text-xs font-medium text-blue-gray-600">
                      {{$client->date_start}}</p>
                </td>
                <td class="py-3 px-5 border-b border-blue-gray-50">
                    @foreach ($activities as $activity )
                    @if ($activity->client_id === $client->id)
                        <div class="w-10/12">
                        <p class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">
                            @if ($activity->semaforo === 'rosso')
                           <span>oltre i 15gg</span>
                        @elseif ($activity->semaforo === 'giallo')
                        <span>7/10gg</span>
                        @elseif ($activity->semaforo === 'verde')
                            <span>stato iniziale</span>
                        @endif
                        </p>
                            <div class="flex flex-start bg-blue-gray-50 overflow-hidden w-full font-sans rounded-full text-xs font-medium h-1">
                                @if ($activity->semaforo === 'rosso')
                                    <div class="flex justify-center items-center h-full overflow-hidden break-all rounded-full bg-red-600 text-white" style="width: 60%;"></div>
                                @elseif ($activity->semaforo === 'giallo')
                                    <div class="flex justify-center items-center h-full overflow-hidden break-all rounded-full bg-yellow-500 text-white" style="width: 60%;"></div>
                                @elseif ($activity->semaforo === 'verde')
                                    <div class="flex justify-center items-center h-full overflow-hidden break-all rounded-full bg-green-600 text-white" style="width: 60%;"></div>
                                @endif
                            </div>
                    </div>
                    @endif

                    @endforeach

                </td>
            </tr>
            @endforeach
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
          Filtro</h6>
  </div>
  <div class="p-6 pt-0">
    {{-- filtro per settore --}}
      <div class="flex items-start gap-4 py-3">
          <div
              class="relative p-1 after:absolute after:-bottom-6 after:left-2/4 after:w-0.5 after:-translate-x-2/4 after:bg-blue-gray-50 after:content-[''] after:h-4/6">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="currentColor"
                  aria-hidden="true" class="!w-5 !h-5 text-blue-gray-300">
                  <path fill-rule="evenodd"
                      d="M64 32C46.3 32 32 46.3 32 64V304v48 80c0 26.5 21.5 48 48 48H496c26.5 0 48-21.5 48-48V304 152.2c0-18.2-19.4-29.7-35.4-21.1L352 215.4V152.2c0-18.2-19.4-29.7-35.4-21.1L160 215.4V64c0-17.7-14.3-32-32-32H64z"
                      clip-rule="evenodd" />
              </svg>
          </div>
          <div>
              <p
                  class="antialiased font-sans text-sm leading-normal text-blue-gray-900 block font-medium">
                  Filtra per settore</p><span
                  class="block antialiased font-sans text-xs font-medium text-blue-gray-500">
                  @foreach ($industries as $industry)
                      <div class="py-1">
                          <input type="checkbox" name="industry" value="{{ $industry }}"
                              class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-blue-500 checked:bg-blue-500 checked:before:bg-blue-500 hover:before:opacity-10"
                              id="industry" wire:model.lazy="industryFilter">
                          <div
                              class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-white opacity-0 transition-opacity peer-checked:opacity-100">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                  viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                  stroke-width="1">
                                  <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                      clip-rule="evenodd"></path>
                              </svg>
                          </div>
                          <label for="industry">{{ $industry }}</label>
                      </div>
                  @endforeach


              </span>
          </div>
      </div>
      {{-- filtro per nome --}}
      <div class="flex items-start gap-4 py-3">
          <div
              class="relative p-1 after:absolute after:-bottom-6 after:left-2/4 after:w-0.5 after:-translate-x-2/4 after:bg-blue-gray-50 after:content-[''] after:h-4/6">
              <svg xmlns="http://www.w3.org/2000/svg"class="h-3.5 w-3.5" viewBox="0 0 576 512"fill="currentColor" stroke="currentColor"
              stroke-width="1"><path fill-rule="evenodd" d="M64 64C28.7 64 0 92.7 0 128V384c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H64zm16 64h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm16 80h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V336c0-8.8 7.2-16 16-16zm80-176c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V144zm16 80h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zM160 336c0-8.8 7.2-16 16-16H400c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V336zM272 128h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16zM256 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM368 128h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16zM352 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16V240zM464 128h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H464c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16zM448 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H464c-8.8 0-16-7.2-16-16V240zm16 80h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H464c-8.8 0-16-7.2-16-16V336c0-8.8 7.2-16 16-16z"  clip-rule="evenodd"/></svg>
          </div>
          <div>
              <p
                  class="antialiased font-sans text-sm leading-normal text-blue-gray-900 block font-medium">
                  Filtra per Nome</p><span
                  class="block antialiased font-sans text-xs font-medium text-blue-gray-500">
                <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                wire:model.lazy="nameFilter">
                </span>
          </div>
      </div>
      {{-- <div class="flex items-start gap-4 py-3">
          <div
              class="relative p-1 after:absolute after:-bottom-6 after:left-2/4 after:w-0.5 after:-translate-x-2/4 after:bg-blue-gray-50 after:content-[''] after:h-4/6">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                  aria-hidden="true" class="!w-5 !h-5 text-blue-gray-300">
                  <path
                      d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z">
                  </path>
              </svg>
          </div>
          <div>
              <p
                  class="antialiased font-sans text-sm leading-normal text-blue-gray-900 block font-medium">
                  Server payments for April</p><span
                  class="block antialiased font-sans text-xs font-medium text-blue-gray-500">21
                  DEC 9:34 PM</span>
          </div>
      </div> --}}
      {{-- <div class="flex items-start gap-4 py-3">
          <div
              class="relative p-1 after:absolute after:-bottom-6 after:left-2/4 after:w-0.5 after:-translate-x-2/4 after:bg-blue-gray-50 after:content-[''] after:h-4/6">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                  aria-hidden="true" class="!w-5 !h-5 text-blue-gray-300">
                  <path d="M4.5 3.75a3 3 0 00-3 3v.75h21v-.75a3 3 0 00-3-3h-15z">
                  </path>
                  <path fill-rule="evenodd"
                      d="M22.5 9.75h-21v7.5a3 3 0 003 3h15a3 3 0 003-3v-7.5zm-18 3.75a.75.75 0 01.75-.75h6a.75.75 0 010 1.5h-6a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z"
                      clip-rule="evenodd"></path>
              </svg>
          </div>
          <div>
              <p
                  class="antialiased font-sans text-sm leading-normal text-blue-gray-900 block font-medium">
                  New card added for order #4395133</p><span
                  class="block antialiased font-sans text-xs font-medium text-blue-gray-500">20
                  DEC 2:20 AM</span>
          </div>
      </div> --}}
      {{-- <div class="flex items-start gap-4 py-3">
          <div
              class="relative p-1 after:absolute after:-bottom-6 after:left-2/4 after:w-0.5 after:-translate-x-2/4 after:bg-blue-gray-50 after:content-[''] after:h-4/6">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                  aria-hidden="true" class="!w-5 !h-5 text-blue-gray-300">
                  <path
                      d="M18 1.5c2.9 0 5.25 2.35 5.25 5.25v3.75a.75.75 0 01-1.5 0V6.75a3.75 3.75 0 10-7.5 0v3a3 3 0 013 3v6.75a3 3 0 01-3 3H3.75a3 3 0 01-3-3v-6.75a3 3 0 013-3h9v-3c0-2.9 2.35-5.25 5.25-5.25z">
                  </path>
              </svg>
          </div>
          <div>
              <p
                  class="antialiased font-sans text-sm leading-normal text-blue-gray-900 block font-medium">
                  Unlock packages for development</p><span
                  class="block antialiased font-sans text-xs font-medium text-blue-gray-500">18
                  DEC 4:54 AM</span>
          </div>
      </div> --}}
      {{-- <div class="flex items-start gap-4 py-3">
          <div
              class="relative p-1 after:absolute after:-bottom-6 after:left-2/4 after:w-0.5 after:-translate-x-2/4 after:bg-blue-gray-50 after:content-[''] after:h-0">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                  aria-hidden="true" class="!w-5 !h-5 text-blue-gray-300">
                  <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"></path>
                  <path fill-rule="evenodd"
                      d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z"
                      clip-rule="evenodd"></path>
                  <path
                      d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z">
                  </path>
              </svg>
          </div>
          <div>
              <p
                  class="antialiased font-sans text-sm leading-normal text-blue-gray-900 block font-medium">
                  New order #9583120</p><span
                  class="block antialiased font-sans text-xs font-medium text-blue-gray-500">17
                  DEC</span>
          </div>
      </div> --}}
  </div>
</div>
</div>
