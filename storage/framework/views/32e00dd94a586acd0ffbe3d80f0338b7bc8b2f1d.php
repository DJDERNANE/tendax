

<?php $__env->startSection('title', 'Dashbord'); ?>
<?php $__env->startSection('content'); ?>

    <div class="grid-container">
        <div class="grid-item">
            <p> <i class="bi bi-cart-fill"></i> <span>Commands</span> </p>
            <div class="chart-container">
                <div class="labels">
                    <p>
                        <span></span>Product
                    </p>
                    <p>
                        <span></span>Product
                    </p>
                    <p>
                        <span></span>Product
                    </p>
                    <p>
                        <span></span>Product
                    </p>
                    <p>
                        <span></span>Product
                    </p>    
                    

                </div>
                <canvas id="myChart"></canvas>
            </div>
        </div>

        <div class="grid-item">
            <p> <i class="bi bi-cart-fill"></i> <span>Commands</span> </p>
           
        </div>
        <div class="grid-item">
            <p> <i class="bi bi-cart-fill"></i> <span>Commands</span> </p>
           
        </div>
        <div class="grid-item">
            <p> <i class="bi bi-cart-fill"></i> <span>Commands</span> </p>
           
        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [
                    'Livres',
                    'Retour',
                    'Confirmes'
                ],
                datasets: [{
                    label: 'Products',
                    data: [300, 50, 100],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)'
                    ],
                    hoverOffset: 4,
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false // Disable display of labels
                    }
                }
            }
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.storepanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tendaxe\resources\views/store/panel/dashboard.blade.php ENDPATH**/ ?>