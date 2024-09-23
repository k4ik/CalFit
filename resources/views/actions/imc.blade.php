<x-app-layout>
    <x-imc-calculator>
        <form action="{{ route('imc.calculate_imc') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="weight" class="block text-sm font-medium text-black dark:text-white">Peso (kg):</label>
                <input type="number" name="weight" id="weight" class="w-full mt-2 p-2 border rounded-md" value="{{ old('weight', $weight ?? '') }}" required>
            </div>

            <div class="mb-4">
                <label for="height" class="block text-sm font-medium text-black dark:text-white">Altura (cm):</label>
                <input type="number" name="height" id="height" class="w-full mt-2 p-2 border rounded-md" value="{{ old('height', $height ?? '') }}" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600" style="background-color: #3b82f6; opacity: 1;">
                Calcular IMC
            </button>
        </form>

        @isset($imc)
            <div class="mt-4">
                <h2 class="text-xl font-bold text-black dark:text-white">IMC: {{ $imc }}</h2>
            </div>
        @endisset
    </x-imc-calculator>
</x-app-layout>
