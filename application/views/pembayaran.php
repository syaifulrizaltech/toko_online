<div class="container-fluid">
    <div>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents())
                {
                    foreach ($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "Total Belanja Anda : Rp. ". number_format($grand_total,0,',','.');
                } ?>
            </div><br><br>
            
            <h4>Imput Alamat Pengiriman dan Pembayaran</h4>

            <form method="post" action="<?php echo base_url('dashboard/proses_pesanan') ?> ">

                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">No. Telepon</label>
                    <input type="text" name="no_telepon" placeholder="Nomer Telepon Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Jasa Pengiriman</label>
                    <select name="" id="" class="form-control">
                        <option value="">JNE</option>
                        <option value="">TIKI</option>
                        <option value="">POS INDONESIA</option>
                        <option value="">GOJEK</option>
                        <option value="">GRAB</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Pilihan BANK</label>
                    <select name="" id="" class="form-control">
                        <option value="">BCA - XXXXXX</option>
                        <option value="">BIN - XXXXXX</option>
                        <option value="">BRI - XXXXXX</option>
                        <option value="">MANDIRI - XXXXXX</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary" mb-3>Pesan</button>

            </form>
        </div>

        <div class="col-md-2"></div>
    </div>
</div>