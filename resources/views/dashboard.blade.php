@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="space-y-6">

    {{-- Calendar --}}
    @include('components.calendar')

    <!-- Top Bar -->
    <div class="flex flex-col md:flex-row justify-between items-center gap-4">

        <!-- Tabs -->
        <div class="flex rounded-xl overflow-hidden border border-gray-200 dark:border-zinc-800">

            <button
                class="px-6 py-3 bg-primary text-white font-medium">

                Pending

            </button>

            <button
                class="px-6 py-3 bg-white dark:bg-zinc-900 hover:bg-gray-100 dark:hover:bg-zinc-800">

                Completed

            </button>

        </div>

        <!-- Right Side -->
        <div class="flex gap-3">

            <!-- Sort -->
            <select
                class="rounded-xl border border-gray-300 dark:border-zinc-700 bg-white dark:bg-zinc-900 px-4">

                <option>Sort</option>

            </select>

            <!-- Add Task -->
            <button
                class="bg-primary text-white px-6 py-3 rounded-xl hover:opacity-90 transition">

                + Add Task

            </button>

        </div>

    </div>

    <!-- Task List -->
    <div class="grid lg:grid-cols-2 gap-6">

        @include('components.task-card')

    </div>

</div>

@endsection