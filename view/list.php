<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Danh sách san pham
        </div>
        <div class="card-body">
            <div class="col-12">
                <a class="btn btn-success mb-2" href="index.php?page=book&action=add">Thêm mới</a>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Publisher</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($books as $key => $book): ?>
                        <tr>
                            <td><?php echo ++$key ?></td>
                            <td><?php echo $book->name ?></td>
                            <td><?php echo $book->category ?></td>
                            <td><?php echo $book->publisher ?></td>
                            <td><?php echo $book->status ?></td>
                            <td style="height: 100px ; width: 150px" ><img src="view/uploads/<?php echo $book->image ?>" style="width: 100%; height: 100%" alt="error"></td>
                            <td><a href="./index.php?page=book&action=delete&id=<?php echo $book->id ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>