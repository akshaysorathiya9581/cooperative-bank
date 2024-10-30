<div class="row">
    <div class="col-lg-12">
        <div >
            <div style="text-align: center;"> 

                <h3 style="padding: 0px; margin: 0px;"><strong>Member Shares Transactions Summary</strong></h3>
                <h4 style="padding: 0px; margin: 0px;"><strong>For the period from <?php echo format_date($reportinfo->fromdate, false); ?> to <?php echo format_date($reportinfo->todate, false); ?></strong></h4>
            </div>
            <br/>
            <div>
                <style type="text/css">
                    table.table thead tr th{
                        border-bottom: 1px solid #000;
                        font-size: 15px;
                    }
                    table.table tbody tr td{
                        border: 0px;
                        padding-top: 5px;
                        font-size: 15px;
                    }
                    table.table tbody tr td.draw_border{
                        border-top: 1px solid #ccc;
                    }
                </style>
                <div class="table-responsive" style="overflow: auto;">
                    <table class="table" cellspacing='0' cellpadding='0' style="width: 100%;">
                        <thead>
                            <tr>
                                <th style="text-align: center; width: 50px; padding-right: 20px;">S/No</th>  
                                <th style="width: 200px; text-align: left;">Member</th> 
                                <th style="text-align: right; width: 150px;">Opening balance</th> 
                                <th style="text-align: right; width: 100px;">No. of Share</th> 
                                <th style="text-align: right; width: 150px;">Debit [DR]</th>  
                                <th style="text-align: right; width: 150px;">Credit [CR]</th> 
                                <th style="text-align: right; width: 100px;">No. Share affected</th>  
                                <th style="text-align: right; width: 100px;">No. Share Remain</th>
                                <th style="text-align: right; width: 150px;">Closing Balance</th>  
                            </tr>

                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            $credit = 0;
                            $debit = 0;
                            foreach ($transaction as $key => $value) {
                                $balance_open = $this->report_model->share_transactions_summary_previous($reportinfo->fromdate, $value->member_id);

                                $balance_tmp = $balance_open->credit - $balance_open->debit;
                                $balance_tmp_label = '';
                                $share_balance_tmp = $balance_open->share_credit - $balance_open->share_debit;
                                $share_balance_tmp_label = '';


                                if ($balance_tmp > 0) {
                                    $balance_tmp_label = number_format($balance_tmp, 2) . ' Cr';
                                    $share_balance_tmp_label = number_format($share_balance_tmp, 2) . ' Cr';
                                } else if ($balance_tmp < 0) {
                                    $balance_tmp_label = number_format((-1 * $balance_tmp), 2) . 'Dr';
                                    $share_balance_tmp_label = number_format((-1 * $share_balance_tmp), 2) . ' Dr';
                                }
                                $credit += $value->credit;
                                $debit += $value->debit;

                                $close_balance = $balance_tmp;
                                $close_balance_label = '';
                                $close_balance -= $value->debit;
                                $close_balance += $value->credit;

                                $close_balance_share = $share_balance_tmp;
                                $close_balance_share -= $value->debit_sha;
                                $close_balance_share += $value->credit_sha;
                                $close_balance_label_share = '';

                                if ($close_balance > 0) {
                                    $close_balance_label = number_format($close_balance, 2) . ' Cr';
                                    $close_balance_label_share = number_format($close_balance_share, 2) . ' Cr';
                                } else if ($close_balance < 0) {
                                    $close_balance_label = number_format((-1 * $close_balance), 2) . ' Dr';
                                    $close_balance_label_share = number_format((-1 * $close_balance_share), 2) . ' Cr';
                                }
                                ?>
                                <tr>
                                    <td style="text-align: right; padding-right: 4px;"><?php echo $i++; ?>.</td>
                                    <td><?php echo $value->member_id . ' <br/> ' . $this->member_model->member_name($value->member_id); ?></td>
                                    <td style="text-align: right;"><?php echo $balance_tmp_label; ?></td>
                                    <td style="text-align: right;"><?php echo $share_balance_tmp_label; ?></td>
                                    <td style="text-align: right;"><?php echo ($value->debit > 0 ? number_format($value->debit, 2) : ''); ?></td>
                                    <td style="text-align: right;"><?php echo ($value->credit > 0 ? number_format($value->credit, 2) : ''); ?></td>
                                    <td style="text-align: right;"><?php echo '[ ' . $value->debit_sha . ' Dr ]<br/> [ ' . $value->credit_sha . ' Cr ]'; ?></td>
                                    <td style="text-align: right;"><?php echo $close_balance_label_share; ?></td>
                                    <td style="text-align: right;"><?php echo $close_balance_label; ?></td>

                                </tr> 
                            <?php } ?>
                            <tr>
                                <td colspan="4" style="border-top: 1px solid #000; border-bottom:  1px solid #000; "></td>
                                <td style="text-align: right; border-top: 1px solid #000; border-bottom:  1px solid #000;"><?php echo number_format($debit, 2); ?></td>
                                <td style="text-align: right; border-top: 1px solid #000; border-bottom:  1px solid #000;"><?php echo number_format($credit, 2); ?></td>
                                <td style="text-align: right; border-top: 1px solid #000; border-bottom:  1px solid #000;"></td>
                                <td style="text-align: right; border-top: 1px solid #000; border-bottom:  1px solid #000;"></td>
                                <td style="text-align: right; border-top: 1px solid #000; border-bottom:  1px solid #000;"></td>

                            </tr>


                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>