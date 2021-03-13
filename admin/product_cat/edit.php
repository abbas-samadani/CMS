<?php
$id = $_GET['id'];
$data = showeditproduct($id);
//var_dump($data);

if(isset($_POST['btn'])){
    $data=$_POST['frm'];
    editproduct($data,$id);
    header("location:dashboard.php?m=product&p=list");
}
?>

<h1 class="pageLables">افزودن محصول جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن محصول جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان محصول</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان محصول را وارد کنید" value="<?php echo $data['title'] ?>">
                    </div>


                    <label for="exampleInputPassword1">وضعیت نمایش</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm[status]" id="optionsRadios1" value="1" <?php if($data['status']==1){echo "checked";} ?>>فعال
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm[status]" id="optionsRadios1" value="0" <?php if($data['status']==0){echo "checked";} ?> > غیر فعال
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">لینک محصول</label>
                        <input type="text" name="frm[sort]" class="form-control" placeholder="لینک محصول مورد نظر را وارد کنید" value="<?php echo $data['sort'] ?>">
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
