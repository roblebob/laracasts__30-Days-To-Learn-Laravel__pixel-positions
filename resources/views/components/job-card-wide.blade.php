@props(['job'])

<x-panel class="flex flex-row gap-x-6">
    <div>
        <x-employer-logo/>
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>
        <h3 class="mt-3 font-bold text-xl group-hover:text-blue-800 transition-colors duration-300">{{ $job->title }}</h3>
        <p class="mt-auto text-sm text-gray-400">{{ $job->schedule }} - {{ $job->salary }}</p>

    </div>


    <div>
        @foreach($job->tags as $tag)
            <x-tag :$tag/>
        @endforeach
    </div>


</x-panel>
