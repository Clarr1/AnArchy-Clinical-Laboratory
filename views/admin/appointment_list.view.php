<?php require base_path('views/partials/head.php'); ?>


<div class="min-h-screen bg-white text-gray-800 p-10">
    <div class="shadow-lg rounded-lg overflow-hidden border border-gray-200">
        <table class="min-w-full text-sm">
            <thead class="bg-gray-100 text-gray-700 uppercase text-xs font-semibold">
                <tr>
                    <th class="px-6 py-3 text-left">ID</th>
                    <th class="px-6 py-3 text-left">First Name</th>
                    <th class="px-6 py-3 text-left">Last Name</th>
                    <th class="px-6 py-3 text-left">Middle Name</th>
                    <th class="px-6 py-3 text-left">Status</th>
                    <th class="px-6 py-3 text-left"></th>
                    <th class="px-6 py-3 text-left"></th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                 <?php foreach($result as $row): ?>
                <tr class="hover:bg-gray-100 hover:scale-[1.01] transition transform duration-200">
                    <td class="px-6 py-4"><?= $row['appointment_id'];?></td>
                    <td class="px-6 py-4"><?= $row['fname'];?></td>
                    <td class="px-6 py-4"><?= $row['lname'];?></td>
                    <td class="px-6 py-4"><?= $row['mname'];?></td>
                    <td class="px-6 py-4"><?= $row['status'];?></td>
                    <td class="px-6 py-4"><a href="/AnArchyClinical-Laboratory/admin/appointment-details?appointment_id=<?= $row['appointment_id'];?>">View more</a></td>
                    <td class="px-6 py-4">
                        <?php if($row['status'] == 'pending'): ?>
                            <form method = "POST">
                                <input type="hidden" name="appointment_id" value="<?= $row['appointment_id']; ?>">
                                <button class="text-blue-600 hover:underline">Accept</button>
                            </form>
                        <?php endif; ?>
                    </td>
                </tr>
                  <?php endforeach; ?> 
            </tbody>
        </table>
    </div>
</div>



<?php require base_path('views/partials/footer.php'); ?>
