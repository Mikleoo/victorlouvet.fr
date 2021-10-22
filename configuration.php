<?php
// This class contains all the information to modify depending on the web host
class Config {
	public $sitename = 'Victor Louvet';
	public $MetaDesc = '';
	public $MetaKeys = '';
	public $dbtype = 'mysql';
	public $host = 'localhost';
	public $user = 'root';
	public $password = '';
	public $dbname = '';
	public $dbport = "";
	public $dbcharset = "utf8";
	public $captcha = 'recaptcha';
	public $sitekey = '';
	public $secretkey = '';
	public $mailer = 'mail';
	public $mailfrom = 'contact@victorlouvet.fr';
	public $fromname = 'Contact Victor Louvet';
	public $forcehttps = false;
}
