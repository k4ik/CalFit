<x-app-layout>
    <x-imc-calculator>
        <div class="max-w-4xl mx-auto p-6 rounded-lg flex flex-col justify-center min-h-screen">
            <h1 class="text-2xl font-bold mb-4 text-black dark:text-white">Calculate Your Body Mass Index (BMI)</h1>
            <form action="{{ route('imc.calculate_imc') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="weight" class="block text-sm font-medium text-black dark:text-white">Weight (kg):</label>
                    <input type="number" name="weight" id="weight" class="w-full mt-2 p-2 border rounded-md" value="{{ old('weight', $weight ?? '') }}" required>
                </div>
                <div class="mb-4">
                    <label for="height" class="block text-sm font-medium text-black dark:text-white">Height (cm):</label>
                    <input type="number" name="height" id="height" class="w-full mt-2 p-2 border rounded-md" value="{{ old('height', $height ?? '') }}" required>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                    Calculate BMI
                </button>
            </form>
            @isset($imc)
                <div class="mt-4">
                    <h2 class="text-xl font-bold text-black dark:text-white">BMI: {{ $imc }}</h2>
                </div>
            @endisset
        </div>
    </x-imc-calculator>
</x-app-layout>
