<x-app-layout>
    <x-get-calculator>
        <form action="{{ route('get.calculate_get') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="gender" class="block text-sm font-medium text-black dark:text-white">Gênero:</label>
                <select name="gender" id="gender" class="w-full mt-2 p-2 border rounded-md" required>
                    <option value="men">Masculino</option>
                    <option value="female">Feminino</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="weight" class="block text-sm font-medium text-black dark:text-white">Peso (kg):</label>
                <input type="number" name="weight" id="weight" class="w-full mt-2 p-2 border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="height" class="block text-sm font-medium text-black dark:text-white">Altura (cm):</label>
                <input type="number" name="height" id="height" class="w-full mt-2 p-2 border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="age" class="block text-sm font-medium text-black dark:text-white">Idade:</label>
                <input type="number" name="age" id="age" class="w-full mt-2 p-2 border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="activity" class="block text-sm font-medium text-black dark:text-white">Nível de Atividade:</label>
                <select name="activity" id="activity" class="w-full mt-2 p-2 border rounded-md" required>
                    <option value="sedentary">Sedentário</option>
                    <option value="lightly_active">Levemente Ativo</option>
                    <option value="moderately_active">Moderadamente Ativo</option>
                    <option value="very_active">Muito Ativo</option>
                    <option value="extremely_active">Extremamente Ativo</option>
                </select>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600" style="background-color: #3b82f6; opacity: 1;">
                Calcular GET
            </button>
        </form>

        @isset($get)
            <div class="mt-4">
                <h2 class="text-xl font-bold text-black dark:text-white">GET: {{ $get }}</h2>
            </div>
        @endisset
    </x-get-calculator>
</x-app-layout>
