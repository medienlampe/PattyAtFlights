<?php
/**
 * I simulate a slow or otherwise effed up API call.
 */
sleep(10);

$apiData = '{
  "difference": 30,
  "absoluteAmount": 10000
}';

$data = json_decode($apiData);
?>
<div class="row vertical-center-box vertical-center-box-tablet">
    <div class="col-xs-3 mar-bot-15 text-left">
        <label class="label bg-green"><?php echo $data->difference; ?>% <i class="fa fa-level-up" aria-hidden="true"></i></label>
    </div>
    <div class="col-xs-9 cus-gh-hd-pro">
        <h2 class="text-right no-margin"><?php echo number_format($data->absoluteAmount, 0, '.', ','); ?></h2>
    </div>
</div>
<div class="progress progress-mini">
    <div style="width: 78%;" class="progress-bar bg-green"></div>
</div>