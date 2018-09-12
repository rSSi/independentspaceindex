<?php
class Newsletter
{
	private $id = 0;
	public $email;
	public $unconfirmed;
	public $confirmed;
	public function __construct()
	{
		$f = file_get_contents(NL_PENDING);
		$this->unconfirmed = json_decode($f, true);
		$f = file_get_contents(NL_USERS);
		$this->confirmed = json_decode($f, true);
		date_default_timezone_set('Europe/Vienna');
	}
	public function check_id($id)
	{
		foreach ($this->unconfirmed as $key => $user)
		{
			echo"<pre>check id:\n";
			print_r($user);
			echo"</pre>";
			if($user['id'] === trim($id))
			{
				return true;
			}
		}
		return false;
	}

	public function move_user_to_confirmed($id)
	{
		if( isset($this->unconfirmed[$id]) )  // check_id tut das! besser checken ob daten geschrieben wurden s.u.
		{
			$this->confirmed[] = array("email" => $this->unconfirmed[$id]['email'], "time" => $this->unconfirmed[$id]['time']);
			unset($this->unconfirmed[$id]);
			file_put_contents(NL_PENDING, json_encode($this->unconfirmed, JSON_PRETTY_PRINT));
			file_put_contents(NL_USERS, json_encode($this->confirmed, JSON_PRETTY_PRINT));
			echo"<pre>move_user:<br>\nthis->confirmed:<br>\n";
			print_r($this->confirmed);
			echo "</pre>\n";
			return true;
		}
		else
		{
			return false;
		}
	}

	public function add_user_to_untrusted($email)
	{
		$this->id = $this->rand_id();
		$this->email = $email;			// trim > filter > regex
		$now = time();
		if($this->sanitize_email($this->email))
		{
			foreach ($this->unconfirmed as $key => $user)
			{
				if( $now - $user['timestamp'] >=  86400 || $user['email'] == $this->email ) // 24h
				{
					unset($this->unconfirmed[$key]);
					continue;
				}
			}
			$this->unconfirmed[$this->id] = array(
														'email' => $this->email,
														'id' => $this->id,
														'timestamp' => $now,
														'time' => date("H:i:s-d.m.Y", $now)
													);
			//$this->unconfirmed = array_values($this->unconfirmed);
			file_put_contents(NL_PENDING, json_encode($this->unconfirmed, JSON_PRETTY_PRINT));
			return true;
		}
		else
		{
			return false;
		}
	}

	private function sanitize_email($email_string)
	{
		if( preg_match(EMAIL_REGEX, filter_var(trim($email_string), FILTER_SANITIZE_EMAIL), $matches) )
		{
			$this->email = $matches[0];
			return true;
		}
		else
		{
			return false;
		}
	}
	public function get_id()
	{
		if($this->id === 0)
		{
			$this->rand_id();
		}
		return $this->id;
	}

	private function rand_id()
	{
		$id = "";
		$loops = random_int(6, 18);
		for($x=0;$x<$loops; $x++)
		{
			$id .= dechex(random_int(100, 9999));
		}
		return $id;
	}
} // END CLASS Newsletter
?>