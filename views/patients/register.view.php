<?php require base_path('views/partials/head.php'); ?>

<!-- component -->
<div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
  <div class="max-w-2xl w-full bg-white rounded-xl shadow-lg p-8">
    <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Register Account</h2>

    <form class="grid grid-cols-1 md:grid-cols-2 gap-4" method="POST">
      <!-- first name -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
        <input
          type="text"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg"
          name="first_name"
        />
      </div>

      <!-- last name -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
        <input
          type="text"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg"
          name="last_name"
        />
      </div>

      <!-- middle name -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Middle Name</label>
        <input
          type="text"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg"
          name="middle_name"
        />
      </div>

      <!-- age -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Age</label>
        <input
          type="number"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg"
          name="age"
        />
      </div>

      <!-- sex -->
      <div class="md:col-span-2">
        <span class="block text-sm font-medium text-gray-700 mb-1">Sex</span>
        <div class="flex items-center gap-4">
          <label class="flex items-center gap-2">
            <input
              type="radio"
              name="sex"
              value="male"
              class="text-gray-600 focus:ring-gray-500"
            />
            <span>Male</span>
          </label>
          <label class="flex items-center gap-2">
            <input
              type="radio"
              name="sex"
              value="female"
              class="text-gray-600 focus:ring-gray-500"
            />
            <span>Female</span>
          </label>
        </div>
      </div>

      <!-- email -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input
          type="email"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg"
          name="email"
        />
      </div>

      <!-- password -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <input
          type="password"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg"
          placeholder="••••••••"
          name="patients_password"
        />
      </div>

      <!-- full-width button -->
      <div class="md:col-span-2">
        <button
          type="submit"
          class="w-full bg-gray-600 cursor-pointer hover:bg-black text-white font-medium py-2.5 rounded-lg transition-colors"
        >
          Register Account
        </button>
      </div>
    </form>
  </div>
</div>

      <!-- confirm password -->
      <!-- <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
        <input
          type="password"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg"
          placeholder="••••••••"
          name="confirm_password"
        />
      </div> -->

<?php require base_path('views/partials/footer.php'); ?>
