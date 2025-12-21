<?php require base_path('views/partials/head.php'); ?>

<div class="flex items-center justify-center h-screen">
  <button command="show-modal" commandfor="dialog"
    class="flex items-center gap-2 rounded-md bg-black px-4 py-2 text-sm font-semibold text-white hover:bg-gray-800">
    
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
      <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
    </svg>

    Set Appointment
  </button>
</div>

<el-dialog>
  <dialog id="dialog" aria-labelledby="dialog-title"
    class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
    
    <el-dialog-backdrop
      class="fixed inset-0 bg-gray-500/75 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in">
    </el-dialog-backdrop>

    <div tabindex="0"
      class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
      
      <el-dialog-panel
        class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all 
        data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out 
        data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-2xl data-closed:sm:translate-y-0 data-closed:sm:scale-95">

        <div class="bg-white px-6 py-5 sm:p-6">
          <h3 id="dialog-title" class="text-base font-semibold text-gray-900 mb-4">Enter Your Information</h3>
          
          <form id="info-form" class="grid grid-cols-2 gap-4" method="POST">
            
            <!-- first name -->
            <div>
              <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
              <input type="text" id="first_name" name="fname"
                class="mt-1 p-2 block w-full h-10 rounded-md border-gray-300 shadow-sm 
                focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <!-- middle name -->
            <div>
              <label for="middle_name" class="block text-sm font-medium text-gray-700">Middle Name</label>
              <input type="text" id="middle_name" name="mname"
                class="mt-1 p-2 block w-full h-10 rounded-md border-gray-300 shadow-sm 
                focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <!-- last name -->
            <div>
              <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
              <input type="text" id="last_name" name="lname"
                class="mt-1 p-2 block w-full h-10 rounded-md border-gray-300 shadow-sm 
                focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <!-- age -->
            <div>
              <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
              <input type="number" id="age" name="age"
                class="mt-1 block w-full h-10 rounded-md p-2 border-gray-300 shadow-sm 
                focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <!-- sex -->
            <div>
              <label for="sex" class="block text-sm font-medium text-gray-700">Sex</label>
              <select id="sex" name="sex"
                class="mt-1 block w-full h-10 rounded-md border-gray-300 shadow-sm 
                focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                <option value="">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </div>

            <!-- contact number -->
            <div>
              <label for="contact_number" class="block text-sm font-medium text-gray-700">Contact Number</label>
              <input type="tel" id="contact_number" name="contact_number"
                class="mt-1 p-2 block h-10 w-full rounded-md border-gray-300 shadow-sm 
                focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <!-- address + appointment date -->
            <div class="col-span-2 grid grid-cols-2 gap-4">
              <div>
                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                <input type="text" id="address" name="patient_address"
                  class="mt-1 p-2 block w-full h-20 rounded-md border-gray-300 shadow-sm 
                  focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
              <div>
                <label for="appointment_date" class="block text-sm font-medium text-gray-700">Appointment Date</label>
                <input type="date" id="appointment_date" name="appointment_date"
                  class="mt-1 block w-full h-10 rounded-md border-gray-300 shadow-sm 
                  focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>

            <!-- reason -->
            <div class="col-span-2">
              <label for="reason" class="block text-sm font-medium text-gray-700">Reason</label>
              <input type="text" id="reason" name="reason"
                class="mt-1 p-2 block w-full h-20 rounded-md border-gray-300 shadow-sm 
                focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
          </form>
        </div>

        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
          <button type="submit" form="info-form" command="close" commandfor="dialog"
            class="inline-flex w-full justify-center cursor-pointer rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-xs sm:ml-3 sm:w-auto">Submit</button>
          <button type="button" command="close" commandfor="dialog"
            class="mt-3 inline-flex w-full justify-center cursor-pointer rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
        </div>

      </el-dialog-panel>
    </div>
  </dialog>
</el-dialog>

<?php require base_path('views/partials/footer.php'); ?>
