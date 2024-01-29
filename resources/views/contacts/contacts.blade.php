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
                                <button wire:click="openUpdateModal({{ $contact->id }})">Atualizar</button>
                            </td>                            
                        </tr>
                        @endforeach                  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div x-show="showUpdateModal" class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-75">
    <div class="bg-white rounded-lg overflow-hidden shadow-xl">
        <form wire:submit.prevent="updateContact" class="p-6">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nome:</label>
                <input type="text" id="name" wire:model="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                <input type="email" id="email" wire:model="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 font-bold mb-2">Telefone:</label>
                <input type="text" id="phone" wire:model="phone" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Salvar</button>
            </div>
        </form>
    </div>
</div>


</div>