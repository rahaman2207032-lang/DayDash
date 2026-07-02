<!-- Modal Overlay -->
<div
  x-show="openTaskModal"
  x-transition
  class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm"
  style="display:none;">

  <!-- Modal -->
  <div
    @click.away="openTaskModal = false"
    class="w-full max-w-lg bg-white dark:bg-zinc-900 rounded-2xl shadow-2xl border border-gray-200 dark:border-zinc-700 p-8">

    <!-- Heading -->
    <div class="flex justify-between items-center mb-6">

      <h2 class="text-2xl font-bold">
        Create New Task
      </h2>

      <button
        @click="openTaskModal = false"
        class="text-gray-500 hover:text-red-500 text-2xl">

        &times;

      </button>

    </div>

    <!-- Form -->
    <form>

      <!-- Title -->
      <div class="mb-5">

        <label class="block mb-2 font-semibold">
          Title <span class="text-red-500">*</span>
        </label>

        <input
          type="text"
          placeholder="Enter task title..."
          class="w-full rounded-xl border border-gray-300 dark:border-zinc-700
                           bg-white dark:bg-zinc-800
                           px-4 py-3
                           focus:outline-none
                           focus:ring-2
                           focus:ring-primary">

      </div>

      <!-- Description -->
      <div class="mb-5">

        <label class="block mb-2 font-semibold">

          Description

          <span class="text-gray-400 text-sm">
            (Optional)
          </span>

        </label>

        <textarea
          rows="4"
          placeholder="Task description..."
          class="w-full rounded-xl border border-gray-300 dark:border-zinc-700
                           bg-white dark:bg-zinc-800
                           px-4 py-3
                           resize-none
                           focus:outline-none
                           focus:ring-2
                           focus:ring-primary"></textarea>

      </div>

      <!-- Due Date -->
      <div class="mb-5">

        <label class="block mb-2 font-semibold">

          Due Date

        </label>

        <input
          type="date"
          class="w-full rounded-xl border border-gray-300 dark:border-zinc-700
                           bg-white dark:bg-zinc-800
                           px-4 py-3
                           focus:outline-none
                           focus:ring-2
                           focus:ring-primary">

      </div>

      <!-- Priority -->
      <div class="mb-5">

        <label class="block mb-3 font-semibold">
          Priority
        </label>

        <div class="flex items-center gap-8">

          <label class="flex items-center gap-2 cursor-pointer">
            <input
              type="radio"
              name="priority"
              value="low"
              class="w-4 h-4 text-primary focus:ring-primary">

            <span>Low</span>
          </label>

          <label class="flex items-center gap-2 cursor-pointer">
            <input
              type="radio"
              name="priority"
              value="medium"
              class="w-4 h-4 text-primary focus:ring-primary">

            <span>Medium</span>
          </label>

          <label class="flex items-center gap-2 cursor-pointer">
            <input
              type="radio"
              name="priority"
              value="high"
              class="w-4 h-4 text-primary focus:ring-primary">

            <span>High</span>
          </label>

        </div>

      </div>

      <!-- Category -->
      <div class="mb-8">

        <label class="block mb-2 font-semibold">

          Category

        </label>

        <select
          class="w-full rounded-xl border border-gray-300 dark:border-zinc-700
                           bg-white dark:bg-zinc-800
                           px-4 py-3
                           focus:outline-none
                           focus:ring-2
                           focus:ring-primary">

          <option>Select Category</option>
          <option>Personal</option>
          <option>Study</option>
          <option>Work</option>

        </select>

      </div>

      <!-- Buttons -->
      <div class="flex justify-end gap-4">

        <button
          type="button"
          @click="openTaskModal = false"
          class="px-6 py-3 rounded-xl bg-gray-200 dark:bg-zinc-700 hover:bg-gray-300">

          Cancel

        </button>

        <button
          type="submit"
          class="px-6 py-3 rounded-xl bg-primary text-white hover:opacity-90">

          Create Task

        </button>

      </div>

    </form>

  </div>

</div>