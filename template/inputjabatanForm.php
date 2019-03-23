
<form class="form-horizontal alert alert-warning" name="jabatanList" id="empForm" ng-submit="insertInfo(jabatan);" hidden>
    <h3 class="text-center">Tambah Jabatan</h3>
    
    <div class="form-group">
        <label>Nama Jabatan</label>
        <input type="text" name="nama" class="form-control" placeholder="Nama Jabatan" ng-model="jabatan.nama" value="" autofocus required />
    </div>
    <div class="form-group">
        <!----validasi --->
        <p class="text-danger" ng-show="jabatanList.nama.$invalid && jabatanList.nama.$dirty">Nama Jabatan Kosong!</p>
    </div>
    <div class="form-group">
        <button class="btn btn-warning" ng-disabled="jabatanList.$invalid">simpan</button>
    </div>
</form>


