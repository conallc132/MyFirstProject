<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>

    <h2 class="text-xl font-bold">{{ $job['title'] }}</h2>
    <p>Pays {{ $job['salary'] }} per year</p>

    <a href="/jobs" class="text-blue-500 hover:underline">
        ← Back to Jobs
    </a>
</x-layout>
