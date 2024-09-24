<x-app-layout>
    <section class="flex flex-wrap justify-center items-center gap-4 min-h-screen text-black dark:text-white bg-gray-300 dark:bg-gray-900">
        <article class="text-center bg-gray-100 dark:bg-gray-800 p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
            <a href="{{ route('imc.index') }}" class="no-underline text-black dark:text-white hover:text-blue-500 dark:hover:text-blue-300">
                <h2 class="text-2xl font-bold mb-2">IMC</h2>
                <p>Calcule seu Índice de Massa Corporal</p>
            </a>
        </article>
        <article class="text-center bg-gray-100 dark:bg-gray-800 p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
            <a href="{{ route('get.index') }}" class="no-underline text-black dark:text-white hover:text-blue-500 dark:hover:text-blue-300">
                <h2 class="text-2xl font-bold mb-2">GET</h2>
                <p>Calcule seu Gasto Energético Total</p>
            </a>
        </article>
        <article class="text-center bg-gray-100 dark:bg-gray-800 p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
            <a href="{{ route('macro.index') }}" class="no-underline text-black dark:text-white hover:text-blue-500 dark:hover:text-blue-300">
                <h2 class="text-2xl font-bold mb-2">Macronutrientes</h2>
                <p>Calcule seus macronutrientes</p>
            </a>
        </article>
    </section>
</x-app-layout>
