<aside class="sidebar w-64 md:shadow transform -translate-x-full md:translate-x-0 transition-transform duration-150 ease-in bg-indigo-500">
    <div class="sidebar-content px-4 py-6">
        <ul class="flex flex-col w-full">
            <li class="my-px">
                <a href="{!! route('dashboard') !!}"
                   class="flex flex-row items-center h-10 px-3 rounded-lg @if(request()->route()->getName() == 'dashboard') text-gray-700 bg-gray-100 @else text-gray-300 hover:bg-gray-100 hover:text-gray-700 @endif">
                        <span class="flex items-center justify-center text-lg text-gray-400">
                            <svg fill="none"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 stroke-width="2"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 class="h-6 w-6">
                                <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                        </span>
                    <span class="ml-3">Dashboard</span> </a></li>

            <li class="my-px">
                <span class="flex font-medium text-sm text-gray-300 px-4 my-4 uppercase">Assets</span>
            </li>
            <li class="my-px">
                <a href="{!! route('articles') !!}"
                   class="flex flex-row items-center h-10 px-3 rounded-lg @if(request()->route()->getName() == 'articles') text-gray-700 bg-gray-100 @else text-gray-300 hover:bg-gray-100 hover:text-gray-700 @endif">
                    <span class="ml-3">Course Articles</span>
                </a>
            </li>
            <li class="my-px">
                <a href="{!! route('videos') !!}"
                   class="flex flex-row items-center h-10 px-3 rounded-lg @if(request()->route()->getName() == 'videos') text-gray-700 bg-gray-100 @else text-gray-300 hover:bg-gray-100 hover:text-gray-700 @endif">
                    <span class="ml-3">Course Videos</span>
                </a>
            </li>

            <li class="my-px">
                <span class="flex font-medium text-sm text-gray-300 px-4 my-4 uppercase">Courses</span></li>
            @foreach($courses as $course)
                <li class="my-px">
                    <a href="{!! route('course', [$course->code]) !!}" class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700">
                        <span class="ml-3">{{ $course->name }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</aside>

