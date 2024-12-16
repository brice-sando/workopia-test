<x-layout>
    <x-slot name='title'>Create Job1</x-slot>
    <h1 class="text-3xl font-bold underline">Create new Job</h1>
    <form action="/jobs" method="post">
        @csrf
        <div class="mt-5">
            <input value="{{old('title')}}" type="text" name="title" id="title" placeholder="title">
            @error('title')
                <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
            @enderror
        </div>
        <div class="mt-5">
            <input value="{{old('description')}}" type="text" name="description" id="description" placeholder="description">
            @error('description')
                <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
            @enderror
        </div>
        <button class="mt-5  px-4 py-2 rounded bg-blue-900 text-white" type="submit">Submit</button>
    </form>
</x-layout>
