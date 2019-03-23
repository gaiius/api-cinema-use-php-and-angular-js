
<form class="form-horizontal alert alert-warning" name="karyawanList" id="editForm" ng-submit="updateKaryawan(editKaryawan);" hidden>
    <h3 class="text-center">Edit Karyawan</h3>
     <input type="hidden" name="karyawan" class="form-control" ng-model="updateData.id_karyawan">
    <div class="form-group">
        <label>Nama Bagian</label>
        <select name="bagian" class="form-control" ng-model="updateData.id_bagian">
		<option value="">--pilih bagian--</option>
			<option ng-repeat="bagian in bagians" value="{{ bagian.id }}">{{ bagian.nama }}</option>
		</select>
    </div>
	
	    <div class="form-group">
        <label>Nama Jabatan</label>
        <select name="jabatan" class="form-control" ng-model="updateData.id_jabatan">
		<option value="">--pilih Jabatan--</option>
			<option ng-repeat="jabatan in jabatans" value="{{ jabatan.id }}">{{ jabatan.jabatan }}</option>
		</select>
    </div>
	<div class="form-group">
        <label>Nik</label>
      <input type="text" name="nik" class="form-control" ng-model="updateData.nik">
		
    </div>
	<div class="form-group">
        <label>Nama</label>
      <input type="text" name="nama" class="form-control" ng-model="updateData.nama">
		
    </div>
	
	<div class="form-group">
        <label>Hak Cuti</label>
      <input type="text" name="hak_cuti" class="form-control" ng-model="updateData.hak_cuti">
		
    </div>
    <div class="form-group">
        <!----validasi --->
        <p class="text-danger" ng-show="karyawanList.id_bagian.$invalid && karyawanList.id_jabatan.$dirty">Nama Bagian Kosong!</p>
    </div>
    <div class="form-group">
        <button class="btn btn-warning" ng-disabled="bagianList.$invalid">simpan</button>
    </div>
</form>


