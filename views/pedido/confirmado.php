<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'): ?>
    <h1>Tu pedido se ha confirmado</h1>
    <p>
        Tu pedido ha sido guardado con exito, una vez que realices el pago 
        será procesado y enviado.
    </p>
    <br>
    <div class='datos_pedidos'>
    <?php if (isset($pedido)): ?>
        <h3>Datos del pedido: </h3>

        Numero de pedido: <?= $pedido->id ?><br>
        Total a pagar: $ <?= $pedido->costo ?><br>
        Productos:
    </div>
        <table>
            <tr>
                <th>Imagen</th>
                <th>Nombre</th> 
                <th>Precio</th>
                <th>Unidades</th>
            </tr>
            <?php while ($producto = $productos->fetch_object()): ?>
                <tr>
                    <td>
                        <?php if ($producto->imagen != null): ?>
                            <img src="<?= base_url ?>uploads/imagen/<?= $producto->imagen ?>" class="img_carrito" />
                        <?php else: ?>
                            <img src="<?= base_url ?>assets/img/camiseta.png" class="img_carrito"/>
                        <?php endif ?>
                    </td>
                    <td>
                        <a href="<?= base_url ?>producto/ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a></td>
                    <td><?= $producto->precio ?></td>
                    <td><?= $producto->unidades ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php endif; ?>
<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete'): ?>
    <h1>Tu pedido No se ha podido confirmar</h1>
<?php endif; ?>
