<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>ID</th>
        <th>Nama Barang</th>
        <th>Kuantitas</th>
    </tr>
    </thead>
    <?php foreach($data as $item): ?>
    <tr scope="row">
        <td><?= $item['id'] ?></td>
        <td><?= $item['nama'] ?></td>
        <td><span class="badge badge-<?= $item['kuantitas']>50? 'success' : 'danger'?> "><?= $item['kuantitas'] ?></span></td>
        <td>
            <a href="<?= BASE_URL. 'index.php?r=home/updatebarang/'.$item['id']?>" class = "badge">Update</a>
            <a href="<?= BASE_URL. 'index.php?r=home/deletebarang/'.$item['id']?>" class = "badge" onclick="return confirm)'apakah Anda yakin untuk menghaus data?'">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="<?= BASE_URL. 'index.php?r=home/insertbarang' ?>" class="btn btn-primary">Tambah Barang</a>