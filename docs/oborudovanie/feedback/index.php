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


$form['soligor'] = array(
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
		'tell' => array(
			'title' => 'Телефон',
			'validate' => array(
				'preg' => "/^((8|\+)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{5,10}$/",
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'e-mail' => array(
			'title' => 'E-mail',
			'validate' => array(
				'preg' => '%@%is',
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'camera' => array(
			'title' => 'Камера Soligor',
			'validate' => array(
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => '[ %1$s ] необходимо выбрать',
			)
		),
	),
	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'Экспонирующая камера Soligor',
		'title' => 'Экспонирующая камера Soligor',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'taganka@pechati.ru',
		'from_name' => 'zakaz',
		'to_email' => 'taganka@pechati.ru',
		'to_name' => 'Таганка',
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

$form['plc'] = array(
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
		'tell' => array(
			'title' => 'Телефон',
			'validate' => array(
				'preg' => "/^((8|\+)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{5,10}$/",
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'e-mail' => array(
			'title' => 'E-mail',
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
		'subject' => 'Экспонирующая камера PLC',
		'title' => 'Экспонирующая камера PLC',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'vs@pechati.ru',
		'from_name' => 'zakaz',
		'to_email' => 'vs@pechati.ru',
		'to_name' => 'Водный стадион',
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

$form['moyka'] = array(
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
		'tell' => array(
			'title' => 'Телефон',
			'validate' => array(
				'preg' => "/^((8|\+)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{5,10}$/",
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'e-mail' => array(
			'title' => 'E-mail',
			'validate' => array(
				'preg' => '%@%is',
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'moyka' => array(
			'title' => 'Автоматическая мойка',
			'validate' => array(
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => '[ %1$s ] необходимо выбрать',
			)
		),
	),
	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'Автоматическая  мойка',
		'title' => 'Автоматическая мойка',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'zakaz@pechati.ru',
		'from_name' => 'zakaz',
		'to_email' => 'zakaz@pechati.ru',
		'to_name' => 'Электрозаводская',
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

$form['soft'] = array(
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
		'tell' => array(
			'title' => 'Телефон',
			'validate' => array(
				'preg' => "/^((8|\+)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{5,10}$/",
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'e-mail' => array(
			'title' => 'E-mail',
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
		'subject' => 'Заказ на программное обеспечение для печатей',
		'title' => 'Заказ на программное обеспечение для печатей',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'zakaz@pechati.ru',
		'from_name' => 'zakaz',
		'to_email' => 'zakaz@pechati.ru',
		'to_name' => 'Электрозаводская',
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

$form['lamp'] = array(
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
		'tell' => array(
			'title' => 'Телефон',
			'validate' => array(
				'preg' => "/^((8|\+)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{5,10}$/",
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'e-mail' => array(
			'title' => 'E-mail',
			'validate' => array(
				'preg' => '%@%is',
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'lamp' => array(
			'title' => 'Лампы для экспонирующей камеры',
			'validate' => array(
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => '[ %1$s ] необходимо выбрать',
			)
		),
	),
	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'Лампы для экспонирующей камеры',
		'title' => 'Лампы для экспонирующей камеры',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'zakaz@pechati.ru',
		'from_name' => 'zakaz',
		'to_email' => 'zakaz@pechati.ru',
		'to_name' => 'Электрозаводская',
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

$form['fly'] = array(
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
		'tell' => array(
			'title' => 'Телефон',
			'validate' => array(
				'preg' => "/^((8|\+)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{5,10}$/",
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'e-mail' => array(
			'title' => 'E-mail',
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
		'subject' => 'Флеш система Fly-3',
		'title' => 'Флеш система Fly-3',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'zakaz@pechati.ru',
		'from_name' => 'zakaz',
		'to_email' => 'zakaz@pechati.ru',
		'to_name' => 'Электрозаводская',
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

$form['sun'] = array(
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
		'tell' => array(
			'title' => 'Телефон',
			'validate' => array(
				'preg' => "/^((8|\+)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{5,10}$/",
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'e-mail' => array(
			'title' => 'E-mail',
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
		'subject' => 'Флеш система Sun Stampler MS-1100',
		'title' => 'Флеш система Sun Stampler MS-1100',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'zakaz@pechati.ru',
		'from_name' => 'zakaz',
		'to_email' => 'zakaz@pechati.ru',
		'to_name' => 'Электрозаводская',
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

$form['royal'] = array(
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
		'tell' => array(
			'title' => 'Телефон',
			'validate' => array(
				'preg' => "/^((8|\+)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{5,10}$/",
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'e-mail' => array(
			'title' => 'E-mail',
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
		'subject' => 'Заказ на оснастку Royal',
		'title' => 'Заказ на оснастку Royal',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'zakaz@pechati.ru',
		'from_name' => 'zakaz',
		'to_email' => 'zakaz@pechati.ru',
		'to_name' => 'Электрозаводская',
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

$form['wood'] = array(
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
		'tell' => array(
			'title' => 'Телефон',
			'validate' => array(
				'preg' => "/^((8|\+)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{5,10}$/",
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'e-mail' => array(
			'title' => 'E-mail',
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
		'subject' => 'Заказ на оснастку Wood',
		'title' => 'Заказ на оснастку Wood',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'zakaz@pechati.ru',
		'from_name' => 'zakaz',
		'to_email' => 'zakaz@pechati.ru',
		'to_name' => 'Электрозаводская',
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

$form['ultimark'] = array(
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
		'tell' => array(
			'title' => 'Телефон',
			'validate' => array(
				'preg' => "/^((8|\+)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{5,10}$/",
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'e-mail' => array(
			'title' => 'E-mail',
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
		'subject' => 'Заказ на оснастку Ultimark',
		'title' => 'Заказ на оснастку Ultimark',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'zakaz@pechati.ru',
		'from_name' => 'zakaz',
		'to_email' => 'zakaz@pechati.ru',
		'to_name' => 'Электрозаводская',
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

$form['rgm'] = array(
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
		'tell' => array(
			'title' => 'Телефон',
			'validate' => array(
				'preg' => "/^((8|\+)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{5,10}$/",
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'e-mail' => array(
			'title' => 'E-mail',
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
		'subject' => 'Заказ на оснастку RGM',
		'title' => 'Заказ на оснастку RGM',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'zakaz@pechati.ru',
		'from_name' => 'zakaz',
		'to_email' => 'zakaz@pechati.ru',
		'to_name' => 'Электрозаводская',
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

$form['rmmp'] = array(
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
		'tell' => array(
			'title' => 'Телефон',
			'validate' => array(
				'preg' => "/^((8|\+)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{5,10}$/",
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'e-mail' => array(
			'title' => 'E-mail',
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
		'subject' => 'Заказ на оснастку RMMP',
		'title' => 'Заказ на оснастку RMMP',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'zakaz@pechati.ru',
		'from_name' => 'zakaz',
		'to_email' => 'zakaz@pechati.ru',
		'to_name' => 'Электрозаводская',
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

$form['rvp'] = array(
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
		'tell' => array(
			'title' => 'Телефон',
			'validate' => array(
				'preg' => "/^((8|\+)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{5,10}$/",
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'e-mail' => array(
			'title' => 'E-mail',
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
		'subject' => 'Заказ на оснастку Стандарт',
		'title' => 'Заказ на оснастку Стандарт',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'zakaz@pechati.ru',
		'from_name' => 'zakaz',
		'to_email' => 'zakaz@pechati.ru',
		'to_name' => 'Электрозаводская',
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

$form['rtpk'] = array(
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
		'tell' => array(
			'title' => 'Телефон',
			'validate' => array(
				'preg' => "/^((8|\+)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{5,10}$/",
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'e-mail' => array(
			'title' => 'E-mail',
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
		'subject' => 'Заказ на оснастку карманную',
		'title' => 'Заказ на оснастку карманную',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'zakaz@pechati.ru',
		'from_name' => 'zakaz',
		'to_email' => 'zakaz@pechati.ru',
		'to_name' => 'Электрозаводская',
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

$form['gerb'] = array(
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
		'tell' => array(
			'title' => 'Телефон',
			'validate' => array(
				'preg' => "/^((8|\+)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{5,10}$/",
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'e-mail' => array(
			'title' => 'E-mail',
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
		'subject' => 'Заказ на оснастку с гербом',
		'title' => 'Заказ на оснастку с гербом',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'zakaz@pechati.ru',
		'from_name' => 'zakaz',
		'to_email' => 'zakaz@pechati.ru',
		'to_name' => 'Электрозаводская',
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

$form['fk'] = array(
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
		'tell' => array(
			'title' => 'Телефон',
			'validate' => array(
				'preg' => "/^((8|\+)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{5,10}$/",
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'e-mail' => array(
			'title' => 'E-mail',
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
		'subject' => 'Заказ на оснастку серии ФК',
		'title' => 'Заказ на оснастку серии ФК',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'zakaz@pechati.ru',
		'from_name' => 'zakaz',
		'to_email' => 'zakaz@pechati.ru',
		'to_name' => 'Электрозаводская',
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

$form['question'] = array(
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
		'tell' => array(
			'title' => 'Телефон',
			'validate' => array(
				'preg' => "/^((8|\+)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{5,10}$/",
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'e-mail' => array(
			'title' => 'E-mail',
			'validate' => array(
				'preg' => '%@%is',
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'text' => array(
			'title' => 'Сообщение',
		),
	),
	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'Вопрос по оборудованию',
		'title' => 'опрос по оборудованию',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'zakaz@pechati.ru',
		'from_name' => 'zakaz',
		'to_email' => 'zakaz@pechati.ru',
		'to_name' => 'Электрозаводская',
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


$form['form-2'] = array(
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
		'tell' => array(
			'title' => 'Телефон',
			'validate' => array(
				'preg' => "/^((8|\+)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{5,10}$/",
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'e-mail' => array(
			'title' => 'E-mail',
			'validate' => array(
				'preg' => '%@%is',
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'text' => array(
			'title' => 'Сообщение',
		),
		'checkbox' => array(
			'title' => 'Checkbox',
			'validate' => array(
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => '[ %1$s ] необходимо установить',
			)
		),
	),
	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'Тема письма',
		'title' => 'Заголовок в теле письма',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'noreply@email.com',
		'from_name' => 'noreply',
		'to_email' => 'noreply1@email.com, noreply2@email.com',
		'to_name' => 'noreply1, noreply2',
		'geoip' => true,
		'referer' => true,
		'type' => 'html',
		'tpl' => true,
		'antispam' => 'email77',
		'antispamjs' => 'address77',
		'okay' => 'Заказ зарегистрирован - OK',
		'fuck' => 'Заказ зарегистрирован - ОШИБКА',
		'spam' => 'Cпам робот',
		'notify' => 'color-modal-textbox',
		'usepresuf' => false
	)
);
$form['form-3'] = array(
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
		'tell' => array(
			'title' => 'Телефон',
			'validate' => array(
				'preg' => "/^((8|\+)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{5,10}$/",
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'e-mail' => array(
			'title' => 'E-mail',
			'validate' => array(
				'preg' => '%@%is',
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'text' => array(
			'title' => 'Сообщение',
			'validate' => array(
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => '[ %1$s ] необходимо заполнить',
			)
		),
		'checkbox' => array(
			'title' => 'Checkbox',
			'validate' => array(
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => '[ %1$s ] необходимо установить',
			)
		),
		'radio' => array(
			'title' => 'Radio',
			'validate' => array(
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => '[ %1$s ] необходимо выбрать',
			)
		),
		'select' => array(
			'title' => 'Select',
			'validate' => array(
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => '[ %1$s ] необходимо выбрать',
			)
		),
	),
	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'Тема письма',
		'title' => 'Заголовок в теле письма',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'noreply@email.com',
		'from_name' => 'noreply',
		'to_email' => 'noreply1@email.com, noreply2@email.com',
		'to_name' => 'noreply1, noreply2',
		'geoip' => true,
		'referer' => true,
		'type' => 'plain',
		'tpl' => false,
		'antispam' => 'email77',
		'antispamjs' => 'address77',
		'okay' => 'Заказ зарегистрирован - OK',
		'fuck' => 'Заказ зарегистрирован - ОШИБКА',
		'spam' => 'Cпам робот',
		'notify' => 'color-modal',
		'usepresuf' => false
	)
);

$form['rstamp'] = array(
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
		'tell' => array(
			'title' => 'Телефон',
			'validate' => array(
				'preg' => "/^((8|\+)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{5,10}$/",
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'e-mail' => array(
			'title' => 'E-mail',
			'validate' => array(
				'preg' => '%@%is',
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'rstamp' => array(
			'title' => 'Модель оснастки',
			'validate' => array(
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => '[ %1$s ] необходимо выбрать',
			)
		),
	),
	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'Оснастка для печатей Shiny круглая',
		'title' => 'Оснастка для печатей Shiny круглая',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'taganka@pechati.ru',
		'from_name' => 'zakaz',
		'to_email' => 'taganka@pechati.ru',
		'to_name' => 'Таганка',
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
		'usepresuf' => false,
	)
);

$form['sstamp'] = array(
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
		'tell' => array(
			'title' => 'Телефон',
			'validate' => array(
				'preg' => "/^((8|\+)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{5,10}$/",
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'e-mail' => array(
			'title' => 'E-mail',
			'validate' => array(
				'preg' => '%@%is',
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'sstamp' => array(
			'title' => 'Модель оснастки',
			'validate' => array(
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => '[ %1$s ] необходимо выбрать',
			)
		),
	),
	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'Оснастка для штампов Shiny малого размера',
		'title' => 'Оснастка для штампов Shiny малого размера',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'taganka@pechati.ru',
		'from_name' => 'zakaz',
		'to_email' => 'taganka@pechati.ru',
		'to_name' => 'Таганка',
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

$form['mstamp'] = array(
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
		'tell' => array(
			'title' => 'Телефон',
			'validate' => array(
				'preg' => "/^((8|\+)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{5,10}$/",
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'e-mail' => array(
			'title' => 'E-mail',
			'validate' => array(
				'preg' => '%@%is',
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'mstamp' => array(
			'title' => 'Модель оснастки',
			'validate' => array(
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => '[ %1$s ] необходимо выбрать',
			)
		),
	),
	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'Оснастка для штампов Shiny среднего размера',
		'title' => 'Оснастка для штампов Shiny среднего размера',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'taganka@pechati.ru',
		'from_name' => 'zakaz',
		'to_email' => 'taganka@pechati.ru',
		'to_name' => 'Таганка',
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

$form['bstamp'] = array(
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
		'tell' => array(
			'title' => 'Телефон',
			'validate' => array(
				'preg' => "/^((8|\+)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{5,10}$/",
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'e-mail' => array(
			'title' => 'E-mail',
			'validate' => array(
				'preg' => '%@%is',
				'minlength' => '5',
			),
			'messages' => array(
				'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
		'bstamp' => array(
			'title' => 'Модель оснастки',
			'validate' => array(
				'minlength' => '1',
			),
			'messages' => array(
				'minlength' => '[ %1$s ] необходимо выбрать',
			)
		),
	),
	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'Оснастка для штампов Shiny большого размера',
		'title' => 'Оснастка для штампов Shiny большого размера',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'taganka@pechati.ru',
		'from_name' => 'zakaz',
		'to_email' => 'taganka@pechati.ru',
		'to_name' => 'Таганка',
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


if($act == 'cfg') {
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

      if(function_exists("mb_internal_encoding")) mb_internal_encoding($form['cfg']['charset']);
      $get_fromName = (isset($form['fields'][$form['cfg']['from_name']]) && isset($getdata[$form['cfg']['from_name']]['value']) && mb_strlen($getdata[$form['cfg']['from_name']]['value']) > 2) ? $getdata[$form['cfg']['from_name']]['value'] : ((mb_strlen($form['cfg']['from_name']) > 2 && !isset($_POST[$form['cfg']['from_name']])) ? $form['cfg']['from_name'] : 'Anonymous');
      $get_fromEmail = (isset($form['fields'][$form['cfg']['from_email']]) && isset($getdata[$form['cfg']['from_email']]['value']) && mb_strpos('@', $getdata[$form['cfg']['from_email']]['value']) === false) ? $getdata[$form['cfg']['from_email']]['value'] : ((mb_strpos('@', $form['cfg']['from_email']) !== false) ? $form['cfg']['from_email'] : 'no-reply@'.$host);

      $fromName = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader($get_fromName, $form['cfg']['charset'], "Q") : $get_fromName;
      $sb['subject'] = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader($form['cfg']['subject'], $form['cfg']['charset'], "Q") : $form['cfg']['subject'];
      
      $toName = trim($form['cfg']['to_name'], " ,");
      $toEmail = trim($form['cfg']['to_email'], " ,");
 
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
       
      if(strpos($toEmail, ",") !== false) { 
         $exp_toEmail = explode(",", $toEmail);
      }         
      
      $To = '';
      
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
      //$headers .= "To: ".$To."\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/" . $form['cfg']['type'] . "; charset=\"" . $form['cfg']['charset'] . "\"\r\n";
      $headers .= "Content-Transfer-Encoding: 8bit\r\n";

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
      $mail = mail($To, $sb['subject'], $sb['body'], $headers);

      if($mail) {
          $jsonBox['ok'] = 1;
          $info[] = $form['cfg']['okay'];

         //setcookie("limit", "1", time() + $form['cfg']['limit']);

      }
       else {
           $info[] = $form['cfg']['fuck'];
       }

    }

 } else {
    $error[] = 'Нет настроек формы с именем #'.$act;
 }
    
    if(count($error) > 0) {
        $jsonBox['errors'] = $error;
    }
    if(count($info) > 0) {
        $jsonBox['infos'] = $info;
    }

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

