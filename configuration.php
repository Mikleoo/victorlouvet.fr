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
	public $dbname = 'victorlouvet_db';
  public $dbport = "3306";
  public $dbcharset = "utf8";
  public $captcha = 'recaptcha';
  public $sitekey = '6LfDkYwbAAAAANLS14699V3YM3JgE5Y4kZUxK3Ym';
	public $secretkey = '6LfDkYwbAAAAAKoWReBKLlC3VvWVujGx4GlVvJ25';
	public $mailer = 'mail';
	public $mailfrom = 'contact@victorlouvet.fr';
	public $fromname = 'Contact Victor Louvet';
  public $forcehttps = false;
}
