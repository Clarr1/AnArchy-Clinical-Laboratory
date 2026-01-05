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
<div class="card w-96 bg-base-100 card-md shadow-sm">
  <div class="card-body">
    <h2 class="card-title">Medium Card</h2>
    <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
    <div class="justify-end card-actions">
      <button class="btn btn-primary">Buy Now</button>
    </div>
  </div>
</div>


    </div>
</div>
<?php require base_path('views/partials/footer.php'); ?>
