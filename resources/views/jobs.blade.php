<x-layout>
    <x-slot:heading>Jobs Page</x-slot:heading>
    <ul class="space-y-4">

        @foreach ($jobs as $job)
            <a class="block px-4 py-6 border border-gray-200 rounded-lg" href="/jobs/{{ $job['id'] }}">
                <div class="text-blue-500 font-bold text-sm">{{ $job->employer->name }}</div>
                <div>
                    <strong>{{ $job['title'] }}</strong>: pays {{ $job['salary'] }} per year.
                </div>
            </a>
        @endforeach
    </ul>
</x-layout>
