<x-layout>
    <x-slot name='title'>Create Job</x-slot>
    <h1>Create new Job</h1>
    <form action="/jobs" method="post">
        @csrf
        <input type="text" name="title" id="title" placeholder="title">
        <input type="text" name="description" id="description" placeholder="description">
        <button type="submit">Submit</button>
    </form>
</x-layout>
