<x-app-layout>
    <x-get-calculator>
        <div class="max-w-4xl mx-auto p-6 rounded-lg flex flex-col justify-center min-h-screen">
            <h1 class="text-2xl font-bold mb-4 mt-4 text-black dark:text-white">Calculate Your Total Energy Expenditure (TEE)</h1>
            <form action="{{ route('get.calculate_get') }}" method="POST" class="mt-4">
                @csrf
                <div class="mb-4">
                    <label for="gender" class="block text-sm font-medium text-black dark:text-white">Gender:</label>
                    <select name="gender" id="gender" class="w-full mt-2 p-2 border rounded-md" required>
                        <option value="men">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="weight" class="block text-sm font-medium text-black dark:text-white">Weight (kg):</label>
                    <input type="number" name="weight" id="weight" class="w-full mt-2 p-2 border rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="height" class="block text-sm font-medium text-black dark:text-white">Height (cm):</label>
                    <input type="number" name="height" id="height" class="w-full mt-2 p-2 border rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="age" class="block text-sm font-medium text-black dark:text-white">Age:</label>
                    <input type="number" name="age" id="age" class="w-full mt-2 p-2 border rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="activity" class="block text-sm font-medium text-black dark:text-white">Activity Level:</label>
                    <select name="activity" id="activity" class="w-full mt-2 p-2 border rounded-md" required>
                        <option value="sedentary">Sedentary</option>
                        <option value="lightly_active">Lightly Active</option>
                        <option value="moderately_active">Moderately Active</option>
                        <option value="very_active">Very Active</option>
                        <option value="extremely_active">Extremely Active</option>
                    </select>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                    Calculate TEE
                </button>
            </form>
            @isset($get)
                <div class="mt-4">
                    <h2 class="text-xl font-bold text-black dark:text-white">TEE: {{ $get }}</h2>
                </div>
            @endisset
        </div>
    </x-get-calculator>
</x-app-layout>
