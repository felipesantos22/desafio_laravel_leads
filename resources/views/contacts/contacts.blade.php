<div class="py-6"> 
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-x-auto">
            <div class="bg-white shadow-md rounded-lg overflow-hidden"> 
                <table class="w-full">
                    <thead class="bg-gray-100 text-gray-800 uppercase">
                        <tr>
                            <th class="px-4 py-4 text-left text-xs font-medium">ID</th> 
                            <th class="px-4 py-4 text-left text-xs font-medium">Nome</th>
                            <th class="px-4 py-4 text-left text-xs font-medium">E-mail</th>
                            <th class="px-4 py-4 text-left text-xs font-medium">Telefone</th>
                            <th class="px-4 py-4 text-left text-xs font-medium">Cidade</th>
                            <th class="px-4 py-4 text-left text-xs font-medium">Mensagem</th>
                            <th class="px-4 py-4 text-left text-xs font-medium">Deletar</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($contacts as $contact)
                        <tr>
                            <td class="px-4 py-3">{{ $contact->id }}</td> 
                            <td class="px-4 py-3">{{ $contact->name }}</td>
                            <td class="px-4 py-3">{{ $contact->email }}</td>
                            <td class="px-4 py-3">{{ $contact->phone }}</td>
                            <td class="px-4 py-3">{{ $contact->city }}</td>
                            <td class="px-4 py-3">{{ $contact->message }}</td>
                            <td class="px-4 py-3">Botão de deletar aqui</td> 
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
