<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-200">
            <h1 class="text-center font-bold text-xl">Register!</h1>
            <form method="post" action="/register" class="mt-10">
            @csrf 
                <div class='mb-6'>
                    <label class="block my-2 uppercase font-bold text-xs text-gray-700" for="name">
                        name
                    </label>
                    <input class="border border-gray-400 p-2 w-full" 
                        type="text" name="name" id="name" required
                        value="{{old('name')}}">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class='mb-6'>
                    <label class="block my-2 uppercase font-bold text-xs text-gray-700" for="username">
                        username
                    </label>
                    <input class="border border-gray-400 p-2 w-full" 
                        type="text" name="username" id="username" 
                        value="{{old('username')}}" required>
                    @error('username')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class='mb-6'>
                    <label class="block my-2 uppercase font-bold text-xs text-gray-700" for="email">
                        email
                    </label>
                    <input class="border border-gray-400 p-2 w-full" 
                        type="text" name="email" id="email" 
                        value="{{old('email')}}" required>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class='mb-6'>
                    <label class="block my-2 uppercase font-bold text-xs text-gray-700" for="password">
                        password
                    </label>
                    <input class="border border-gray-400 p-2 w-full" 
                        type="password" name="password" id="password" required>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class='mb-6'>
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Submit
                    </button>
                </div>
                @if($errors->any())
                    <ul class="list-disc ml-8" >
                        @foreach($errors->all() as $error)
                            <li class="text-red-500 font-xs" >
                                {{$error}}
                            </li>
                        @endforeach
                    </ul>
                @endif
            </form>
        </main>
    </section>
</x-layout>