<!DOCTYPE html>
<html lang="en">
    <head>
        <!--start of head=-->
        <title>Store</title>
        <?php include '../view/head.php'; ?>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link href="../css/main.css" rel="stylesheet" type="text/css">

    </head>  <!--end of head=-->
    <body>
        <div class="page">
            <header>    
                <!--start of header=-->
                <?php include '../view/header.php'; ?>
                <!--start of header=-->
            </header>
            <nav>
                <!--start of navigation=-->
                <?php include '../view/nav.php'; ?>
                <!--End of navigation=-->
            </nav>
            <h2> Store Inventory</h2>
            <main>
                <!-- display a table of products -->
                <table>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th class="right">Price</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                    <?php foreach ($products as $product) : ?>
                        <tr>  
                            <td><?php echo $product['productType']; ?></td>
                            <td><?php echo $product['productName']; ?></td>
                            <td class="right"><?php echo $product['productPrice']; ?></td>
                            <td><form action="." method="post">
                                    <input type="hidden" name="action"
                                           value="delete_product">
                                    <input type="hidden" name="product_id"
                                           value="<?php echo $product['productID']; ?>">
                                    <input type="submit" value="Delete">
                                </form></td>

                            <td><form action="." method="post">
                                    <input type="hidden" name="action"
                                           value="edit_product">
                                    <input type="hidden" name="product_id"
                                           value="<?php echo $product['productID']; ?>" >
                                    <input type="submit" value="edit" />
                                </form></td>

                        </tr>
                    <?php endforeach; ?>
                </table>
                <a href="?action=add_product" class="button" style="vertical-align:middle"><span>Add Product</span></a>
            </main>
            <footer>
                <?php include '../view/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>
