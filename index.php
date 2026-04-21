<?php include 'header.php'; //include 사용?> 

<?php
$products = [
    [
        'name' => '키보드',
        'price' => 30000,
        'stock' => 10
    ],
    [
        'name' => '마우스',
        'price' => 15000,
        'stock' => 3
    ],
    [
        'name' => '모니터',
        'price' => 120000,
        'stock' => 0
    ]
];          //배열 작성 확인

function getStockMessage($stock)
{
    if ($stock >= 5) {
        return "재고 충분";
    } elseif ($stock >= 1) {
        return "재고 부족";
    } else {
        return "품절";
    }
}

// 총 재고 금액
$totalAmount = 0;

// 상품 개수
$productCount = count($products);
?>

<style>
.green { color: green; }
.orange { color: orange; }
.red { color: red; }
table { border-collapse: collapse; }
th, td { border: 1px solid #ccc; padding: 8px; }
</style>

<table>
    <tr>
        <th>상품명</th>
        <th>가격</th>
        <th>재고</th>
        <th>재고 상태</th>
    </tr>

    <?php foreach ($products as $product): //foreach문 사용 ?>
        <?php
            $stockMsg = getStockMessage($product['stock']);

            // 색상 결정, 조건문 사용
            if ($stockMsg == "재고 충분") {
                $class = "green";
            } elseif ($stockMsg == "재고 부족") {
                $class = "orange";
            } else {
                $class = "red";
            }

            // 총 금액 누적
            $totalAmount += $product['price'] * $product['stock'];
        ?>
        <tr>
            <td><?= $product['name'] ?></td>
            <td><?= number_format($product['price']) ?>원</td>  
            <td><?= $product['stock'] ?>개</td>
            <td class="<?= $class ?>"><?= $stockMsg ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<p>총 재고 금액: <?= number_format($totalAmount) ?>원</p>
<p>상품 수: <?= $productCount ?>개</p>

<?php include 'footer.php'; //include 사용?>