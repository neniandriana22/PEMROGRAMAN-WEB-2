<?= $this->extend('admin/layout');?>

<?= $this->section('mainadmin') ?> 

<div class="content d-flex justify-content-center mt-5">
    <div>
        <h1 class="text-center">Data Pelanggan</h1>
        <table class="table table-bordered text-center">
            <thead class="thead-dark">
                <tr class="table-info">
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Neni Andriana</td>
                    <td>neniandriana22</td>
                    <td>nenijambi05@gmail.com</td>
                    <td>083170479069</td>
                    <td>Sembubuk,Rt.04</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Meri Andriani</td>
                    <td>meri_andriani12</td>
                    <td>meri_andriani12@gmail.com</td>
                    <td>081234567890</td>
                    <td>Merlung</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Tri Sulistiawati</td>
                    <td>trisulistiawati21</td>
                    <td>trisulistiawati@gmail.com</td>
                    <td>081234567890</td>
                    <td>Sungai Rengas</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Dina Komariah</td>
                    <td>dina_komariah15</td>
                    <td>dinakomariah@gmail.com</td>
                    <td>081234567890</td>
                    <td>Tebing Tinggi</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Ririn Rahmawati</td>
                    <td>ryryn_rahmawati12</td>
                    <td>mbakryryn@yahoo.com</td>
                    <td>081234567890</td>
                    <td>bungo</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Indo Masse</td>
                    <td>ima@gmail.com</td>
                    <td>masse@yahoo.com</td>
                    <td>081234567890</td>
                    <td>Sarolangun</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>