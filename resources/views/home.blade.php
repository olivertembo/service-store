<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Advertisements') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Showing all ads
                </div>
                <form>
                    <div class="p-6 bg-white border-b border-gray-200">
                        Filters: Title, date

                        <div class="grid grid-cols-3 gap-4">
                            <div>
                                <div class="relative mr-6 my-2">
                                    <input type="search" class="bg-purple-white shadow rounded border-0 p-3" placeholder="filter by title...">
                                </div>
                            </div>
                            <!-- ... -->
                            <div>
                                <div class="relative inline-flex self-center">
                                    <svg class="text-white bg-purple-700 absolute top-0 right-0 m-2 pointer-events-none p-2 rounded" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="40px" viewBox="0 0 38 22" version="1.1">
                                        <title>F09B337F-81F6-41AC-8924-EC55BA135736</title>
                                        <g id="ZahnhelferDE—Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="ZahnhelferDE–Icon&amp;Asset-Download" transform="translate(-539.000000, -199.000000)" fill="#ffffff" fill-rule="nonzero">
                                                <g id="Icon-/-ArrowRight-Copy-2" transform="translate(538.000000, 183.521208)">
                                                    <polygon id="Path-Copy" transform="translate(20.000000, 18.384776) rotate(135.000000) translate(-20.000000, -18.384776) " points="33 5.38477631 33 31.3847763 29 31.3847763 28.999 9.38379168 7 9.38477631 7 5.38477631" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <select class="text-2xl font-bold rounded border-2 border-purple-700 text-gray-600 h-14 w-60 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                                        <option default value="ASC">ASC</option>
                                        <option value="DSC">DESC</option>
                                    </select>


                                </div>

                            </div>
                            <div>
                                <x-datepicker />
                            </div>
                            <!-- component -->
                            <div>


                            </div>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>



    <section class="container px-6 py-4 mx-auto">

        @foreach($data['ads'] as $item)


        <div class="grid gap-6 mb-12 md:grid-cols-1 lg:grid-cols-1">
            <!-- Card 1 -->
            <div class="flex items-center p-4 bg-white border-2 border-gray-200 rounded-lg shadow-sm dark:bg-gray-800">
                <div class="images-ad">
                    @if($item['photo_1'])
                    <img alt="mountain" class="w-45 rounded-md border-2 border-gray-300 ad-image" src="{{ $item['photo_1'] }}" />
                    @endif
                    @if($item['photo_2'])
                    <img alt="mountain" class="w-45 rounded-md border-2 border-gray-300 ad-image" src="{{ $item['photo_2'] }}" />
                    @endif
                    @if($item['photo_3'])
                    <img alt="mountain" class="w-45 rounded-md border-2 border-gray-300 ad-image" src="{{ $item['photo_3'] }}" />
                    @endif
                </div>


                <div id="body" class="flex flex-col ml-5">
                    <h4 id="name" class="text-xl font-semibold mb-2">Add Title {{ $item['title']}} </h4>
                    <p id="job" class="text-gray-800 mt-2"> {{ $item['description']}} : Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="flex mt-5">


                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <br />
        <div class="center-align" style="text-align: center;">
            <ul class="pagination">
                @foreach($data['advertisements']['links'] as $key => $link)

                @if($key == 1 && $link['label'] == 1 && $data['advertisements']['current_page'] == 1)
                @else
                <li class="waves-effect {{ $link['active'] === true ? 'active' : '' }}"><a href="{{$link['url']}}"> {!! $link['label'] !!} </a></li>

                @endif

                @endforeach
            </ul>
        </div>
    </section>
    </x-app-layout>