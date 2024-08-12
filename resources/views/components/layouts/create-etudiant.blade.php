<div class="container mx-auto p-4">
    <form class="space-y-4 ">
        <fieldset class="my-3 flex gap-5 shadow-sm border-l border-b border-spacing-56 p-5">
            <legend
                class="text-black font-bold text-left shadow-sm inline-flex gap-4 border-b p-3 my-5  border-b-slate-800">
                @if ($edit)
                    Edit Student
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                    </svg>
                @else
                    Add Student
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                    </svg>
                @endif
            </legend>
            @csrf
            <div class="w-60 inline-block ">
                <label for="name" class=" block text-sm font-medium text-gray-700">Name:
                    <input wire:model="name" type="text"
                        class="my-5 py-2 px-3 placeholder-slate-300 shadow-md focus:outline-none block  w-full rounded-md border-gray-300
                    focus:invalid:border-pink-500
                    disabled:shadow-none disabled:border-s-lime-200"
                        id="name" name="name" required>
                    @error('name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </label>
            </div>
            <div class="w-60 inline-block ">
                <label for="surname" class=" block text-sm font-medium text-gray-700">Surname:

                    <input wire:model="surname" type="surname"
                        class="my-5 py-2 px-3 placeholder-slate-300 shadow-md focus:outline-none block  w-full rounded-md border-gray-300
                    focus:invalid:border-pink-500
                    disabled:shadow-none disabled:border-s-lime-200"
                        id="surname" name="surname" required>
                    @error('surname')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </label>
            </div>
            <div class="w-60 inline-block ">
                <label for="level" class=" block text-sm font-medium text-gray-700">Level:
                    <input wire:model="level" type="text"
                        class="my-5 py-2 px-3 placeholder-slate-300 shadow-md focus:outline-none block  w-full rounded-md border-gray-300
                    focus:invalid:border-pink-500
                    disabled:shadow-none disabled:border-s-lime-200"
                        id="level" name="level" required>
                    @error('level')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </label>
            </div>
        </fieldset>
        @if (@session()->has('message'))
            <div
                class="alert border shadow-sm bg-green-300 rounded-md py-4 px-2 text-white size-max alert-success my-2">
                {{ session('message') }}
            </div>
        @endif
        @if ($edit)
            <div class="flex gap-3 my-5">
                <button wire:click.prevent="store()" type="submit"class="px-4 transition ease-in-out delay-15  hover:scale-110 duration-300
                     hover:bg-green-400  py-2 bg-green-500 text-white rounded-md">Update
                </button>
                <button wire:click.prevent="cancel()" type="submit"class="px-4 transition ease-in-out delay-15  hover:scale-110 duration-300
                     hover:bg-red-400 py-2 bg-red-500 text-white rounded-md">Cancel
                </button>
            </div>
        @else
            <button wire:click.prevent="store()" type="submit"
                class="px-4 transition ease-in-out delay-15  hover:scale-110 duration-300
                 hover:bg-blue-400 py-2 bg-blue-500 text-white rounded-md">Submit
            </button>
        @endif
    </form>
</div>
