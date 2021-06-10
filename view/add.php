<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Thêm mới Sách
        </div>
        <div class="card-body">
            <div class="col-12">
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Name Book</label>
                        <input type="text" name="name" class="form-control">
                        <?php if (isset($errors['name'])): ?>
                            <p class="text-danger"><?php echo $errors['name'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <input type="text" class="form-control" name="category">
                        <?php if (isset($errors['category'])): ?>
                            <p class="text-danger"><?php echo $errors['category'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Publisher</label>
                        <input type="text" class="form-control" name="publisher">
                        <?php if (isset($errors['publisher'])): ?>
                            <p class="text-danger"><?php echo $errors['publisher'] ?></p>
                        <?php endif; ?>
                    </div>     <div class="mb-3">
                        <label class="form-label">Status</label>
                        <input type="text" class="form-control" name="status">
                        <?php if (isset($errors['status'])): ?>
                            <p class="text-danger"><?php echo $errors['status'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label for="" class="form-label"></label>
                        <input type="file" name="fileUpload" id="fileUpload">
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                    <a type="button" href="index.php" class="btn btn-secondary">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
</div>


