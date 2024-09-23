<x-app-layout>
    <div class="max-w-4xl mx-auto p-6 bg-white dark:bg-gray-800 shadow-md rounded-lg mt-4">
        <h1 class="text-2xl font-bold mb-4 text-black dark:text-white">Calculadora de Macronutrientes</h1>

        <form action="{{ route('macro.calculate_macronutrientes') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="get" class="block text-sm font-medium text-black dark:text-white">Seu Gasto Energético Total (GET):</label>
                <input type="number" name="get" id="get" class="w-full mt-2 p-2 border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="diet_type" class="block text-sm font-medium text-black dark:text-white">Tipo de Dieta:</label>
                <select name="diet_type" id="diet_type" class="w-full mt-2 p-2 border rounded-md" required>
                    <option value="deficit">Déficit Calórico</option>
                    <option value="manutencao">Manutenção</option>
                    <option value="superavit">Superávit Calórico</option>
                </select>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600" style="background-color: #3b82f6; opacity: 1;">
                Calcular Macronutrientes
            </button>
        </form>

        @isset($macros)
            <div class="mt-4">
                <h2 class="text-xl font-bold text-black dark:text-white">Macronutrientes:</h2>
                <ul class="mt-4">
                    <li class="text-black dark:text-white">Carboidratos: {{ $macros['carboidratos'] }}g</li>
                    <li class="text-black dark:text-white">Proteínas: {{ $macros['proteinas'] }}g</li>
                    <li class="text-black dark:text-white">Gorduras: {{ $macros['gorduras'] }}g</li>
                </ul>
            </div>
        @endisset
    </div>
</x-app-layout>
