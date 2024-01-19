<?php 
    $mario = "Super";
    $section = 2 . 'b';
    
    /* constant
    define('constant in caps', 'content') */
    define('NAME', 'Nike');

    /* the content of the variable is reserved when 
    used in a sentence with double quotes */
    echo "hey my name is $mario";

    /*escape */
    echo "ninja screamed \"out loud\"";
    echo strtoupper($mario);
    echo strtolower($mario);
    echo strlen($mario);

    /* to use replacement function, 3 arguments are needed, 
    1st - the letter/word to be replaced
    2nd - the letter/word used instead
    3rd - the target variable */
    echo str_replace('m', 'w', $mario);
    
    $products = [
        ['name' => 'Shiny star', 'price' => 20],
        ['name' => 'Green shell', 'price' => 10],
        ['name' => 'Red shell', 'price' => 15],
        ['name' => 'Gold coin', 'price' => 5],
        ['name' => 'Lightning bolt', 'price' => 40],
        ['name' => 'banana skin', 'price' => 2],
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><?php echo $section ?></div>
    <div><?php echo NAME ?></div>
    <h1>Products</h1>
    <ul>
        <?php foreach($products as $product) { ?>
            <?php if($product['price'] > 20) { ?>
                <li><?php echo $product['name'];?></li>
            <?php } ?>
        <?php } ?>
    </ul>
    <h2>Products Catalogue</h2>
    <?php foreach($products as $product) { ?>
        <h4><?php echo $product['name']; ?></h4>
            <p>£<?php echo $product['price']; ?></p>
    <?php } ?>

</body>
</html>
