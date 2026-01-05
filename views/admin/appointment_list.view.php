<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<div class="min-h-screen mt-5 bg-white text-gray-800 p-10">
    <div class="shadow-lg rounded-lg overflow-hidden border border-gray-200">
        <table class="min-w-full text-sm">
            <thead class="bg-gray-100 text-gray-700 uppercase text-xs font-semibold">
                <tr>
                    <th class="px-6 py-3 text-left">First Name</th>
                    <th class="px-6 py-3 text-left">Last Name</th>
                    <th class="px-6 py-3 text-left">Middle Name</th>
                    <th class="px-6 py-3 text-left">Status</th>
                    <th class="px-6 py-3 text-left"></th>
                </tr>
            </thead>
            <tbody id = "appointment_table"class="bg-white divide-y divide-gray-200">
   
            </tbody>
        </table>
    </div>
</div>



<?php require base_path('views/partials/admin_footer.php'); ?>
