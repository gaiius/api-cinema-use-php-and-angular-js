
<form class="form-horizontal alert alert-warning" name="bagianList" id="editForm" ng-submit="UpdateJabatan(editJabatan);" hidden>
    <h3 class="text-center">Edit Jabatan</h3>
    <input type="hidden" name="id" ng-model="jabatanInfo.id">
    <div class="form-group">
        <label>Nama Jabatan</label>
        <input type="text" name="nama_jabatan" class="form-control" placeholder="Nama Jabatan" ng-model="jabatanInfo.nama" value="" autofocus required />
    </div>
    <div class="form-group">
        <!----validasi --->
        <p class="text-danger" ng-show="bagianList.nama.$invalid && bagianList.nama.$dirty">Nama Bagian Kosong!</p>
    </div>
    <div class="form-group">
        <button class="btn btn-warning" ng-disabled="bagianList.$invalid">simpan</button>
    </div>
</form>


