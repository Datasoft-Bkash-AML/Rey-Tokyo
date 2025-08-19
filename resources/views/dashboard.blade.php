<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (auth()->user()->is_admin)
                        <h3 class="text-2xl font-bold mb-2">Admin Panel</h3>
                        <p class="mb-4">Welcome, {{ auth()->user()->name }}! You have admin access.</p>
                        <ul class="list-disc pl-6 mb-4">
                            <li><a href="#" class="text-indigo-600 hover:underline">Manage Products</a></li>
                            <li><a href="#" class="text-indigo-600 hover:underline">Manage Categories</a></li>
                            <li><a href="#" class="text-indigo-600 hover:underline">View Orders</a></li>
                            <li><a href="#" class="text-indigo-600 hover:underline">User Management</a></li>
                        </ul>
                    @else
                        <h3 class="text-2xl font-bold mb-2">My Account</h3>
                        <p class="mb-4">Welcome, {{ auth()->user()->name }}! Here you can view your orders and update your profile.</p>
                        <ul class="list-disc pl-6 mb-4">
                            <li><a href="#" class="text-indigo-600 hover:underline">My Orders</a></li>
                            <li><a href="#" class="text-indigo-600 hover:underline">Wishlist</a></li>
                            <li><a href="#" class="text-indigo-600 hover:underline">Account Settings</a></li>
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
