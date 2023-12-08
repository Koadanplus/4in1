<?php
    extract($productone);
    if($img!=""){
        $img="../img/".$img;
        if(file_exists($img)){
            $hinh="<img src='".$img."' width='120'>";
        }
        else{
            $hinh="";
        }
    }
    // trùng với name cattalog
    $productname=$name;
    $productid=$id;
    // load ds catalog ra select\
    $select_html='';
    foreach ($cataloglist as $item){
        extract ($item);
        if($id==$idcatalog){
            $scl="selected";
        }
        else{
            $slc="";
        }
        $select_html.='<option value="'.$id.'" '.$slc.'>'.$name.'</option>';
    }
    ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <section class="content">

        <form action="index.php?page=updatesp" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="mb-3">
                    <label for="topic-name" class="col-form-label">Danh mục:</label>

                    <select name="idcatalog">
                        <?=$select_html?>
                    </select>
                </div>
                <div class=" modal-body">
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Tên sản phẩm:</label>
                        <input type="text" class="form-control" name="name" value="<?=$productname?>">
                    </div>

                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Giá</label>
                        <input type="text" class="form-control" name="price" value="<?=$price?>">
                    </div>

                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Hình:</label>
                        <input type="file" class="form-control" name="img">
                        <?=$hinh?>
                    </div>
                </div>
                <div class=" modal-footer justify-content-between">
                    <input type="hidden" name="id" value="<?=$productid?>">
                    <input type="hidden" name="hinhcu" value="<?=$img?>">
                    <input type="submit" class="btn btn-secondary" name="btnupdate" data-dismiss=" modal"
                        value="Cập Nhập">
                    <input type=" button" class="btn btn-primary" value="Nhập Lại">
                </div>
        </form>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->