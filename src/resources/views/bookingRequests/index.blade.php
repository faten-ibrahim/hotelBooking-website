<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rooms') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-700">
                    <h3 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Available Rooms') }}</br></br>
                    </h3>
                    {{-- ================================================== --}}
                    <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                        <thead>
                            <tr class="text-center font-bold">
                                <td class="border px-6 py-4">id</td>
                                <td class="border px-6 py-4">Status</td>
                                <td class="border px-6 py-4">client name</td>
                                <td class="border px-6 py-4">Room Number</td>
                                <td class="border px-6 py-4">Action</td>

                            </tr>
                        </thead>
                        @foreach ($bookingRequests as $request)
                            <tr>
                                <td class="border px-6 py-4">{{ $request->id }}</td>
                                <td class="border px-6 py-4">{{ App\Enums\BookingRequestStatus::getKey($request->status) }}</td>
                                <td class="border px-6 py-4">{{ $request->user->name }}</td>
                                <td class="border px-6 py-4">{{ $request->room_id }}</td>
                                <td class="border px-6 py-4">
                                    <x-responsive-nav-link :href="route('rooms.available')" :active="request()->routeIs('rooms.available')">
                                        {{ __('Approve') }}
                                    </x-responsive-nav-link>
                                    <x-responsive-nav-link :href="route('rooms.available')" :active="request()->routeIs('rooms.available')">
                                        {{ __('Reject') }}
                                    </x-responsive-nav-link>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                    <div class="mt-6">
                        {{ $bookingRequests->links() }}
                    </div>

                    {{-- ==================================================== --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
