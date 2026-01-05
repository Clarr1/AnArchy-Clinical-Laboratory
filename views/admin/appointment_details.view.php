<?php require base_path('views/partials/head.php'); ?>

<div class="min-h-screen bg-gray-100 flex items-center justify-center p-8">
    <div class="bg-white shadow-xl rounded-2xl w-full max-w-3xl p-10">
        <div class="mb-8 text-start">
            <a href="/AnArchyClinical-Laboratory/admin/appointment-list" 
               class="inline-block bg-gray-800 text-white text-base px-3 py-2.5 rounded-lg hover:bg-gray-900 transition">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                </svg>
            </a>
        </div>
        <h1 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-3">
            Appointment Details
        </h1>

        <?php if($result): ?>
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
                <tbody class="divide-y divide-gray-200 text-gray-700 text-base">
                    <tr class="hover:bg-gray-50">
                        <td class="font-semibold w-1/3 px-6 py-3">First Name:</td>
                        <td class="px-6 py-3"><?= htmlspecialchars($result['fname']); ?></td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="font-semibold px-6 py-3">Last Name:</td>
                        <td class="px-6 py-3"><?= htmlspecialchars($result['lname']); ?></td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="font-semibold px-6 py-3">Middle Name:</td>
                        <td class="px-6 py-3"><?= htmlspecialchars($result['mname']); ?></td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="font-semibold px-6 py-3">Age:</td>
                        <td class="px-6 py-3"><?= htmlspecialchars($result['age']); ?></td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="font-semibold px-6 py-3">Sex:</td>
                        <td class="px-6 py-3"><?= htmlspecialchars($result['sex']); ?></td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="font-semibold px-6 py-3">Patient Address:</td>
                        <td class="px-6 py-3"><?= htmlspecialchars($result['patients_address']); ?></td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="font-semibold px-6 py-3">Contact Number:</td>
                        <td class="px-6 py-3"><?= htmlspecialchars($result['contact_number']); ?></td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="font-semibold px-6 py-3">Appointment Date:</td>
                        <td class="px-6 py-3"><?= htmlspecialchars($result['appointment_date']); ?></td>
                    </tr>

                    <tr class="hover:bg-gray-50 align-top">
                        <td class="font-semibold px-6 py-3">Reason:</td>
                        <td class="px-6 py-3">
                            <p class="bg-gray-50 border border-gray-200 rounded-lg p-3 leading-relaxed">
                                <?= nl2br(htmlspecialchars($result['reason'])); ?>
                            </p>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 align-top">
                        <td class="font-semibold px-6 py-3">
                            <select class="select select-md" id="statusSelect">
                                <option value="Approved" <?= $result['appointment_status'] === 'Approved' ? 'selected' : '' ?>>Approved</option>
                                <option value="Cancelled" <?= $result['appointment_status'] === 'Cancelled' ? 'selected' : '' ?>>Cancelled</option>
                            </select>

                            <button 
                                onclick="update_status(<?= $result['appointment_id'] ?>)" 
                                class="bg-gray-800 text-white px-3 py-1 rounded mt-2">
                                Confirm status
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php else: ?>
            <p class="text-center text-gray-600 text-base mt-4">No appointment found.</p>
        <?php endif; ?>


    </div>
</div>

<?php require base_path('views/partials/update_status.php'); ?>
