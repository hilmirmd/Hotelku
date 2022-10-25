<section>
    <h1><?php echo $judul ?></h1>
    <center>  
        <form action="<?= base_url('reservasi/cetak'); ?>" method="post"> 
            <table> 
                <tr align="left" > 
                    <th >NIK</th> 
                    <th>:</th> 
                    <td> 
                        <input type="text" name="nama" id="nama" size="29"> 
                    </td> 
                </tr> 
                <tr align="left"> 
                    <th>Nama Lengkap</th> 
                    <th>:</th> 
                    <td>
                        <input type="text" name="nis" id="nis" size="29"> 
                            
                    </td> 
                </tr>
                <tr align="left">
                <th>Jenis Kelamin</th> 
                    <th>:</th> 
                    <td>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan 
                </tr>  
                <tr align="left"> 
                    <th>Alamat</th> 
                    <th>:</th> 
                    <td>
                        <input type="text" name="kelas" id="kelas" size="29"> 
                           
                    </td> 
                </tr> 
                <tr align="left"> 
                    <th>Tipe Kamar</th> 
                    <th>:</th> 
                    <td> 
                <select name="tipe_kamar" id="tipe_kamar"> 
                    <option value="#"></option> 
                    <option value="standart_room">Standart Room</option> 
                    <option value="superior_room">Superior Room</option> 
                    <option value="deluxe_room">Deluxe Room</option> 
                    <option value="twin_room">Twin Room</option> 
                    <option value="single_room">Single Room</option> 
                    <option value="double_room">Double Room</option> 
                    <option value="family_room">Family Room</option> 
                    <option value="junior_suit">Junior Suit</option> 
                </select> 
                </td>
                </tr> 
                <tr align="left"> 
                    <th>Tanggal Checkin</th> <th>:</th> 
                <td>
                <input type="date" name="tanggal_checkin" id="tanggal_checkin"> 
                    <?= form_error('tanggal_checkin', '<small style="color:black">','</small>'); ?>
                </td> 
                </tr> 
                <tr align="left"> 
                    <th>Lama inap</th> 
                    <th>:</th> 
                    <td>
                    <input type="text" name="tempat_lahir" id="tempat_lahir" size="29"> 
                    </td> 
                </tr>
                
                <tr> 
                    <td colspan="3" align="center"><input type="submit" value="Simpan"> 
                    </td> 
                </tr> 
            </table> 
        </form> 
    </center> 
</section>