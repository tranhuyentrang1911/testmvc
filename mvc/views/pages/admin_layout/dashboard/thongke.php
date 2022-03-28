
<div class="m-content">
	<div class="row">
		<div class="col-lg-12">
			<div class="m-portlet m-portlet--tabs">
			    <div class="m-portlet__head">
			        <div class="m-portlet__head-tools">
			            <ul class="nav nav-tabs m-tabs-line m-tabs-line--success m-tabs-line--2x" role="tablist">
			                <li class="nav-item m-tabs__item">
			                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_portlet_base_demo_1_1_tab_content" role="tab" aria-selected="false">
			                        <i class="la la-tachometer"></i> Lương
			                    </a>
			                </li>
			                <li class="nav-item m-tabs__item">
			                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_portlet_base_demo_1_2_tab_content" role="tab" aria-selected="false">
			                        <i class="la la-tachometer"></i> Học Phí
			                    </a>
			                </li>
			                <li class="nav-item m-tabs__item">
			                    <a class="nav-link m-tabs__link active show" data-toggle="tab" href="#m_portlet_base_demo_1_3_tab_content" role="tab" aria-selected="true">
			                        <i class="la la-money"></i> Thu Nhập
			                    </a>
			                </li>
			            </ul>
			        </div>
			    </div>
			    <div class="m-portlet__body">
			        <div class="tab-content">
			            <div class="tab-pane" id="m_portlet_base_demo_1_1_tab_content" role="tabpanel">
			            	<div class="m-portlet">
							    <div class="m-portlet__body m-portlet__body--no-padding">
							        <div class="m-invoice-2">
							            <div class="m-invoice__wrapper">
							                <div class="m-invoice__head" style="background-image: url(../../assets/app/media/img//logos/bg-6.jpg);">
							                    <div class="m-invoice__container m-invoice__container--centered">
							                        <div class="m-invoice__logo" style="padding-top: 60px;">
							                            <a href="#">
							                                <h1>
							                                    LƯƠNG
							                                </h1>
							                            </a>

							                        </div>

							                    </div>
							                </div>
							                <div class="m-invoice__body m-invoice__body--centered">
							                    <div class="table-responsive">
							                        <table class="table">
							                            <thead>
							                                <tr>
							                                    <th>
							                                        GIÁO VIÊN
							                                    </th>
							                                    <th>
							                                        MÃ GIÁO VIÊN
							                                    </th>
							                                    <th>
							                                        HỆ SỐ LƯƠNG
							                                    </th>
							                                    <th>
							                                        THÀNH TIỀN
							                                    </th>
							                                </tr>
							                            </thead>
							                            <tbody>
                                                            <?php
                                                            $tongLuong = 0;
                                                            foreach ($data["teacher"] as $key => $value) { ?>                   			
							                                <tr>
							                                    <td>
							                                        <?php echo $value['ho']." ".$value['ten']; ?>
							                                    </td>
							                                    <td>
							                                        <?php echo $value['id_user']; ?>
							                                    </td>
							                                    <td>
							                                        <?php echo $value['hsl']; ?>
							                                    </td>
							                                    <td class="m--font-danger">
							                                        <?php echo number_format($value['luong'])." VND";
							                                        $tongLuong += $value['luong']; ?>
							                                    </td>
							                                </tr> 
							                            	<?php } ?>
							                            </tbody>
							                        </table>
							                    </div>
							                </div>
                                            
							                <div class="m-invoice__footer">
							                    <div class="m-invoice__table  m-invoice__table--centered table-responsive">
							                        <table class="table">
							                            <thead>
							                                <tr>
							                                    <th>
							                                        TỔNG
							                                    </th>
							                                </tr>
							                            </thead>
							                            <tbody>
							                                <tr>                           
							                                    <td class="m--font-danger">
							                                        <?php echo number_format($tongLuong)." VND"; ?>
							                                    </td>
							                                </tr>
							                            </tbody>
							                        </table>
							                    </div>
							                </div>
							            </div>
							        </div>
							    </div>
							</div>
		                </div>
			            <div class="tab-pane" id="m_portlet_base_demo_1_2_tab_content" role="tabpanel">
			                <div class="m-portlet">
							    <div class="m-portlet__body m-portlet__body--no-padding">
							        <div class="m-invoice-2">
							            <div class="m-invoice__wrapper">
							                <div class="m-invoice__head" style="background-image: url(../../assets/app/media/img//logos/bg-6.jpg);">
							                    <div class="m-invoice__container m-invoice__container--centered">
							                        <div class="m-invoice__logo" style="padding-top: 60px;">
							                            <a href="#">
							                                <h1>
							                                    Học Phí
							                                </h1>
							                            </a>

							                        </div>

							                    </div>
							                </div>
							                <div class="m-invoice__body m-invoice__body--centered">
							                    <div class="table-responsive">
							                        <table class="table">
							                            <thead>
							                                <tr>
							                                    <th>
							                                        HỌC SINH
							                                    </th>
							                                    <th>
							                                        MÃ HỌC SINH
							                                    </th>
							                                    <th>
							                                        LỚP
							                                    </th>
							                                    <th>
							                                        HỌC PHÍ
							                                    </th>
							                                    <th>
							                                    	ĐÃ NỘP
							                                    </th>
							                                </tr>
							                            </thead>
							                            <tbody>
                                                            <?php
                                                            $tongHP = 0;
                                                            $tongHPDN = 0;
                                                            foreach ($data['price'] as $key => $value) { ?>                   			
							                                <tr>
							                                    <td>
							                                        <?php echo $value['ho']." ".$value['ten']; ?>
							                                    </td>
							                                    <td>
							                                        <?php echo $value['id_user']; ?>
							                                    </td>
							                                    <td>
							                                        <?php echo $value['tenlop']; ?>
							                                    </td>
							                                    <td class="m--font-danger">
							                                        <?php echo number_format($value['sotien'])." VND";
							                                        $tongHP += $value['sotien']; ?>
							                                    </td>
							                                    <td class="m--font-danger">
							                                        <?php echo number_format($value['hocphidanop'])." VND";
							                                        $tongHPDN += $value['hocphidanop']; ?>
							                                    </td>
							                                </tr> 
							                            	<?php } ?>
							                            </tbody>
							                        </table>
							                    </div>
							                </div>
							                <div class="m-invoice__footer">
							                    <div class="m-invoice__table  m-invoice__table--centered table-responsive">
							                        <table class="table">
							                            <thead>
							                                <tr>
							                                    <th>
							                                        TỔNG
							                                    </th>
							                                    <th>
							                                        ĐÃ NHẬN
							                                    </th>
							                                </tr>
							                            </thead>
							                            <tbody>
							                                <tr>                           
							                                    <td class="m--font-danger">
							                                        <?php echo number_format($tongHP)." VND"; ?>
							                                    </td>
							                                    <td class="m--font-danger">
							                                        <?php echo number_format($tongHPDN)." VND"; ?>
							                                    </td>
							                                </tr>
							                            </tbody>
							                        </table>
							                    </div>
							                </div>
							            </div>
							        </div>
							    </div>
							</div>
			            </div>
			            <div class="tab-pane active show" id="m_portlet_base_demo_1_3_tab_content" role="tabpanel">
			                <div class="m-portlet">
							    <div class="m-portlet__body m-portlet__body--no-padding">
							        <div class="m-invoice-2">
							            <div class="m-invoice__wrapper">
							                <div class="m-invoice__head" style="background-image: url(../../assets/app/media/img//logos/bg-6.jpg);">
							                    <div class="m-invoice__container m-invoice__container--centered">
							                        <div class="m-invoice__logo" style="padding-top: 60px;">
							                                <h3>
							                                    Báo Cáo
							                                </h3>
							                        </div>
							                    </div>
							                </div>
											<div class="row m-row--no-padding m-row--col-separator-xl">
												<div class="col-md-12 col-lg-6 col-xl-6">
													<!--begin::Total Profit-->
													<div class="m-widget24">
														<div class="m-widget24__item">
															<h4 class="m-widget24__title">
																Học Phí
															</h4>
															<br>
															<span class="m-widget24__desc">
																Tổng
															</span>
															<span class="m-widget24__stats m--font-brand">
																<?php echo number_format($tongHP)." VND";$percent = $tongHPDN*100/$tongHP; ?>
															</span>
															<div class="m--space-10"></div>
															<div class="progress m-progress--sm">
																<div class="progress-bar m--bg-brand" role="progressbar" style="width: <?php echo $percent; ?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<span class="m-widget24__change">
																Đã Nộp
															</span>
															<span class="m-widget24__number">
																<?php echo round($percent); ?>
																%
															</span>
														</div>
													</div>
													
													<!--end::Total Profit-->
												</div>
												<div class="col-md-12 col-lg-6 col-xl-6">
													<!--begin::Total Profit-->
													<div class="m-widget24">
														<div class="m-widget24__item">
															<h4 class="m-widget24__title">
																Thu Nhập
															</h4>
															<br>
															<span class="m-widget24__desc">
																Tổng (đã trả lương cho GV)
															</span>
															<span class="m-widget24__stats m--font-danger">
																<?php echo number_format($tongHP-$tongLuong)." VND";
																if (($tongHP-$tongLuong)<0) {
																	$thunhap = abs($tongHP-$tongLuong)*100/abs($tongHPDN-$tongLuong);
																}
																else $thunhap = ($tongHPDN-$tongLuong)*100/($tongHP-$tongLuong);
																 ?>
															</span>
															<div class="m--space-10"></div>
															<div class="progress m-progress--sm">
																<div class="progress-bar m--bg-danger" role="progressbar" style="width: <?php echo $thunhap; ?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<span class="m-widget24__change">
																Đã nhận (hiện tại): <?php echo number_format($tongHPDN-$tongLuong)." VND"; ?>
															</span>
															<span class="m-widget24__number">
																<?php 
																echo round($thunhap); ?>%
															</span>
														</div>
													</div>
													
													<!--end::Total Profit-->
												</div>
											</div>
							                

							            </div>
							        </div>
							    </div>
							</div>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>
</div>
