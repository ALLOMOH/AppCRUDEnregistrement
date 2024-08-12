<table class="border-t-1 bg-gray-200 shadow-md leading-10 text-center rounded-b-lg  border-collapse border-slate-500 table-auto min-w-full">
    <caption class="caption-top border-collapse border border-spacing-10 font-bold size-full rounded-t-lg shadow">Liste etudiant</caption>
    <thead>
        <tr>
            <th class="border-r border-slate-600">#</th>
            <th class="border-b border-slate-600">Name</th>
            <th class="border-b border-slate-600">Surname</th>
            <th class="border-b border-slate-600">Level</th>
            <th class="border-b border-slate-600">Action</th>
        </tr>
    </thead>
    <tbody>

        @forelse ($etudiants as $etudiant)
            <tr class="odd:bg-white even:bg-slate-100">
                <td class=" border-r border-slate-70">{{ $tableId++}}</td>
                <td class="border-b border-slate-70">{{ $etudiant->name }}</td>
                <td class="border-b border-slate-70">{{ $etudiant->surname }}</td>
                <td class="border-b border-slate-70">{{ $etudiant->level }}</td>
                <td class="flex border-b justify-center gap-x-2  items-center ">
                    <button
                        wire:click="getEdit({{ $etudiant->id }})"
                        class="transition ease-in-out delay-15  hover:scale-110 duration-300
                        rounded-lg flex items-center jsutify-center h-10 w-12 bg-green-500 hover:bg-green-600 hover:text-white px-4 border border-collapse border-spacing-96"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                    </button>
                    <button
                        wire:click="destroy({{ $etudiant->id }})"
                        class="transition ease-in-out delay-15  hover:scale-110 duration-300
                        rounded-lg h-10 w-12 bg-red-500 hover:bg-red-600 hover:text-white px-4 border border-collapse border-spacing-96"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                            stroke="currentColor" className="size-6">
                            <path strokeLinecap="round" strokeLinejoin="round"
                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                    </button>
                </td>
            </tr>
        @empty
            <tr class="border border-slate-700">
                no fund student
            </tr>
        @endforelse
    </tbody>
</table>
