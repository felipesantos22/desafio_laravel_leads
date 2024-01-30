<div>
<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-x-auto">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <table class="w-full">
                    <tbody class="text-gray-700">
                        @foreach ($contacts as $contact)
                        <tr>
                            <td class="px-4 py-3">{{ $contact->name }}</td>
                            <td class="px-4 py-3">{{ $contact->email }}</td>
                            <td class="px-4 py-3">{{ $contact->phone }}</td>
                            <td class="px-4 py-3">{{ $contact->city }}</td>
                            <td class="px-4 py-3">{{ $contact->message }}</td>
                            <td class="px-4 py-3">
                                <button wire:click="deleteContact({{ $contact->id }})" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-red-500">Deletar</button>
                                {{-- <button wire:click="openUpdateModal({{ $contact->id }})" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">Atualizar</button> --}}
                            </td>                            
                        </tr>
                        @endforeach                  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- <div x-show="showUpdateModal">
    <form wire:submit.prevent="updateContact">
        <input type="text" wire:model="name">
        <input type="email" wire:model="email">
        <input type="text" wire:model="phone">
        <button type="submit">Salvar</button>
    </form>
</div> --}}

</div>