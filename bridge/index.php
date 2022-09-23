<?php

//$square = new Square(new Blue());
//
//echo $square->getShapeInfo();

$week_configurations = ["Sunday", "Monday"git, "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
$month_configurations = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
$shift_data = json_decode('{"shifts":{"632ac3ac35e4697e3c517fc7":{"company_id":735,"company_employee_id":"open_shift","shift_name":"test1","time_diff":28800,"start_time_is_dst":false,"end_time_is_dst":false,"company_task":null,"work_location":"","color":"#7BDCB5","notes":"","repeat_bln":false,"date_repeat":null,"breaks":null,"template_id":null,"schedule_type":"Shift","shift_status":"active","published_dates":null,"number":1,"custom_field":[],"orig_start_date":"2022-07-31","orig_start_time":"09:00:00 am","orig_end_time":"05:00:00 pm","orig_timezone":"America\/Los_Angeles","orig_repeat_bln":false,"total_break_duration":0},"632ac3ca6d1b461a6c1f2213":{"company_id":735,"company_employee_id":"open_shift","shift_name":"test2","time_diff":7200,"start_time_is_dst":false,"end_time_is_dst":false,"company_task":null,"work_location":"","color":"#7BDCB5","notes":"","repeat_bln":false,"date_repeat":null,"breaks":null,"template_id":null,"schedule_type":"Shift","shift_status":"active","published_dates":null,"number":1,"custom_field":[],"orig_start_date":"2022-07-31","orig_start_time":"06:00:00 pm","orig_end_time":"08:00:00 pm","orig_timezone":"America\/Los_Angeles","orig_repeat_bln":false,"total_break_duration":0},"632ac3e17cdef405f0166d94":{"company_id":735,"company_employee_id":"open_shift","shift_name":"test2","time_diff":32400,"start_time_is_dst":false,"end_time_is_dst":false,"company_task":null,"work_location":"","color":"#00D084","notes":"","repeat_bln":false,"date_repeat":null,"breaks":null,"template_id":null,"schedule_type":"Shift","shift_status":"active","published_dates":null,"number":1,"custom_field":[],"orig_start_date":"2022-08-01","orig_start_time":"08:00:00 am","orig_end_time":"05:00:00 pm","orig_timezone":"America\/Los_Angeles","orig_repeat_bln":false,"total_break_duration":0},"632ac3fd35e4697e3c517fc8":{"company_id":735,"company_employee_id":"open_shift","shift_name":"test3","time_diff":28800,"start_time_is_dst":false,"end_time_is_dst":false,"company_task":null,"work_location":"","color":"#8ED1FC","notes":"","repeat_bln":false,"date_repeat":null,"breaks":null,"template_id":null,"schedule_type":"Shift","shift_status":"active","published_dates":null,"number":1,"custom_field":[],"orig_start_date":"2022-08-02","orig_start_time":"08:00:00 am","orig_end_time":"04:00:00 pm","orig_timezone":"America\/Los_Angeles","orig_repeat_bln":false,"total_break_duration":0},"632ac4166d1b461a6c1f2214":{"company_id":735,"company_employee_id":"open_shift","shift_name":"test4","time_diff":28800,"start_time_is_dst":false,"end_time_is_dst":false,"company_task":null,"work_location":"","color":"#0693E3","notes":"","repeat_bln":false,"date_repeat":null,"breaks":null,"template_id":null,"schedule_type":"Shift","shift_status":"active","published_dates":null,"number":1,"custom_field":[],"orig_start_date":"2022-08-04","orig_start_time":"08:00:00 am","orig_end_time":"04:00:00 pm","orig_timezone":"America\/Los_Angeles","orig_repeat_bln":false,"total_break_duration":0},"632ac4886d1b461a6c1f2215":{"company_id":735,"company_employee_id":"621f36851c73f11ac1240723","shift_name":"111test1","time_diff":28800,"start_time_is_dst":false,"end_time_is_dst":false,"company_task":null,"work_location":"","color":"#0693E3","notes":"","repeat_bln":false,"date_repeat":null,"breaks":null,"template_id":null,"schedule_type":"Shift","shift_status":"active","published_dates":null,"number":1,"custom_field":[],"orig_start_date":"2022-08-01","orig_start_time":"08:00:00 am","orig_end_time":"04:00:00 pm","orig_timezone":"America\/Los_Angeles","orig_repeat_bln":false,"total_break_duration":0},"632ac4a07cdef405f0166d9b":{"company_id":735,"company_employee_id":"621f36851c73f11ac1240723","shift_name":"Unavailability","time_diff":86340,"start_time_is_dst":false,"end_time_is_dst":false,"company_task":null,"work_location":null,"color":"#cccccc","notes":null,"repeat_bln":false,"date_repeat":null,"breaks":null,"template_id":null,"schedule_type":"Unavailability","shift_status":"active","published_dates":null,"number":1,"custom_field":null,"orig_start_date":"2022-08-02","orig_start_time":"12:00:00 am","orig_end_time":"11:59:00 pm","orig_timezone":"America\/Los_Angeles","orig_repeat_bln":false,"total_break_duration":0},"632ac6020c6ed17e8f05a384":{"company_id":735,"company_employee_id":"open_shift","shift_name":"1111111111111","time_diff":10800,"start_time_is_dst":false,"end_time_is_dst":false,"company_task":null,"work_location":"","color":"#9900EF","notes":"","repeat_bln":false,"date_repeat":null,"breaks":null,"template_id":null,"schedule_type":"Shift","shift_status":"active","published_dates":["2022-08-02"],"number":1,"custom_field":[],"orig_start_date":"2022-08-02","orig_start_time":"05:00:00 pm","orig_end_time":"08:00:00 pm","orig_timezone":"America\/Los_Angeles","orig_repeat_bln":false,"total_break_duration":0},"632ac651c8510b412d4d2d65":{"company_id":735,"company_employee_id":"626610bef13dde23db2ddee3","shift_name":"test-33","time_diff":28800,"start_time_is_dst":false,"end_time_is_dst":false,"company_task":null,"work_location":"","color":"#9900EF","notes":"","repeat_bln":false,"date_repeat":null,"breaks":null,"template_id":null,"schedule_type":"Shift","shift_status":"active","published_dates":null,"number":1,"custom_field":[],"orig_start_date":"2022-08-02","orig_start_time":"08:00:00 am","orig_end_time":"04:00:00 pm","orig_timezone":"America\/Los_Angeles","orig_repeat_bln":false,"total_break_duration":0},"632ac6cf8233f10f181586af":{"company_id":735,"company_employee_id":"open_shift","shift_name":"Morning shift","time_diff":10800,"start_time_is_dst":false,"end_time_is_dst":false,"company_task":"62207a7fd6c9452e687cf8fb","work_location":"","color":"#FCB900","notes":"","repeat_bln":false,"date_repeat":null,"breaks":null,"template_id":null,"schedule_type":"Shift","shift_status":"active","published_dates":null,"number":1,"custom_field":[],"orig_start_date":"2022-08-05","orig_start_time":"08:00:00 am","orig_end_time":"11:00:00 am","orig_timezone":"America\/Los_Angeles","orig_repeat_bln":false,"total_break_duration":0},"632ac7037d32ad1b5c2bdf32":{"company_id":735,"company_employee_id":"open_shift","shift_name":"","time_diff":32400,"start_time_is_dst":false,"end_time_is_dst":false,"company_task":"62fc99a5aab49c40a03efd07","work_location":"","color":"#0693E3","notes":"","repeat_bln":false,"date_repeat":null,"breaks":null,"template_id":null,"schedule_type":"Shift","shift_status":"active","published_dates":null,"number":1,"custom_field":[],"orig_start_date":"2022-08-05","orig_start_time":"08:00:00 am","orig_end_time":"05:00:00 pm","orig_timezone":"America\/Los_Angeles","orig_repeat_bln":false,"total_break_duration":0}},"dates":{"open_shift":[{"shift_id":"632ac3ac35e4697e3c517fc7","orig_date":"2022-07-31","company_id":735,"diff_0":28800,"diff_1":0,"date":"2022-07-31","start_time":"09:00:00 am","end_time":"05:00:00 pm","timezone":"America\/Los_Angeles","is_published":0,"number":1,"shift_start_date":"2022-07-31","day_diff":0,"gross_work_diff":28800},{"shift_id":"632ac3ca6d1b461a6c1f2213","orig_date":"2022-07-31","company_id":735,"diff_0":7200,"diff_1":0,"date":"2022-07-31","start_time":"06:00:00 pm","end_time":"08:00:00 pm","timezone":"America\/Los_Angeles","is_published":0,"number":1,"shift_start_date":"2022-07-31","day_diff":0,"gross_work_diff":7200},{"shift_id":"632ac3e17cdef405f0166d94","orig_date":"2022-08-01","company_id":735,"diff_0":32400,"diff_1":0,"date":"2022-08-01","start_time":"08:00:00 am","end_time":"05:00:00 pm","timezone":"America\/Los_Angeles","is_published":0,"number":1,"shift_start_date":"2022-08-01","day_diff":0,"gross_work_diff":32400},{"shift_id":"632ac3fd35e4697e3c517fc8","orig_date":"2022-08-02","company_id":735,"diff_0":28800,"diff_1":0,"date":"2022-08-02","start_time":"08:00:00 am","end_time":"04:00:00 pm","timezone":"America\/Los_Angeles","is_published":0,"number":1,"shift_start_date":"2022-08-02","day_diff":0,"gross_work_diff":28800},{"shift_id":"632ac4166d1b461a6c1f2214","orig_date":"2022-08-04","company_id":735,"diff_0":28800,"diff_1":0,"date":"2022-08-04","start_time":"08:00:00 am","end_time":"04:00:00 pm","timezone":"America\/Los_Angeles","is_published":0,"number":1,"shift_start_date":"2022-08-04","day_diff":0,"gross_work_diff":28800},{"shift_id":"632ac6020c6ed17e8f05a384","orig_date":"2022-08-02","company_id":735,"diff_0":10800,"diff_1":0,"date":"2022-08-02","start_time":"05:00:00 pm","end_time":"08:00:00 pm","timezone":"America\/Los_Angeles","is_published":1,"number":1,"shift_start_date":"2022-08-02","day_diff":0,"gross_work_diff":10800},{"shift_id":"632ac6cf8233f10f181586af","orig_date":"2022-08-05","company_id":735,"diff_0":10800,"diff_1":0,"date":"2022-08-05","start_time":"08:00:00 am","end_time":"11:00:00 am","timezone":"America\/Los_Angeles","is_published":0,"number":1,"shift_start_date":"2022-08-05","day_diff":0,"gross_work_diff":10800},{"shift_id":"632ac7037d32ad1b5c2bdf32","orig_date":"2022-08-05","company_id":735,"diff_0":32400,"diff_1":0,"date":"2022-08-05","start_time":"08:00:00 am","end_time":"05:00:00 pm","timezone":"America\/Los_Angeles","is_published":0,"number":1,"shift_start_date":"2022-08-05","day_diff":0,"gross_work_diff":32400}],"621f36851c73f11ac1240723":[{"shift_id":"632ac4886d1b461a6c1f2215","orig_date":"2022-08-01","company_id":735,"diff_0":28800,"diff_1":0,"date":"2022-08-01","start_time":"08:00:00 am","end_time":"04:00:00 pm","timezone":"America\/Los_Angeles","is_published":0,"shift_start_date":"2022-08-01","day_diff":0,"gross_work_diff":28800},{"shift_id":"632ac4a07cdef405f0166d9b","orig_date":"2022-08-02","company_id":735,"diff_0":86340,"diff_1":0,"date":"2022-08-02","start_time":"12:00:00 am","end_time":"11:59:00 pm","timezone":"America\/Los_Angeles","is_published":1,"is_unavailability":1,"shift_start_date":"2022-08-02","day_diff":0,"gross_work_diff":86340}],"626610bef13dde23db2ddee3":[{"shift_id":"632ac651c8510b412d4d2d65","orig_date":"2022-08-02","company_id":735,"diff_0":28800,"diff_1":0,"date":"2022-08-02","start_time":"08:00:00 am","end_time":"04:00:00 pm","timezone":"America\/Los_Angeles","is_published":0,"shift_start_date":"2022-08-02","day_diff":0,"gross_work_diff":28800}]},"employee_dates":{"621f36851c73f11ac1240723":{"2022-07-31":{"company_id":735,"fname":"111","lname":"111","startdate":"03\/01\/2022","timezone":"America\/Los_Angeles","id":"621f36851c73f11ac1240723"},"2022-08-01":{"company_id":735,"fname":"111","lname":"111","startdate":"03\/01\/2022","timezone":"America\/Los_Angeles","id":"621f36851c73f11ac1240723"},"2022-08-02":{"company_id":735,"fname":"111","lname":"111","startdate":"03\/01\/2022","timezone":"America\/Los_Angeles","id":"621f36851c73f11ac1240723"},"2022-08-03":{"company_id":735,"fname":"111","lname":"111","startdate":"03\/01\/2022","timezone":"America\/Los_Angeles","id":"621f36851c73f11ac1240723"},"2022-08-04":{"company_id":735,"fname":"111","lname":"111","startdate":"03\/01\/2022","timezone":"America\/Los_Angeles","id":"621f36851c73f11ac1240723"},"2022-08-05":{"company_id":735,"fname":"111","lname":"111","startdate":"03\/01\/2022","timezone":"America\/Los_Angeles","id":"621f36851c73f11ac1240723"},"2022-08-06":{"company_id":735,"fname":"111","lname":"111","startdate":"03\/01\/2022","timezone":"America\/Los_Angeles","id":"621f36851c73f11ac1240723"}},"626610bef13dde23db2ddee3":{"2022-07-31":{"company_id":735,"fname":"16251","lname":"Zyq","startdate":"03\/01\/2022","timezone":"America\/Los_Angeles","id":"626610bef13dde23db2ddee3"},"2022-08-01":{"company_id":735,"fname":"16251","lname":"Zyq","startdate":"03\/01\/2022","timezone":"America\/Los_Angeles","id":"626610bef13dde23db2ddee3"},"2022-08-02":{"company_id":735,"fname":"16251","lname":"Zyq","startdate":"03\/01\/2022","timezone":"America\/Los_Angeles","id":"626610bef13dde23db2ddee3"},"2022-08-03":{"company_id":735,"fname":"16251","lname":"Zyq","startdate":"03\/01\/2022","timezone":"America\/Los_Angeles","id":"626610bef13dde23db2ddee3"},"2022-08-04":{"company_id":735,"fname":"16251","lname":"Zyq","startdate":"03\/01\/2022","timezone":"America\/Los_Angeles","id":"626610bef13dde23db2ddee3"},"2022-08-05":{"company_id":735,"fname":"16251","lname":"Zyq","startdate":"03\/01\/2022","timezone":"America\/Los_Angeles","id":"626610bef13dde23db2ddee3"},"2022-08-06":{"company_id":735,"fname":"16251","lname":"Zyq","startdate":"03\/01\/2022","timezone":"America\/Los_Angeles","id":"626610bef13dde23db2ddee3"}}}}', true);
$shifts_arr = $shift_data['shifts'];
$dates = $shift_data['dates'];
$employee_data = $shift_data['employee_dates'];

$header = [];
$date_str_arr = [];
$header[0] = "";
foreach ($employee_data as $employee_item) {
    foreach ($employee_item as $dateStr => $employee_item_item) {
        $this_day_timestamp = strtotime($dateStr);
        $w = date("w", $this_day_timestamp);
        $this_day_in_week = $week_configurations[$w];
        $m = date('m',$this_day_timestamp) * 1 - 1;
        $this_day_in_month = $month_configurations[$m];
        $this_day = date('d',$this_day_timestamp) * 1;
        $header[] = $this_day_in_week." - ".$this_day_in_month." ".$this_day;
        $date_str_arr[] = $dateStr;
    }
    break;
}


$row_data = [];
$row_data[0][0] = "OPEN SHIFTS";
$column = 0;
foreach ($date_str_arr as $date_str) {
    $tmp_timestamp = strtotime($date_str) ;
    $tmp_date = date('Y-m-d',$tmp_timestamp);
    $shift_data_to_be_added = "";
    foreach ($shift_data['dates']['open_shift'] as $open_shift_data) {
        if ($open_shift_data['date'] == $tmp_date ) {
            $start_time_to_human_arr = str_split($open_shift_data["start_time"],strlen($open_shift_data["start_time"]) -2);
            $start_time_to_human_pm_or_am = strtoupper($start_time_to_human_arr[1]);
            $start_time_to_human_time = substr($start_time_to_human_arr[0], 0, strlen($start_time_to_human_arr[0]) - 4);

            $shift_data_to_be_added = $shift_data_to_be_added.$start_time_to_human_time." - ".$start_time_to_human_pm_or_am."\r\n";
            $shift_id = $open_shift_data["shift_id"];
            $shift_name = $shifts_arr[$shift_id]["name"];
            if (!empty($shift_name)) {
                $shift_data_to_be_added .= $shift_name."\r\n";
            }
            $task_id = !empty($shifts_arr[$shift_id]["company_task"]) ? $shifts_arr[$shift_id]["company_task"]: null;
//            $task = !empty($task_id) ? $this->getRedisGhCompanyTask($task_id): null;
            $task = null;
            $job_name = !empty($task)? $task["task_name"] : " ";
            if (!empty($job_name)) {
                $shift_data_to_be_added .= $job_name."\r\n\r\n";
            } else {
                $shift_data_to_be_added .="\r\n";
            }
        }

    }
    $row_data[0][] = $shift_data_to_be_added;
}

$column ++;


foreach ($shift_data['dates'] as $key => $shift_data_item) {
    if ($key != 'open_shift') {
        $employee_data_arr = $shift_data['employee_dates'][$key];
        $employee_name = "";
        foreach ($employee_data_arr as $employee_data) {
            $employee_name = $employee_data["fname"]." ".$employee_data["lname"];
            break;
        }

        $row_data[$column][0] = $employee_name;
        foreach ($date_str_arr as $date_str) {
            $tmp_timestamp = strtotime($date_str);
            $tmp_date = date('Y-m-d', $tmp_timestamp);
            $shift_data_to_be_added = "";
            foreach ($shift_data_item as $open_shift_data) {
                if ($open_shift_data['date'] == $tmp_date) {
                    $start_time_to_human_arr = str_split($open_shift_data["start_time"], strlen($open_shift_data["start_time"]) - 2);
                    $start_time_to_human_pm_or_am = strtoupper($start_time_to_human_arr[1]);
                    $start_time_to_human_time = substr($start_time_to_human_arr[0], 0, strlen($start_time_to_human_arr[0]) - 4);

                    $shift_data_to_be_added = $shift_data_to_be_added . $start_time_to_human_time . " - " . $start_time_to_human_pm_or_am . "\r\n";

                    $shift_name = "shift_name"; // find from shifts [shift_name]
                    $shift_data_to_be_added .= $shift_name . "\r\n";

                    $shift_job = "job_name"; // [company_task] is an objectid without name  直接读redis getRedisGhCompanyTask
                    $shift_data_to_be_added .= $shift_job . "\r\n";

                    // todo aprrove status

                    // todo all day unaviliable

                }
            }
            $row_data[$column][] = $shift_data_to_be_added;

        }

        $column++;
    }
}




print_r($row_data);


// row_data: [
//      ["Simple Name1", "7 AM - 6 PM /n day_shift /n Bake cakes", "", "", "ALL DAY /n Unavailability", ""],
//      [],
// ]



