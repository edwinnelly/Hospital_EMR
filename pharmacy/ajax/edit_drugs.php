    <?php
    include_once '../inc/controller.php';
    include_once '../inc/user_data.php';
    $add_roles = new controller;

     $dname = $add_roles->get_request('drug_name');
     $sid = $add_roles->get_request('sid');

    $drugs_class = $add_roles->get_request('drugs_class');

    $drugs_supply = $add_roles->get_request('drugs_supply');

    $qty = $add_roles->get_request('qty');

    $rqty = $add_roles->get_request('rqty');

    $costprice = $add_roles->get_request('costprice');

    $sprice = $add_roles->get_request('sprice');

    $brand = $add_roles->get_request('brand');

    $stock = $add_roles->get_request('stock');

    $drugs_cates = $add_roles->get_request('drugs_cates');

    $pdate = $add_roles->get_request('pdate');

    $exdate = $add_roles->get_request('exdate');

    $batch = $add_roles->get_request('batch');

    $new_class = $add_roles->update_drusg($dname, $drugs_class, $drugs_supply, $qty, $rqty, $costprice, $sprice, $brand, $stock, $drugs_cates, $pdate, $exdate, $batch, $hos_key,$user_id,$sid);
    if ($new_class == "success") {
        echo 'done';
    }