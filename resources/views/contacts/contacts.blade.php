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
                            <td class="px-4 py-3">Botão de deletar aqui</td>
                        </tr>
                        @endforeach
                        {{-- {{ $contacts->links() }} --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>