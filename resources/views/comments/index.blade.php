<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Comments') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('comment.save') }}" method="POST">
                        @csrf
                        <label for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Write a
                            comment</label>
                        <textarea name="comment" id="message" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900bg-gray-50 rounded-lg border
        border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600
        dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Your message..."></textarea>
                        <input type="hidden" name="user_id" value="{{ request('ref') }}">
                        <button type="submit"
                            class="rounded-md bg-indigo-600 mt-2 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 
        focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
        focus-visible:outline-indigo-600">
                            submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
>
