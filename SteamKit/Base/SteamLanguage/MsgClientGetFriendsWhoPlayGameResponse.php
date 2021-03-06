<?php

namespace SteamKit\Base\SteamLanguage;

use SteamKit\Helper\BinReader;
use SteamKit\Helper\BinWriter;

class MsgClientGetFriendsWhoPlayGameResponse implements ISteamSerializableMessage
{
	public $result = null;
	public $gameId = null;
	public $countFriends = null;
	public $emsg = null;

	public function getResult()
	{
		return $this->result;
	}

	public function setResult($value)
	{
		$this->result = $value;
	}

	public function getCountFriends()
	{
		return $this->countFriends;
	}

	public function setCountFriends($value)
	{
		$this->countFriends = $value;
	}

	public function setValues(array $values = [])
	{
		foreach ($values as $name => $value) {
			if (isset($this->$name)) {
				$this->$name = $value;
			}
		}
	}

	public function getEMsg()
	{
		return $this->emsg;
	}

	public function __construct(array $values = [])
	{
		$this->result = 0;
		$this->gameId = 0;
		$this->countFriends = 0;
		$this->emsg = \SteamKit\Base\Enums\EMsg::ClientGetFriendsWhoPlayGameResponse;
		$this->setValues($values);
	}

	public function encode()
	{
		$bw = new BinWriter();

		$bw->writeInt($this->result);
		$bw->writeULong($this->gameId);
		$bw->writeUInt($this->countFriends);

		return $bw;
	}

	public function decode($stream)
	{
		$br = new BinReader($stream);
		$results = [];

		$this->result = $results['result'] = $br->readInt();
		$this->gameId = $results['gameId'] = $br->readULong();
		$this->countFriends = $results['countFriends'] = $br->readUInt();

		return $results;
	}
}

?>