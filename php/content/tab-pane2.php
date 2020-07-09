 <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                    <div class="specification-table">
                                        <table>
                                            <tr>
                                                <td class="p-catagory">Customer Rating</td>
                                                <td>
                                                    <div class="pd-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <span>(5)</span>
                                                    </div>
                                                </td>
                                            </tr>
											<?php
											foreach($pane as $a)
											{
												?>
                                            <tr>
                                                <td class="p-catagory"><?php echo $a['category']?></td>
                                                <td>
                                                    <div class="p-price"><?php echo $a['title']?></div>
                                                </td>
                                            </tr>
											<?php
											}
											?>
                                         
                                        </table>
                                    </div>
                                </div>