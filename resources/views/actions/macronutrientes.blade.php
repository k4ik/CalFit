<x-app-layout>
    <div class="max-w-4xl mx-auto p-6 rounded-lg flex flex-col justify-center min-h-screen">
        <h1 class="text-2xl font-bold mb-4 text-black dark:text-white">Macronutrient Calculator</h1>
        <form action="{{ route('macro.calculate_macronutrientes') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="get" class="block text-sm font-medium text-black dark:text-white">Your Total Energy Expenditure (TEE):</label>
                <input type="number" name="get" id="get" class="w-full mt-2 p-2 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="diet_type" class="block text-sm font-medium text-black dark:text-white">Diet Type:</label>
                <select name="diet_type" id="diet_type" class="w-full mt-2 p-2 border rounded-md" required>
                    <option value="deficit">Caloric Deficit</option>
                    <option value="manutencao">Maintenance</option>
                    <option value="superavit">Caloric Surplus</option>
                </select>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                Calculate Macronutrients
            </button>
        </form>
        @isset($macros)
            <div class="mt-4">
                <h2 class="text-xl font-bold text-black dark:text-white">Macronutrients:</h2>
                <ul class="mt-4">
                    <li class="text-black dark:text-white">Carbohydrates: {{ $macros['carboidratos'] }}g</li>
                    <li class="text-black dark:text-white">Proteins: {{ $macros['proteinas'] }}g</li>
                    <li class="text-black dark:text-white">Fats: {{ $macros['gorduras'] }}g</li>
                </ul>
            </div>
        @endisset
    </div>
</x-app-layout>
