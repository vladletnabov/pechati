<?php require_once "../../extdata/baseparts/filialsData.php" ?>
<?php

$act = isset($_REQUEST['act']) ? $_REQUEST['act'] : die('error');
$params = isset($_REQUEST['json']) ? json_decode($_REQUEST['json'], true) : array();
$jsonBox = array();
$error = array();
$info = array();
$exemple = array();
$form = array();
$host = $_SERVER['HTTP_HOST'];
$ref = $_SERVER['HTTP_REFERER'];

foreach ($filialDataList as $key => $value){
	if (isset ($filialDataList[$key]['quickZakaz'])) {
		#error_log($filialDataList[$key]['quickZakaz']);
		$quickZakazHeader=$filialDataList[$key]['quickZakaz'];
		$filSubject = 'Быстрый заказ печати ' . $filialDataList[$key]['predlog'] . ' ' . $filialDataList[$key]['padej'] ;
		$filTitle = 'Быстрый заказ печати '. $filialDataList[$key]['predlog'] . ' ' . $filialDataList[$key]['padej'] ;
		$emailFrom = $filialDataList[$key]['email'];
		$emailTo = $filialDataList[$key]['email'];
		
		#error_log($filSubject);
		#error_log('gen $form...');
		$form[$quickZakazHeader] = array(
			'fields' => array(
				'name' => array(
					'title' => 'Имя',
					'validate' => array(
						'preg' => '%[A-Z-a-zА-Яа-я\s]%',
						'minlength' => '3',
						'maxlength' => '35',
					),
					'messages' => array(
						'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
						'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
						'maxlength' => 'Максимальная длинна поля [ %1$s ] превышает допустимую - %2$s',
					)
				),
				'e-mail' => array(
					'title' => 'E-mails',
					'validate' => array(
						'preg' => '%@%is',
						'minlength' => '5',
					),
					'messages' => array(
						'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
						'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
					)
				),
			),
			'cfg' => array(
				'charset' => 'utf-8',
				'subject' => $filSubject,
				'title' => $filTitle,
				'ajax' => true,
				'validate' => true,
				'from_email' => $emailFrom,
				'from_name' => 'zakaz',
				'to_email' => $emailTo,
				'to_name' => $key,
				'geoip' => true,
				'referer' => true,
				'type' => 'html',
				'tpl' => true,
				'antispam' => 'email77',
				'antispamjs' => 'address77',
				'okay' => 'Заказ зарегистрирован - УСПЕШНО',
				'fuck' => 'Заказ зарегистрирован - ОШИБКА',
				'spam' => 'Cпам робот',
				'notify' => 'color-modal-textbox',
				'usepresuf' => false
			)
		);
		#error_log('check for ' . $form[$quickZakazHeader] . ' cfg->from_email: ' . $form[$quickZakazHeader]['cfg']['from_email']);
		#error_log('check for ' . $form[$quickZakazHeader] . ' fields->e-mail->title: ' . $form[$quickZakazHeader]['fields']['e-mail']['title']);
	}
}

error_log('quick-zakaz check param act == cfg');
if($act == 'cfg') {
	error_log('quick-zakaz param act == cfg and die service. Ok');
   $jsonBox['configs'] = ExportConfigs($form);
    die(json_encode($jsonBox));
}

function ExportConfigs($form) {
    $need = array('antispam','antispamjs','notify');
    $conf = array();
    foreach($form as $name => $data) {
        foreach($data['cfg'] as $k => $cfg) {
			if(in_array($k, $need)) {
				$conf[$name]['cfg'][$k] = $cfg;
			}
        }
    }

    return $conf;
}



error_log('check param $form[$act] if act != cfg (quick-zakaz-FILIAL) : ' . $act);
#error_log('-------');
if(isset($form[$act])) {

   $form = $form[$act];
   $getdata = array();
   $sb = array(); // subject и body


      foreach($form['fields'] as $name => $field) {

            $title = (isset($field['title'])) ? $field['title'] : $name;
            $getdata[$name]['title'] = $title;
            $rawdata = isset($_POST[$name]) ? trim($_POST[$name]) : '';

              if(isset($field['validate'])) {              

                  $def = 'Поле с именем [ '.$name.' ] содержит ошибку.';
                  // -0-
                  if(isset($field['validate']['required']) &&
                      empty($rawdata)) {
                      $error[$name] = isset($field['messages']['required']) ? sprintf($field['messages']['required'], $title) :
                                     (isset($messages['validator']['required']) ? sprintf($messages['validator']['required'], $title) : $def);
                  }
                  // -1-
                  if(isset($field['validate']['minlength']) &&
                      mb_strlen($rawdata) < $field['validate']['minlength']) {
                      $error[$name] = isset($field['messages']['minlength']) ? sprintf($field['messages']['minlength'], $title, $field['validate']['minlength']) : $def;
                  }
                  // -2-
                  if(isset($field['validate']['maxlength']) &&
                    mb_strlen($rawdata) > $field['validate']['maxlength']) {
                        $error[$name] = isset($field['messages']['maxlength']) ? sprintf($field['messages']['maxlength'], $title, $field['validate']['maxlength']) : $def;
                  }
                  // -3-
                  if(isset($field['validate']['preg']) && mb_strlen($rawdata) > 0 &&
                      !preg_match($field['validate']['preg'], $rawdata)) {
                      $error[$name] = isset($field['messages']['preg']) ? sprintf($field['messages']['preg'], $title, $field['validate']['preg']) : $def;
                  }
                  // -4-
                  if(isset($field['validate']['substr']) &&
                      mb_strlen($rawdata) > $field['validate']['substr']) {
                      $rawdata = mb_substr($rawdata, 0, $field['validate']['substr']);
                  }

               $outdata = htmlspecialchars($rawdata);

               $getdata[$name]['value'] = $outdata;

              }
               else {
                 $getdata[$name]['value'] = htmlspecialchars($rawdata);
              }

               if(empty($getdata[$name]['value'])) {
                     unset($getdata[$name]);
                  }


      } //foreach end


    if(isset($form['cfg']['antispam']) && isset($_POST[$form['cfg']['antispam']])) {
        if(!empty($_POST[$form['cfg']['antispam']])) {
         $error[] = $form['cfg']['spam'];
        }
    }
     if(isset($form['cfg']['antispamjs']) && isset($_POST[$form['cfg']['antispamjs']])) {
         if(!empty($_POST[$form['cfg']['antispamjs']])) {
             $error[] = $form['cfg']['spam'];
         }
     }


    if(count($error) == 0) {
		#error_log('generate param for email sending. set encoding: ' . $form['cfg']['charset']);
		if(function_exists("mb_internal_encoding")) mb_internal_encoding($form['cfg']['charset']);
		/*
		#error_log(returnKeys($form));
		#error_log('get fromName...');
		#error_log('isset $form[fields][$form[cfg][from_name]] : ' . $form['fields'][$form['cfg']['from_name']]);
		#error_log('isset $getdata[$form[cfg][from_name]][value]' . $getdata[$form['cfg']['from_name']]['value']);
		$get_fromName = (isset($form['fields'][$form['cfg']['from_name']]) && isset($getdata[$form['cfg']['from_name']]['value']) && mb_strlen(		$getdata[$form['cfg']['from_name']]['value']) > 2) ? $getdata[$form['cfg']['from_name']]['value'] : ((mb_strlen($form['cfg']['from_name']) > 2 && !isset($_POST[$form['cfg']['from_name']])) ? $form['cfg']['from_name'] : 'Anonymous');
		errorlog('pre send fromName: ' . $get_fromName);
		#error_log('get fromEmail...');
		$get_fromEmail = (isset($form['fields'][$form['cfg']['from_email']]) && isset($getdata[$form['cfg']['from_email']]['value']) && mb_strpos('@', $getdata[$form['cfg']['from_email']]['value']) === false) ? $getdata[$form['cfg']['from_email']]['value'] : ((mb_strpos('@', $form['cfg']['from_email']) !== false) ? $form['cfg']['from_email'] : 'no-reply@'.$host);
		errorlog('pre send fromEmail: ' . $get_fromEmail);
		$fromName = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader($get_fromName, $form['cfg']['charset'], "Q") : $get_fromName;
		#error_log('get subject...');*/
		$get_fromEmail = $form['cfg']['from_email'];
		$fromName = $form['cfg']['from_name'];
		$sb['subject'] = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader($form['cfg']['subject'], $form['cfg']['charset'], "Q") : 	$form['cfg']['subject'];
      
		$toName = trim($form['cfg']['to_name'], " ,");
		$toEmail = trim($form['cfg']['to_email'], " ,");
		
		#error_log('strpos($toName <-> , ');
		if(strpos($toName, ",") !== false) { 
			$exp_toName = explode(",", $toName);   
			$c = count($exp_toName);
			for($i=0; $i<$c; $i++) {
				$exp_toName[$i] = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader(trim($exp_toName[$i]), $form['cfg']['charset'], "Q") : trim($exp_toName[$i]);
			} 
		} 
        else {
			$toName = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader($toName, $form['cfg']['charset'], "Q") : $toName;
		}
		
		#error_log('strpos($toEmail <-> , ');
		if(strpos($toEmail, ",") !== false) { 
			$exp_toEmail = explode(",", $toEmail);
		}         
      
		$To = '';
      
		#error_log('if(isset($exp_toEmail))');
		if(isset($exp_toEmail)) {
			$c = count($exp_toEmail);
			for($i=0; $i < $c; $i++) { 
				$To .= ((isset($exp_toName) && isset($exp_toName[$i])) ? $exp_toName[$i] : $toName) . " <".trim($exp_toEmail[$i]).">";
				if($i < ($c-1)) $To .= ", ";
			}
		} 
        else {
			$To = ((isset($exp_toName) && isset($exp_toName[0])) ? $exp_toName[0] : $toName)." <".$toEmail.">";
		}


		$headers = "Return-Path: <".$get_fromEmail.">\r\n";
		$headers .= "From: ".$fromName." <".$get_fromEmail.">\r\n";
		$headers .= "X-Mailer: Feedback, v0.3 (http://pechati.ru)\r\n";
		$headers .= "X-Priority: 3\r\n";
		$headers .= "Reply-To: ".$fromName." <".$get_fromEmail.">\r\n";
		$headers .= "To: ".$To."\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/" . $form['cfg']['type'] . "; charset=\"" . $form['cfg']['charset'] . "\"\r\n";
		$headers .= "Content-Transfer-Encoding: 8bit\r\n";
		error_log ($headers);
		$sb['body'] = "";
		// парсим шаблон
		if($form['cfg']['tpl']) {
			$out = tpl(array('name' => $act, 'getdata' => $getdata, 'cfg' => $form['cfg']));
			if(is_string($out)) {
				$sb['body'] = $out;
			}
		}
		// или отдаем голый текст
        if(mb_strlen(trim($sb['body'])) < 10) {
			if(isset($form['cfg']['title']))
				$sb['body'] .= $form['cfg']['title']."\r\n\r\n";
			foreach($getdata as $name => $data) {
				$sb['body'] .= $data['title'].": ".$data['value']."\r\n";
			}
			if($form['cfg']['referer'])
				$sb['body'] .= "\r\n\r\n\r\n\r\n".$ref;
		}
		// если есть что добавить
		if(isset($form['cfg']['adds']) &&
			is_array($form['cfg']['adds'])) {
			$sb = adds($sb);
		}

		//отправка письма
		error_log('Mail To: ' . $To . ' From: ' .$fromName . ' Subject: ' . $sb['subject']);
		mail("center-zakaz@pechati.ru", "the subject", $message,
		 "From: webmaster@$SERVER_NAME\r\n"
		."Reply-To: webmaster@$SERVER_NAME\r\n"
		."X-Mailer: PHP/" . phpversion());
		$mail = mail($To, $sb['subject'], $sb['body'], $headers);
		if($mail) {
			$jsonBox['ok'] = 1;
			$info[] = $form['cfg']['okay'];
			error_log('$jsonBox[ok]=1');

			//setcookie("limit", "1", time() + $form['cfg']['limit']);

		}
		else {
			error_log('fuck info!');
			$info[] = $form['cfg']['fuck'];
		}

    }

} 
else {
    $error[] = 'Нет настроек формы с именем #'.$act;
	error_log('form[name_filial_not_setted]');
}

    if(count($error) > 0) {
		error_log('count($error) > 0');
        $jsonBox['errors'] = $error;
    }
    if(count($info) > 0) {
		error_log('count($info) > 0');
        $jsonBox['infos'] = $info;
    }
	error_log('$jsonBox[infos] completed. Dieing now...');
    die(json_encode($jsonBox)); //мертвые с косами

/* добавляет любые доп данные из вне в нужное место
 * (например в заголовок письма необходимо дабавить Ник юзера или Номер заказа )
 *
 *  */

function adds($vars) {
    global $form;
    $adds = $form['cfg']['adds'];
    foreach($adds as $key => $opts) {
        if(is_string($key)) {
            $one = array();
            $two = array();
            foreach($opts as $i => $val) {
                if(isset($_POST[$val])) {
                  $one[] = '%%'.$val.'%%';
                  $two[] = $_POST[$val];
                }
            }
           $vars[$key] = str_replace($one, $two, $vars[$key]);
        }
    }
       return $vars;
}
/*
 * парсер шаблона
 */
 function tpl($vars) {
    $tpl = 'tpl/'.$vars['name'].'.tpl';
    if(file_exists($tpl)) {
     $template = file_get_contents($tpl);
        foreach($vars['getdata'] as $name => $data) {
            $template = str_replace(array("%%".$name.".title%%", "%%".$name.".value%%"), array($data['title'], $data['value']), $template);
        }
        return $template;
    }
     else {
      return false;
    }
 }
	function returnKeys($array){
		#error_log('start function returnKeys. ');
		$count_arr = count($array);
		#error_log($count_arr);
		$result = "";
		foreach ($array as $key=>$val) {
			$result = $result . ' ' . $key;
		}
		if(isset($array['fields'])) {
			$str ='';
			foreach ($array['fields'] as $key=>$val) {
				$str = $str . ' ' . $key;
			}
			#error_log('array[fields]: ' . $str);
		}
		if(isset($array['cfg'])) {
			$str ='';
			foreach ($array['cfg'] as $key=>$val) {
				$str = $str . ' ' . $key;
			}
			#error_log('array[cfg]: ' . $str);
		}
		#error_log('result return_keys: ' . $result);
		return $result;
	}

