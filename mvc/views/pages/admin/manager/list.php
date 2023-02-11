<div>
    <div class="row">
        <div class="col-3 mb-3 p-3">
            <a href="<?= _WEB_ROOT . '/user' ?>" style="height: 200px;"
                class="d-flex p-3 align-items-center justify-content-around rounded-pill  text-center bg-success">
                <i class="display-3 fa-solid fa-users-line"></i>
                <h5 class="display-5 m-0"><?= $data['countUser'] ?> USER</h5>
            </a>
        </div>
        <div class="col-3 mb-3 p-3">
            <a href="<?= _WEB_ROOT . '/category' ?>" style="height: 200px;"
                class="d-flex p-3 align-items-center justify-content-around rounded-pill  text-center bg-info">
                <i class="display-3 fa-brands fa-elementor"></i>
                <h5 class="display-5 m-0"><?= $data['countCate'] ?> DANH MỤC SP</h5>
            </a>
        </div>
        <div class="col-3 mb-3 p-3">
            <a href="<?= _WEB_ROOT . '/product' ?>" style="height: 200px;"
                class="d-flex p-3 align-items-center justify-content-around rounded-pill  text-center bg-secondary">
                <i class="display-3 fa-solid fa-boxes-stacked"></i>
                <h5 class="display-5 m-0"><?= $data['countPro'] ?> SẢN PHẨM</h5>
            </a>
        </div>
        <div class="col-3 mb-3 p-3">
            <a href="<?= _WEB_ROOT . '/bill' ?>" style="height: 200px;"
                class="d-flex p-3 align-items-center justify-content-around rounded-pill  text-center bg-danger">
                <i class="display-3 fa-solid fa-list-check"></i>
                <h5 class="display-5 m-0"><?= $data['countBill'] ?> ĐƠN HÀNG</h5>
            </a>
        </div>
        <div class="col-3 mb-3 p-3">
            <a href="<?= _WEB_ROOT . '/bill' ?>" style="height: 200px;"
                class="d-flex p-3 align-items-center justify-content-around rounded-pill  text-center bg-warning">
                <i class="display-3 fa-solid fa-coins"></i>
                <h5 class="display-5 m-0">DOANH THU <p class="m-0"><?= numberFormat($data['sumBill']) ?></p>
                </h5>
            </a>
        </div>

    </div>
</div>