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
                                <td class="border px-6 py-4">Number</td>
                                <td class="border px-6 py-4">Status</td>
                                <td class="border px-6 py-4">Type</td>
                                <td class="border px-6 py-4">Description</td>
                                <td class="border px-6 py-4">Action</td>

                            </tr>
                        </thead>
                        @foreach ($rooms as $room)
                            <tr>
                                <td class="border px-6 py-4">{{ $room->id }}</td>
                                <td class="border px-6 py-4">{{ App\Enums\RoomStatus::getKey($room->status) }}</td>
                                <td class="border px-6 py-4">{{ App\Enums\RoomType::getKey($room->type) }}</td>
                                <td class="border px-6 py-4">{{ $room->description }}</td>
                                <td class="border px-6 py-4">


                                    <form name="add-blog-post-form" id="add-blog-post-form" method="post"
                                        action="{{ route('bookingRequests.store') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input id="roomId" name="roomId" type="hidden"
                                                value="{{ $room->id }}">
                                        </div>
                                        <x-responsive-nav-link :href="route('bookingRequests.store')"
                                            onclick="event.preventDefault();
                                                     this.closest('form').submit();">
                                            {{ __('Book') }}
                                        </x-responsive-nav-link>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                    <div class="mt-6">
                        {{ $rooms->links() }}
                    </div>

                    {{-- ==================================================== --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
