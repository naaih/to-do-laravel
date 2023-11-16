@extends('layouts.default')

@section('content')
<section class="mb-6">
    <div class="max-w-screen-md mx-auto">
        <form action="{{ url("/todo") }}" method="POST">
            @csrf
            <div class="flex justify-center shadow rounded @error('title') border border-red-500 @enderror">
                <input type="text" name="title" id="title" class="w-full px-4 py-2 outline-none">
                <input type="submit" value="create" class="px-4 py-2 bg-gray-600 text-white rounded-r">
            </div>
            @error('title')
            <p class="text-red-500 font-semibold">Please Enter a Value :)</p>
            @enderror
        </form>
    </div>
</section>

<section>
    <div class="max-w-screen-md mx-auto">
        @foreach ($todos as $todo)
        <div class="bg-white p-4 rounded-xl shadow mb-5 flex justify-between">
            <div class="title">
                {{ $todo->title }}
            </div>
            <form action={{ route('todo.destroy', $todo) }} post="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500">DELETE</button>
            </form>
        </div>
        @endforeach
    </div>
</section>
@endsection