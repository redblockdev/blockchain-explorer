# ZumCoin-Blockchain-Explorer
Block explorer for ZumCoin CryptoNote based cryptocurrency.

#### Installation

1) It takes data from daemon zumcoind. It should be accessible from the Internet. Run zumcoind with open port as follows:
```bash
./ZumCoind --enable-cors="*" --enable-blockexplorer --rpc-bind-ip=0.0.0.0 --rpc-bind-port=17935
```
2) Just upload to your website and change 'api' variable in config.js to point to your daemon.


### Development
Devs:
    @devopsralf

Donate: [ZUM] Zum1yfTYqJx1Luiz7g9ek4jnohFM61YhKNJ4JUF4UipPPsttMEY4AVhaMp3QWY8ktLV7rQsJf5G23HZYZCETzMnbMdCceVUitW2

### Note

A lot of this code is from the great Karbovanets/Karbowanec-Blockchain-Explorer
