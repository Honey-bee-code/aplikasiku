<table id="example" class="table table-striped table-bordered" style="width: 100%">
    <thead>
        <tr>
            <td>No</td>
            <td>ID Barang</td>
            <td>Nama Barang</td>
            <td>Harga</td>
            <td>Jumlah Stok</td>
            <td>Tanggal Input</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php
            include 'koneksi.php';
            $no = 1;
            $query = "SELECT * FROM tabel_barang ORDER BY id_barang DESC";
            $dewan1 = $koneksi->prepare($query);
            $dewan1 -> execute();
            $res1 = $dewan1->get_result();

            if ($res1->num_rows>0)
            {
                while ($row = $res1->fetch_assoc())
                {
                    $id_barang = $row['id_barang'];
                    $nama_barang = $row['nama_barang'];
                    $harga = $row['harga'];
                    $jml_stok = $row['jml_stok'];
                    $tgl_input = $row['tgl_input'];
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $id_barang; ?></td>
            <td><?php echo $nama_barang; ?></td>
            <td><?php echo $harga; ?></td>
            <td><?php echo $jml_stok; ?></td>
            <td><?php echo $tgl_input; ?></td>
            <td width="150px">
                <button id="<?php echo $id_barang; ?>" class="btn btn-success btn-sm edit_data"><i class="fa fa-edit"></i>Edit</button>
                <button id="<?php echo $id_barang; ?>" class="btn btn-danger btn-sm hapus_data"><i class="fa fa-trash"></i>Hapus</button>
            </td>
        </tr>
        <?php   }
            } else
                { ?>
                <tr>
                    <td colspan='7'>Tidak ada data ditemukan</td>
                </tr>
        <?php   }   ?>
    </tbody>
</table>

<script src="js/data_barang.js" type="text/javascript"></script>