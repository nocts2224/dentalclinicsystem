<div class="max-w-md mx-auto mt-20 p-6 bg-white rounded shadow">
    <span>
        <div class="fixed-top"><button class="bg-blue-700 hover:bg-blue-800 text-white font-semibold py-2 px-6 rounded-lg 
    shadow-md transition duration-200 ease-in-out focus:outline-none focus:ring-2
     focus:ring-blue-500 focus:ring-opacity-50 mb-5" wire:click="toPublicPage">Go back to Public Page</button></div>
    </span>
    <h1 class="text-2xl font-bold mb-4">Login</h1>

    @if (session()->has('error'))
        <div class="text-red-500">{{ session('error') }}</div>
    @endif


    <form wire:submit.prevent="login">
        <div class="mb-4">
            <label>Email</label>
            <input type="email" wire:model.live="email" class="w-full border px-3 py-2 rounded">
            @error('email') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label>Password</label>
            <input type="password" wire:model.live="password" class="w-full border px-3 py-2 rounded">
            @error('password') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Login</button>
    </form>
</div>