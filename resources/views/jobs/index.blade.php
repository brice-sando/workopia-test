<x-layout>
    <x-slot name='title'>Available Job Listings</x-slot>
    <h1 class="text-2xl">Job List</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        @forelse ($jobs as $job)
            <div>
                {{ $job->title }}
            </div>
        @empty
            <p>No data to display</p>
        @endforelse ($jobs as $job)
    </div>
</x-layout>
