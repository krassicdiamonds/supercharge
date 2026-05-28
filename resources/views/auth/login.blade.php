<x-layouts.guest>
    <div class="my-10">
        <form action="{{ route('login') }}" method="POST" class="bg-white shadow mx-auto py-5 border border-gray-200 rounded-sm w-4/5 sm:w-1/2">
        @csrf
        <div class="flex flex-col items-center gap-x-1">
                {{-- icon --}}
                <div class="p-2.5 border border-yellow-100 rounded-full">
                    <svg class="size-4 sm:size-6 text-yellow-200" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.69667 0.0403541C8.90859 0.131038 9.03106 0.354857 8.99316 0.582235L8.0902 6.00001H12.5C12.6893 6.00001 12.8625 6.10701 12.9472 6.27641C13.0319 6.4458 13.0136 6.6485 12.8999 6.80001L6.89997 14.8C6.76167 14.9844 6.51521 15.0503 6.30328 14.9597C6.09135 14.869 5.96888 14.6452 6.00678 14.4178L6.90974 9H2.49999C2.31061 9 2.13748 8.893 2.05278 8.72361C1.96809 8.55422 1.98636 8.35151 2.09999 8.2L8.09997 0.200038C8.23828 0.0156255 8.48474 -0.0503301 8.69667 0.0403541ZM3.49999 8.00001H7.49997C7.64695 8.00001 7.78648 8.06467 7.88148 8.17682C7.97648 8.28896 8.01733 8.43723 7.99317 8.5822L7.33027 12.5596L11.5 7.00001H7.49997C7.353 7.00001 7.21347 6.93534 7.11846 6.8232C7.02346 6.71105 6.98261 6.56279 7.00678 6.41781L7.66968 2.44042L3.49999 8.00001Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                </div>
                <h2 class="my-1 font-bold text-center">Login to Supercharge</h2>
            </div>

            {{-- don't have account --}}
            <div class="my-1 text-center">
                <h3 class="text-gray-500 text-xs">Don&apos;t have an account&quest; <span class="text-blue-500"> <a href="{{ route('show.register') }}">Register</a> </span></h3>
            </div>

            <div class="flex flex-col gap-y-2.5 mt-5 px-5">
                <div class="flex flex-col gap-y-0.5">
                    {{-- email --}}
                    <label for="email" class="block font-medium text-gray-600 text-sm">Email</label>

                    <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="example@mail.com" class="block hover:shadow px-1.5 py-1 border border-gray-300 rounded-sm outline-0 w-full font-medium text-black text-sm">
                </div>

                <div class="flex flex-col gap-y-0.5">
                    {{-- password --}}
                    <label for="password" class="block font-medium text-gray-600 text-sm">Password</label>

                    <input type="password" name="password" id="password" placeholder="********" class="block hover:shadow px-1.5 py-1 border border-gray-300 rounded-sm outline-0 w-full font-medium text-black text-sm">
                </div>

            </div>
             {{-- errors --}}
            <div class="px-5 py-1.5">
                @if ($errors->any())
                    <ul class="bg-red-100 p-0.5 rounded-sm">
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 text-xs">{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>

            {{-- submit --}}
            <div class="flex flex-col gap-y-2.5 mt-5 px-5">
                <button type="submit" class="bg-black hover:shadow px-5 py-1 rounded-sm w-full text-white text-sm capitalize transition-shadow duration-150 cursor-pointer">Login</button>
            </div>

    </form>
    </div>
</x-layouts>