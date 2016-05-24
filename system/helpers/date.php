<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of datePtToEnglish
 *
 * @author dcaetano
 */
class date {

    public static function datePtToEnglish($date, $with_time = false, $toTimestamp = false) {
        $date = preg_replace('/\s{2,}/',' ', $date);
        if ($with_time) {
            $aux = explode(' ', $date);
            $date = $aux[0];
            $time = $aux[1];
        }
        $date = implode('-', array_reverse(explode('/', $date)));
        if ($with_time) {
            $date = $date . ' ' . $time;
        }
        if ($toTimestamp) {
            return strtotime($date);
        } else {
            return $date;
        }
    }
    
    /**
   * @method timeDifference
   * - http://www.hotscripts.com/forums/php/56535-possible-get-difference-minutes-date-time-diffrence.htmlset real dates for start and end, otherwise *nix the strtotime() lines.
   * @return 'days' will return days/hours/minutes/seconds.
   * @return 'hours' will return hours/minutes/seconds.
   * @return 'minutes' will return minutes/seconds.
   * @return 'seconds' will return seconds.
   */
    public static function timeDifference($start, $end, $return = 'd') {
    //change times to Unix timestamp.
    $start = strtotime($start);
    $end = strtotime($end);
    if ($start > $end) {
      return false;
    }
    //subtract dates
    $difference = $end - $start;
    $time = null;
    //calculate time difference.
    switch ($return) {
      case 'd':
        $days = floor($difference / 86400);
        $difference = $difference % 86400;
        $time['d'] = $days;
      case 'H':
        $hours = floor($difference / 3600);
        $difference = $difference % 3600;
        $time['H'] = $hours;
      case 'i':
        $minutes = floor($difference / 60);
        $difference = $difference % 60;
        $time['i'] = $minutes;
      case 's':
        $seconds = $difference;
        $time['s'] = $seconds;
    }
    return $time;
  }
    

}

?>
