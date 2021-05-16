var api = 'http://127.0.0.1:17935';
var donationAddress = "";
var blockTargetInterval = 120;
var coinUnits = 100000000;
var symbol = 'ZUM';
var refreshDelay = 30000;
// pools stats by MainCoins
var networkStat = {
 "zum": [
	["fastpool.xyz/zum", "https://fastpool.xyz/api-zum"],
	["zum.pool-pay.com", "https://zum.pool-pay.com:8219"],
	["zum.letshash.online", "https://letshash.online:15090"],
	// ["zum.crypto9coin.cf", "http://zum.simpool.xyz:6557"],

 ]
};

var networkStat2 = {
    "zum": [
	["semipool.com", "https://webzum.semipool.com/api"]
 ]
};
