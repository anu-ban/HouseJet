<h1>Search Properties</h1>
<?= $this->Form->create(null, ['type' => 'get']) ?>
<?= $this->Form->control('beds', ['label' => 'Minimum Beds']) ?>
<?= $this->Form->control('baths', ['label' => 'Minimum Baths']) ?>
<?= $this->Form->control('sq_ft', ['label' => 'Minimum Square Feet']) ?>
<?= $this->Form->control('price', ['label' => 'Maximum Price']) ?>
<?= $this->Form->button('Search') ?>
<?= $this->Form->end() ?>

<h2>Results</h2>
<table>
    <tr>
        <th>Title</th>
        <th>Beds</th>
        <th>Baths</th>
        <th>Sq Ft</th>
        <th>Price</th>
    </tr>
    <?php foreach ($properties as $property): ?>
    <tr>
        <td><?= h($property->title) ?></td>
        <td><?= h($property->beds) ?></td>
        <td><?= h($property->baths) ?></td>
        <td><?= h($property->sq_ft) ?></td>
        <td><?= h($property->price) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
  