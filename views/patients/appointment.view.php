<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/patients_nav.php'); ?>
<?php require base_path('views/partials/appointment_modal.php'); ?>

<div class="container mt-5 mx-auto px-4 py-6">
    <!-- Responsive Card Grid -->
    <div class="grid gap-6 
                grid-cols-1 
                sm:grid-cols-2 
                lg:grid-cols-3 
                xl:grid-cols-4">

        <!-- Card -->
        <div class="card bg-base-100 shadow-md hover:shadow-xl transition">
            <figure class="h-48">
                <img
                    src="/img/ob_package_1.jpg"
                    alt="img"
                    class="h-full w-full object-cover" />
            </figure>

            <div class="card-body">
                <h2 class="card-title text-lg">
                   OB PACKAGE 1
                </h2>

                <p class="text-sm text-gray-500">
                    A card component has a figure, a body part, and actions.
                </p>

            </div>
        </div>

        <!-- Card (Duplicate as needed) -->
        <div class="card bg-base-100 shadow-md hover:shadow-xl transition">
            <figure class="h-48">
                <img
                    src="/img/ob_package_2.jpg"
                    alt="Shoes"
                    class="h-full w-full object-cover" />
            </figure>

            <div class="card-body">
                <h2 class="card-title text-lg">
                    OB PACKAGE 2
                </h2>

                <p class="text-sm text-gray-500">
                    A card component has a figure, a body part, and actions.
                </p>
            </div>
        </div>

    </div>
</div>
<?php require base_path('views/partials/footer.php'); ?>
