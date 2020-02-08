<div class="row">
    <div class="col-lg-12"><br />
       
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('konsultasi'); ?>">konsultasi</a></li>
            <li class="active">Data Konsultasi</li>
        </ol>

        <?php
            
            if(!empty($message)) {
                echo $message;
            }
        ?>

    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-heading">
                Data Konsultasi
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">

				<?php echo form_open_multipart('konsultasi/insert', array('class' => 'form-horizontal', 'id' => 'jvalidate')) ?>

				<div class="form-group">						
					<div class="checkbox">

					<label><input name="cekbox[]" type="checkbox" value="">Apakah nyeri panggul diawal kehamilan</label>

					</div>

					<div class="checkbox">

					<label><input name="cekbox[]" type="checkbox" value="">Ada pendarahan yang keluar dari vagina ?</label>

					</div>

					<div class="checkbox">

					<label><input name="cekbox[]" type="checkbox" value="">apakah nyeri pada perut bawah?</label>

					</div>

					<div class="checkbox">

					<label><input name="cekbox[]" type="checkbox" value="">apakah cepat merasa lelah dan lemah yang ekstrim?</label>

					</div>

					<div class="checkbox">

					<label><input name="cekbox[]" type="checkbox" value="">apakah nyeri atau rasa terbakar saat buang air kecil?</label>

					</div>

					<div class="checkbox">

					<label><input name="cekbox[]" type="checkbox" value="">apakah urinyang berbau tidak enak atau terlihat keruh kemerahan?</label>

					</div>

					<div class="checkbox">

					<label><input name="cekbox[]" type="checkbox" value="">apakah bengkak diwajah atau sekitar mata ?</label>

					</div>

					<div class="checkbox">

					<label><input name="cekbox[]" type="checkbox" value="">apakah tekanan darah tinggi?</label>

					</div>

					<div class="checkbox">

					<label><input name="cekbox[]" type="checkbox" value="">apakah peningkatan gula darah dan punya riwayat keluarga diabetes?</label>

					</div>

					<div class="checkbox">

					<label><input name="cekbox[]" type="checkbox" value="">apakah mengalami mual dan muntah parah persisten selama kehamilan?</label>

					</div>

					<div class="checkbox">

					<label><input name="cekbox[]" type="checkbox" value="">apakah menyebabkan penurunan berat badan?</label>

					</div>

					<div class="checkbox">

					<label><input name="cekbox[]" type="checkbox" value="">apakah mengalami dehidrasi terus menerus?</label>

					</div>
					<br/>

					<div class="col-md-30">

					<input type="submit" name="submit" value="Submit">

					</div>
					

					
				</div>

				<?php echo form_close(); ?>


				

				
				<?php 
				// if($konsultasi->id_gejala)
				
				
				?>
					 
					
                            
                            <!-- /.table-responsive -->
                            
            </div>
                        <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>




