<?php require base_path('views/partials/head.php'); ?>

<div class="min-h-screen bg-gray-100 flex items-center justify-center p-8">
    <div class="bg-white shadow-xl rounded-2xl w-full max-w-3xl p-10">
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
                </tbody>
            </table>
        </div>
        <?php else: ?>
            <p class="text-center text-gray-600 text-base mt-4">No appointment found.</p>
        <?php endif; ?>

        <div class="mt-8 text-center">
            <a href="/AnArchyClinical-Laboratory/admin/appointment-list" 
               class="inline-block bg-gray-800 text-white text-base px-6 py-2.5 rounded-lg hover:bg-gray-900 transition">
                Back to List
            </a>
        </div>
    </div>
</div>

<?php require base_path('views/partials/footer.php'); ?>
