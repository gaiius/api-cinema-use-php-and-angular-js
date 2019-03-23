
<form class="form-horizontal alert alert-warning" name="bagianList" id="editForm" ng-submit="UpadateCuti(cuti);" hidden>
    <h3 class="text-center">Edit Cuti</h3>
    
    <div class="form-group">
        <label>Nama Karyawan</label>
        <select  name="nama" class="form-control" ng-model="updateData.karyawan">
		<option value="">-- pilih karyawan --</option>
		<option  ng-repeat="karyawan in karyawans" value="{{ karyawan.id_karyawan }}">{{ karyawan.nama }}</select>
		</select>
    </div>
	<div class="form-group">
        <label>Tanggal</label>
        <input type="date" name="nama" class="form-control" placeholder="Tanggal" ng-model="updateData.tanggal" autofocus required />
    </div>
	<div class="form-group">
        <label>Jumlah Cuti</label>
        <input type="text" name="nama" class="form-control" placeholder="Jumlah" ng-model="updateData.jumlah"  autofocus required />
    </div>
	<input type="hidden" name="id" class="form-control" ng-model="updateData.id"/>
    <div class="form-group">
        <!----validasi --->
        <p class="text-danger" ng-show="bagianList.nama.$invalid && bagianList.nama.$dirty">Nama Karyawan Kosong!</p>
    </div>
    <div class="form-group">
        <button class="btn btn-warning" ng-disabled="bagianList.$invalid">simpan</button>
    </div>
</form>


