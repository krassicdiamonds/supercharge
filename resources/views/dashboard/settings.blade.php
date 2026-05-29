<x-layouts.auth>
    <h3 class="text-center">settings</h3>
    <div class="text-center">
        <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="bg-black hover:shadow px-5 py-1 rounded-sm text-white text-sm capitalize transition-shadow duration-150 cursor-pointer" type="submit">Logout</button>
    </div>
</form>
</x-layouts>