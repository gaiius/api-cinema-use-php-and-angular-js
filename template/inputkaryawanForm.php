
<form class="form-horizontal alert alert-warning" name="karyawanList" id="empForm" ng-submit="insertInfo(karyawan);" hidden>
    <h3 class="text-center">Tambah Karyawan</h3>
    
    <div class="form-group">
        <label>Nama Bagian</label>
        <select name="id_bagian" class="form-control" ng-model="karyawan.id_bagian">
		<option value="">--pilih bagian--</option>
			<option ng-repeat="bagian in bagians" value="{{ bagian.id }}">{{ bagian.nama }}</option>
		</select>
    </div>
	
	    <div class="form-group">
        <label>Nama Jabatan</label>
        <select name="id_jabatan" class="form-control" ng-model="karyawan.id_jabatan">
		<option value="">--pilih Jabatan--</option>
			<option ng-repeat="jabatan in jabatans" value="{{ jabatan.id }}">{{ jabatan.jabatan }}</option>
		</select>
    </div>
	<div class="form-group">
        <label>Nik</label>
      <input type="text" name="nik" class="form-control" ng-model="karyawan.nik">
		
    </div>
	<div class="form-group">
        <label>Nama</label>
      <input type="text" name="nama" class="form-control" ng-model="karyawan.nama">
		
    </div>
	
	<div class="form-group">
        <label>Hak Cuti</label>
      <input type="text" name="hak_cuti" class="form-control" ng-model="karyawan.hak_cuti">
		
    </div>
    <div class="form-group">
        <!----validasi --->
        <p class="text-danger" ng-show="karyawanList.id_bagian.$invalid && karyawanList.id_jabatan.$dirty">Nama Bagian Kosong!</p>
    </div>
    <div class="form-group">
        <button class="btn btn-warning" ng-disabled="bagianList.$invalid">simpan</button>
    </div>
</form>


