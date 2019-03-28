<?php
$dbhost = "localhost"; 	// The host of your database
$dbuser = "root"; 		// The database username
$dbpass = ""; 	// The database password
$dbname = "home"; 		// The database name



$odb = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

function loggedIn($odb)
{
	if (isset($_SESSION['Athan']))
	{
		$usern = $_SESSION['Athan'];
		if ($usern == "" || $usern == NULL)
		{
			return false;
		}else{
			$user = explode(":", $usern);
			if (!ctype_alnum($user[0]))
			{
				return false;
			}else{
				if ($odb->query("SELECT COUNT(*) FROM users WHERE username = '".$user[0]."'")->fetchColumn(0) == 0)
				{
					return false;
				}else{
					$sel = $odb->query("SELECT * FROM users WHERE username = '".$user[0]."'");
					$u = $sel->fetch(PDO::FETCH_ASSOC);
					if ($u['id'] != $user[1])
					{
						return false;
					}else{
						if ($u['status'] == "1")
						{
							return true;
						}else{
							return false;
						}
					}
				}
			}
		}
	}else{
		return false;
	}
}

function encrypt($key, $stre)
{
	$rtn = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $stre, MCRYPT_MODE_CBC, $key);
	return base64_encode($rtn);
}

function decrypt($key, $strd)
{
	$strd = str_replace("~", "+", $strd);
	$rtn = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($strd), MCRYPT_MODE_CBC, $key);
	$rtn = rtrim($rtn, "\0\4");
	return $rtn;
}
?>