<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap DatePicker</title>

    <!-- Include file bootstrap.min.css -->
    <link href="<?= base_url() ?>assets/datepicker/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/datepicker/libraries/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->
  </head>
  <body>
    <div style="padding: 10px 30px;">
        <h1>DatePicker</h1>
        <hr />

        <div class="row">
            <div class="col-xs-2">
                <div class="form-group">
                    <label>Tanggal (DatePicker)</label>
                    <input type="text" class="form-control datepicker" />
                </div>
            </div>
            <div class="col-xs-3">
                <div class="form-group">
                    <label>Periode Tanggal (DateRangePicker)</label>

                    <div class="input-group">
                        <input type="text" class="form-control startdate" />
                        <span class="input-group-addon">s/d</span>
                        <input type="text" class="form-control enddate" />
                    </div>
                </div>
            </div>
            <div class="col-xs-2">
                <div class="form-group">
                    <label>Bulan (MonthPicker)</label>
                    <input type="text" class="form-control monthpicker" />
                </div>
            </div>
            <div class="col-xs-2">
                <div class="form-group">
                    <label>Tahun (YearPicker)</label>
                    <input type="text" class="form-control yearpicker" />
                </div>
            </div>
            <div class="col-xs-3">
                <div class="form-group">
                    <label>Periode Tahun (YearRangePicker)</label>

                    <div class="input-group">
                        <input type="text" class="form-control startyear" />
                        <span class="input-group-addon">s/d</span>
                        <input type="text" class="form-control endyear" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url() ?>assets/datepicker/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/datepicker/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/datepicker/libraries/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url() ?>assets/datepicker/js/custom.js"></script>

    <script>
    $(document).ready(function(){
        setDatePicker()
        setDateRangePicker(".startdate", ".enddate")
        setMonthPicker()
        setYearPicker()
        setYearRangePicker(".startyear", ".endyear")
    })
    </script>
  </body>
</html>
