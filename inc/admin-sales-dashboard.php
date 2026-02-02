<?php
    $data = sr_get_sales_data();
?>

<div class="wrap">
    <h1>Smart Resturant - Sales Dashboard</h1>

    <div class="sr-cards">
        <div class="sr-card">
            <h3>Total Revenue</h3>
            <p>
                <?php 
                    echo number_format($data['total_sales'], 2);
                ?>
            </p>
        </div>
    </div>

    <h2>Daily Sales</h2>
    <canvas id="dailyChart"></canvas>

    <h2>Monthly Sales</h2>
    <canvas id="monthlyChart"></canvas>

    <h2>Top Selling Menu Items</h2>
    <ul>
        <?php 
            foreach($data['top_items'] as $item) :
        ?>
            <li>
                <?php 
                    echo esc_html( get_the_title( $item['menu_id'] ) );
                ?>
                (<?php echo intval($item['qty']); ?> sold)
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<script>
    const dailyData   = <?php echo json_encode($data['daily']); ?>;
    const monthlyData = <?php echo json_encode($data['monthly']); ?>;
</script>