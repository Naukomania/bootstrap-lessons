<div class="row">
    <div class="title-price-stone"><a href="/catalog/<?=$brand->name; ?>"><img src="<?=$brand->image_mini; ?>">Стоимость искусственного камня <?= $brand->title; ?></a></div>
</div>
<div class="price-container">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Коллекция</th>
                        <th><i class="fa fa-rub fa-2x"></i>за м.кв</th>
                        <th>Коллекция</th>
                        <th><i class="fa fa-rub fa-2x"></i> за м.кв</th>
                    </tr>
                </thead>
                <tbody>
                    <? $i = 0; ?>
                    <? foreach($brand->collections as $collection): ?>
                        <? if($i % 2 == 0): ?>
                            <tr class="itogo">
                        <? endif; ?>
                            <td><?= $collection->name; ?> <img src="<?= $collection->stone_logo; ?>"></td>
                            <td><?= $collection->price; ?></td>
                        <? $i++; ?>
                    <? endforeach; ?>
                    <? if($i % 2 == 1): ?><td></td><td></td></tr><? endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>