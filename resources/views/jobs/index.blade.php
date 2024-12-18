<x-layout>
    <x-slot name='title'>Available Job Listings</x-slot>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        @forelse ($jobs as $job)
           <x-job-card :job="$job"/>
        @empty
            <p>No data to display</p>
        @endforelse ($jobs as $job)
    </div>
</x-layout>
