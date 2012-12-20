<?php
class FTPConnect {

    var $con_id;

    function FTPConnect($server, $username, $password, $cddir = '', $attemps = 5, $port = 21, $ftpssl = false) {
      if($ftpssl) {
        $this->con_id = ftp_ssl_connect($server, $port);
        $login_result = ftp_login($this->con_id, $username, $password);
        ftp_pasv($this->con_id, TRUE);
        $function = 'ftp_ssl_connect';
      } else {
        $this->con_id = ftp_connect($server, $port);
        $function = 'ftp_connect';
      }
      $count = 0;
      while(!$this->con_id = $function($server, $port)) {
        $count++;
        trigger_error('FTPConnect: Connection Failed! Trying again.');
        if($count > $attemps) {
          die("FTP Connection FAILED after $attemps attemps.");
        }
      }

      if(!ftp_login($this->con_id, $username, $password)) { //login Failed!
		print 'FTPConnect: Login Failed! username or password incorrect.';
		trigger_error('FTPConnect: Login Failed! username or password incorrect.');
        exit;
      }

      if($cddir != '') {
        ftp_chdir($this->con_id, $cddir);
      }
    }

   
    /**
     Change into directory $cddir
    */
    function cd($cddir) {
        return ftp_chdir($this->con_id, $cddir);
    }


    /**
     Get file $filename and save it to [$saveLocation] with [$mode]
    */
    function get($filename, $saveLocation = '', $mode = FTP_ASCII) {
        if($saveLocation != '') {
            $saveFile = $saveLocation . $filename;
        }
        else {
            $saveFile = $filename;
        }
        
        $fh = fopen($saveFile, 'wb');
        if(ftp_fget($this->con_id, $fh, $filename, $mode)) {
            fclose($fh);
            return TRUE;
        }
        else {
            fclose($fh);
            return FALSE;
        }


    }

    function put($fp, $filename, $mode = FTP_ASCII) {
        if(ftp_fput($this->con_id, $filename, $fp, $mode)) {
            return true;
        }
        else {
            return false;
        }
    }

    /**
     Close FTP Connection
    */
    function close() {
        ftp_close($this->con_id);
    }

    /**
     Get the modification time of $filename
     Only works on some web servers
    */
    function modTime($filename) {
        return ftp_mdtm($this->con_id, $filename);
    }

    function dirList($directory = '.') {
        return ftp_nlist($this->con_id, $directory);
    }

    function filelist($directory = '.') {
       return $this->dirList($directory);
    }

    function nlist($directory = '.') {
	    	return $this->dirList($directory);
    }

    function rawlist($directory = '.') {
      return ftp_rawlist($this->con_id, $directory);
    }
    function delete($file) {
	    	return ftp_delete($this->con_id, $file);
    }
    function rename($file, $newfile) {
      return ftp_rename($this->con_id, $file, $newfile);
    }
    function passive($pasv) {
      return ftp_pasv($this->con_id, $pasv);
    }
}
?>