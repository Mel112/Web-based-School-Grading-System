<x-teacher-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Handled Courses') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-5 ">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">      

    <div class="row">
        <div class="col-lg-12 mt-5 ml-8">
            <div class="pull-right">
                <a type="button" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" href="{{ route('teacher.courses.create') }}"> &plus; Add Course Handle</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <div class="flex flex-col ml-5 mr-5">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-5">
        <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
        <div class="overflow-hidden">
            <table class="min-w-full text-center border">
            <thead class="border-b bg-gray-800">
                <tr>
                <th scope="col" class="text-sm text-white px-6 py-4">
                    Code
                </th>
                <th scope="col" class="text-sm text-white px-6 py-4">
                    Name
                </th>
                <th scope="col" class="text-sm text-white px-6 py-4">
                    Section
                </th>
                <th scope="col" class="text-sm text-white px-6 py-4">
                    Year
                </th>
                <th scope="col" class="text-sm text-white px-6 py-4">
                    Action
                </th>
                </tr>
            </thead class="border-b">
            <tbody>
                @foreach($courses as $course)
                <tr class="bg-white border-b">
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $course->code }}</td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $course->name }}</td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $course->section }}</td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $course->year }}</td>
                    <td>
                        <form action="{{ route('teacher.courses.destroy', $course->id) }}" method="POST">
                            <a type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{ route('teacher.courses.users.index', $course->id) }}">View Students</a>
                            <a type="button" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded" href="{{ route('teacher.courses.edit', $course->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>

</div>
</div>
</div>
</div>
</x-teacher-layout>
