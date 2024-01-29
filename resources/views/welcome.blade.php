<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-gray-100 flex flex-col justify-start items-center h-screen">
    <h1 class="mt-8 mb-4 text-2xl font-bold">Pixerama Leads</h1>
    <form action="/contacts" method="POST" class="bg-white p-8 rounded shadow-md w-72">
        @csrf
        <label for="name" class="block mb-2 text-sm font-medium text-gray-600">Nome:</label>
        <input type="text" id="name" name="name" required class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500">

        <label for="email" class="block mb-2 text-sm font-medium text-gray-600">E-mail:</label>
        <input type="email" id="email" name="email" required class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500">

        <label for="phone" class="block mb-2 text-sm font-medium text-gray-600">Telefone:</label>
        <input type="tel" id="phone" name="phone" required class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500">

        <label for="city" class="block mb-2 text-sm font-medium text-gray-600">Cidade:</label>
        <select id="city" name="city" required class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500">
            <option value="" disabled selected>Selecione a cidade</option>
            <option value="ES">Espirito Santo</option>
            <option value="MG">Minas Gerais</option>
            <option value="RJ">Rio De Janeiro</option>
            <option value="SP">São Paulo</option>
        </select>

        <label for="message" class="block mb-2 text-sm font-medium text-gray-600">Mensagem:</label>
        <textarea id="message" name="message" rows="4" required class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500"></textarea>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 focus:outline-none focus:shadow-outline-green">Enviar</button>
    </form>
</body>
</html>
