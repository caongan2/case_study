<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Thêm mới Sách
        </div>
        <div class="card-body">
            <div class="col-12">
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Name Book</label>
                        <input type="text" name="name" class="form-control">
                        <?php if (isset($errors['name'])): ?>
                            <p class="text-danger"><?php echo $errors['name'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> Status</label>
                        <input type="email" class="form-control" name="email">
                        <?php if (isset($errors['category'])): ?>
                            <p class="text-danger"><?php echo $errors['category'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="text" class="form-control" name="address">
                        <?php if (isset($errors['image'])): ?>
                            <p class="text-danger"><?php echo $errors['image'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Publishing company</label>
                        <input type="text" class="form-control" name="address">
                        <?php if (isset($errors['publisher'])): ?>
                            <p class="text-danger"><?php echo $errors['publisher'] ?></p>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                    <a type="button" href="index.php" class="btn btn-secondary">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
</div>


