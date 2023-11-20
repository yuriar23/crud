
<form id="uploadclientes" enctype="multipart/form-data">
  <div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="row">
      <div class="col-md-6">
        <div class="mb-3">
          <label class="form-label" for="exampleInputFile">Importar desde CSV</label>
          <input id="file" type="file" name="file" accept=".csv">
          <div class="form-text text-muted"></div>
        </div>
      </div>
    </div>
    <button class="btn btn-primary" type="submit">Guardar CSV</button>
  </div>
</form>