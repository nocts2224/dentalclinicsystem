<div class="p-10 text-center">
    <h1 class="text-4xl font-bold text-blue-700">Admin Dashboard</h1>
    <p class="mt-4 text-gray-600">Welcome, {{ Auth::user()->name }}!</p>

    <button class="bg-red-700 hover:bg-red-400 text-white font-semibold py-2 px-6 rounded-lg 
    shadow-md transition duration-200 ease-in-out focus:outline-none focus:ring-2
     focus:ring-blue-500 focus:ring-opacity-50 mt-5" wire:click="logout">Logout</button>
</div>
