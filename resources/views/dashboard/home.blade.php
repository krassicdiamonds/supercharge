<x-layouts.auth>
<div>
<h2>
    {{ Auth::user()->name }} Welcome to the dashboard!
</h2>

<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button class="bg-black hover:shadow px-5 py-1 rounded-sm text-white text-sm capitalize transition-shadow duration-150" type="submit">Logout</button>
</form>
</div>
</x-layouts>