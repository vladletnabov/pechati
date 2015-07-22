<?
    function AddAttachment($path, $name = "", $encoding = "base64",
                           $type = "application/octet-stream") {
        if(!@is_file($path))
        {
            $this->SetError($this->Lang("file_access") . $path);
            return false;
        }
        $filename = basename($path);
        if($name == "")
            $name = $filename;
        $cur = count($this->attachment);
        $this->attachment[$cur][0] = $path;
        $this->attachment[$cur][1] = $filename;
        $this->attachment[$cur][2] = $name;
        $this->attachment[$cur][3] = $encoding;
        $this->attachment[$cur][4] = $type;
        $this->attachment[$cur][5] = false; // isStringAttachment
        $this->attachment[$cur][6] = "attachment";
        $this->attachment[$cur][7] = 0;
        return true;
    }
//	if ($HTTP_POST_FILES[pict]) {
//		$fale->AddAttachment($_FILES['pict']['tmp_name'],$_FILES['pict']['name']);
//	}

	function attach_mail($headers, $subject, $message, $to, $name_file, $file_type)
	{
		$semi_rand = md5(time());
		$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
		$headers .= "\nMIME-Version: 1.0\n" .
		"Content-Type: multipart/mixed;\n" .
		" boundary=\"{$mime_boundary}\"";
		$message = "This is a multi-part message in MIME format.\n\n" .
		"--{$mime_boundary}\n" .
		"Content-Type: text/plain; charset=\"windows-1251\"\n" .
		"Content-Transfer-Encoding: 7bit\n\n" .
		$message . "\n\n";
		$data = fread($file,filesize($name_file));
		fclose($file);	
		$data = chunk_split(base64_encode($data));
		$message .= "--{$mime_boundary}\n".
		"Content-Type: {$file_type};\n".
		" name=\"{$name_file}\"\n".
		"Content-Transfer-Encoding: base64\n\n".
		$data."\n\n";
		$message .= "--{$mime_boundary}--\n".$fale;
		//$message->AddAttachment($_FILES['pict']['tmp_name'],$_FILES['pict']['name']);
		mail($to, $subject, $message, $headers);
	}

	function my_mail($headers, $subject, $message, $to)
	{

		$semi_rand = md5(time());
		$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
		$headers .= "\nMIME-Version: 1.0\n" .
		"Content-Type: multipart/mixed;\n" .
		" boundary=\"{$mime_boundary}\"";
		$message = "This is a multi-part message in MIME format.\n\n" .
		"--{$mime_boundary}\n" .
		"Content-Type: text/plain; charset=\"windows-1251\"\n" .
		"Content-Transfer-Encoding: 7bit\n\n" .
		$message . "\n\n";

		mail($to, $subject, $message, $headers);
	}
?>