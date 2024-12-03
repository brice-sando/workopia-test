<x-layout>
    <x-slot name='title'>Create Job1</x-slot>
    <h1 class="text-3xl font-bold underline">Create new Job1</h1>
    <form action="/jobs" method="post">
        @csrf
        <input type="text" name="title" id="title" placeholder="title">
        <input type="text" name="description" id="description" placeholder="description">
        <button type="submit">Submit</button>
    </form>
</x-layout>
