<?php
class View
{
	static function viewhome()
	{
		global $ariacms;
		global $params;
?>
		<!DOCTYPE html>
		<html lang="vi">

		<head>
			<title><?= _VIEW_CART ?> - <?= ($ariacms->web_information->{$params->meta_title} != '') ? $ariacms->web_information->{$params->meta_title} : $ariacms->web_information->{$params->name}; ?></title>
			<meta name="description" content="<?= ($ariacms->web_information->{$params->meta_description} != '') ? $ariacms->web_information->{$params->meta_description} : $ariacms->web_information->{$params->name}; ?>" />
			<meta name="keywords" content="<?= ($ariacms->web_information->{$params->meta_keyword} != '') ? $ariacms->web_information->{$params->meta_keyword} : $ariacms->web_information->{$params->name}; ?>" />
			<meta property="og:title" content="<?= ($ariacms->web_information->{$params->meta_title} != '') ? $ariacms->web_information->{$params->meta_title} : $ariacms->web_information->{$params->name}; ?>" />
			<meta property="og:description" content="<?= ($ariacms->web_information->{$params->meta_description} != '') ? $ariacms->web_information->{$params->meta_description} : $ariacms->web_information->{$params->name}; ?>" />

			<?= $ariacms->getBlock("head"); ?>
		</head>

		<body>

			<?= $ariacms->getBlock("header"); ?>

			<section class="banner-area organic-breadcrumb">
				<div class="container">
					<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
						<div class="col-first">
							<h1><?= _VIEW_CART ?></h1>
							<nav class="d-flex align-items-center">
								<a href="<?= $ariacms->actual_link ?>"><?= _HOME ?><span class="lnr lnr-arrow-right"></span></a>
								<a href="javascript:void(0)"><?= _VIEW_CART ?></a>
							</nav>
						</div>
					</div>
				</div>
			</section>

			<section class="cart_area">
				<div class="container">
					<div class="cart_inner">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th scope="col" class="text-uppercase"><?= _PRODUCT ?></th>
										<th scope="col" class="text-uppercase"><?= _PRICE ?></th>
										<th scope="col" class="text-uppercase"><?= _QUANTITY ?></th>
										<th scope="col" class="text-uppercase"><?= _TOTAL ?></th>
										<th scope="col" class="text-uppercase"><i class="fa fa-trash pull-right"></i></th>
									</tr>
								</thead>
								<tbody>
									<?php
									$sum = 0;
									$count_ = 0;
									$total = 0;
									foreach ($_SESSION['orderCart'] as $productID => $qt) {
										$item = $ariacms->selectOne('e4_posts', 'id', '=', $productID);
										$sum    = ($item['price_status'] != 'deactive') ? $item["product_sale"] * $qt : 0;
										$total  += $sum;
										$count_++;
									?>
										<form method="GET" action="<?= $ariacms->actual_link ?>ajax/ajax.cart.php">
											<tr>
												<td>
													<div class="media">
														<div class="d-flex">
															<a target="_blank" href="<?= $ariacms->actual_link ?>chi-tiet/<?= $item["url_part"] ?>.html" class="img-80">
																<img style="width: 100px;" src="<?= ($item["image_thumb"]) ? $item["image_thumb"] : $item["image"] ?>" alt="<?= $item[$params->title] ?>">
															</a>
														</div>
														<div class="media-body">
															<a title="<?= $item[$params->title] ?>" target="_blank" href="<?= $ariacms->actual_link ?>chi-tiet/<?= $item["url_part"] ?>.html">
																<?= $ariacms->textLimit($item[$params->title], 16) ?>
															</a>
														</div>
													</div>
												</td>
												<td>
													<h5><?= ($item['product_sale'] > 0 && $item['price_status'] != 'deactive') ? $ariacms->formatPrice($item['product_sale']) . "" : _CONTACT; ?></h5>
												</td>
												<td>
													<div class="product_count">
														<input type="number" name="quantity" id="sst" min="0" maxlength="12" value="<?= $qt ?>" title="<?= _QUANTITY ?>" class="input-text qty" onchange="this.form.submit()">
													</div>
												</td>
												<td>
													<h5><?= ($sum > 0) ? $ariacms->formatPrice($sum) : ""; ?></h5>
												</td>
												<td>
													<a class="product-item-info delete-order pull-right" title="Xóa" href="<?= $ariacms->actual_link ?>ajax/ajax.cart.php?type=delete&pid=<?= $productID ?>" onclick="return confirm('Bạn chắc chắn muốn xóa?')">
														<i class="fa fa-times"></i>
													</a>
												</td>
											</tr>
											<input style="display:none;" type="submit" />
											<input type="hidden" name="pid" value="<?= $productID ?>" />
											<input type="hidden" name="type" value="edit" />

										</form>
									<?php
									}
									?>

									<tr>
										<td>
										</td>
										<td>
										</td>
										<td>
											<h5><?= _TOTAL ?></h5>
										</td>
										<td>
											<h5><?= ($total > 0) ? $ariacms->formatPrice($total) : 'Liên hệ' ?></h5>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<div class="billing_details">
						<div class="row">
							<div class="col-lg-12">
								<h3>Thông tin đặt hàng</h3>
								<form class="row contact_form" method="POST" action="<?= $ariacms->c_url ?>">
									<div class="col-md-12 form-group">
										<input type="text" class="form-control" id="txtName" name="txtName" placeholder="Họ và tên (*)" required>
									</div>
									<div class="col-md-6 form-group">
										<input type="text" class="form-control" id="txtPhone" name="txtPhone" placeholder="Số điện thoại (*)" required>
									</div>
									<div class="col-md-6 form-group">
										<input type="text" class="form-control" id="txtEmail" name="txtEmail" placeholder="Email" value="">
									</div>

									<div class="col-md-12 form-group">
										<input type="text" class="form-control" id="txtAddress" name="txtAddress" placeholder="Địa chỉ (*)" required>
									</div>
									<div class="col-md-12 form-group">
										<textarea rows="5" class="form-control" name="txtContent" placeholder="Ghi chú"></textarea>
									</div>
									<div class="col-md-12 form-group">
										<button type="submit" name="btnSubmit" value="sendOder" class="primary-btn">Xác nhận đặt hàng</button>
									</div>
								</form>
							</div>

						</div>
					</div>

				</div>
			</section>

			<?= $ariacms->getBlock("footer"); ?>
			<?= $ariacms->getBlock("footer_script"); ?>
		</body>

		</html>
<?php
	}
}
?>